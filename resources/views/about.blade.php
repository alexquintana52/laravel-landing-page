@extends('layout.main')

@section('title', 'Ennoia | Sobre Nosotros')

@section('content')

<section class="home-content">
  <div class="container">
    <div class="row justify-content-center">
			<div class="col-12 col-lg-8">
				<h1 class="fw-bold m-0 text-ennoia ff-jetbrains">Sobre Nosotros</span></h1>
				<p class="mt-4">Te invitamos a conocer quiénes somos, nuestra pasión por la tecnología y nuestra misión de brindarte una experiencia educativa excepcional.  Descubre nuestra historia, nuestros valores y nuestro compromiso contigo mientras te sumerges en la tecnología con nosotros.</p>
				<p class="mb-4"><strong>¡Es un placer tenerte a bordo en nuestro viaje de aprendizaje tecnológico!</strong></p>
			</div>
		</div>
  </div>
</section>

<section class="container my-5 overflow-hidden">
	<div class="row gy-5 gx-5 align-items-center text-center text-lg-start">
		<div class="col-12 col-lg-6">
			<h2 class="text-ennoia mb-3">¿Quiénes Somos?</h2>
			<p>¡Somos Ennoia, tu compañero de aventuras en el mundo de la tecnología!</p>
			<p>Nuestra misión es hacer que el aprendizaje tecnológico sea divertido, accesible y educativo para todos. Nos esforzamos por ser el puente que conecta a las personas con la tecnología, sin importar su nivel de familiaridad. Queremos ofrecerte una experiencia que te permita aprender y sentirte cómodo con la tecnología de una manera amigable y agradable.</p>
		</div>
		<div class="col-12 col-lg-6">
			<img src="{{ url('img/home-img.jpg') }}" class="img-fluid rounded-3" alt="">
		</div>
	</div>
</section>

<section class="container mb-5 overflow-hidden">
  <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 home-bg-img d-inline-block">
		<h2 class="fw-bold text-ennoia mb-5 text-center">Nuestra Historia</h2>
    <div class="row g-5 text-shadow">
			<div class="col-12 col-lg-6">
				<p>Sabemos que en la era digital actual, la tecnología está en constante evolución y se ha convertido en una parte integral de nuestras vidas. Sin embargo, reconocemos que muchas personas, especialmente aquellas de más de 35 años, pueden sentirse abrumadas por la jerga tecnológica y los conceptos aparentemente complicados.</p>
			</div>
			<div class="col-12 col-lg-6">
				<p>Fue con este desafío en mente que elegimos el nombre <strong class="text-ennoia">'Ennoia'</strong> para nuestra aplicación. La palabra 'Ennoia' proviene del griego antiguo y se traduce como 'pensamiento', 'idea' o 'concepto'. Esta elección no fue accidental, sino que refleja nuestra misión y compromiso de hacer que la tecnología sea más accesible y comprensible para todos, y lo hacemos a través del juego.</p>
			</div>
		</div>
  </div>
</section>

@endsection