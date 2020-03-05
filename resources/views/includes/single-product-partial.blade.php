<div class="shell">
    @foreach ($product as $product)
    <div class="product product-single">
        <div class="range">
            <div class="cell-sm-8 cell-md-6">
                <div class="product-image">
                    @foreach ($product->images as $product_image)
                    {{-- @if ($loop->first) --}}
                    {{-- <div> --}}
                    <img class="img-responsive product-image-area"
                        src="{{asset('images/products/'.$product_image->imagePath())}}.jpg" alt="" />
                    {{-- </div> --}}
                    {{-- @endif --}}
                    @endforeach
                    {{-- <ul class="product-thumbnails">
                        @foreach ($product->images as $product_image)
                        @if (count($product->images) > 1 )
                        <li class="@if ($loop->first)
                            active @endif"
                            data-large-image="{{asset('images/products/'.$product_image->imagePath())}}.jpg">
                    <img class="img-responsive" src="{{asset('images/products/'.$product_image->imagePath())}}.jpg"
                        alt="" width="84" height="84"></li>
                    @endif
                    @endforeach
                    </ul> --}}
                </div>
            </div>
            <div class="cell-sm-12 cell-md-6 text-left offset-top-41 offset-md-top-0">
                <p class="product-brand text-italic text-dark">
                    {{Str::singular(ucwords($product->category->category))}}
                </p>
                <!-- Product Title-->
                <h1 class="product-title offset-top-0"><a href="shop-single-product-no-sidebar.html">

                        {{ucwords($product->category->category ." ")}}
                        <span class="product-texture">
                            {{ucwords($product->texture->texture)}}
                        </span>
                        <span>{{ucwords('weave')}}</span>

                    </a>
                </h1>
                <div class="cell-sm-7 cell-md-4">
                    <div class="form-group">
                        <label>Select Wig Texture</label>
                        <select id="textures" name="textures" class="form-control select-filter textures"
                            data-placeholder="Select an option">
                            <!-- data-minimum-results-for-search="Infinity" -->
                            @foreach ($textures as $texture)
                            <option @if ($loop->first)
                                selected
                                @endif>
                                {{ucwords($texture->texture)}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="cell-sm-7 cell-md-4">
                    <div class="form-group">
                        <label>Select Length</label>
                        <select name="lengths" class="form-control select-filter lengths"
                            data-placeholder="Select an option">
                            <!-- data-minimum-results-for-search="Infinity" -->
                            @foreach ($lengths as $length)
                            <option value="{{$length->id}}">
                                {{$length->length . " inches"}}
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

                <!-- Product price-->
                <div class="product-price text-bold h1 offset-top-34">
                    <span id="currency" class="product-price-new">
                        {{'£'}}
                    </span>
                    <span id="price" class="product-price-new">
                        {{$product->price->price}}
                    </span>
                    {{-- <span class="product-price-old text-dark small">
                        {{'£'.$product->price->price}}
                    </span> --}}
                </div>
                <div class="offset-top-34">
                    <div class="form-group product-number">
                        <label class="text-dark">Quantity:</label>
                        <input class="form-control input-sm form-control-impressed" type="number" data-zeros="true"
                            value="1" min="1" max="20">
                    </div>

                    <!-- Product Add To cart-->
                    <div>
                        <a class="btn btn-sm btn-primary btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0"
                            href="shop-cart.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="offset-top-66">
            <!-- Responsive-tabs-->
            <div class="responsive-tabs responsive-tabs-boxed" data-type="vertical">
                <ul class="resp-tabs-list text-center tabs-group-default" data-group="tabs-group-default">
                    <li>Additional Information</li>
                    <li>Video Review</li>
                    <li>Customer Reviews</li>
                    <li>Comments</li>
                </ul>
                <div class="resp-tabs-container text-left tabs-group-default" data-group="tabs-group-default">
                    <div>Fashion has always been so temporary and uncertain. You canâ€™t keep up with it. This social
                        phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the
                        latest fashion tendencies.</div>
                    <div>
                        <!-- Media Elements-->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="//www.youtube.com/embed/NN6zt1sF73w?wmode=transparent"></iframe>
                        </div>
                    </div>
                    <div>
                        <h5 class="text-uppercase">4 Customer Reviews</h5>
                        <!-- CUSTOMER REVIEWS-->
                        <ul class="list-unstyled list-reviews offset-sm-top-30">
                            <li>
                                <ul class="list-inline list-xs-inline">
                                    <li><span class="text-bold text-uppercase big">John Doe</span></li>
                                    <li class="star-raiting"><span class="big"><span class="big"><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi mdi-star-half text-warning"></span><span
                                                    class="mdi mdi mdi-star-outline text-warning"></span></span></span>
                                    </li>
                                </ul>
                                <p class="offset-top-10">Eius munere cum no. Alia ridens corpora ea his. Sed etiam
                                    ignota eu. Vidisse legendos pro ad, numquam voluptatibus per ut, his quot prompta
                                    ad. Ius malis movet ea. Altera dissentiunt ut pro, mundi ignota ad sed.</p>
                            </li>
                            <li class="offset-top-30">
                                <ul class="list-inline list-xs-inline">
                                    <li><span class="text-bold text-uppercase big">Alex Ross</span></li>
                                    <li class="star-raiting"><span class="big"><span class="big"><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi-star text-warning"></span></span></span></li>
                                </ul>
                                <p class="offset-top-10">Qui an veri illum incorrupte. Cu has assum laboramus gloriatur,
                                    mea ea meis ferri definitionem, quod percipit evertitur ad qui. Altera omittam
                                    moderatius id vis, at vix quod bonorum dolorum. Ei pro graecis reformidans, nisl
                                    percipitur ullamcorper vis eu.</p>
                            </li>
                            <li class="offset-top-30">
                                <ul class="list-inline list-xs-inline">
                                    <li><span class="text-bold text-uppercase big">Diana Roe</span></li>
                                    <li class="star-raiting"><span class="big"><span class="big"><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi mdi-star-outline text-warning"></span><span
                                                    class="mdi mdi mdi-star-outline text-warning"></span></span></span>
                                    </li>
                                </ul>
                                <p class="offset-top-10">Eius munere cum no. Alia ridens corpora ea his. Sed etiam
                                    ignota eu. Vidisse legendos pro ad, numquam voluptatibus per ut, his quot prompta
                                    ad. Ius malis movet ea. Altera dissentiunt ut pro, mundi ignota ad sed.</p>
                            </li>
                            <li class="offset-top-30">
                                <ul class="list-inline list-xs-inline">
                                    <li><span class="text-bold text-uppercase big">Sara Cole</span></li>
                                    <li class="star-raiting"><span class="big"><span class="big"><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi mdi-star text-warning"></span><span
                                                    class="mdi mdi mdi-star-half text-warning"></span></span></span>
                                    </li>
                                </ul>
                                <p class="offset-top-10">No sit case indoctum, ad dicta singulis deterruisset vel. Mea
                                    ne nusquam corpora percipit, at ponderum rationibus sea, ubique invenire adolescens
                                    pri cu. Est maiorum omittantur ei. Et pro nisl insolens tincidunt, nam equidem
                                    maiorum tincidunt eu, magna tibique id vim</p>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-uppercase">Comments</h5>
                        <!-- CUSTOMER REVIEWS-->
                        <ul class="list-unstyled list-reviews offset-sm-top-30">
                            <li>
                                <div>
                                    <p class="text-bold text-uppercase big">John Doe</p>
                                </div>
                                <p class="offset-top-10">Eius munere cum no. Alia ridens corpora ea his. Sed etiam
                                    ignota eu. Vidisse legendos pro ad, numquam voluptatibus per ut, his quot prompta
                                    ad. Ius malis movet ea. Altera dissentiunt ut pro, mundi ignota ad sed.</p>
                            </li>
                            <li class="offset-top-30">
                                <div>
                                    <p class="text-bold text-uppercase big">Alex Ross</p>
                                </div>
                                <p class="offset-top-10">Qui an veri illum incorrupte. Cu has assum laboramus gloriatur,
                                    mea ea meis ferri definitionem, quod percipit evertitur ad qui. Altera omittam
                                    moderatius id vis, at vix quod bonorum dolorum. Ei pro graecis reformidans, nisl
                                    percipitur ullamcorper vis eu.</p>
                            </li>
                        </ul>
                        <h6 class="offset-top-41 text-uppercase">Leave a comment</h6>
                        <div class="form-group">
                            <label class="form-label form-label-outside" for="comment-message">Message:</label>
                            <textarea class="form-control" id="comment-message" data-constraints="@Required"
                                style="height: 170px;"></textarea>
                        </div>
                        <div class="group-sm text-left offset-top-30">
                            <button class="btn btn-sm btn-primary" type="submit">comment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    {{-- <div class="offset-top-66">
        <h4 class="text-spacing-120 text-left text-uppercase text-bold">
            Related Products</h4>
        <hr class="bg-gray">
        <div class="range">
            <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-xs-top-0">
                <!-- Product-->
                <div class="product product-grid">
                    <!-- Product Image-->
                    <div class="product-image"><img class="img-responsive product-image-area"
                            src="images/shop/product-02-270x360.png" alt="" width="270" height="360">
                        <!-- Product Thumnails-->
                        <ul class="product-thumbnails">
                            <li class="active"><img class="img-responsive" src="images/shop/product-02-270x360.png"
                                    alt="" width="270" height="360"></li>
                            <li><img class="img-responsive" src="images/shop/product-02-270x360-2.png" alt=""
                                    width="270" height="360"></li>
                            <li><img class="img-responsive" src="images/shop/product-02-270x360-3.png" alt=""
                                    width="270" height="360"></li>
                        </ul>
                        <!-- Product Label--><span
                            class="product-label label-custom label-lg-custom label-rounded-custom label-info">New</span>
                    </div>
                    <!-- Product Title-->
                    <h5 class="product-title offset-top-20"><a href="shop-single-product-no-sidebar.html">Ruched Bandage
                            Miniskirt</a></h5>
                    <!-- Product Brand-->
                    <p class="product-brand text-italic text-dark">Step Brand</p>
                    <!-- Product price-->
                    <div class="product-price text-bold"><span>$59.00</span>
                    </div>
                    <div class="product-block-hover">
                        <!-- Product Add To cart--><a
                            class="btn btn-sm btn-danger btn-icon btn-icon-left product-btn offset-top-20"
                            href="shop-single-product-no-sidebar.html"><span
                                class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-xs-top-0">
                <!-- Product-->
                <div class="product product-grid">
                    <!-- Product Image-->
                    <div class="product-image"><img class="img-responsive product-image-area"
                            src="images/shop/product-03-270x360.png" alt="" width="270" height="360">
                        <!-- Product Thumnails-->
                        <ul class="product-thumbnails">
                            <li class="active"><img class="img-responsive" src="images/shop/product-03-270x360.png"
                                    alt="" width="270" height="360"></li>
                            <li><img class="img-responsive" src="images/shop/product-03-270x360-2.png" alt=""
                                    width="270" height="360"></li>
                            <li><img class="img-responsive" src="images/shop/product-03-270x360-3.png" alt=""
                                    width="270" height="360"></li>
                        </ul>
                        <!-- Product Label-->
                    </div>
                    <!-- Product Title-->
                    <h5 class="product-title offset-top-20"><a href="shop-single-product-no-sidebar.html">Knit Cami
                            Top</a></h5>
                    <!-- Product Brand-->
                    <p class="product-brand text-italic text-dark">Amo Brand</p>
                    <!-- Product price-->
                    <div class="product-price text-bold"><span>$48.00</span>
                    </div>
                    <div class="product-block-hover">
                        <!-- Product Add To cart--><a
                            class="btn btn-sm btn-danger btn-icon btn-icon-left product-btn offset-top-20"
                            href="shop-single-product-no-sidebar.html"><span
                                class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-sm-top-0">
                <!-- Product-->
                <div class="product product-grid">
                    <!-- Product Image-->
                    <div class="product-image"><img class="img-responsive product-image-area"
                            src="images/shop/product-04-270x360.png" alt="" width="270" height="360">
                        <!-- Product Thumnails-->
                        <ul class="product-thumbnails">
                            <li class="active"><img class="img-responsive" src="images/shop/product-04-270x360.png"
                                    alt="" width="270" height="360"></li>
                            <li><img class="img-responsive" src="images/shop/product-04-270x360-2.png" alt=""
                                    width="270" height="360"></li>
                            <li><img class="img-responsive" src="images/shop/product-04-270x360-3.png" alt=""
                                    width="270" height="360"></li>
                        </ul>
                        <!-- Product Label-->
                    </div>
                    <!-- Product Title-->
                    <h5 class="product-title offset-top-20"><a href="shop-single-product-no-sidebar.html">Contrast Back
                            Zip</a></h5>
                    <!-- Product Brand-->
                    <p class="product-brand text-italic text-dark">Polo Brand</p>
                    <!-- Product price-->
                    <div class="product-price text-bold"><span>$14.00</span>
                    </div>
                    <div class="product-block-hover">
                        <!-- Product Add To cart--><a
                            class="btn btn-sm btn-danger btn-icon btn-icon-left product-btn offset-top-20"
                            href="shop-single-product-no-sidebar.html"><span
                                class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-md-top-0">
                <!-- Product-->
                <div class="product product-grid">
                    <!-- Product Image-->
                    <div class="product-image"><img class="img-responsive product-image-area"
                            src="images/shop/product-05-270x360.png" alt="" width="270" height="360">
                        <!-- Product Thumnails-->
                        <ul class="product-thumbnails">
                            <li class="active"><img class="img-responsive" src="images/shop/product-05-270x360.png"
                                    alt="" width="270" height="360"></li>
                            <li><img class="img-responsive" src="images/shop/product-05-270x360-2.png" alt=""
                                    width="270" height="360"></li>
                            <li><img class="img-responsive" src="images/shop/product-05-270x360-3.png" alt=""
                                    width="270" height="360"></li>
                        </ul>
                        <!-- Product Label-->
                    </div>
                    <!-- Product Title-->
                    <h5 class="product-title offset-top-20"><a href="shop-single-product-no-sidebar.html">Collar Leather
                            Jacket</a></h5>
                    <!-- Product Brand-->
                    <p class="product-brand text-italic text-dark">Amo Brand</p>
                    <!-- Product price-->
                    <div class="product-price text-bold"><span>$38.00</span>
                    </div>
                    <div class="product-block-hover">
                        <!-- Product Add To cart--><a
                            class="btn btn-sm btn-danger btn-icon btn-icon-left product-btn offset-top-20"
                            href="shop-single-product-no-sidebar.html"><span
                                class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @endforeach

</div>