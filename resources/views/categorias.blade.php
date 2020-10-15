@extends('menu')

@section('pagina')
<div class="">
    
    <h1 style="text-align: center">Categorias</h1>
    <button type="button" class="btn btn-success">Agregar</button>
    <button type="button"class="btn btn-warning">Modificar</button>
    <button type="button"class="btn btn-danger">Eliminar</button>
   @for ($i = 0; $i < $vista; $i++)
      <div class="categorias" > 
          
        <h4>punk - rock</h4>
    
    </div>
   @endfor
    
</div>   
@endsection