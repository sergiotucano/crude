<!doctype html>
<html>
  <head>
    <title>Crude - Importar CSV</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>

    <script>
        function goBack()
        {
            window.history.back()
            window.location.reload()
        }
    </script>

      <div class="container py-5">
          <div class="row">
              <div class="col-xl-6 m-auto">
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card" style="padding:5px; 15px; 15px; 5px;">
                            @if(Session::has('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{ Session::get('success') }}
                                </div>

                            @elseif(Session::has('failed'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            <div class="card-header">
                                <h5 class="card-title font-weight-bold">Importar CSV</h5>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="file">Selecionar arquivo</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <input type="button" class="btn btn-primary" value="Voltar" onclick="goBack()"/>
                            </div>
                        </div>
                    </form>
              </div>
          </div>
      </div>
  </body>
</html>