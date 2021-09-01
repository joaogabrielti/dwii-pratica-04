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
        <a class="btn btn-secondary" href="{{ route('cidade.index') }}">Voltar</a>
        <hr>
        <form class="row g-2" action="@isset($cidade){{ route('cidade.update', ['cidade' => $cidade['id']]) }}@else{{ route('cidade.store') }}@endisset" method="POST" autocomplete="off">
            @csrf
            @isset($cidade)
                @method('PUT')
            @endisset
            <div class="col-12 col-md-4">
                <label class="form-label mb-0" for="nome">Nome da Cidade</label>
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome da Cidade" value="{{ $cidade['nome'] ?? old('nome') }}" required autofocus>
            </div>
            <div class="col-12 col-md-4">
                <label class="form-label mb-0" for="nome">Porte</label>
                <select class="form-select" name="porte" id="porte">
                    <option value="PEQUENO" @if(($cidade['porte'] ?? old('porte')) == 'PEQUENO'){{ 'selected' }}@endif>PEQUENO</option>
                    <option value="MÉDIO" @if(($cidade['porte'] ?? old('porte')) == 'MÉDIO'){{ 'selected' }}@endif>MÉDIO</option>
                    <option value="GRANDE" @if(($cidade['porte'] ?? old('porte')) == 'GRANDE'){{ 'selected' }}@endif>GRANDE</option>
                </select>
            </div>
            <div class="col-12 col-md-4 d-flex align-items-end">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
