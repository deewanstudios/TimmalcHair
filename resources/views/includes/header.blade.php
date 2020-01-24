@inject("links", "App\Libraries\Navigation")
<!-- RD Navbar Transparent-->
<div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-default rd-navbar-light" data-md-device-layout="rd-navbar-fixed"
        data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-.=navbar-fixed"
        data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
        <div class="rd-navbar-inner container">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap">
                    <span></span>
                </button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand">
                    <a href="/">
                        <img style="margin-top: -5px;margin-left: -15px;" width="120" ; height="120" ;
                            src="{{ asset('images/iv-cakes-logo.png')}}" alt="IV Cakes Logo" />
                    </a>
                </div>
            </div>
            <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-mobile-scroll">
                        <!--Navbar Brand Mobile-->
                        <div class="rd-navbar-mobile-brand">
                            <a href="/">
                                <img style="margin-top: -5px;margin-left: -15px;" width="120" ; height="120" ;
                                    src="{{asset('images/iv-cakes-logo.png')}}" alt="" />
                            </a>
                        </div>
                        <!-- RD Navbar Nav-->
                        {{-- @dump($links) --}}
                        <ul class="rd-navbar-nav">
                            @forelse ($links->getAllPages() as $page)
                            <li class="">
                                <a href="{{ $page->path() }}">
                                    <span>
                                        {{ $page->name }}
                                    </span>
                                </a>

                                @if ($page->name === 'cakes')

                                <ul class="rd-navbar-dropdown">
                                    @foreach ($links->getCakeCategories() as $cakeChildPages)
                                    <li class="">
                                        {{-- <a href="{{ $page->path(). }} }}"> --}}
                                        <a href="{{ $page->path().'/'.$cakeChildPages->path()}}">

                                            <span class="text-middle">{{ $cakeChildPages->cake_category }}</span>
                                        </a>
                                    </li>

                                    @endforeach
                                </ul>


                                @endif
                            </li>
                            @empty
                            <div>
                                <p>No navigation item to display. Please add navigaton items</p>
                            </div>
                            @endforelse
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>