<div class="grid-100 remove_padding">

    <div id="homepage_slider" class="flexslider">
        <ul class="slides">

            @foreach($data['banners'] as $banner)
                <li>

                    <a href="/collections/all">
                        <img src="{{$banner->banner_image}}" data-src="{{$banner->banner_image}}" class="unveil" alt="/collections/all" />
                    </a>

                </li>
            @endforeach









        </ul>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#homepage_slider').flexslider({
                controlNav: false,
                animation: "slide",
                slideshow: true,
                slideshowSpeed: 10*1000
            });
        });

        $(window).resize(function() {

            $('#homepage_slider').oneTime(500, function() {
                $('#homepage_slider').resize();

                $('#homepage_slider').stopTime();
            });
        });
    </script>

</div>