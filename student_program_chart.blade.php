@extends('layouts.app')

@section('title')
    Ebd-w05-Student
@endsection

@section('banner')
    <h1>Student Program Chart</h1>
@endsection

@section('content')
    <div class="container mx-auto">
        <h1>Student in each Program Report</h1>
        <canvas id="myChart" height="200px"></canvas>    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
<script type="text/javascript">
 
    var labels =  {{ Js::from($labels) }};
    var datas =  {{ Js::from($data) }};
 
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: [
                'rgba(255, 0, 0, 0.4)',
                'rgba(255, 127, 0, 0.4)',
                'rgba(255, 255, 0, 0.4)',
                'rgba(0, 255, 0, 0.4)',
                'rgba(0, 0, 255, 0.4)',
            ],


            borderColor: 'rgb(255, 99, 132)',
            data: datas,
        }]
    };
 
    const config = {
        type: 'bar',
        data: data,
        options: {}
    };
 
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
 
</script>

@endsection

@section('footer')
    <address>IT CSIT RBRU</address>
@endsection