<x-layout title="Home" description="{{ config('app.name') }} is an electrical appliances store selling LED TVs, air conditioners, refrigerators, washing machines, dishwashers, microwaves, geysers, and ovens — curated for quality and reliability.">
    <section class="mb-16 overflow-hidden rounded-2xl bg-navy-900 text-white">
        <div class="grid items-center gap-8 px-6 py-10 sm:px-8 sm:py-16 md:grid-cols-2 md:px-14">
            <div class="animate-hero-in-1 flex items-center justify-center rounded-2xl bg-navy-800 p-10 shadow-2xl md:order-2 md:aspect-square">
                <img src="{{ asset('images/branding/logo-icon.png') }}"
                     alt="{{ config('app.name') }} logo"
                     class="w-full max-w-64 object-contain">
            </div>
            <div class="flex flex-col justify-center md:order-1">
                <span class="animate-hero-in mb-4 text-sm font-medium uppercase tracking-wide text-electric-400">
                    {{ config('app.name') }}
                </span>
                <h1 class="animate-hero-in-1 text-4xl font-semibold leading-tight md:text-5xl">
                    Quality appliances for every home.
                </h1>
                <p class="animate-hero-in-2 mt-4 max-w-md text-slate-300">
                    LED TVs, air conditioners, refrigerators, washing machines, and other
                    major electrical appliances — curated for performance, reliability, and
                    everyday value.
                </p>
                <a href="{{ route('shop.index') }}"
                   class="animate-hero-in-3 mt-8 inline-block w-fit rounded-md bg-white px-6 py-3 text-sm font-semibold text-navy-900 transition hover:bg-electric-100">
                    Shop Now
                </a>
            </div>
        </div>
    </section>

    @if ($featuredProducts->isNotEmpty())
        <section class="mb-16">
            <div class="mb-6 flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-slate-900">Featured Products</h2>
                <a href="{{ route('shop.index') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900">
                    View all &rarr;
                </a>
            </div>

            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-4">
                @foreach ($featuredProducts as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section>
    @endif

    <section class="mb-16">
        <h2 class="mb-6 text-2xl font-semibold text-slate-900">Shop by Category</h2>

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-5">
            @foreach ($categories as $category)
                <a href="{{ route('shop.index', ['category' => $category->slug]) }}"
                   class="flex flex-col items-center gap-2 rounded-lg border border-slate-200 bg-white p-5 text-center transition hover:border-slate-300 hover:shadow-sm">
                    <span class="text-sm font-medium text-slate-900">{{ $category->name }}</span>
                    <span class="text-xs text-slate-500">{{ $category->products_count }} products</span>
                </a>
            @endforeach
        </div>
    </section>

    <section class="mb-16">
        <h2 class="mb-6 text-2xl font-semibold text-slate-900">Why {{ config('app.name') }}</h2>

        <div class="grid gap-6 sm:grid-cols-3">
            <div class="rounded-lg border border-slate-200 bg-white p-6">
                <h3 class="mb-2 text-sm font-semibold text-slate-900">Trusted Brands</h3>
                <p class="text-sm text-slate-600">
                    Every appliance is sourced from reputable brands for reliable, everyday performance.
                </p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-6">
                <h3 class="mb-2 text-sm font-semibold text-slate-900">Straightforward Pricing</h3>
                <p class="text-sm text-slate-600">
                    Clear pricing with sale prices called out — no surprises at checkout.
                </p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-6">
                <h3 class="mb-2 text-sm font-semibold text-slate-900">Built to Grow</h3>
                <p class="text-sm text-slate-600">
                    A modern storefront designed to expand with more appliances and categories.
                </p>
            </div>
        </div>
    </section>

    <section class="rounded-2xl border border-slate-200 bg-white p-10 text-center">
        <h2 class="text-xl font-semibold text-slate-900">Looking for the right appliance?</h2>
        <p class="mx-auto mt-2 max-w-md text-sm text-slate-600">
            Browse the full catalog and filter by category, brand, and price to find exactly
            what you need.
        </p>
        <a href="{{ route('shop.index') }}"
           class="mt-6 inline-block rounded-md bg-navy-900 px-6 py-3 text-sm font-semibold text-white hover:bg-electric-500">
            Browse the Shop
        </a>
    </section>
</x-layout>
