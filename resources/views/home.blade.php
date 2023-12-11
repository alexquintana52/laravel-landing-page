@extends('layout.main')

@section('title', 'Ennoia | Inicio')

@section('content')

<section class="bg-ennoia d-flex align-items-center text-center">
  <div class="container">
    <div class="row justify-content-center">
			<div class="col-12 col-lg-8">
				<h1 class="fw-bold m-0 text-ennoia mb-3">Bienvenido a Ennoia</h1>
        <p class="mb-4">Vivimos en una era en la que la tecnología es una <b>parte fundamental</b> de nuestras vidas. En <b>Ennoia</b>, entendemos que no todos están al tanto de los <b>avances tecnológicos</b>, ya sea porque están explorando otras áreas o porque simplemente no se han adentrado en este <b>fascinante mundo.</b> Es por eso que estamos aquí para que te adaptes en este <b>hermoso mundo de la era digital.</b></p>
				<a href="{{ url('/nosotros') }}" class="btn-ennoia mt-2 btn-sm">
					Saber Más
				</a>
			</div>
		</div>
  </div>
</section>

<section class="bg-ennoia-2">
  <div class="container">
    <div class="row gy-5">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 bg-ennoia-dark-light rounded-3 overflow-hidden text-white pb-3">
          <img src="{{url('img/home-card-1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h2 class="h4 py-2 card-title fw-bold text-ennoia">Aprende Jugando</h2>
            <p class="card-text">Ennoia te presenta una gran variedad de juegos simples con vista retro para que sigas aprendiendo mientras te diviertes.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 bg-ennoia-dark-light rounded-3 overflow-hidden text-white pb-3">
          <img src="{{url('img/home-card-2.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h2 class="h4 py-2 card-title fw-bold text-ennoia">Explora Conceptos</h2>
            <p class="card-text">Podrás encontrar temas muy interesantes relacionados al mundo de la tecnología. ¿Qué estás esperando para aprender?</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 bg-ennoia-dark-light rounded-3 overflow-hidden text-white pb-3">
          <img src="{{url('img/home-card-3.jpg')}}" class="card-img-top " alt="...">
          <div class="card-body text-center">
            <h2 class="h4 py-2 card-title fw-bold text-ennoia">Crecimiento</h2>
            <p class="card-text">Tu desarrollo es importante para nosotros, por eso te ayudamos a crecer en tu recorrido por querer seguir aprendiendo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="d-flex align-items-center my-5 pt-5">
  <div class="container">
    <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 home-bg-img">
      <div class="row">
        <div class="col-12 col-md-9 col-lg-6 ">
          <h2 class="fw-bold text-ennoia m-0">Seguí las novedades del Mundo Tecnológico</h2>
          <p class="mt-4 mb-5"><strong>¡Mantente al tanto de las últimas novedades en el mundo tecnológico!</strong> Aquí encontrarás la información más relevante y actualizada sobre los avances tecnológicos que están transformando nuestro mundo. Explora las tendencias, innovaciones y descubrimientos más recientes en la industria de la era digital.</p>
          <a href="{{ url('/blog') }}" class="btn-ennoia mt-2 btn-sm">
            Ir al blog
          </a>
        </div>
        <div class="col-12 col-lg-6 text-center text-lg-end">
          <img src="/img/codi_lentes.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5 py-5">
  <div class="container">
    <div class="row gy-4">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 text-center h-100">
          <div class="mb-4">
            <img src="{{ url('img/logo/ennoia-pet.svg') }}" width="65" alt="">
          </div>
          <h3 class="mb-4 text-ennoia">Codi</h3>
          <p>Conocé a tu mascota preferida para seguir aprendiendo. Codiguito será tu guía y fiel compañero en tu camino de aprendizaje.</p>
        </div>
        <h3 class="mb-4 text-ennoia">Codi</h3>
        <p>Conocé a tu mascota preferida para seguir aprendiendo. Codi será tu guía y fiel compañero en tu camino de aprendizaje.</p>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 text-center h-100">
          <div class="mb-4">
            <img src="{{ url('img/medal.png') }}" width="100" alt="">
          </div>
          <h3 class="mb-4 text-ennoia">Premios</h3>
          <p>Grandes recompensas y desafíos te esperan en tu camino para seguir aprendiendo, no te los pierdas.</p>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 text-center h-100">
          <div class="mb-4">
            <img src="{{ url('img/app.png') }}" width="100" alt="">
          </div>
          <h3 class="mb-4 text-ennoia">Desde donde sea</h3>
          <p>Ya sea que estes en tu computadora o en tu celular, tu progreso estará donde quiera que estes.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5 pb-5">
  <div class="container">
    <div class="bg-lime text-dark py-5 px-4 p-md-5 rounded-3">
      <div class="row gy-4 align-items-center text-center text-lg-start">
        <div class="col-12 col-lg-9">
          <h3 class="fw-bold m-0">Comenzá tu Aventura. Empezá a aprender</h3>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

