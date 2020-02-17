{{-- @dump($textures) --}}
<p id="p">selectedIndex: 0</p>
<section>
  <div class="shell">
    {{-- <h1>Product Grids Type 1</h1>
    <hr class="divider bg-mantis"> --}}
    <div class="range range-xs-center">
      @forelse ($products as $product)
      <div class="cell-xs-6 cell-sm-5 cell-md-3">
        <!-- Product-->
        <div class="product product-grid">
          <!-- Product Image-->
          {{-- <div class="product-image">
            @foreach ($product->images as $image)
            @if ($loop->first)
            <a href="{{ 'cakes/'.$product->category->path().'/'.$product->productPath() }}">
          <img class="img-responsive product-image-area"
            src="{{asset('images/products/'.$image->imagePath())}}.jpg"" alt="" />
            </a>
          @endif
          @endforeach --}}
            <!-- Product Thumnails-->
            {{-- <ul class=" product-thumbnails">
              @foreach ($product->images as $image)
              <li class="@if ($loop->first)
              active @endif">
                <img class="../img-responsive" src="{{asset('images/products/'.$image->imagePath())}}.jpg"" alt="" />
              </li>
              @endforeach
            </ul>
          </div> --}}
          <!-- Product Title-->
          <h5 class=" product-title offset-top-20">
          <a href="
              {{$product->category->path().'/'.$product->texture->texturePath()}}
              ">
            {{-- .'/'.$product->texture->texture --}}
            {{-- '/'.$product->productPath() --}}
            {{ ucwords($product->category->category) }}
            <span class="product-texture">
              {{ ucwords($product->texture->texture) }}
            </span>
            <span>{{'weave'}}</span>
          </a>
          </h5>
          <!-- Product Brand-->
          <p class="product-brand text-italic text-dark">
            {{ Str::singular(ucwords($product->category->category)) }}
          </p>

          <label>Select Wig Texture</label>
          <div class="cell-sm-7 cell-md-4">
            <div class="form-group">
              <select id="textures" name="textures" class="form-control select-filter textures"
                data-placeholder="Select an option">
                <!-- data-minimum-results-for-search="Infinity" -->
                @foreach ($textures as $texture)
                <option @if ($loop->first)
                  selected
                  {{-- @dump($loop->index) --}}
                  @endif>
                  {{$texture->texture}}
                </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="cell-sm-7 cell-md-4">
            <div class="form-group">
              <label>Select Colour</label>
              <select name="colours" class="form-control select-filter" data-placeholder="Select an option">
                <!-- data-minimum-results-for-search="Infinity" -->
                @foreach ($colours as $colour)
                <option>{{$colour->colour}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="cell-sm-7 cell-md-4">
            <div class="form-group">
              <label>Select Length</label>
              <select name="lengths" class="form-control select-filter lengths" data-placeholder="Select an option">
                <!-- data-minimum-results-for-search="Infinity" -->
                @foreach ($lengths as $lenght)
                <option>
                  {{$lenght->length}}
                </option>
                @endforeach
              </select>
            </div>
          </div>

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