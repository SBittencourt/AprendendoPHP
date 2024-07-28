<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Vacas</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">CRUD de Vacas</h1>
        <a href="{{ route('cows.create') }}" class="btn btn-primary mb-3">Cadastrar Nova Vaca</a>
        <a href="{{ url('/') }}" class="btn btn-info mb-3">Voltar para Fazendeiros</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Raça</th>
                    <th>Nascimento</th>
                    <th>Fazendeiro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cows as $cow)
                    <tr>
                        <td>{{ $cow->name }}</td>
                        <td>{{ $cow->type }}</td>
                        <td>{{ $cow->birthday }}</td>
                        <td>{{ $cow->user->first_name }} {{ $cow->user->last_name }}</td>
                        <td>
                            <a href="{{ route('cows.edit', $cow->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('cows.destroy', $cow->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.amazonaws.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
