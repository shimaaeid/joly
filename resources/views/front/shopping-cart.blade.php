@extends('layouts.header')
@include('layouts.nav')
@extends('layouts.app2')
@section('title',' السله')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="public/front/img/th.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>جولي مارك</h2>
                        <div class="breadcrumb__option">
                        <span>عربة التسوق</span>
                            <a href="{{route('index-ar')}}">القائمه الرئيسيه </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">منتج</th>
                                    <th>السعر</th>
                                    <th>الكميه</th>
                                    <th>إجمالي المبلغ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="public/front/img/bag/7.jpg" alt="">
                                        <h5>جزمه</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    ٥٠ريال 
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    ١٠٠ريال 
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="public/front/img/bag/6.jpg" alt="">
                                        <h5>كوتشي</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    ٣٠ريال 
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    ٣٠ريال
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="public/front/img/bag/14.jpg" alt="">
                                        <h5>شنطه</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    ٧٠ريال 
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    ٧٠ريال
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">متابعه الشراء</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                        تحديث السلة</a>
                    </div>
                </div>
             
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <!-- <h5>المجموع:</h5> -->
                        <ul>
                            <!-- <li>Subtotal <span>$454.98</span></li> -->
                            <li>المجموع <span>SR 597</span></li>
                        </ul>
                        <a href="{{route('checkout')}}" class="primary-btn">تاكيد الطلب والدفع </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>كود الخصم</h5>
                            <form action="#">
                                <input type="text" placeholder="ادخل كود الخصم الخاص بك هنا">
                                <button type="submit" class="site-btn">تطبيق</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@include('layouts.footerlink')
@include('layouts.footer')
@endsection