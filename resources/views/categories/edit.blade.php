@extends('layout')
@section('content')
    <div class="container">	
      <div class="card-header">Editar categoría</div>

               

                 <form action="{{ route('categories.update',$category->id) }}" method="post" class="m-2">
                    @csrf
                    @method('PUT')
                   
                              
                         <div class="form-group">
                           <label class="form-control-label" for="name">Nombre Categoria </label>
                           <input type="text" class="form-control form-control-alternative"  name="name" value="{{ $category->name }}">
                            @if ($errors->has('name'))
                            <strong class="text-danger" >{{ $errors->first('name') }}</strong>
                            @endif
                          
                         </div>
                 
                     
                        <button type="submit" class="btn btn-primary my-4">Actualizar</button>
                   
                     
                 
                 </form>

                </div>
              
@endsection    	