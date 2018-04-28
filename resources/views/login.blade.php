@extends('template')
@section('body')
<form action="{{Route('logar')}}" method="post">
    {{ csrf_field() }} 
				<fieldset>
    <div class="form-group">
      <label for="campo-email">Email:</label>
      <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
      <label for="campo-senha">Senha:</label>
      <input type="password" class="form-control" name="senha">
    </div>
    
    <button type="submit" class="btn btn-default">LogIn	</button>		
  </fieldset>		
</form>
        @endsection