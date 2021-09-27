@if(!$comments->isEmpty())
    <section class="testimonial-section">
        <div class="oval-cut"></div>

        <div class="auto-container">
            <div class="carousel-outer">
                <div class="icon-box"><span class="flaticon-blocks-with-angled-cuts"></span></div>

                <div class="@if(count($comments) > 1) single-item-carousel @endif">

                    @foreach($comments as $comment)
                        <div class="slide-item">
                            <div class="text-content">
                                {{$comment->comment}}
                            </div>
                            <div class="quote-info">
                                <figure class="author-thumb img-circle"><img class="img-circle"
                                                                             src="{{$comment->avatar_path}}"
                                                                             alt=""></figure>
                                <h4>{{$comment->name}}</h4>
                                <div class="designation">{{$comment->profession}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
