@extends('frontend.layouts.main')
@section('content')
    <div id="content" class="grid-container clearfix remove_padding">
        <section class="content">


            <div id="col-main">


                <div class="grid-container remove_padding">
                    <div class="wrap_banner">

                        <div class="grid-35 tablet-grid-35 remove_padding">

                            <a href="/collections/all" title=""><img src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/fp-item-1.jpg?6246773122108375599" alt="" /></a>

                        </div>



                        <div class="grid-35 tablet-grid-35 remove_padding">

                            <a href="/collections/all" title=""><img src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/fp-item-2.jpg?6246773122108375599" alt="" /></a>

                        </div>



                        <div class="grid-30 tablet-grid-30 remove_padding">

                            <a href="/collections/all" title=""><img src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/fp-item-3.jpg?6246773122108375599" alt="" /></a>

                        </div>

                    </div>
                </div>





                <script type="text/javascript">
                    jQuery(document).ready(function($){

                        //  When user clicks on tab, this code will be executed
                        $(".head_tabs").click(function() {

                            if(!$(this).parent().hasClass('active')) {
                                //  First remove class "active" from currently active tab
                                $(".head_tabs").parent().removeClass("active");

                                //  Here we get the data-src(parent) value of the selected tab
                                var $src_tab = $(this).attr("data-src");

                                //  Now add class "active" to the selected/clicked tab
                                $($src_tab).parent().addClass("active");

                                //  Hide all tab content
                                $(".content_tabs").hide();

                                //  Here we get the href value of the selected tab
                                var $selected_tab = $(this).attr("href");

                                //  Show the selected tab content
                                if(isMobile.any())
                                    $($selected_tab).show();
                                else
                                    $($selected_tab).fadeIn();

                                // Scroll to content
                                $('html, body').animate({
                                    scrollTop: $($selected_tab).offset().top - 47
                                }, 300);

                                //  Here we get the href value of the selected tab
                                var $selected_carousel = $(this).attr("data-crs");



                                execWidthLess1024();

                            }

                            //  At the end, we add return false so that the click on the link is not executed
                            return false;
                        });


                    });
                </script>
                <div class="grid-container remove_padding">


                    <div id="tabs_container" class="hide-on-mobile">
                        <ul id="tabs">
                            <li class="active"><a class="head_tab1 head_tabs" href="#content_tab1" data-src=".head_tab1" data-crs="#carousel_tab1">Featured</a></li>
                            <li><a class="head_tab3 head_tabs remove_border" href="#content_tab3" data-src=".head_tab3" data-crs="#carousel_tab3">New promotion</a></li>
                        </ul>
                    </div>


                    <div id="tabs_content_container">



                        <h3 class="active hide-on-desktop hide-on-tablet"><a class="head_tab1 head_tabs" href="#content_tab1" data-src=".head_tab1" data-crs="#carousel_tab1">Featured</a></h3>
                        <div id="content_tab1" class="content_tabs list_carousel responsive">
                            <ul id="carousel_tab1" data-prev="#prev_tab1" data-next="#next_tab1" class="grid remove_margin clearfix">

                            @foreach($data['features'] as $product)
                                    <li>
                                        <div class="product-item thumbnail pretty_hover">

                                            <div class="list-left">
                                                <a href="/product/{{$product->id}}" class="product-link" title="{{$product->title}}">
                                                    <img src="{{$product->image}}" data-src="{{$product->image}}" class="product-photo unveil" alt="{{$product->title}}" />
                                                </a>

