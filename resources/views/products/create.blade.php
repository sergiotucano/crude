@extends('products.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Crude - Adicionar Produto</h2>
        </div>
    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Ops!</strong> Existem erros no seu formulário.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('products.store') }}" method="POST">

    @csrf

  

        <div class="row">
     
            <div class="col-xs-4 col-sm-4 col-md-4">
                <strong>Unidade</strong>
                <input type="text" name="product" class="form-control" placeholder="código"  maxlength="13" size="13">
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8">
                <strong>Nome:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nome">
            </div>
           
       
            <div class="col-xs-3 col-sm-3 col-md-3">
                    <br />
                    <strong>Unidade</strong>
                    <input type="text" name="un" class="form-control" placeholder="un"  maxlength="2" size="2">
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <br />
                <strong>Preço</strong>
                <input type="number" name="price" class="form-control" placeholder="0.00" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" min="0">
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
                <br /> <br />
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>

        </div>
        
        
    </div>

   

</form>

@endsection