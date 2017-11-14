@extends('layouts.app')
<!---->

@section('content')

<div class="container">
	<div class="check-out">
		<h1>Order List</h1>
		<hr>
		  @if(!empty($orders))
		      @foreach($orders as $order)

    	    <table class="table table-bordered">
		  <tr>
		  <h3>Date:{{$order->created_at}}</h3>
			<th>Item</th>
			<th>Qty</th>		
			<th>Prices</th>
			<th>Subtotal</th>
			<th>Status</th>
		  </tr>
		  <tr>
		      	@foreach($order->orderItems()->get() as $product )

			
			<td class="ring-in"><a href="#" class="at-in"><img src="" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5><a href="#">{{$product->name}}</a></h5>
				
			
			</div>
			</td>
			<td class="check">{{$product->pivot->quantity}}</td>		
			<td>${{$product->price}}</td>
			
			<td>${{$product->price * $product->pivot->quantity}}</td>
			<td>
				@if($order->delivered==0)
				<h3 class="btn btn-danger">Pending</h3>
				@else
				 <h3 class="btn btn-success">Delivered </h3>
				@endif
			</td>
		  </tr>
			@endforeach

		  @endforeach
			
		@endif	

	</table>
	
	
	<div class="clearfix"> </div>
    </div>
</div>

<script type="text/javascript">
	
</script>
@endsection