@extends('frontend.layouts.main')
@section('content')
    <div id="content" class="grid-container clearfix remove_padding">
        <section class="content">



            <div id="col-main" class="costumes grid-75 tablet-grid-70 remove_padding">


                <div class="remove_margin">


                    <div id="breadcrumb">
                        <a href="/" class="homepage-link" title="Back to the frontpage">Home</a>


                        <span class="separator">&raquo;</span>
                        <a href="#" title="">{{$category->name}}</a>
                        <span class="separator">&raquo;</span>


                    </div>

                    <div id="page-header">
                        <h1 id="page-title" class="remove_margin">{{$category->name}}</h1>
                    </div>

                    <section class="diagonal-divider clearfix">



                        <div class="container-nav clearfix">








                            {{--<div class="sort">--}}
                                {{--<span class="title">Sort by</span>--}}
                                {{--<select name="sortBox" id="sortBox" class="selectBox">--}}
                                    {{--<option value="a_z">Name: A to Z</option>--}}
                                    {{--<option value="z_a">Name: Z to A</option>--}}
                                    {{--<option value="l_h">Price: Low to High</option>--}}
                                    {{--<option value="h_l">Price: High to Low</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}



                            <div class="grid_list hide-on-mobile">
                                <ul>
                                    <li id="lgrid" class=" active">
                                        <a href="javascript:void(0);" id="gridview" class="tooltip-tipsy switcher" title="Grid"><span>Grid</span></a>
                                    </li>

                                    <li id="llist" class="">
                                        <a href="javascript:void(0);" id="listview" class="tooltip-tipsy switcher" title="List"><span>List</span></a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <ul id="collectionListing" class="grid remove_margin clearfix">
                            @foreach($products as $product)
                                <li class="collectionItem" data-alpha="Voluptatem Accus antium Doloremque" data-price="{{$product->special_price}}">
                                    <div class="prod-item thumbnail clearfix">

                                        <div class="list-left">
                                            <a href="/collections/costumes/products/voluptatem-accusantium-doloremque" class="product-link" title="{{$product->title}}">
                                                <img src="{{asset($product->image)}}" data-src="{{asset($product->image)}}" class="product-photo unveil" alt="{{$product->title}}" />
                                            </a>

                                            <span class="sale_banner">Sale</span>


                                            <div class="product-ajax-cart">
                                                <a href="#quick-shop-modal" class="quick-shop-fancybox quick_shop sale action_button">
                                                    Quick Shop
                                                    <div class="product-json" style="display:none!important;">{{json_encode($product)}}</div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="list-right">
                                            <div class="prod-information">
                                                <div class="prod-title"><a href="/collections/costumes/products/voluptatem-accusantium-doloremque">{{$product->title}}</a></div>
                                                <span class="prod-price sale">

            @if($product->original_price > $product->special_price)
                                                        <del> <span class='money'>Rs {{$product->original_price}}</span></del>


                                                        <span class='money'>Rs {{$product->special_price}}</span>
                @else
                                                        <span class='money'>Rs {{$product->original_price}}</span>
                @endif



      </span>
                                                <div class="prod-desc">
                                                    {{$product->short_description}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </li>
                            @endforeach





                        </ul>

{{$products->links('frontend.layouts.pagination')}}






                    </section>


                </div>

            </div> <!-- /#col-main -->


            <!-- Begin sidebar -->
            <div class="grid-25 tablet-grid-30 asider remove_padding">
                <div class="sidebar-line remove_margin">

                    <!-- Product Categories -->
                    <div class="border_bottom remove_margin">
                        <div class="title">Product Categories</div>
                        <div class="grid-container">
                            <ul class="widget_list">
@foreach($categories as $category)
                                    <li>
                                        <a href="/products/{{$category->id}}" title="{{$category->name}}">{{$category->name}}</a>
                                    </li>
    @endforeach




                            </ul>
                        </div>
                    </div>



@if($features)
                    <!-- Featured Product -->
                    <div class="border_bottom remove_margin">
                        <div class="title">Featured Products</div>
                        <div class="grid-container">

                            <ul class="fprod-grid">
@foreach($features as $product)
                                <li class="fprod_group">
                                    <div class="ftop clearfix">
                                        <div class="fleft">
                                            <a href="/product/{{$product->id}}" class="product-link" title="{{$product->title}}">
                                                <img src="{{asset($product->image)}}" class="product-photo" alt="{{$product->title}}" />
                                            </a>
                                        </div>
                                        <div class="fright">
                                            <div class="fprod-title"><a href="/product/{{$product->id}}">{{$product->title}}</a></div>
                                            <span class="fprod-price">



                <span class='money'>Rs {{$product->original_price}}</span>


              </span>
                                        </div>
                                    </div>



                                    <hr class="fhr" />

                                </li>

@endforeach
                            </ul>
                        </div>
                    </div>
@endif

                </div>
            </div>
            <!-- End sidebar -->




        </section>
    </div><!-- /.content -->
@endsection