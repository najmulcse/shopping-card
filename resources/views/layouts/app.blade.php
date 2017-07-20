<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
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
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container-fluid">
        <div class="col-sm-3 world">
                    <ul >
                        <li>
                        <select class="in-drop">
                              <option>English</option>
                              <option>Japanese</option>
                              <option>French</option>
                            </select></li>
                        <li><select class="in-drop1">
                              <option>Dollar</option>
                              <option>Euro</option>
                              <option>Yen</option>
                            </select>
                        </li>
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
                      <li><a  href="#">Men</a>
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
                    <li class="grid"><a  href="#">  Women</a>
                        <div class="mepanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>All Clothing</h4>
                                    <ul>
                                        <li><a href="products.html">Shirts & Tops</a></li>
                                        <li><a href="products.html">Sports Wear</a></li>
                                        <li><a href="products.html">Kurtas & Kurties</a></li>
                                        <li><a href="products.html">Suits & Blazers</a></li>
                                        <li><a href="products.html">Sarees</a></li>
                                        <li><a href="products.html">Sweatpants</a></li>
                                        <li><a href="products.html">Swimwear</a></li>
                                        <li><a href="products.html">Night-Suits</a></li>
                                        <li><a href="products.html">T-Shirts</a></li>
                                        <li><a href="products.html">Jeans</a></li>
                                        
                                    </ul>   
                                </div>                          
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="products.html">Heels</a></li>
                                        <li><a href="products.html">Flats</a></li>
                                        <li><a href="products.html">Sports Shoes</a></li>
                                        <li><a href="products.html">Casual Shoes</a></li>
                                        <li><a href="products.html">Running Shoes</a></li>
                                        <li><a href="products.html">Wedges</a></li>
                                        <li><a href="products.html">Boots</a></li>
                                        <li><a href="products.html">Pumps</a></li>
                                        <li><a href="products.html">Slippers</a></li>
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
                <li><a  href="#">Blog</a></li>              
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
@yield('content')
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-8 top-footer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.91163207516!2d2.3470599!3d48.85885894999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1436340519910" allowfullscreen=""></iframe>
            </div>
            <div class="col-md-4 top-footer1">
                <h2>Newsletter</h2>
                    <form>
                        <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                        <input type="submit" value="SUBSCRIBE">
                    </form>
            </div>
            <div class="clearfix"> </div>   
        </div>  
    </div>
    <div class="footer-bottom">
        <div class="container">
                <div class="col-sm-3 footer-bottom-cate">
                    <h6>Categories</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3 footer-bottom-cate">
                    <h6>Feature Projects</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3 footer-bottom-cate">
                    <h6>Top Brands</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Ultrices id du</a></li>
                        <li><a href="#">Commodo sit</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3 footer-bottom-cate cate-bottom">
                    <h6>Our Address</h6>
                    <ul>
                        <li>Aliquam metus  dui. </li>
                        <li>orci, ornareidquet</li>
                        <li> ut,DUI.</li>
                        <li>nisi, dignissim</li>
                        <li>gravida at.</li>
                        <li class="phone">PH : 6985792466</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <p class="footer-class"> © 2017 Dream Shop. All Rights Reserved | Design by <a href="http://dreamshop.com/" target="_blank">Dream</a> </p>
            </div>
    </div>
</div>

<!--//footer-->
</body>
</html>




