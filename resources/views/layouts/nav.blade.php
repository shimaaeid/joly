
<body>
       <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper " style=" text-align:right;">
        <div class="humberger__menu__logo">
            <a href="#"><img src="public/front/img/logof.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fas fa-heart text-black"></i> <span>1</span></a></li>
                <li><a href="{{route('checkout')}}"><i class="fas fa-shopping-bag text-black"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">الصنف: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language" style=" direction: rtl;">
             <!-- <img src="public/front/img/language.png" alt="">
              <img src="public/front/img/egypt.png" alt="">-->
                <div>عربي</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="locale/ar">عربي</a></li>
                    <li><a href="locale/en">انجليزي</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth" style=" direction: rtl;">
                <a href="{{route('login')}}"><i class="fa fa-user"></i> دخول</a>

            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">القائمه الرئيسيه</a></li>
                <li><a href="#">منتجاتنا</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{route('shoes-ar')}}">احذيه</a></li>
                        <li><a href="{{route('bag-ar')}}">شنط</a></li>
                        <li><a href="{{route('access-ar')}}">اكسسوارات</a></li>
                        <li><a href="{{route('dress-ar')}}">فساتين سواريه</a></li>
                        <li><a href="{{route('boy-ar')}}">ملابس ولادى</a></li>
                        <li><a href="{{route('girl-ar')}}">ملابس بناتى</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">الدفع</a></li>
                <li><a href="./contact.html">تواصل معنا</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li> <i class="fa fa-envelope"> </i> <a href="jolymark2020@gmail.com">jolymark2020@gmail.com</a></li>
                <li>شحن مجانى عند شرائك 1000 ريال</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fas fa-envelope"></i> <a href="jolymark2020@gmail.com">jolymark2020@gmail.com</a></li>  
                                <li>شحن مجانى عند شرائك 1000 ريال</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right " >
                            <div class="header__top__right__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>

                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language " style=" direction: rtl; text-align: right;">
                                <img src="public/front/img/egypt.png" alt="" width="20px" height="20px">
                                <div>عربي</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="locale/ar">عربي</a></li>
                                    <li><a href="locale/en">انجليزي</a></li>
                                </ul>
                            </div>
                            @guest

                            <div class="header__top__right__auth" style=" direction: rtl;">
                            @if (Route::has('register'))
                            <a href="{{route('login')}}"><i class="fa fa-user"></i> دخول</a>
                            @endif
                            </div>
                            @else
            
                            <div class="header__top__right__language " style=" direction: rtl; text-align: right;">
                                <!-- @php
                                 $path =  auth()->user()->photo;
                                @endphp
                                <img src='{{ url("/user/img/$path") }}' alt="User Photo" class="image-cover mr-2"> -->

                                <!-- <img src= "../jolyfrontend/img/log.png" alt=""> -->
                                <img src="public/jolyfrontend/img/log.png" alt="" width="25">
                                <div> {{ Auth::user()->name }}</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li>   
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   
        <div class="container " style=" direction: rtl;">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo" ">
                        <a href="./index.php">
											 <img src="public/front/img/logof.png"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                        <li class="active"><a href="{{url('/')}}">القائمه الرئيسيه</a></li>
                        <li><a href="#">منتجاتنا</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="{{route('shoes-ar')}}">احذيه</a></li>
                                <li><a href="{{route('bag-ar')}}">شنط</a></li>
                                <li><a href="{{route('access-ar')}}">اكسسوارات</a></li>
                                <li><a href="{{route('dress-ar')}}">فساتين سواريه</a></li>
                                <li><a href="{{route('boy-ar')}}">ملابس ولادى</a></li>
                                <li><a href="{{route('girl-ar')}}">ملابس بناتى</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('checkout')}}">الدفع</a></li>
                        <li><a href="{{route('who')}}"> من نحن</a></li>
                        <li><a href="{{route('contact')}}">تواصل معنا</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fas fa-heart text-black carticon"></i> <span>1</span></a></li>
                            <li><a href="{{route('checkout')}}"><i class="fas fa-shopping-bag text-black carticon"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">الصنف: <span>$150.00</span></div>

                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <section class="hero hero-normal">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                كل المنتجات
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="ما الذي تبحث عنه ؟">
                            <button type="submit" class="site-btn">ابحث</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+966 55 027 0172</h5>
                            <span>متاح 24 ساعه </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <span>كل المنتجات</span>
                        <i class="fa fa-bars"></i>

                    </div>
                    <ul>
                        <li><a href="{{route('shoes-ar')}}">الاحذيه </a></li>
                        <li><a href="{{route('bag-ar')}}">الشنط</a></li>
                        <li><a href="{{route('access-ar')}}">الاكسسوارات</a></li>
                        <li><a href="{{route('dress-ar')}}">فساتين سواريه</a></li>
                        <li><a href="{{route('boy-ar')}}">ملابس ولادى</a></li>
                        <li><a href="{{route('girl-ar')}}">ملابس بناتى</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
	
	
	