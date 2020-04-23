	<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">

		<div class="container" >

			

		<a class="navbar-brand" href="{{ route('home')}}">

			<img src="/img/logo.png" alt="logo" width="120" height="110">
			
		{{--	{{config('app.name')}}  --}}
		</a>	

		 <script src="{{ asset('js/app.js') }}" defer></script>
		          <button class="navbar-toggler" type="button" 

		          data-toggle="collapse" 


		          data-target="#navbarSupportedContent" 


		          aria-controls="navbarSupportedContent" aria-expanded="false" 

		          aria-label="{{ __('Toggle navigation') }}">

                    <span class="navbar-toggler-icon"></span>


                </button>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
		
		<ul class="nav nav-pills">
			
			<li  class =" nav-item ">

			 <a class="nav-link {{ setActive('home') }} " href="{{ route('home')}}"> Inicio </a>

			</li>


				<li class ="nav-item "> 
				<a class="nav-link {{ setActive('club') }}" 
				 href="{{ route('club')}}">Club</a></li>

				<li class ="nav-item "> 
				<a class="nav-link {{ setActive('blog') }}" 
				 href="{{ route('blog')}}">Blog</a></li>
				 


			<li class ="nav-item "> 
				<a class="nav-link {{ setActive('contacto') }}" 
				 href="{{ route('contacto')}}"> Contacto</a></li>


			@guest
			<li class="nav-item ">
				<a class="nav-link {{setActive('login')}}" 
				href="{{ route('login')}}">Ingresar</a></li>
	
                   
		    @else


		        <li class="nav-item">
                               <a href="{{ route('categories.index') }}" class="nav-link ">Categorias</a>
                             </li>
                  <li class="nav-item">
                               <a href="{{ route('posts.index') }}" class="nav-link ">Posts</a>
                             </li>             
                            

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>














		   


		   {{-- <li class=" nav-item "><a class="nav-link"  href="#"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar sesion </a></li>--}}

		    @endguest
		</ul>
		</div>
		</div>
	</nav>

	  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>