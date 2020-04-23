@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('posts.create') }}" class="btn btn-success mb-2">Crear posts</a>
            <div class="card">
                 @if (Session::has('message'))
                   <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif

                <div class="card-header">Lista de Publicaciones</div>
                   <table class="table">
                     <thead>
                       <tr>
                         <th scope="col">id</th>
                         <th scope="col">Título</th>
                         <th scope="col">Categoría</th>
                         <th scope="col">Autor</th>
                         <th scope="col">Portada</th>
                         <th scope="col">Acciones</th>
                         
                       </tr>
                     </thead>
                     <tbody>
                        @foreach ($posts as $post)
                         <tr>
                         <th scope="row">{{ $post->id }}</th>
                         <td>{{ $post->title }}</td>
                         <td>{{ $post->category->name }}</td>
                         <td>{{ $post->user->name }}</td>
                         <td><img src="{{ $post->image }}" width="80" height="100" class="img-fluid"></td>
                         <td class="d-flex" >
                             
                         </div>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success mr-2">Editar</a>
                             <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                                     @csrf
                                                     @method('DELETE')
                                       
                             <button type="submit" class="btn btn-danger  "  onclick="return confirm('Quiere borrar el registro?')" >Eliminar</button>

                         </form>

                         </td>
                          
                       
                       </tr>
                        @endforeach
                       
                     
                     </tbody>
                   </table> 
              
                </div>
            </div>
        </div>

@endsection