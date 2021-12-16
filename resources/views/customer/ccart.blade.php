@extends('customer.cheader')
@section('main-body')
<section class="ftco-section ftco-cart" style="background-color:lightgrey">
			<div class="">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="">
<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Sub Total</th>
						      </tr>
						    </thead>
						    <tbody>
							@foreach($res as $val)
						      <tr class="text-center">
						        <td class="product-remove"><a href="/delete/{{$val->id}}"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url({{asset('pimage/'.$val->pimg)}});"></div></td>
						        <td >{{$val->pname}}
								<input type="hidden" name="cartid" id="cartid" value="{{$val->id}}"> 
								</td>
						        
						        <td class="price">
								<div class="input-group mb-3">
								{{$val->Prize}}
									<input type="hidden" name="prize" id="prize" class="quantity form-control input-number" value="{{$val->Prize}}"></td>
</div>
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="number" name="qnty" id="qnty" class="qnty form-control input-number" value="1" min="1" >
					          	</div>
					          </td>
						        
						        <td class="total">
									<div class="input-group mb-3">
					             	<input type="text" name="total" id="total" class="quantity form-control input-number" value="{{$val->Prize}}">
					          	</div>
							</td>
							<td><input type="hidden" name="pid" id="pid" value="{{$val->p_id}}"></td>
							<!-- <td ><a href="/bookproduct/{{$val->id}}"><input type="submit" class="btn btn-primary"  value="Book product"></a></td> -->
								
						      </tr>
							  <!-- <tr>
								  <td></td>
								  <td></td>
								  <td></td>
								  <td></td>
								  <td></td>
							  </tr> -->
							  @endforeach
							  <tr>
							  <td ><a href="/viewproducts"><input type="submit" class="btn btn-primary"  value="Add products"></a></td>
							  
							  </tr>
</tbody>

</table>

<!-- </form> -->
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
$(document).ready(function(){
		$(".qnty").on('change', function()
		{
            var row = $(this).closest('tr');
    var pid = parseInt(row.find("#pid").val());
    // alert(pid)    
    var qnty = parseInt(row.find(this).val());
    // alert(qnty)
    var prize = parseInt(row.find('#prize').val());
    // alert(prize)
    var total= parseInt(qnty)*parseInt(prize);
    // alert(total)
    // row.find('#total').html(total);
	row.find('#total').val(total);
	var x = $('#cartid').val();
			$.ajax({
				type:"get",
				url:"/totalprize/"+x,
				data:{
                    pid:pid,
					qnty:qnty,
                    total:total
                    
				},
				success:function(result)
				{ 
					alert(result)
					// $('#total').html(result);
				}
			});
		});
	});

</script>
@endsection