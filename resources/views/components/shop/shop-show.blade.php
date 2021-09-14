<!--Shop Section-->
<section class="gallery-section">
    <div class="auto-container">

        <!--Sort By-->
        <div class="items-sorting">
            <div class="row clearfix">
                <div class="results-column col-md-9 col-sm-12 col-xs-12">
                    <div class="text">Showing 1 - 12 of 30 Result</div>
                </div>
                <div class="select-column col-md-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <select name="sort-by">
                            <option>Default Sorting</option>
                            <option>Ascending Order</option>
                            <option>Descending Order</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

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
                                                         href="images/gallery/1.jpg" title="Image Title Here"><img
                                            src="images/gallery/1.jpg" alt=""></a></figure>
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
        @include("helper.pagination")
    </div>
</section>
