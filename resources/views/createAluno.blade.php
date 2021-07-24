@extends('Layout.padrao')

@section('conteudo')
<form action="{{ route('aluno.store') }}" method="POST">
@csrf
<div class="form-row">
<div class="col-md-4">
<div class="form-group">
<label for="nome">Nome:</label>
<input class="form-control" type="text" name="nome" id="nome" />
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label for="email">E-mail:</label>
<input class="form-control" type="email" name="email" id="email" />
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label for="idade">N1:</label>
<input class="form-control" type="text" name="n1" id="n1" />
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="idade">N2:</label>
<input class="form-control" type="text" name="n2" id="n2" />
</div>
</div>
</div>

<div class="form-row">
<div class="col-sm-2">
<button class="btn btn-block btn-primary" type="submit">Gravar</button>
</div>
</div>
</form>
@endsection