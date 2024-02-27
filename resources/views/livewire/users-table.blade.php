@extends('adminlte::page')

@section('title', 'CleepCard')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('livewire.title-users-table')}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">{{ __('livewire.description-users-table')}}</h1>
        </div>
        <div class="card-body">
            <x-almacen />
            <x-estudy />
           
        </div>
        <div></div>
        <div class="grid grid-cols-6 gap-4">
            <div class="col-start-2 col-span-4 ..."><canvas id="myChart" width="" height=""></canvas></div>
            {{-- <div class="col-start-2 col-span-4 ..."><x-chart /></div> --}}
            
          </div>
          
        
    </div>
    

    
@stop


@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
   
        var ctx = document.getElementById('myChart').getContext("2d");
        var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['rojo', 'azul', 'verde', 'amarillo', 'gris', 'negro'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
        });
        
   /*Swal.fire(
        'Bienvenido lo has logrado xd!',
        'Desde Cleepple te deseamos mucha suerte en tus negocios!',
        'success'
    )*/

</script>
@stop
