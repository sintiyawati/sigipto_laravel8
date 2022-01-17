@extends('template.base')
@section('content')

<!--Page Title-->
    <section class="page-title" style="background-image:url( {{url('public/assets/images/background/11.jpg')}})">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Frequently Ask Quetion</h2>
					<div class="text"></div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="index.php">home</a></li>
						<li>Faq's</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Faq Page Section -->
	<section class="faq-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="title">DAFTAR PERTANYAAN YANG SERING DI TANYAKAN</div>
				<h2></h2>
			</div>
			
			<!-- Accordian Box -->
			<ul class="accordion-box">
				<!--Block-->
				<li class="accordion block">
					<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>sadfasdfsdfasdf</div>
					<div class="acc-content">
						<div class="content">
							<div class="text">sdfasdfasdf</div>
						</div>
						<div class="content">
							<div class="text">Untuk lebih jelas kamu bisa menonton video dibawah ini!</div>
						</div>
						<div class="content">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/fdasdfasd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</li>
			</ul>
			
		</div>
	
	</section>
	<!-- End Faq Page Section -->


@endsection