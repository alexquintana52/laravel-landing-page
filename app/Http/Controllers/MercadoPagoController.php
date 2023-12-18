<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pagos;
use Illuminate\Http\Request;
use App\Models\Servicios;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
            "items" => array(
                $items
            ),
            "back_urls" => array(
                "success" => "http://localhost:8000/pagoRealizado",
                "failure" => "http://localhost:8000/pagoRechazado",
                "pending" => "http://localhost:8000/pagoPendiente"
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
        return view('servicios.pagoRealizado', [
            'servicios' => Servicios::all(),
            'user' => auth()->user(),
            'resultado' => $request
        ]);
    }

    public function processPagoRealizado(Request $request)
    {
        $data = $request->except('_token');

        $request->validate(Pagos::$reglas, Pagos::$mensajesdeError);

        Pagos::create($data);

        return redirect('/pago')
            ->with('status.message', 'El pago fue realizado con éxito');
    }

    public function AddnewService(Request $request )
    {
        $user = auth()->user();
        $id_user = $user->id;
        Pagos::create([
            'collection_id' => 'NULL',
            'user_id' => $id_user,
            'servicio_id' => $request->servicio_id,
            'collection_status' => 'pending',
            'merchant_order_id' => 'NULL',
            'preference_id' => 'NULL',
            'site_id' => 'NULL',
            'payment_type' => 'NULL',
            // Agrega aquí los demás campos que desees guardar
        ]);

        return redirect('/pago')
        ->with('status.message', 'El pago fue realizado con éxito');
    }

    public function vistaPagoRealizado(Request $request)
    {
        // Guardar los datos en la base de datos
        if (auth()->check()) {
            $user = auth()->user();

            // Obtener el último pago del usuario
            $ultimoPago = Pagos::where('user_id', $user->id)->latest()->first();

            if ($ultimoPago) {
                //dd($ultimoPago); // Verifica si el objeto $ultimoPago se recupera correctamente

                // Actualizar los datos del último pago
                $dataToUpdate = [];

                if ($request->filled('collection_id')) {
                    $dataToUpdate['collection_id'] = $request->query('collection_id');
                }

                if ($request->filled('collection_status')) {
                    $dataToUpdate['collection_status'] = $request->query('collection_status');
                }

                if ($request->filled('merchant_order_id')) {
                    $dataToUpdate['merchant_order_id'] = $request->query('merchant_order_id');
                }

                if ($request->filled('preference_id')) {
                    $dataToUpdate['preference_id'] = $request->query('preference_id');
                }

                if ($request->filled('site_id')) {
                    $dataToUpdate['site_id'] = $request->query('site_id');
                }

                if ($request->filled('payment_type')) {
                    $dataToUpdate['payment_type'] = $request->query('payment_type');
                }

                // Agrega aquí los demás campos que desees actualizar

                //dd($dataToUpdate); // Verifica si los datos a actualizar son correctos

                $ultimoPago->update($dataToUpdate);
            }

            // Resto del código para cargar la vista
            return view('servicios.vistaPagoRealizado', [
                'servicios' => Servicios::all(),
                'user' => $user,
                'Resultado' => $request
            ]);
        } else {
            return redirect('/iniciar-sesion');
        }
    }

    public function pagoPendiente(Request $request)
    {
        return view('servicios.pagoPendiente', [
            'servicios' => Servicios::all(),
            'user' => auth()->user(),
            'Resultado' => $request
        ]);
    }

    public function pagoRechazado(Request $request)
    {
        return view('servicios.pagoRechazado', [
            'servicios' => Servicios::all(),
            'user' => auth()->user(),
            'Resultado' => $request
        ]);
    }

    public function cancelarServicio()
    {
        $id = Auth::id();
        return view('users.cancelarServicio',[
            'user' => User::findOrFail($id),
            'pagos' => Pagos::where('user_id', $id)->get()
        ]);
    }

    public function cancelarServicioAction(int $id, Request $request)
    {
        $user = auth()->user();
        $id_user = $user->id;
        Pagos::create([
            'collection_id' => 'NULL',
            'user_id' => $id_user,
            'collection_status' => 'pending',
            'merchant_order_id' => 'NULL',
            'preference_id' => 'NULL',
            'site_id' => 'NULL',
            'payment_type' => 'NULL',
            // Agrega aquí los demás campos que desees guardar
        ]);

        return redirect('/mi-perfil')
        ->with('status.message', 'La cancelación fue realizada con éxito');
    }
}
