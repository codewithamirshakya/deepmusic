<!-- Header -->
<header id="top" class="clearfix">

    <div id="header">

        <div class="grid-container omega alpha">
            <div class="grid-20 tablet-grid-33  mobile-grid-100">
                <a href="/" title="Instrucment Store - Harmony Shopify Theme">

                    <img width="100px" src="/images/logo_deep_music-1.jpg?6246773122108375599" alt="Instrucment Store - Harmony Shopify Theme" />

                </a>
            </div>
            <div class="grid-80 tablet-grid-33  mobile-grid-100">
                <a href="/" title="Instrucment Store - Harmony Shopify Theme">

                    <img  src="/images/jrtitle.jpg" alt="Instrucment Store - Harmony Shopify Theme" />

                </a>
            </div>

        </div>

        <div class="grid-container add_border_nav omega alpha">
            <div class="grid-20 tablet-grid-33  mobile-grid-100">

                <form id="header-search" action="/search" method="get">

                    <span class="icon_search "></span>
                    <input type="submit" id="top-search-submit" class="search-submit ir" title="Search" value="Search" />

                    <input type="text" x-webkit-speech id="top-search-input" name="q" class="search-input remove_border" value="" accesskey="4"  autocomplete="off" placeholder="Search" />
                </form>

            </div>

            <div class="grid-20 push-60 tablet-grid-33 tablet-push-33 mobile-grid-100 omega alpha">

                <div id="umbrella">
                    <div class="cart-link">

                    </div>

                    <div id="cart-info" style="clear:both; display:none;"></div>

                </div><!-- /#umbrella -->

            </div>

            @include('frontend.layouts.navigation')

        </div>
    </div>



    <div class="grid-container omega alpha">



        @if(isset($data))
@include('frontend.layouts.banner')
        @endif




    </div>


</header>