<!doctype html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>cadastrofornecedor</title>
    <style>
        body { padding: 20px; }
        .navbar { margin-bottom: 20px; }
        :root { --jumbotron-padding-y: 10px; }
        .jumbotron {
          padding-top: var(--jumbotron-padding-y);
          padding-bottom: var(--jumbotron-padding-y);
          margin-bottom: 0;
          background-color: #ADD8E6	;
        }
        @media (min-width: 768px) {
          .jumbotron {
            padding-top: calc(var(--jumbotron-padding-y) * 2);
            padding-bottom: calc(var(--jumbotron-padding-y) * 2);
          }
        }
        .jumbotron p:last-child { margin-bottom: 0; }
        .jumbotron-heading { font-weight: 300; }
        .jumbotron .container { max-width: 40rem; }
        .btn-card { margin: 4px; }
        .btn { margin-right: 5px; }
        footer { padding-top: 3rem; padding-bottom: 3rem; }
        footer p { margin-bottom: .25rem; }
    </style>
</head>
<body>

    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Cadastro de Fornecedores</strong>
          </a>
      </div>
    </header>

    <main role="main">
      
      <section class="jumbotron text-center">
        <div class="container">
          <img src="foto2.png" id="foto2">
          <h1 class="jumbotron-heading">Shine Moon - Cadastro de Fornecedor</h1>
          <form method="POST" action="/" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-left">
                <label for="nomefantasia">Fonem Fantasia</label>
                <textarea class="form-control" id="nomefantasia" name="nomefantasia" rows="1"></textarea>
            </div>
            <div class="form-group text-left">
                <label for="razao">Razão Social</label>
                <textarea class="form-control" id="razao" name="razao" rows="1"></textarea>
            </div>
            <div class="form-group text-left">
                <label for="cnpj">CNPJ</label>
                <textarea class="form-control" id="cnpj" name="cnpj" placeholder="XX.XXX.XXX/XXXX-XX"></textarea>
            </div>
            <div class="form-group text-left">
              <label for="email">e-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="nome@dominio.com">
            </div>
            <p>
              <button type="submit" class="btn btn-primary my-2">Enviar</button>
              <button type="reset" class="btn btn-secondary my-2">Cancelar</button>
            </p>
          </form>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{ $post->arquivo }}">
                    <div class="card-body">
                      <p class="card-text">{{ $post->email }}</p>
                      <p class="card-text">{{ $post->nome }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                          <a type="button" class="btn btn-sm btn-outline-secondary" href="/download/{{$post->id}}">Download</a>
                          <form action="/{{ $post->id }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
      <div><a href="/">Página Inicial</a></div>
    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Topo</a>
        </p>
        <p>Desenvolvido por: ADS 4-IFSC - Campus Gaspar</p>
      </div>
    </footer>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>

