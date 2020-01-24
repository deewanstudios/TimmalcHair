<!-- Call To Action Section -->
<section class="offset-top-98 offset-md-top-66 offset-bottom-24 ">
  <div class="shell">
    <h3>Our Customers Favourites </h3>
    <hr class="divider bg-mantis">
  </div>
</section>
<section class="offset-bottom-33">
  <div
    class="owl-carousel owl-carousel-default owl-carousel-arrows owl-carousel-arrows-fullwidth veil-xl-owl-dots veil-owl-nav reveal-xl-owl-nav"
    data-items="1" data-md-items="2" data-lg-items="4" data-nav="true" data-dots="true"
    data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
    @foreach ($products as $product)
    <div class="">
      <div class="range range-xs-center">
        <div class="cell-xs-8 cell-sm-6 cell-md-12">
          <a href="{{ 'cakes/'.$product->category->path().'/'.$product->productPath() }}">
            @foreach ($product->images as $image)
            <figure class="thumbnail-border-none">
              @if ($loop->first)
              <div class="featured-thumbnail">
                <img class="img-responsive product-image-area"
                  src="{{ asset('images/products/'.$image->imagePath())}}.jpg" />
              </div>
              @endif
              @endforeach
              <figcaption class="offset-top-24">
                <div>
                  <h4 class="thumbnail-title">
                    {{ strtoupper($product->name) }}
                  </h4>
                </div>
                <p class="offset-top">
                  {{$product->description->product_description }}
                </p>
                <div class="product-price text-bold">
                  {{'From '.'£'. number_format($product->price->price,2)}}
                </div>
                <a class="btn offset-top-10 offset-md-top-0 btn-primary"
                  href="{{ 'cakes/'.$product->category->path().'/'.$product->productPath() }}">View Product</a>
              </figcaption>
            </figure>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>