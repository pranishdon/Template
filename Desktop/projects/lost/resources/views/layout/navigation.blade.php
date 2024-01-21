<div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <a href="index.html"><img src="images/logo/4.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="{{url('/')}}">Home</a></li>
                                        
                                           
                                        </li>
                                      
                                       
                                     
                                        <li class="drop"><a href="#">Pages</a>
                                           
                                        </li>
                                        @auth
                                        <li class="drop"><a href="{{url('product')}}">Product</a>
                                          
                                          </li>
                                          <li class="drop"><a href="{{url('Carts')}}">Carts</a>
                                          
                                          </li>
                                        <li class="drop"><a href="{{ route('logout')}}">Logout</a>
                                        
                                        </li>
                                        @else
                                        <li class="drop"><a href="{{route('login')}}">Login</a>
                                            
                                            </li>
                                            
                                        @endauth
                                    </ul>
                                </nav>

                       
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                    <div class="header__account">
                                        <a href="#"><i class="icon-user icons"></i></a>
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="#"><span class="htc__qua">2</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->
     </div>