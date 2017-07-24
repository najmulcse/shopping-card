<!DOCTYPE html>
<html lang="en">

<head>
<title>Dream Shop</title>
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="{{asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/intercoolernew.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/memenu_new.js')}}"></script>

<script type="text/javascript">
$(document).ready(function(){$(".memenu").memenu();});
</script>
<script src="{{asset('js/simpleCart.min.js')}}"> </script>
<!-- slide -->
<script src="{{asset('js/responsiveslides.min.js')}}"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>

<body>

    <div id="wrapper">

<div class="header">
    <div class="header-top">
        <div class="container-fluid">
        <div class="col-sm-3 world">
                    <ul >
                       
                    </ul>
        </div>
        <div class="col-sm-3 logo">
                    <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt=""></a> 
        </div>
        
        <div class="col-sm-6 ">  
            
             <div class="row">
                
                    <div class=" col-sm-6">
                      
                        <a href="{{route('shoppingCart')}}" class="btn btn-primary">
                       
                            <i class="fa fa-shopping-cart" aria-hidden ="true"></i>
                            Shopping Cart
                            <span class="badge"> {{Cart::count()}} Item(s) - ${{Cart::subtotal()}}</span>
 
                        </a>
                        
                    </div>
                    <div class="col-sm-6 ">
                     @if (Auth::guest()) 

                            <ul class="log"><a href="{{url('/login')}}"  >Login</a>
                            <span> or </span><a  href="{{url('register')}}"  >Signup</a></ul>
                    @else
                                
                                <ul class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->isAdmin())
                                    <li><a href="{{route('admin')}}">Admin</a></li>
                                     
                                    @endif
                                    <li><a href="#">Orders</a></li>
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>
                                </ul>
                                
                    @endif
                    </div>
                    
                    </div>

                    
                    
            </div>
                
        </div>
        </div>

        
        <div class="container">
            <div class="head-top">
                <div class="col-sm-2 number">
                    <span><i class="glyphicon glyphicon-phone"></i>+88 01571726301</span>
                </div>
         <div class="col-sm-8 h_menu4">
                <ul class="memenu skyblue">
                      <li class=" grid"><a  href="{{url('/')}}">Home</a></li> 
                       @if($cats)
                        @foreach($cats as $cat)
                      <li><a  href="#">{{$cat->name}}</a>
                        <div class="mepanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>All Clothing</h4>
                                    <ul>
                                        <li><a href="{{route('products.category')}}">Shirts</a></li>
                                        <li><a href="products.html">Sports Wear</a></li>
                                        <li><a href="products.html">Shorts</a></li>
                                        <li><a href="products.html">Suits & Blazers</a></li>
                                        <li><a href="products.html">Formal Shirts</a></li>
                                        <li><a href="products.html">Sweatpants</a></li>
                                        <li><a href="products.html">Swimwear</a></li>
                                        <li><a href="products.html">Trousers & Chinos</a></li>
                                        <li><a href="products.html">T-Shirts</a></li>
                                        <li><a href="products.html">Underwear & Socks</a></li>
                                        
                                    </ul>   
                                </div>                          
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="products.html">Formal Shoes</a></li>
                                        <li><a href="products.html">Boots</a></li>
                                        <li><a href="products.html">Sports Shoes</a></li>
                                        <li><a href="products.html">Casual Shoes</a></li>
                                        <li><a href="products.html">Running Shoes</a></li>
                                        <li><a href="products.html">Sneakers</a></li>
                                        <li><a href="products.html">Loafers</a></li>
                                        <li><a href="products.html">Slippers</a></li>
                                        <li><a href="products.html">Sandals</a></li>
                                        <li><a href="products.html">Flip-flops</a></li>
                                    
                                    </ul>   
                                </div>                          
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Popular Brands</h4>
                                    <ul>
                                        <li><a href="products.html">Levis</a></li>
                                        <li><a href="products.html">Persol</a></li>
                                        <li><a href="products.html">Nike</a></li>
                                        <li><a href="products.html">Edwin</a></li>
                                        <li><a href="products.html">New Balance</a></li>
                                        <li><a href="products.html">Jack & Jones</a></li>
                                        <li><a href="products.html">Paul Smith</a></li>
                                        <li><a href="products.html">Ray-Ban</a></li>
                                        <li><a href="products.html">Wood Wood</a></li>
                                    </ul>   
                                </div>                                              
                            </div>
                          </div>
                        </div>
                    </li>
                    @endforeach
                    @endif       
                <li><a class="color6" href="{{url('contact')}}">Contact</a></li>
              </ul> 
            </div>
                <div class="col-sm-2 search">       
            <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
        </div>
        <div class="clearfix"> </div>
            <!---pop-up-box---->
                      <script type="text/javascript" src="{{asset('js/modernizr.custom.min.js')}}"></script>    
                    <link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
                    <script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
                    <!---//pop-up-box---->
                <div id="small-dialog" class="mfp-hide">
                <div class="search-top">
                        <div class="login">
                            <input type="submit" value="">
                            <input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">      
                        </div>
                        <p> Shopping</p>
                    </div>              
                </div>
                 <script>
                        $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });
                                                                                        
                        });
                </script>           
    <!---->     
        </div>
    </div>
</div>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/admin')}}">Dream Shop admin </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li><a href="{{url('/')}}">Home</a></li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{route('admin')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('admin.category')}}"> <i class="fa fa-dashboard fa-fw"></i> Category</a>
                        </li>
                        <li>
                            <a href="{{route('admin.subcategory')}}"><i class="fa fa-table fa-fw"></i> Subcategory</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
             @yield('content_admin')
        </nav>

       

    </div>
    

</body>

</html>
