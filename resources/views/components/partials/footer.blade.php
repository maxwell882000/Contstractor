<!--Main Footer / Footer Style One-->
<footer class="main-footer footer-style-one">

    <!--Footer Upper-->
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Footer Column-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                    <div class="footer-widget about-widget">
                        <figure class="footer-logo"><a href="index.blade.php"><img src="{{$logo->logo_220_80}}"
                                                                                   alt=""></a>
                        </figure>

                        <div class="text">
                            @php
                                echo $footer->text_desc_footer;
                            @endphp
                        </div>

                    </div>
                </div>

                <!--Footer Column-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                    <div class="footer-widget info-widget">
                        <h2>{{$footer->keep_in_touch}}</h2>
                        <ul class="info">
                            @foreach($footer->information_model as $info)
                                <li>{{$info->title}} : {{$info->data}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>


                <!--Footer Column-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                    <div class="footer-widget gallery-widget">
                        <h2>Instagram Feed</h2>
                        <div class="clearfix">
                            @foreach($footer->instagram_images as $image)
                                <figure class="image"><a href="{{$image->image_preview_path}}" class="lightbox-image"
                                                         data-fancybox-group="fancybox" title="Caption Here"><img
                                            src="{{$image->image_path}}" alt=""></a></figure>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!--Footer Column-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column padd-left-60">
                    <div class="footer-widget links-widget">
                        <h2>Featured links</h2>
                        <div class="row clearfix">
                            @foreach($footer->actual_links as $link)
                                @if($loop->index % 3 == 0)
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            @endif
                                            <li><a href="{{$link->link}}">{{$link->name}}</a></li>
                                            @if(($loop->index + 1)% 3 == 0 || $loop->index == count($footer->actual_links) - 1)
                                        </ul>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <br>
                        <div class="social-links">
                            <h3>{{$footer->follows_us}}</h3>
                            <div class="links">
                                @foreach($footer->social_links as $social_link)
                                    <a href="{{$social_link->link}}"><span
                                            class="fa fa-{{$social_link->name_of_icon}}"></span></a>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">

            <!--Copyright-->
            <div class="copyright">{{$copy_rights}}</div>

        </div>
    </div>

</footer>
