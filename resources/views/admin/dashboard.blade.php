@extends('layout.main')

@section('title', 'Ennoia | Administrar Estadisticas')

@section('content')

    <section class="bg-ennoia-2">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1>Estadisticas</h1>
                </div>
                <section class="col-12 col-md-4">
                    <h2 class="h4">
                        Estadisticas generales
                    </h2>
                    <canvas id="myChart"></canvas>
                </section>
                <section class="col-12 col-md-8">
                    <h2 class="h4">
                        Usuarios registrados por mes
                    </h2>
                    <canvas id="registroUsuarios"></canvas>
                </section>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const estadisticasGenerales = document.getElementById('myChart');
        const registrosUsuarios = document.getElementById('registroUsuarios');

        new Chart(estadisticasGenerales, {
            type: 'pie',
            data: {
                labels: ['Usuarios ({{ $totalUsers }})', 'Pagos realizados ({{ $pagos }})',
                    'suscripciones activas ({{ $UsuariosConSuscripcion }})'
                ],
                datasets: [{
                    label: 'Estadisticas generales',
                    data: [{{ $totalUsers }}, {{ $pagos }}, {{ $UsuariosConSuscripcion }}],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        new Chart(registrosUsuarios, {
            type: 'bar',
            data: {
                labels: [
                    @foreach ($usersByMonth as $userData)
                        "{{ $userData['month_name'] }}",
                    @endforeach
                ],
                datasets: [{
                    label: 'Usuarios registrados por mes',
                    data: [
                        @foreach ($usersByMonth as $userData)
                            {{ $userData['count'] }},
                        @endforeach
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
