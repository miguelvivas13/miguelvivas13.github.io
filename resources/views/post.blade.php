@extends('layout')


@section('content')

 <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4 p-3 mb-2 bg-primary text-white">{{ $post->title }}</h1>

        <!-- Author -->
        <p class="lead">
          escrito por
          <a href="#">{{ $post->user->name }}</a>
        </p>

        <hr>  


         <p>Publicado en ,{{ $post->created_at->format('d/m/Y') }}</p>

        <hr>

        <!-- Preview Image -->
        <img class="rounded" src="{{ $post->image }}" alt="" width="700" height="300">

        <hr>

        <!-- Post Content -->
        <p class="lead"> {{ $post->body }}</p>

        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

        </blockquote>


        <hr>

      </div>
    </div>
  </div>







@endsection

