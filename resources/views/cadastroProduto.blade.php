<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('assets/css/css.css')}}">
    <title>Salão de Beleza</title>
</head>
<body>  
    @if ($errors->any())
    <fieldset>
    <div class="alert alert-danger">
    <strong>Erro!</strong>
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
    </div>
  </fieldset>
    @endif
      
        <form action="{{Route('cadastroValidate')}}" method="post">
                {{ csrf_field() }} 
                            <fieldset>
                <div class="form-group">
                  <label for="campo-nome">Nome do Produto:</label>
                  <input type="text" class="form-control" name="nome">
                </div>
            
                <div class="form-group">
                  <label for="campo-codigo">Codigo de Barras:</label>
                  <input type="text" class="form-control" name="barras">
                </div>
                <div class="form-group">
                  <label for="campo-marca">Marca :</label>
                  <input type="text" class="form-control" name="marca">
                </div>
                <div class="form-group">
                  <label for="campo-precoVenda">Preço de Venda:</label>
                  <input type="number" class="form-control" name="venda" min="1" max="999">
                </div>
                <div class="form-group">
                  <label for="campo-precoCompra">Preço de Compra:</label>
                  <input type="number" class="form-control" name="compra" min="1" max="999">
                </div>
                <div class="form-group">
                  <label for="campo-validade">Validade :</label>
                  <input type="date" class="form-control" name="validade">
                </div>
                <button type="submit" class="btn btn-default btn-sm">Cadastrar	</button>		
                <a href="{{ URL::route('voltar') }}" class="btn btn-default"> Voltar </a>
              </fieldset>		
            </form>
            
            
            
        <!-- Footer -->
        <footer>
            <p>Salão de Beleza &copy; 2018</p>
          </footer>
      
        </div>
        <!-- Wrapper Ends -->
  </body>
  </html>