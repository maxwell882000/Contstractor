<!-- Main Header-->
<header class="main-header">

    <!-- Main Box -->
    <div class="main-box">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="/"><img src="{{$logos->logo_150_80}}" alt=""></a></div>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                @foreach($headers as $header)
                                    <li class=@if(Request::is($header->link))"current"@endif><a
                                            href="{{$header->link}}">{{$header->title}}</a>
                                @endforeach
                                <li class="dropdown"><a href="#">{{$chosen_lang}}</a>
                                    <ul>
                                        @foreach($languages as $language)
                                            <li>
                                                <a href={{route("language", $language->lang_id) }}>{{$language->name_of_language}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                </div><!--Nav Outer End-->

                <!-- Hidden Nav Toggler -->
                <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                </div><!-- / Hidden Nav Toggler -->

            </div>
        </div>
    </div>

</header>
<!--End Main Header -->


<!-- Hidden Navigation Bar -->
<section class="hidden-bar right-align">

    <div class="hidden-bar-closer">
        <button class="btn"><i class="fa fa-close"></i></button>
    </div>

    <!-- Hidden Bar Wrapper -->
    <div class="hidden-bar-wrapper">

        <!-- .logo -->
        <div class="logo text-center">
            <a href="index.blade.php"><img src="{{$logos->logo_220_80}}" alt=""></a>
        </div><!-- /.logo -->

        <!-- .Side-menu -->
        <div class="side-menu">
            <!-- .navigation -->
            <ul class="navigation">
                @foreach($headers as $header)
                    <li class=@if(Request::is($header->link))"current"@endif><a
                            href="{{$header->link}}">{{$header->title}} </a>
                        @endforeach

                    <li class="dropdown"><a href="#">{{$chosen_lang}}</a>

                        <ul>
                            @foreach($languages as $language)
                                <li>
                                    <a href={{route("language", $language->lang_id)}}>{{$language->name_of_language}}</a>
                                </li>
                            @endforeach
                        </ul>

                    </li>

            </ul>
        </div><!-- /.Side-menu -->

        <div class="social-icons">
            <ul>
                @foreach($social_links as $social_link)
                    <li><a href="{{$social_link->link}}"><i class="fa fa-{{$social_link->name_of_icon}}"></i></a></li>
                @endforeach
            </ul>
        </div>

    </div><!-- / Hidden Bar Wrapper -->
</section>
<!-- / Hidden Bar -->
