@extends('layout')
@section('content')
    <div class="container">	
      <div class="card-header">Crear categoría</div>

                 <form action="{{ route('categories.store')}}" method="post" class="m-2">
                    @csrf
                   
                              
                         <div class="form-group">
                           <label class="form-control-label" for="name">Nombre Categoria </label>
                           <input type="text" class="form-control form-control-alternative"  name="name">
                          	
                            @if ($errors->has('name'))
                            <strong class="text-danger" >{{ $errors->first('name') }}</strong>
                            @endif

                          	
                         </div>
                 
                     
                        <button type="submit" class="btn btn-primary my-4">Crear</button>
                   
                     
                 
                 </form>

                </div>
                </div>
@endsection    	