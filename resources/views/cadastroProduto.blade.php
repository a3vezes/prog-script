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
                
                <button type="submit" class="btn btn-default">Cadastrar	</button>		
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