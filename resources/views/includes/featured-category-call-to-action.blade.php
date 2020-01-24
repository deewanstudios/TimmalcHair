<!-- Call To Action Section -->
{{-- @dump($category); --}}
<section class="offset-top-98 offset-md-top-66 offset-bottom-24 ">
    <div class="shell">
        <h1>Our Featured Categories </h1>
        <hr class="divider bg-mantis">
    </div>
</section>
<section class="context-dark offset-bottom-33">
    <div class="owl-carousel owl-carousel-default owl-carousel-arrows owl-carousel-arrows-fullwidth veil-xl-owl-dots veil-owl-nav reveal-xl-owl-nav"
        data-items="1" data-md-items="2" data-lg-items="4" data-nav="true" data-dots="true"
        data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
        @foreach ($category as $items)
        <div class="card-wrapper">
            <div class="range range-xs-center">
                <div class="cell-xs-8 cell-sm-6 cell-md-12">
                    <!-- Thumbnail Terry-->
                    <a href="{{ 'cakes/'.$items->path()}}">
                        <figure class="thumbnail-terry thumbnail-border-none">
                            <div class="featured-thumbnail">
                                <img class="img-responsive product-image-area" width="480" height="480"
                                    src="{{ asset('images/products/'.$items->image->imagePath())}}.jpg" alt="" />
                            </div>
                            <figcaption>
                                <div>
                                    <h4 class="thumbnail-terry-title">
                                        {{strtoupper($items->cake_category)}}
                                    </h4>
                                </div>
                                <p class="thumbnail-terry-desc offset-top-0"></p>
                                <a class="btn offset-top-10 offset-md-top-0 btn-danger"
                                    href="{{'cakes/'.$items->path()}}">Shop Now</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>