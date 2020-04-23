@extends('layout')

@section('content')

<div class="container">
   
    <div class="row mb-2">
       @foreach ($posts as $post)
          <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">{{ $post->category->name }}</strong>
              <h3 class="mb-0">{{$post->title }}</h3>
              <div class="mb-1 text-muted">{{ $post->created_at->format('d/m/Y') }}</div>
              <p class="card-text mb-auto">{{ substr($post->body, 0,30) }}...</p>
              <a href="{{ 'post' }}/{{ $post->slug }}" class="stretched-link">Continuar leyendo</a>
            </div>
            <div class="col-auto d-none d-lg-block">
             <div class="col-auto d-none d-lg-block">
                <img  src="{{ $post->image }}" class="bd-placeholder-img" width="200" height="200" ><rect width="100%" height="100%" fill="#55595c"></rect></img>
                 </div>
            </div>
          </div>
        </div>
       @endforeach
       
       
        
        
      </div>


   {{ $posts->links() }}

 

    
</div>
  
@endsection