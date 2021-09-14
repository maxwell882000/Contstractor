<section class="call-to-action-one">

    <!--Floted Image Left-->
    <figure class="floated-image-left wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
            src={{$calls->image_path_left}} alt=""></figure>

    <!--Floted Image Right-->
    <figure class="floated-image-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img
            src={{$calls->image_path_right}} alt=""></figure>

    <div class="auto-container">
        <div class="content-box">
            <div class="sub-title">{{$calls->title}}</div>
            <div class="phone-number">{{$calls->number}}</div>
            <div class="text">
                {{$calls->body}}
            </div>
        </div>
    </div>
</section>
