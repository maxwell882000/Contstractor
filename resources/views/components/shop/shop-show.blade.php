<!--Shop Section-->
<section class="gallery-section">
    <div class="auto-container">


        <div class="mixitup-gallery">
            <div class="filters text-center">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All</li>
                    @foreach($titles as $category)
                        <li class="filter" data-role="button"
                            data-filter=".{{$category->title}}">{{$category->title}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="filter-list row clearfix">

            @foreach($images as $image)
                <!--Default Food Item-->
                    <div
                        class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all @foreach($image->categories as $category) {{$category->title}} @endforeach">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a class="lightbox-image option-btn"
                                                         data-fancybox-group="example-gallery"
                                                         href="{{$image->image_path}}" title="Image Title Here"><img
                                            src="{{$image->image_path}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="shop.html">{{$image->name}}</a></h3>
                                    <div class="price">{{$image->price}} {{$image->currency}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Styled Pagination -->
        @include("helper.pagination",["paginate"=>$paginate])
    </div>
</section>
