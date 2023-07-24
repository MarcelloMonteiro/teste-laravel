@extends('produto.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Catálogo de Produtos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produto.create') }}">Criar um novo Produto</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nome do Produto</th>
            <th>Preço</th>
            <th>Qtd em Estoque</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($produto as $produtos)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $produtos->name }}</td>
            <td>{{ $produtos->price }}</td>
            <td>{{ $produtos->stock }}</td>
            <td>
                <form action="{{ route('produto.destroy',$produtos->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('produto.edit',$produtos->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $produto->links() !!}
      
@endsection