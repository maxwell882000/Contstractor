<section class="sponsors-style-one">
    <div class="auto-container">
        <!--Section Title-->
        <div class="sec-title-one">
            <h2>{{$partners->title}}</h2>
        </div>

        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel">
                @foreach($partners->sponsors as $sponsor)
                    <li class="slide-item">
                        <figure class="image-box"><a href="{{$sponsor->link}}"><img src="{{$sponsor->image_path}}"
                                                                                    alt=""></a></figure>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
