@extends('user.mainheader')
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
	<br><br><br><br>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
									<div class="text text-center">
										<!-- <h2>Vegetables</h2> -->
										<p>Protect the health of every home</p>
										<p><a href="/clog" class="btn btn-primary">Shop now</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/3.png);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Grocery</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/3.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Vegetables $ Fruits</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/6.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Gifts</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Dried</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section" style="padding-bottom:8%">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Products</h2>
          </div>
        </div>   		
    	</div>
    	<div class="container" style="height:100px;">
    		<div class="row">
    			@foreach($res as $val)
				<div class="col-md-6 col-lg-3 ftco-animate" style="height:100px;" >
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="pimage/{{$val->pimg}}" alt="Colorlib Template">
    						<!-- <span class="status">30%</span> -->
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">{{$val->shop_name}}</a></h3>
    						<h3><a href="#">{{$val->pname}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2">{{$val->Prize}}</span></p>
		    					</div>
								<div class="shopname">
		    						<p class="price"><span class="mr-2 price-dc">{{$val->sname}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3" >
	    						<div class="m-auto d-flex">
	    							<a href="/clog" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="/clog" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				@endforeach
    		</div>
    	</div>
    </section>
	<br><br><br><br>
   @endsection