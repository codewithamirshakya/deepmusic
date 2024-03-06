<div class="navigation grid-60 pull-20 tablet-grid-33 tablet-pull-33 omega alpha">

    <nav id="top-menu" class="hide-on-mobile hide-on-tablet">
        <ul>

            <li class="first current">



                <a href="/">Home</a>


            </li>

            <li class="">


                <div class="has-dropdown">
                    <a href="#" class="clearfix">
                        <span class="nav-label">Shop</span>
                        <span class="nav-arrows"></span>
                    </a>

                    <ul>
                        @foreach($categories as $category)
                            <li>


                                <a href="/products/{{$category->id}}">{{$category->name}}</a>

                            </li>
                        @endforeach





                    </ul>
                </div>

            </li>



            <li class="last">



                <a href="/contact-us">Contact Us</a>


            </li>

        </ul>
        <div class="clearfix" style="height: 0;"></div>
    </nav>

    <nav id="nav-mobile" class="hide-on-desktop hide-on-mobile">
        <button type="button" class="toggleMenu">
            <div class="group-bar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <span class="text-bar">Menu</span>
        </button>
    </nav>

</div>

<nav id="nav-mobiles" class="hide-on-desktop">
    <script>

        var ww = document.body.clientWidth;

        $(document).ready(function() {

            $(".toggleMenu").click(function(e) {
                e.preventDefault();
                $(this).toggleClass("active");
                $(".nav-mobile").slideToggle('slow');
            });
            adjustMenu();
        })

        $(window).bind('resize orientationchange', function() {
            ww = document.body.clientWidth;
            adjustMenu();
        });

        var adjustMenu = function() {
            if(getWidthBrowser() < 1024 || isMobile.any()){
                $(".toggleMenu").css("display", "inline-block");
                if (!$(".toggleMenu").hasClass("active")) {
                    $(".nav-mobile").hide();
                } else {
                    $(".nav-mobile").show();
                }
                $(".nav-mobile li").unbind('mouseenter mouseleave');
                $(".nav-mobile li a.parent .nav-arrow").unbind('click').bind('click', function(e) {
                    // must be attached to anchor element to prevent bubbling
                    e.preventDefault();

                    var $parent = $(this).parent();

                    if($parent.hasClass('toggle')){
                        $parent.removeClass('toggle');
                    }else{
                        $parent.addClass('toggle');
                    }

                    $parent.next().toggle('slow');
                });
            }
        }

    </script>
    <button type="button" class="toggleMenu hide-on-tablet">
        <div class="group-bar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <span class="text-bar">Menu</span>
    </button>
    <ul class="nav-mobile" style="display:none;">

        <li class="first">


            <a href="/">Home</a>

        </li>

        <li class="">


            <a href="/collections" class="parent clearfix">
                <span class="nav-label">Shop</span>
                <span class="nav-arrow"><span></span></span>
            </a>
            <ul style="display:none;">

                @foreach($categories as $category)
                    <li>


                        <a href="/products/{{$category->id}}">{{$category->name}}</a>

                    </li>
                @endforeach

            </ul>

        </li>



        <li class="last">


            <a href="/contact-us">Contact Us</a>

        </li>

    </ul>
</nav>