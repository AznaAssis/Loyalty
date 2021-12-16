@extends('user.mainheader')
@section('main-body')
    <div class="hero-wrap hero-bread" style="background-image: url('images/1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </div>
@foreach($res as $val)
    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex  contact-info">
          <div class="w-100"></div>
          <div class="col-md-12 d-flex">
          	<div class="info bg-secondary p-4">
	            <p><span>Address:</span> {{$val->address}}</p>
	          </div>
          </div>
          <div class="col-md-12 d-flex">
          	<div class="info bg-info p-4">
	            <p><span>Phone:</span> <a href="tel:{{$val->phno}}">{{$val->phno}}</a></p>
	          </div>
          </div>
          <div class="col-md-12 d-flex">
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