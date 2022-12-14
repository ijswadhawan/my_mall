<div class="ps-page--single ps-page--vendor">
    <section class="ps-store-list">
        <div class="container">
            <div class="ps-section__header">
                <h3>{{ __('Store list') }}</h3>
            </div>
            <div class="ps-section__content">
                <div class="ps-section__search row">
                    <div class="col-md-4">
                        <form action="{{ route('public.stores') }}" method="get">
                            <div class="form-group">
                                <button><i class="icon-magnifier"></i></button>
                                <input class="form-control" name="q" type="text" placeholder="{{ __('Search vendor..') }}.">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    @foreach($stores as $store)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
                            <article class="ps-block--store-2">
                                <div class="ps-block__content bg--cover" data-background="{{ asset('vendor/core/plugins/marketplace/img/default-store-banner.png') }}">
                                    <figure>
                                        <h4>{{ $store->name }}</h4>
                                        @if (EcommerceHelper::isReviewEnabled())
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width: {{ 4 * 20 }}%"></div>
                                                </div>
                                            </div>
                                        @endif
                                        <p>{{ $store->address }}, <br> {{ $store->city }}, {{ $store->state }}, {{ $store->country_name }}</p>
                                        @if ($store->phone)
                                            <p><i class="icon-telephone"></i> {{ $store->phone }}</p>
                                        @endif
                                        @if ($store->email)
                                            <p><i class="icon-envelope"></i> <a href="mailto:{{ $store->email }}">{{ $store->email }}</a></p>
                                        @endif
                                    </figure>
                                </div>
                                <div class="ps-block__author">
                                    <a class="ps-block__user" href="{{ $store->url }}">
                                        <img src="{{ RvMedia::getImageUrl($store->logo, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $store->name }}">
                                    </a>
                                    <a class="ps-btn" href="{{ $store->url }}">{{ __('Visit Store') }}</a>
                                </div>
                            </article>
                        </div>
                    @endforeach

                    @if ($stores->hasMorePages())
                        <div class="ps-pagination">
                            {!! $stores->withQueryString()->links() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
