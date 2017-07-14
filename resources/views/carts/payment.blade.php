@extends('layouts.simple')



@section('content')

<div class="container">
<div class="contact">
 <h1 >Checkout</h1>
 
 </div>
	<div class="row ">
	
	<h3 class="text-center">Your Totall bill : ${{Cart::subtotal()}}</h3>
	<h3 class="text-center">Please pay the amount to <strong>01571726301 </strong> </h3>
	<br>
	</div>
		<div class="row">
            <div class="col-sm-6">
              <h3 class="text-center">Dutch Bangla Mobile Banking</h3>
              
               
                    <div class="work-image">
                        <img class="img-responsive" src="{{asset('images/dbbl.png')}}">
                    </div>
                    <div>

                    </div>
                

            </div>
            <div class="col-sm-6 ">
            <h3 class="text-center">Bkash</h3>
            
                
                    <div class="work-image">
                        <img class="img-responsive" src="{{asset('images/bkash.jpg')}}">
                    </div>
                    <div>

                    </div>
               

            </div>

</div>
<hr>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Please Fill up the trx ID to continue...</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
							
							<div class="form-group">
								<label class="" for="">Transcation ID:</label>
								<input type="text" class="form-control" id="" placeholder="Trx ID">
							</div>
						
							
						
							<button type="submit" class="btn btn-primary">Checkout</button>
						</form>
	</div>
</div>
				</div>	
			</div>

</div>
@endsection
