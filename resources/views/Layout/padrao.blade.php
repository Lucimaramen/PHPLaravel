<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
    <script src="{{asset('js/app.js')}}"></script>

    <title>@yield('titulo')</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center mt-3">Sistema de gerenciamento de Alunos</h1>
    <hr>
    @yield('conteudo')
    </div>
</body>
</html>