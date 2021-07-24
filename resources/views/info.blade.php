@extends('Layout.padrao')

@section('titulo', 'Página Detalhes')

@section('conteudo')
<div class="card">
<div class="card-header">
<h4 class="card-title">Detalhes do Aluno</h4>
</div>

<div class="card-body">
<div class="row">
<div class="col-md-4">
<p>ID: {{$aluno->id}} </p>
</div>

<div class="col-md-4">
<p>Nome: {{$aluno->nome}}</p>
</div>

<div class="col-md-4">
<p>E-mail: {{$aluno->email}}</p>
</div>
</div>

<div class="row">
<div class="col-md-4">
<p>N1: {{$aluno->n1}}</p>
</div>
<div class="row">
<div class="col-md-4">
<p>N2: {{$aluno->n2}}</p>
</div>

<div class="col-md-4">
<p>Data de Criação: {{$aluno->created_at}}</p>
</div>

<div class="col-md-4">
<p>Data de Alteração: {{$aluno->updated_at}}</p>
</div>
</div>
</div>

<div class="card-footer">
<a class="btn btn-sm btn-primary" href="{{ route('aluno.index') }}">Voltar</a>
</div>
</div>
@endsection