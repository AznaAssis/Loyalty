@extends('manager.mheader')
@section('main-body')
<section id="home-section" class="hero">
	      <div  style="padding-left:0%;background-image: url(/images/1.png);">
          <section class="ftco-section">
      <div >
        <div class="container">
            @foreach($res as $val)
          <div class="col-xl-7 ftco-animate">
				<h1 style="padding-left:70%"class="mb-4 billing-heading"><b>ADD PRODUCT</b></h1>
			</div >
			<form action="/adpaction"  method="post" enctype="multipart/form-data" classs="billing-form">
                            @csrf
	          		
                            <div>
	                <div class="form-group">
	                  <input type="hidden" name="sname" class="form-control" value="{{$val->sname}}">
	                </div>
	              </div>
                  <div>
	                <div class="form-group">
	                	<label for="name">Product  Name</label>
	                  <input type="text" name="pname" class="form-control" >
	                </div>
	              </div>
				  <div >
		            	<div class="form-group">
	                	<label for="qnty">Quantity</label>
	                  <input type="number" name="qnty" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div >
		            	<div class="form-group">
		            		<label for="prize">Product Prize</label>
	                  <input type="text" name="prize" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div >
	                <div class="form-group">
	                	<label for="date">Product Date</label>
	                  <input type="date" name="pdate" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div >
	                <div class="image">
	                	<label for="emailaddress">Product Image</label>
	                  <input type="file" name="pimage" class="form-control" placeholder="">
	                </div>
                </div>
	                <div class="form-group">
	                	<label for="uname">Product Type</label>
                            <select name="ptype" class="form-control">
                                <option value="">-- Choose --</option>
                                <option value="Gifts">Gifts</option>
                                <option value="Toys">Toys</option>
                                <option value="Grocery">Grocery</option>
                                <option value="Vegetables">Vegetables</option>
                                <option value="Fruits">Fruits</option>
                                <option value="Fancy">Fancy</option>
                                <option value="Others">Others</option>
                            </select>
                </div>
	                <div class="form-group">
	                	<label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="">-- Choose --</option>
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                    </select>
	                </div>
                </div>
                <div class="container">
				<div style="padding-bottom:5%" class="row">
				<div class="col-sm-6"><input type="submit" name="submit" value="Add Product" class="btn btn-success btn-block" ></div>
				<div class="col-sm-6"> <input type="reset" value="Clear" class="btn btn-success btn-block"></div>
                </div>
				</div>
	          </form>
            @endforeach
					</div>
	    </div>
	 </div>
</section>
@endsection