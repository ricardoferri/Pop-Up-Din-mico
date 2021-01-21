<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <p>Você tem certeza que deseja excluir o produto <b>{{$produto->nome}}</b></p>
    
        <button>Sim</button>
    </form>

</body>
</html>