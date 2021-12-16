@extends('manager.mheader')
@section('main-body')
<section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/img5.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
				<h1 style="color:darkgreen" class="mb-2">Welcome</h1>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(images/img4.jpeg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
			  @foreach($res as $value)
	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 style="color:darkgreen" class="mb-2">{{$value->sname}}</h1>
	            </div>
@endforeach
	          </div>
	        </div>
	      </div>
	    </div>
    </section>
@foreach($res as $val)
    <section class="ftco-section contact-section bg-light" style="background-image: url('images/1.png');">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Location:</span> {{$val->address}}</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel:{{$val->phno}}">{{$val->phno}}</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:{{$val->email}}">{{$val->email}}</a></p>
	          </div>
          </div>
        </div>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
    @endforeach
   @endsection