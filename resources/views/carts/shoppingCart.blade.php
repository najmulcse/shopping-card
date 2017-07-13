@extends('layouts.app')
<!---->

@section('content')

<div class="container">
	<div class="check-out">
		<h1>Checkout</h1>
    	    <table >
		  <tr>
			<th>Item</th>
			<th>Qty</th>		
			<th>Prices</th>
			<th>Delery Detials</th>
			<th>Subtotal</th>
		  </tr>

		  <tr>
		  @if(Session::has('cart'))
		      @foreach($products as $product)
			
			<td class="ring-in"><a href="{{route('single.product',$product['item']['id'])}}" class="at-in"><img src="{{$product['item']['photo']}}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>{{$product['item']['name']}}</h5>
				<p>{{$product['item']['desc']}} </p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input id="quant" type="number" value="{{$product['quantity']}}" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>${{$product['item']['price']}}</td>
			<td>FREE SHIPPING</td>
			<td>${{$product['price']}}</td>
		  </tr>
		  @endforeach
			
			
		  @endif

	</table>
	<hr>
	<div class="row">
		<div class="col-sm-12 ">
		<h3 class="pull-right">	Total: ${{$totalPrice}} </h3>
		</div>
	</div>
	<a href="#" class=" to-buy pull-right">PROCEED TO BUY</a>
	<div class="clearfix"> </div>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		var qun = $('#quant').val();
		
	});
</script>
@endsection