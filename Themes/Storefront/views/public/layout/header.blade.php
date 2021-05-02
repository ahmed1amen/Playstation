<header class="header-wrap">
    <div class="header-wrap-inner">
        <div class="container">
            <div class="row flex-nowrap justify-content-between position-relative">
                <div class="header-column-left">
                    <div class="sidebar-menu-icon-wrap">
                        <div class="sidebar-menu-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <a href="{{ route('home') }}" class="header-logo">
                        @if (is_null($logo))

                            <h3>{{ setting('store_name') }}</h3>
                        @else
                            <img src="{{ $logo }}" alt="logo">
                        @endif
                    </a>
                </div>

                <header-search
                    :categories="{{ $categories }}"
                    :most-searched-keywords="{{ $mostSearchedKeywords }}"
                    initial-query="{{ request('query') }}"
                    initial-category="{{ request('category') }}"
                >
                </header-search>


                <div class="header-column-right d-flex">

                    @auth

                        <div class="btn-group">

                            <a  class="btn dropdown-toggle header-wishlist"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <div class="icon-wrap">
                                    <i class="las la-user la-3x "></i>
                                </div>
                                <span>  {{ trans('storefront::layout.account') }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="d-block my-2 mx-3" href="{{ route('account.dashboard.index') }}">
                                    <i class="las la-tachometer-alt"></i>
                                    {{ trans('storefront::account.pages.dashboard') }}
                                </a>
                                <a class="d-block my-2 mx-3" href="{{ route('account.orders.index') }}">
                                    <i class="las la-cart-arrow-down"></i>
                                    {{ trans('storefront::account.pages.my_orders') }}
                                </a>
                                <a class="d-block my-2 mx-3" href="{{ route('account.wishlist.index') }}">
                                    <i class="lar la-heart"></i>
                                    {{ trans('storefront::account.pages.my_wishlist') }}
                                </a>
                                <a class="d-block my-2 mx-3" href="{{ route('account.reviews.index') }}">
                                    <i class="las la-comment"></i>
                                    {{ trans('storefront::account.pages.my_reviews') }}
                                </a>
                                <a class="d-block my-2 mx-3" href="{{ route('account.profile.edit') }}">
                                    <i class="las la-user-circle"></i>
                                    {{ trans('storefront::account.pages.my_profile') }}
                                </a>
                                <a class="d-block my-2 mx-3" href="{{ route('logout') }}">
                                    <i class="las la-sign-out-alt"></i>
                                    {{ trans('storefront::account.pages.logout') }}
                                </a>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="header-wishlist mr-4">
                            <div class="icon-wrap">
                                <i class="las la-2x la-sign-in-alt"></i>
                            </div>
                            <span>{{ trans('storefront::layout.login') }}</span>
                        </a>
                    @endauth

                    <a href="{{ route('account.wishlist.index') }}" class="header-wishlist">
                        <div class="icon-wrap">
                            <i class="lar la-heart"></i>
                            <div class="count" v-text="wishlistCount"></div>
                        </div>

                        <span>{{ trans('storefront::layout.favorites') }}</span>
                    </a>



                    <div class="header-cart">
                        <div class="icon-wrap">
                            <i class="las la-cart-arrow-down"></i>
                            <div class="count" v-text="cart.quantity"></div>
                        </div>
                        <span v-html="cart.subTotal.inCurrentCurrency.formatted"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
