<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pagos;
use App\Models\Servicios;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadisticasController extends Controller
{
    public function index()
    {
        $users = User::all();
        $totalUsers = User::count();
        $pagos = Pagos::count();
        $UsuariosConSuscripcion = User::whereNotNull('servicio_id')->count();

        // Obtener usuarios creados por mes
        $usersByMonth = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Obtener nombres de los meses en español
        $months = [
            1 => 'Enero',
            2 => 'Febrero',
            3 => 'Marzo',
            4 => 'Abril',
            5 => 'Mayo',
            6 => 'Junio',
            7 => 'Julio',
            8 => 'Agosto',
            9 => 'Septiembre',
            10 => 'Octubre',
            11 => 'Noviembre',
            12 => 'Diciembre',
        ];

        // Mapear resultados para incluir nombres de los meses
        $usersByMonth = $usersByMonth->map(function ($item) use ($months) {
            $item['month_name'] = $months[$item->month];
            return $item;
        });

        return view('admin.dashboard', [
            'users' => $users,
            'totalUsers' => $totalUsers,
            'pagos' => $pagos,
            'UsuariosConSuscripcion' => $UsuariosConSuscripcion,
            'usersByMonth' => $usersByMonth,
        ]);
    }
}
