@extends('layouts.app')
<!---->

@section('content')

<div class="container">
	<div class="check-out">
		<h1>Checkout</h1>
		<hr>
    	    <table class="table table-bordered">
		  <tr>
			<th>Item</th>
			<th>Qty</th>		
			<th>Prices</th>
			<th>Option</th>
			<th>Subtotal</th>
		  </tr>

		  @if(!empty($cartItems))
		      @foreach($cartItems as $product)
		  <tr>
			
			<td class="ring-in"><a href="{{route('single.product',$product->id)}}" class="at-in"><img src="" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5><a href="{{route('single.product',$product->id)}}">{{$product->name}}</a></h5>
				
			
			</div>
			<div class="clearfix"> </div></td>
			<td class="check">
			<form action="{{ route('cart.updateQuantity',['id'=>$product->rowId]) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{ $product->rowId}}">
				  <input name="quantity" type="number" value="{{$product->qty}}" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                  <input type="submit" name="submit" value="Change ?" class="btn btn-info">
            </form>

			</td>		
			<td>${{$product->price}}</td>
			<td>
			<form action="{{ route('cart.destroy',['id'=> $product->rowId]) }}" method="GET">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                </form></td>
			<td>${{$product->price * $product->qty}}</td>

		  </tr>
			
		  @endforeach
			
		@endif	

	</table>
	
	<div class="row">
		<div class="col-sm-12 ">
		<h3 class="pull-right">	Total: ${{$total = Cart::subtotal()}} </h3>
		</div>
	@if((count($cartItems)>0))
	<br>
	<a href="{{route('product.payment')}}" class=" to-buy pull-right">PROCEED TO BUY</a>
	@else
	<h3 style="padding-left: 10%;">No items </h3>
	@endif
		
	
	</div>
	<div class="clearfix"> </div>
    </div>
</div>

<script type="text/javascript">
	
</script>
@endsection