@extends('Layout.padrao')

@section('titulo', 'Pagina inicial')

@section('conteudo')
<div class="card">
  <div class="card-header">
  <h4 class="card-title">Relação de Aluno</h4>
  </div>
 
<div class="card-body">
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>E-mail</th>
<th>N1</th>
<th>N2</th>
<th colspan="3" >Operações</th>
</tr>
</thead>
<tbody>
@foreach($aluno as $c)
<tr>
<td>{{$c['id']}}</td>
<td>{{$c['nome']}}</td>
<td>{{$c['email']}}</td>
<td>{{$c['n1']}}</td>
<td>{{$c['n2']}}</td>
<td><a class="btn btn-sm btn-success" href="{{ route('aluno.show', $c['id'])}}">Detalhes</a></td>
<td><a class="btn btn-sm btn-warning" href="{{ route('aluno.edit', $c['id'])}}">Editar</a></td>
<td><td>
<form action="{{ route('aluno.destroy', $c->id) }}" method="POST">
@csrf
@method('DELETE')
<button class="btn btn-sm btn-danger" type="submit">Excluir</button>
</form>
</td></td>

</tr>
@endforeach
</tbody>
</table>
</div>

  <div class="card-footer">
  <a class="btn btn-primary btn-sm" href="{{ route('aluno.create') }}">Novo cadastro</a>
  </div>
</div>

@endsection