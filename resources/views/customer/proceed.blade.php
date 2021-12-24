@extends('customer.cheader')
@section('main-body')
<section class=" ftco-cart" style="background-color:lightblue">
			<div class="">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="container">
						<!-- <form  method="post" id="frm"> -->
							@csrf
<table class="table" id="tableid">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Quantity</th>
						        <th>Sub Total</th>
						      </tr>
						    </thead>
						    <tbody id="tbody"> 
							@foreach($res as $val)
						      <tr class="text-center">
						        <td class="product-remove"><a href="/delete/{{$val->id}}"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url({{asset('pimage/'.$val->pimg)}});"></div></td>
						        <td >{{$val->pname}}
								<input type="hidden" name="cartid" id="cartid" value="{{$val->id}}"> 
								</td>
</div>
						        <td class="quantity">
					             	{{$val->qnty}}
					          </td>
                              <input type="hidden" name="qnty" id="qnty" class="qnty form-control input-number" value="{{$val->qnty}}" min="1" >
                              <input type="hidden" name="total" id="total" class="quantity form-control input-number" value="{{$val->prize}}">
						        <td class="total">
					             	{{$val->prize}}
							</td>
							<td><input type="hidden" name="pid" id="pid" value="{{$val->p_id}}"></td>
							<!-- <td ><a href="/bookproduct/{{$val->id}}"><input type="submit" class="btn btn-primary"  value="Book product"></a></td> -->
								
						      </tr>
							   
							  @endforeach
							  </tbody>
								<tr>
								<td>&nbsp;</td>
						        <td>&nbsp;</td>
								<td></td>
								<td >Total</td>
								@foreach($sum as $v)
								<td >  {{$v->psum}}</td>
								<input type="hidden" name="ttotal" id="ttotal" value="{{$v->psum}}">
								@endforeach
</tr>
<tr>		
								<td>&nbsp;</td>	
								<td>&nbsp;</td>	
								<td>&nbsp;</td>	
								<td><b>Total credit points</b></td>
						        @foreach($cp as $val) <td>{{$val->creditpoints}}</td>
								<input type="hidden" name="cp" id="cp" value="{{$val->creditpoints}}">@endforeach
</tr>
<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<!-- <td><input type="submit" class="btn btn-primary btn-block" value="Credit purchase" id="cpp"></td> -->
								<td>@foreach($sum as $v)
								@foreach($cp as $val)
								@if(($v->psum)>=($val->creditpoints))
								<b><a href="/bookp/{{$v->psum}}"><button type="submit" class="btn btn-primary btn-block" style="color:white;"> <b>cash purchase</b></button></a></b>
								@else
								<a href="/creditp/{{$v->psum}}"><button type="submit" class="btn btn-primary btn-block" style="color:white;"><b> credit purchase</b></button></a>
								@endif
								@endforeach
								@endforeach
							</td>
								
</tr>

</table>

</form> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$cp=("#cp").val()
			alert(cp)
			// if(<=)
		$("#pur").on('click', function()
		{
			$cp=("#cp").val()
			alert(cp)
            var row = $(this).closest('tr');
    var pid = parseInt(row.find("ttotal").val());
    alert(pid)    
    var qnty = parseInt(row.find(this).val());
    // alert(qnty)
    var prize = parseInt(row.find('#prize').val());
    // alert(prize)
    var total= parseInt(qnty)*parseInt(prize);
    // alert(total)
    // row.find('#total').html(total);
	row.find('#total').val(total);
	var x = row.find('#cartid').val();
	// alert(x)
			$.ajax({
				type:"get",
				url:"/totalprize/"+x,
				data:{
                    // pid:pid,
					qnty:qnty,
                    total:total
				},
				success:function(result)
				{ 
					$('#total').html(result);
				}
			});
			location.reload(true);
		});
	});

</script>
	</script>
	
@endsection