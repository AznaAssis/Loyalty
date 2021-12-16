@extends('customer.cheader')
@section('main-body')
<section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
				<h1 class="mb-2">Grocery ,Fresh Vegitables and Fruits And Dried items</h1>
	              <!-- <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2> -->
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(images/2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">Fancy and Toys</h1>
	              <!-- <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2> -->
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>
@foreach($res as $val)
<section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex  contact-info">
          <div class="w-100"></div>
          <div class="col-md-8 d-flex">
          	<div class="info bg-secondary p-4">
	            <p><span>Address:</span> {{$val->address}}</p>
	          </div>
          </div>
          <div class="col-md-8 d-flex">
          	<div class="info bg-info p-4">
	            <p><span>Phone:</span> <a href="tel:{{$val->phno}}">{{$val->phno}}</a></p>
	          </div>
          </div>
          <div class="col-md-8 d-flex">
          	<div class="info bg-warning p-4">
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