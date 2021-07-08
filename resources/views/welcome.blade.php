<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css" rel="stylesheet">

        <title>CRUDE</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

     
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                padding: 30px; 
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                
                google.charts.load('current', {'packages':['bar']});
                google.charts.setOnLoadCallback(drawChart);
            
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Produto', 'Vendas'],
            
                        @php
                        try{
                            foreach($orders ?? '' as $order) {
                                echo "['".$order->produto->name." (".$order->product.")', ".$order->total."],";
                            }
                        } catch (Exception $e){}
                        @endphp
                    ]);
            
                    var options = {
                    chart: {
                        title: 'Gráfico de Vendas',
                        subtitle: 'Vendas x Produto',
                    },
                    bars: 'vertical'
                    };
                    var chart = new google.charts.Bar(document.getElementById('barchart_material'));
                    chart.draw(data, google.charts.Bar.convertOptions(options));
                }      
            </script>

            <div class="container">
                <div class="card" style="padding:5px; 15px; 15px; 5px;">

                    <div class="col-xs-8 col-sm-8 col-md-8">                    
                        <h1 class="underline text-gray-900 dark:text-white">C.R.U.D.E</h1>    
                        <hr />                            
                    </div>

                    <div id="barchart_material" style="width: 100%; height: 400px;"></div>
            
                    <div class="card-footer">           
                        <div class="col-xs-12 col-sm-12 col-md-12">                   
                            <a class="btn btn-primary" href="{{ route('products.index') }}">Tela de Produtos</a>                   
                                   
                            <a class="btn btn-primary" href="{{ route('import') }}">Importar Planilha</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </body>
</html>
