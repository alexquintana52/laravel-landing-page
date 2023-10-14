@extends('layout.main')

@section('title', 'Ennoia | Inicio')

@section('content')

<section class="home-content">
  <div class="container">
    <div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<h1 class="fw-bold m-0">Bienvenido a <span class="text-ennoia ff-jetbrains">Ennoia</span></h1>
				<p class="mt-4"><strong class="text-ennoia">¡Bienvenido a la emocionante aventura del aprendizaje tecnológico!</strong> En esta aplicación, te sumergirás en el fascinante mundo de la tecnología, explorando conceptos innovadores, descubriendo nuevas habilidades y desafiándote a ti mismo para dominar lo último en el mundo digital.</p>
				<p class="mb-4">Prepárate para adquirir conocimientos valiosos que te abrirán las puertas a un futuro lleno de posibilidades. <strong class="text-ennoia">¡Comencemos tu viaje hacia el dominio tecnológico!</strong></p>
				<button class="btn-ennoia mt-2">
					Saber Más
				</button>
			</div>
		</div>
  </div>
</section>

<section class="my-5 container">
  <div class="row gy-5">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card bg-ennoia-dark-light rounded-4 overflow-hidden text-white">
        <img src="{{url('img/home-bg-img.png')}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h2 class="h3 py-2 card-title fw-bold text-ennoia">Card title</h2>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae deserunt, fuga corrupti dolorum excepturi temporibus ipsam consequatur, doloribus assumenda officia magni placeat magnam error sed reprehenderit aut voluptatibus ab repellendus neque vel possimus! Ratione, minus?</p>
          <a href="{{route('blog')}}" class="btn-ennoia d-inline-block mb-3 mt-4">Seguir Leyendo</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card bg-ennoia-dark-light rounded-4 overflow-hidden text-white">
        <img src="{{url('img/home-bg-img.png')}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h2 class="h3 py-2 card-title fw-bold text-ennoia">Card title</h2>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae deserunt, fuga corrupti dolorum excepturi temporibus ipsam consequatur, doloribus assumenda officia magni placeat magnam error sed reprehenderit aut voluptatibus ab repellendus neque vel possimus! Ratione, minus?</p>
          <a href="{{route('blog')}}" class="btn-ennoia d-inline-block mb-3 mt-4">Seguir Leyendo</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card bg-ennoia-dark-light rounded-4 overflow-hidden text-white">
        <img src="{{url('img/home-bg-img.png')}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h2 class="h3 py-2 card-title fw-bold text-ennoia">Card title</h2>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae deserunt, fuga corrupti dolorum excepturi temporibus ipsam consequatur, doloribus assumenda officia magni placeat magnam error sed reprehenderit aut voluptatibus ab repellendus neque vel possimus! Ratione, minus?</p>
          <a href="{{route('blog')}}" class="btn-ennoia d-inline-block mb-3 mt-4">Seguir Leyendo</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container mb-5">
  <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-4 home-bg-img">
    <div class="row">
			<div class="col-12 col-md-9 col-lg-6 ">
				<h2 class="fw-bold text-ennoia m-0">Sigue las Noticias y Novedades del Mundo Tecnológico</h2>
				<p class="my-4"><strong>¡Mantente al tanto de las últimas noticias y novedades en el mundo tecnológico!</strong> Aquí encontrarás la información más relevante y actualizada sobre los avances tecnológicos que están transformando nuestro mundo. Explora las tendencias, innovaciones y descubrimientos más recientes en la industria de la tecnología.</p>
				<a href="{{ route('notices') }}" class="btn-ennoia d-inline-block mt-2">Ver Noticias</a>
			</div>
		</div>
  </div>
</section>

<section class="container mb-5">
  <div class="row gy-4">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-4 text-center">
        <div class="mb-4">
          <img src="https://cdn-icons-png.flaticon.com/512/5987/5987898.png" width="75" alt="">
        </div>
        <h3 class="mb-4 text-ennoia">Heading</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit enim non perspiciatis.</p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-4 text-center">
        <div class="mb-4">
          <img src="https://cdn-icons-png.flaticon.com/512/5987/5987898.png" width="75" alt="">
        </div>
        <h3 class="mb-4 text-ennoia">Heading</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit enim non perspiciatis.</p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-4 text-center">
        <div class="mb-4">
          <img src="https://cdn-icons-png.flaticon.com/512/5987/5987898.png" width="75" alt="">
        </div>
        <h3 class="mb-4 text-ennoia">Heading</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit enim non perspiciatis.</p>
      </div>
    </div>
  </div>
</section>

<section class="container mb-5">
  <div class="bg-ennoia text-dark py-5 px-4 p-md-5 rounded-4">
    <div class="row gy-4 align-items-center text-center text-lg-start">
      <div class="col-12 col-lg-9">
        <h3 class="fw-bold">Comenzá tu Aventura. Empezá a aprender</h3>
      </div>
      <div class="col-12 col-lg-3">
        <a href="{{ route('blog') }}" class="ff-jetbrains btn-last">Ver más Información</a>
      </div>
    </div>
  </div>
</section>

@endsection