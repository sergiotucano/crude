<!DOCTYPE html>

<html>

<head>
    <title>Crude</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            padding: 30px; 
        }
    </style>

</head>

<body>

    <script>
        function goBack()
        {
        window.history.back()
        }
    </script>

    <div class="container">
        <div class="card" style="padding:5px; 15px; 15px; 5px;">
            @yield('content')
            <div class="card-footer">           
                <input type="button" class="btn btn-primary" value="Voltar" onclick="goBack()"/>
            </div>
        </div>

    </div>

   

</body>

</html>