@extends('layout.main')

@section('title', 'Ennoia | Noticias y Novedades')

@section('content')

<section class="notices-home">
  <div class="container">
    <div class="row justify-content-center">
			<div class="col-12 col-lg-8">
				<h1 class="fw-bold">Noticias y <span class="text-ennoia">Novedades</span></h1>
				<p class="my-4">Aquí encontrarás un rincón de descubrimientos constantes y actualizaciones frescas del siempre emocionante universo tecnológico. Estamos aquí para mantenerte al día sobre las tendencias más candentes, los avances más innovadores y las perspectivas más prometedoras en el mundo de la tecnología. Así que únete a nosotros en este emocionante viaje de conocimiento y exploración tecnológica. ¡Empecemos a explorar juntos el futuro!</p>
			</div>
		</div>
  </div>
</section>

<section class="container mt-5 mb-3">
	<div class="row g-3">
		<div class="col-12">
			<a href="{{ route('notices') }}">
				<div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 notice-card">
					<div class="row">
						<div class="col-12 col-md-9 col-lg-6 ">
							<h4 class="fw-bold text-ennoia m-0">Notice Title</h4>
							<p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, veritatis nisi provident voluptates suscipit nesciunt delectus dolore quam architecto consectetur iste quod eligendi quo cum eum reprehenderit.</p>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</section>

<section class="container mb-3">
	<div class="row g-3">
		<div class="col-12 col-lg-6">
			<a href="{{ route('notices') }}">
				<div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 notice-card">
					<h4 class="fw-bold text-ennoia m-0">Notice Title</h4>
					<p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, veritatis nisi provident voluptates suscipit nesciunt delectus dolore quam architecto consectetur iste quod eligendi quo cum eum reprehenderit.</p>
				</div>
			</a>
		</div>
		<div class="col-12 col-lg-6">
			<a href="{{ route('notices') }}">
				<div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 notice-card">
					<h4 class="fw-bold text-ennoia m-0">Notice Title</h4>
					<p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, veritatis nisi provident voluptates suscipit nesciunt delectus dolore quam architecto consectetur iste quod eligendi quo cum eum reprehenderit.</p>
				</div>
			</a>
		</div>
	</div>
</section>

<section class="container mb-5">
	<div class="row g-3">
		<div class="col-12 col-md-6 col-lg-4">
      <a href="{{ route('notices') }}">
        <div class="card bg-ennoia-dark border-0 text-white blog-card">
          <img src="{{url('img/home-bg-img.jpg')}}" class="rounded-3 card-img-top" alt="...">
          <div class="card-body p-0">
            <h2 class="h4 mb-3 mt-4 card-title fw-bold text-ennoia">Notice Title</h2>
            <p class="card-text my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis a sapiente perferendis aliquid repellat?</p>
          </div>
        </div>
      </a>
    </div>
		<div class="col-12 col-md-6 col-lg-4">
      <a href="{{ route('notices') }}">
        <div class="card bg-ennoia-dark border-0 text-white blog-card">
          <img src="{{url('img/home-bg-img.jpg')}}" class="rounded-3 card-img-top" alt="...">
          <div class="card-body p-0">
            <h2 class="h4 mb-3 mt-4 card-title fw-bold text-ennoia">Notice Title</h2>
            <p class="card-text my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis a sapiente perferendis aliquid repellat?</p>
          </div>
        </div>
      </a>
    </div>
		<div class="col-12 col-md-6 col-lg-4">
      <a href="{{ route('notices') }}">
        <div class="card bg-ennoia-dark border-0 text-white blog-card">
          <img src="{{url('img/home-bg-img.jpg')}}" class="rounded-3 card-img-top" alt="...">
          <div class="card-body p-0">
            <h2 class="h4 mb-3 mt-4 card-title fw-bold text-ennoia">Notice Title</h2>
            <p class="card-text my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis a sapiente perferendis aliquid repellat?</p>
          </div>
        </div>
      </a>
    </div>
	</div>
</section>


@endsection