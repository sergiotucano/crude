@extends('products.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

                <h2>Crude - Produtos</h2>

            </div>           
        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   
        <form action="{{ route('products.index') }}" method="GET">
            <input type="text" name="search" placeholder="busca por nome ou código" required/>
            <button class="btn btn-warning" type="submit">Busca</button>            
            <a class="btn btn-warning" href="{{ route('products.index','') }}">Limpar</a>
            <a class="btn btn-success" href="{{ route('products.create') }}"> Adicionar Produto </a>                
        </form>

        <div class="container">
            <div class="clearfix">
                
            </div>
        </div>
    

    <table class="table">

        <tr> 

            <th>Código</th>
            <th>Nome</th>
            <th>UN</th>
            <th>Preço</th>

            <th width="280px">&nbsp;</th>

        </tr>

        @foreach ($products as $product)

        <tr>

            <td>{{ $product->product }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->un }}</td>
            <td>{{ $product->price }}</td>           

            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">                    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')    
                    <button type="submit" class="btn btn-danger">Excluir</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $products->links('pagination::bootstrap-4') !!}

      

@endsection