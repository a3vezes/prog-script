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
      
    <div class="wrapper">          
        <!-- Navigation -->
        <nav class="main-nav">
          <ul>
            <li>
              <a href="{{Route('home')}}">Home</a>
            </li>
            <li>
              <a href="#">Serviços</a>
            </li>
            <li>
              <a href="{{Route('listarProduto')}}">Produtos</a>
            </li>
            <li>
              <a href="{{Route('home')}}">LogOut</a>
            </li>
          </ul>
        </nav>
        <div class="main-nav">
            <ul>
                <li><a href="{{Route('cadastro')}}">Cadastrar Produto</a></li>
                <li><a href="{{Route('excluir')}}">Excluir Produto</a></li>                
                <li><a href="{{Route('listarProduto')}}">Listar Produto</a></li>
            </ul>
        </div>
        <!-- Footer -->
        <footer>
            <p>Salão de Beleza &copy; 2018</p>
          </footer>
      
        </div>
        <!-- Wrapper Ends -->
  </body>
  </html>