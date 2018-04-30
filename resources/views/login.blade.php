@extends('template')
@section('body')

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
<!-- [FIM] ERRO -->
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