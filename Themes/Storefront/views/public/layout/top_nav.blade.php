<nav class="header navbar navbar-expand-lg navbar-dark fixed-top p-1 position-relative">
    <!-- logo icon in header -->
    <a href="{{ route('home') }}" class="header-logo navbar-brand px-5">
        @if (is_null($logo))

            <h3>{{ setting('store_name') }}</h3>
        @else
            <img src="{{ $logo }}" alt="logo">
        @endif
    </a>

    <!-- btn for collapse  the menu with small width -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarCollapse">
        <!-- start left/first side of the navbar -->
        <ul class="navbar-nav mr-auto text-center header-column-right">


            @if (is_multilingual())

                    <i class="fa fa-language icon" aria-hidden="true">
                    </i>
                    <select class="custom-select-option arrow-black" onchange="location = this.value">
                        @foreach (supported_locales() as $locale => $language)
                            <option value="{{ localized_url($locale) }}" {{ locale() === $locale ? 'selected' : '' }}>
                                {{ $language['name'] }}
                            </option>
                        @endforeach
                    </select>

            @endif


            @auth
                 <li>
                    <a href="{{ route('account.dashboard.index') }}">
                        <i class="fas fa-user icon"></i>
                        {{ trans('storefront::layout.account') }}
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}">
                        <i class="las la-sign-in-alt"></i>
                        {{ trans('storefront::layout.login') }}
                    </a>
                </li>
            @endauth




            <li class="nav-item mb-2 mb-lg-0">

                <div class="header-cart m-0">
                    <div class="icon-wrap">
                        <i class="fas fa-shopping-cart icon "></i>
                        <div class="count" v-text="cart.quantity"></div>
                    </div>

                    <span v-html="cart.subTotal.inCurrentCurrency.formatted"></span>
                </div>

        </ul>

        <!-- end left/first side of the navbar -->
        <!-- start right/sec. side of the navbar -->
        <ul class="navbar-nav text-center ">
            <li class="nav-item mb-2 mb-lg-0 ">
                <a class="nav-link links " href="# ">Home</a>
            </li>

            <li class="nav-item mb-2 mb-lg-0 ">
                <div class="dropdown">
                    <a id="category" class="nav-link links" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        category</a>
                    <div class="dropdown-menu w-85vw mt-4 " aria-labelledby="navbarDropdownMenuLink-3 ">
                        <div class="row align-items-start ">
                            <div class="col-12 col-lg-4 ">
                                <h5>
                                    devices
                                </h5>
                                <ul class="list-group list-unstyled ">
                                    <li class="w-100 ">
                                        playstation
                                        <ul class="list-group list-unstyled ">
                                            <li class="dropdown-item w-100 p-2 rounded "> playstation1
                                            </li>
                                            <li class="dropdown-item w-100 p-2 rounded "> playstation1
                                            </li>
                                            <li class="dropdown-item w-100 p-2 rounded "> playstation1
                                            </li>
                                            <li class="dropdown-item w-100 p-2 rounded "> playstation1
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="w-100 ">
                                        playstation
                                        <ul class="list-group list-unstyled ">
                                            <li class="dropdown-item w-100 p-2 rounded "> playstation1
                                            </li>
                                            <li class="dropdown-item w-100 p-2 rounded "> playstation1
                                            </li>
                                            <li class="dropdown-item w-100 p-2 rounded "> playstation1
                                            </li>
                                            <li class="dropdown-item w-100 p-2 rounded "> playstation1
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" w-100 p-2 rounded ">
                                        playstation
                                    </li>
                                    <li class=" w-100 p-2 rounded ">
                                        playstation
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <h5>
                                    devices
                                </h5>
                                <ul class="list-group list-unstyled ">
                                    <li class="dropdown-item w-100 p-2 rounded ">
                                        playstation
                                    </li>
                                    <li class="dropdown-item w-100 p-2 rounded ">
                                        playstation
                                    </li>
                                    <li class="dropdown-item w-100 p-2 rounded ">
                                        playstation
                                    </li>
                                    <li class="dropdown-item w-100 p-2 rounded ">
                                        playstation
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <h5>
                                    devices
                                </h5>
                                <ul class="list-group list-unstyled ">
                                    <li class="dropdown-item w-100 p-2 rounded ">
                                        playstation
                                    </li>
                                    <li class="dropdown-item w-100 p-2 rounded ">
                                        playstation
                                    </li>
                                    <li class="dropdown-item w-100 p-2 rounded ">
                                        playstation
                                    </li>
                                    <li class="dropdown-item w-100 p-2 rounded ">
                                        playstation
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </li>
            <li class="nav-item mb-2 mb-lg-0 ">
                <a class="nav-link links " href="./pages/Products.html ">Products</a>
            </li>

        </ul>
        <!-- end right/sec. side of the navbar -->
    </div>
</nav>
