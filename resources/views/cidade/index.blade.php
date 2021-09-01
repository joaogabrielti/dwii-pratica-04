<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Sistema de Gestão de Municípios - Governo do Paraná</title>
</head>
<body>
    <div class="container">
        <h1 class="fs-4 mt-2 mb-0">Sistema de Gestão de Municípios - Governo do Paraná</h1>
        <hr>
        <a class="btn btn-primary" href="{{ route('cidade.create') }}">Cadastrar Cidade</a>
        <hr>
        <table class="table table-sm table-bordered table-striped">
            <thead class="table-secondary">
                <th>ID</th>
                <th>NOME</th>
                <th>PORTE</th>
                <th>AÇÕES</th>
            </thead>
            <tbody>
                @foreach ($cidades as $cidade)
                <tr>
                    <th>{{ $cidade['id'] }}</th>
                    <td>{{ $cidade['nome'] }}</td>
                    <td>{{ $cidade['porte'] }}</td>
                    <td class="text-center">
                        <a class="link-primary mx-1" href="{{ route('cidade.edit', ['cidade' => $cidade['id']]) }}"><i class="bi bi-pencil-fill"></i></a>
                        <a class="link-danger mx-1" href="{{ route('cidade.destroy', ['cidade' => $cidade['id']]) }}" onclick="event.preventDefault(); event.target.parentElement.parentElement.children[2].submit();"><i class="bi bi-trash-fill"></i></a>
                        <form class="d-none" action="{{ route('cidade.destroy', ['cidade' => $cidade['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
