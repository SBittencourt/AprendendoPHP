<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Editar Usuário</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .btn-link {
            margin-top: 15px;
        }
    </style>
    
</head>

<body>
    <div class="container">
        <h1 class="mb-4">Edição de Usuário</h1>
        
        <form action="{{ url("/update/{$user->id}") }}" method="post">
            @csrf 
            @method('put')

            <div class="form-group">
                <label for="first_name">Nome</label>
                <input type="text" class="form-control" value="{{ $user->first_name }}" name="first_name" id="first_name" required>
            </div>

            <div class="form-group">
                <label for="last_name">Sobrenome</label>
                <input type="text" class="form-control" value="{{ $user->last_name }}" name="last_name" id="last_name" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" value="{{ $user->email }}" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="birthday">Data de Nascimento</label>
                <input type="date" class="form-control" value="{{ $user->birthday }}" name="birthday" id="birthday" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>

            <a href="{{ url('/') }}" class="btn btn-link">Voltar</a>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</html>