@if($feature->original_price > $feature->special_price) <span class="sale_banner">Sale</span> @endif
                                                <div class="product-ajax-cart">
                                                    <a href="#quick-shop-modal" class="quick-shop-fancybox quick_shop  action_button">
                                                        Quick Shop
                                                        <div class="product-json" style="display: none;">{{json_encode($product)}}</div>

                                                    </a>
                                                </div>
                                            </div>

                                            <div class="list-right pretty_caption">
                                                <div class="product-information">
                                                    <div class="product-title"><a href="/product/{{$product->id}}">{{$product->title}}</a></div>
                                                    <span class="product-price">



          	<del> <span class='money'>Rs {{$product->original_price}}</span></del>


          	<span class='money'>Rs {{$product->special_price}}</span>


      </span>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                @endforeach



                            </ul>
                            <div class="clearfix"></div>


                        </div>



                        <h3 class=" hide-on-desktop hide-on-tablet"><a class="head_tab3 head_tabs" href="#content_tab3" data-src=".head_tab3" data-crs="#carousel_tab3">New promotion</a></h3>
                        <div id="content_tab3" class="content_tabs list_carousel responsive" style="display: none;">
                            <ul id="carousel_tab3" data-prev="#prev_tab3" data-next="#next_tab3" class="grid remove_margin clearfix">


                                @foreach($data['promotions'] as $product)
                                    <li>
                                        <div class="product-item thumbnail pretty_hover">

                                            <div class="list-left">
                                                <a href="/product/{{$product->id}}" class="product-link" title="{{$product->title}}">
                                                    <img src="{{$product->image}}" data-src="{{$product->image}}" class="product-photo unveil" alt="{{$product->title}}" />
                                                </a>

                                                @if($product->original_price > $product->special_price) <span class="sale_banner">Sale</span> @endif
                                                <div class="product-ajax-cart">
                                                    <a href="#quick-shop-modal" class="quick-shop-fancybox quick_shop  action_button">
                                                        Quick Shop
                                                        <div class="product-json" style="display: none;">{{json_encode($product)}}</div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="list-right pretty_caption">
                                                <div class="product-information">
                                                    <div class="product-title"><a href="/product/{{$product->id}}">{{$product->title}}</a></div>
                                                    <span class="product-price">



          	@if($product->original_price > $product->special_price)
                                                            <del> <span class='money'>Rs {{$product->original_price}}</span></del>


                                                            <span class='money'>Rs {{$product->special_price}}</span>
                                                        @else
                                                            <span class='money'>Rs {{$product->original_price}}</span>
                                                        @endif


      </span>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                @endforeach



                            </ul>
                            <div class="clearfix"></div>


                        </div>
                    </div>
                </div>







                <section class="slider-home">
                    <div class="bt-outer">
                        <h3 class="bt-title">Special offers</h3>
                        <a id="prev-bt-slider" class="prev1" href="#">&lt;</a>
                        <a id="next-bt-slider" class="next1" href="#">&gt;</a>
                    </div>
                    <div class="list_carousel responsive wrap_list_carousel1">
                        <ul id="bt-slider">

                            <li>

                                <a href="/collections/all">
                                    <img src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/blank.gif?6246773122108375599" data-src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/image-item-1.jpg?6246773122108375599" class="unveil" alt="" />
                                </a>

                            </li>



                            <li>

                                <a href="/collections/all">
                                    <img src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/blank.gif?6246773122108375599" data-src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/image-item-2.jpg?6246773122108375599" class="unveil" alt="" />
                                </a>

                            </li>



                            <li>

                                <a href="/collections/all">
                                    <img src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/blank.gif?6246773122108375599" data-src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/image-item-3.jpg?6246773122108375599" class="unveil" alt="" />
                                </a>

                            </li>



                            <li>

                                <a href="/collections/all">
                                    <img src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/blank.gif?6246773122108375599" data-src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/image-item-4.jpg?6246773122108375599" class="unveil" alt="" />
                                </a>

                            </li>



                            <li>

                                <a href="/collections/all">
                                    <img src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/blank.gif?6246773122108375599" data-src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/image-item-5.jpg?6246773122108375599" class="unveil" alt="" />
                                </a>

                            </li>



                            <li>

                                <a href="/collections/all">
                                    <img src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/blank.gif?6246773122108375599" data-src="//cdn.shopify.com/s/files/1/0240/2553/t/2/assets/image-item-6.jpg?6246773122108375599" class="unveil" alt="" />
                                </a>

                            </li>









                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            $("#bt-slider").carouFredSel({
                                responsive: true,
                                //mousewheel: true,
                                width: '100%',
                                prev: '#prev-bt-slider',
                                next: '#next-bt-slider',
                                auto: false,
                                swipe: {
                                    onMouse: true,
                                    onTouch: true
                                },
                                items: {
                                    width: 320,
                                    height: 240,	//	optionally resize item-height
                                    visible: {
                                        min: 1,
                                        max: 4
                                    }
                                }
                            });
                        });
                    </script>
                </section>


            </div><!-- /#col-main -->



        </section>
    </div><!-- /.content -->
@endsection