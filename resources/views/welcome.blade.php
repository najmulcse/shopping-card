@extends('layouts.app')

@section('content')
<!--banner-->
<div class="banner">
    <div class="col-sm-3 banner-mat">
        <img class="img-responsive" src="images/ba1.jpg" alt="">
    </div>
    <div class="col-sm-6 matter-banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <img src="images/1.jpg" alt="">
                     </li>
                     <li>
                        <img src="images/2.jpg" alt="">   
                     </li>
                     <li>
                        <img src="images/1.jpg" alt="">
                    </li>   
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-3 banner-mat">
        <img class="img-responsive" src="images/ba.jpg" alt="">
    </div>
    <div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<div class="content">
    <div class="container">
        <div class="content-top">
            <h1>Recent Products</h1>
            <div class="content-top1">

            @if(!empty($products))
              @foreach($products->chunk(3) as $productChunk)
                 @foreach($productChunk as $product)
                <div class="col-md-3 col-md2">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="{{route('single.product',['id'=>$product->id])}}">
                            <img class="img-responsive" src="{{$product->photo}}" alt="" />
                        </a>
                        <h3><a href="{{route('single.product',['id'=>$product->id])}}">{{$product->name}}</a></h3>
                        <div class="price">
                                <h5 class="item_price">${{$product->price}}</h5>
                                <a href="{{route('product.addToCart',['id' =>$product->id])}}" class="item_add btn btn-sm btn-primary pull-right">Add To Cart</a>
                                <div class="clearfix"> </div>
                        </div>
                    </div>
                </div> 
                @endforeach
                @endforeach
           @endif 
            
            <div class="clearfix"> </div>
            </div>  
        </div>
    </div>
</div>
<!--//content-->
@endsection
