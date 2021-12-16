@extends('customer.cheader')
@section('main-body')
<section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/img2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
@foreach($res as $val)
	            <div class="col-md-12 ftco-animate text-center">
				<h1 class="mb-2" style="color:darkgreen">Welcome   {{$val->name}}</h1>
	            </div>
@endforeach
	          </div>
	        </div>
	      </div>
	    </div>
    </section>
   @endsection