<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pagos;
use Illuminate\Http\Request;
use App\Models\Servicios;
use MercadoPago\Client\Preference\PreferenceClient as PreferencePreferenceClient;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient; // Add this line to import PreferenceClient


class MercadoPagoController extends Controller
{
    public function pagoServicio(int $id)
    {
        $servicios = Servicios::findOrFail($id);


        $items = [
            'title' => (string)$servicios->nombre,
            'quantity' => 1,
            'currency_id' => 'ARS',
            'unit_price' => floatval($servicios->precio)
        ];

        MercadoPagoConfig::setAccessToken(env('MP_ACCESS_TOKEN'));

        $client = new PreferenceClient();

        $preference = $client->create([
            "items"=> array(
              $items
            ),
            "back_urls"=> array(
              "success"=> "http://localhost:8000/pagoRealizado",
              "failure"=> "http://localhost:8000/pagoRechazado",
              "pending"=> "http://localhost:8000/pagoPendiente"
            ),
        ]);

        /* echo "<pre>";
        print_r($preference);
        echo "</pre>";
         */

        return view('servicios.pagoServicio', [
            'servicios' => $servicios,
            'preference' => $preference,
            'mpPublicKey' => env('MP_PUBLIC_KEY'),
        ]);
    }

    public function pagoRealizado(Request $request)
    {
        return view('servicios.pagoRealizado',[
            'servicios' => Servicios::all(),
            'user' => auth()->user(),
            'resultado' => $request
        ]);
    }

    public function processPagoRealizado(Request $request)
    {
        $data=$request->except('_token');

        $request -> validate( Pagos::$reglas, Pagos::$mensajesdeError );

        Pagos::create($data);

        return redirect('/pago')
        ->with('status.message', 'El pago fue realizado con éxito');
    }


    public function vistaPagoRealizado(Request $request)
    {
        // Guardar los datos en la base de datos
        if (auth()->check()) {
            $user = auth()->user();

            // Guardar los datos en la base de datos
            Pagos::create([
                'collection_id' => $request->query('collection_id'),
                'user_id' => $user->id,
                'servicio_id' => $user->servicio_id,
                'collection_status' => $request->query('collection_status'),
                'merchant_order_id' => $request->query('merchant_order_id'),
                'preference_id' => $request->query('preference_id'),
                'site_id' => $request->query('site_id'),
                'payment_type' => $request->query('payment_type'),
                // Agrega aquí los demás campos que desees guardar
            ]);

            // Resto del código para cargar la vista
            return view('servicios.vistaPagoRealizado', [
                'servicios' => Servicios::all(),
                'user' => $user,
                'Resultado' => $request
            ]);
        } else {
            return redirect('/login');
        }
    }


    public function pagoPendiente(Request $request)
    {
        return view('servicios.pagoPendiente',[
            'servicios' => Servicios::all(),
            'user' => auth()->user(),
            'Resultado' => $request
        ]);
    }

    public function pagoRechazado(Request $request)
    {
        return view('servicios.pagoRechazado',[
            'servicios' => Servicios::all(),
            'user' => auth()->user(),
            'Resultado' => $request
        ]);
    }
}

