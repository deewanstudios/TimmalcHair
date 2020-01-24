<section>
    <div class="shell">
        {{-- <h1>Product Grids Type 1</h1>
    <hr class="divider bg-mantis"> --}}
        <div class="range range-xs-center">
            {{-- @dump($products) --}}
            @forelse ($products as $product)
            <div class="cell-xs-6 cell-sm-5 cell-md-3">
                <!-- Product-->
                <div class="product product-grid">
                    <!-- Product Image-->
                    <div class="product-image">
                        @foreach ($product->images as $image)
                        @if ($loop->first)
                        <a href="{{ $product->category->path().'/'.$product->productPath() }}">
                            <img class="img-responsive product-image-area"
                                src="{{asset('images/products/'.$image->imagePath())}}.jpg"" alt="" />
            </a>
          @endif
          @endforeach
            <!-- Product Thumnails-->
            <ul class=" product-thumbnails">
                            @foreach ($product->images as $image)
                            <li class="@if ($loop->first)
              active @endif">
                                <img class="../img-responsive"
                                    src="{{asset('images/products/'.$image->imagePath())}}.jpg"" alt="" />
              </li>
              @endforeach
            </ul>
          </div>
          <!-- Product Title-->
          <h5 class=" product-title offset-top-20">
                                <a href="
              {{$product->category->path().'/'.$product->productPath()}}
              ">
                                    {{ ucwords($product->name) }}
                                </a>
                                </h5>
                                <!-- Product Brand-->
                                <p class="product-brand text-italic text-dark">
                                    {{ Str::singular(ucwords($product->category->cake_category)) }}
                                </p>
                                <!-- Product price-->
                                <div class="product-price text-bold">
                                    <span class="product-price-new">
                                        {{"£". number_format($product->price->price,2)}}
                                    </span>
                                </div>
                                <div class="product-block-hover">
                                    <!-- Product Add To cart-->
                                    {{-- <a
                  class="btn btn-sm btn-danger btn-icon btn-icon-left product-btn offset-top-20" href="#"><span
                    class="icon mdi mdi-cart-outline"></span>Add to Cart</a> --}}
                                </div>
                    </div>
                </div>
                @empty
                <div class="cell-xs-6 cell-sm-5 cell-md-3">
                    <div class="product product-grid">
                        There are currently no products to display.
                    </div>
                </div>
                @endforelse
            </div>
        </div>
</section>