
<footer class="page-footer font-small unique-color-dark mt-5 pt-5 ">

    <div class=" text-center text-md-left mt-5 ">
        <div class="footer-bottom">
        </div>
        <div class="row mt-3 ">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-center ">
                <!-- Content -->

                <a href="{{ route('home') }}">
                    @if (is_null($logo))

                        <h3>{{ setting('store_name') }}</h3>
                    @else
                        <img class="footer-logo h-100 w-25" src="{{ $logo }}" alt="logo">
                        <h6 class="mt-3">{{ setting('store_name') }}</h6>
                    @endif
                </a>


            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                <h4 class="title">{{ trans('storefront::layout.my_account') }}</h4>

                    <p>
                        <a href="{{ route('account.dashboard.index') }}">
                            {{ trans('storefront::account.pages.dashboard') }}
                        </a>
                    </p>

                    <p>
                        <a href="{{ route('account.orders.index') }}">
                            {{ trans('storefront::account.pages.my_orders') }}
                        </a>
                    </p>

                    <p>
                        <a href="{{ route('account.reviews.index') }}">
                            {{ trans('storefront::account.pages.my_reviews') }}
                        </a>
                    </p>

                    <p>
                        <a href="{{ route('account.profile.edit') }}">
                            {{ trans('storefront::account.pages.my_profile') }}
                        </a>
                    </p>

                    @auth
                        <p>
                            <a href="{{ route('logout') }}">
                                {{ trans('storefront::account.pages.logout') }}
                            </a>
                        </p>
                    @endauth

            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">
                <h6 class="text-uppercase font-weight-bold ">Useful links</h6>
                @if ($footerMenuOne->isNotEmpty())
                    <div class="col-lg-3 col-md-5">
                        <div class="footer-links">
                            <h4 class="title">{{ setting('storefront_footer_menu_one_title') }}</h4>

                                @foreach ($footerMenuOne as $menuItem)
                                    <p>
                                        <a href="{{ $menuItem->url() }}" target="{{ $menuItem->target }}">
                                            {{ $menuItem->name }}
                                        </a>
                                    </p>
                                @endforeach
                        </div>
                    </div>
                @endif

                @if ($footerMenuTwo->isNotEmpty())
                    <div class="col-lg-3 col-md-5">
                        <div class="footer-links">
                            <h4 class="title">{{ setting('storefront_footer_menu_two_title') }}</h4>

                                @foreach ($footerMenuTwo as $menuItem)
                                    <p>
                                        <a href="{{ $menuItem->url() }}" target="{{ $menuItem->target }}">
                                            {{ $menuItem->name }}
                                        </a>
                                    </p>
                                @endforeach
                        </div>
                    </div>
                @endif

                @if ($footerTags->isNotEmpty())
                    <div class="col-lg-4 col-md-7">
                        <div class="footer-links footer-tags">
                            <h4 class="title">{{ trans('storefront::layout.tags') }}</h4>

                                @foreach ($footerTags as $footerTag)
                                    <p>
                                        <a href="{{ $footerTag->url() }}">
                                            {{ $footerTag->name }}
                                        </a>
                                    </p>
                                @endforeach
                        </div>
                    </div>
                @endif
            </div>


            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 ">
                <h4 class="title">{{ trans('storefront::layout.contact_us') }}</h4>

                    @if (setting('store_phone'))
                        <p>
                            <i class="las la-phone"></i>
                            <span>{{ setting('store_phone') }}</span>
                        </p>
                    @endif

                    @if (setting('store_email'))
                        <p>
                            <i class="las la-envelope"></i>
                            <span>{{ setting('store_email') }}</span>
                        </p>
                    @endif

                    @if (setting('storefront_address'))
                        <p>
                            <i class="las la-map"></i>
                            <span>{{ setting('storefront_address') }}</span>
                        </p>
                    @endif


                @if (social_links()->isNotEmpty())
                    <ul class="list-inline social-links">
                        @foreach (social_links() as $icon => $socialLink)
                            <p>
                                <a href="{{ $socialLink }}">
                                    <i class="{{ $icon }}"></i>
                                </a>
                            </p>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
    <!-- social media  -->
    <div class=" text-center ">
        <!-- Facebook -->
        <a class="fb-ic ">
            <i class="fab fa-facebook "></i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic ">
            <i class="fab fa-twitter "></i>
        </a>
        <!-- Whats app -->
        <a class="wa-ic ">
            <i class="fab fa-whatsapp " aria-hidden="true "></i>
        </a>
        <!--Instagram-->
        <a class="ins-ic ">
            <i class="fab fa-instagram "></i>
        </a>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 ">
        {!! $copyrightText !!}
    </div>
    <!-- Copyright -->
</footer>

