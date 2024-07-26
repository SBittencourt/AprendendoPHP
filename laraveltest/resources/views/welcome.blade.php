<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

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

    <body class="antialiased">

        <div class="container">

            <h1 class="my-4">CRUD de Fazendeiros</h1>
            <a href="{{ url('/add-user') }}" class="btn btn-primary mb-3">Cadastrar</a>
            <a href="{{ url('/add-user') }}" class="btn btn-secondary mb-3">Cadastrar nova vaca</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>E-mail</th>
                        <th>Data de Nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->birthday }}</td>
                            <td>
                                <a href="{{ url("/{$user->id}") }}" class="btn btn-warning btn-sm">Editar</a>
                                <a href="{{ url("/{$user->id}") }}" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('form-delete-{{$user->id}}').submit()">Excluir</a>
                                <form action="{{ url("/{$user->id}") }}" method="POST" style="display: none" id="form-delete-{{$user->id}}">
                                    @csrf
                                    @method('delete')
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
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

</html>
