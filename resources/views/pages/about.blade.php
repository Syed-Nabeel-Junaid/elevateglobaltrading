<x-layout title="About Us">
    <div class="mx-auto max-w-3xl">
        <h1 class="mb-6 text-3xl font-semibold text-slate-900">About {{ config('business.name') }}</h1>

        <div class="space-y-5 text-sm leading-relaxed text-slate-600">
            <p>
                {{ config('business.name') }} is an electrical appliances store built to make
                it simple to find reliable, everyday appliances — from LED TVs and air
                conditioners to refrigerators, washing machines, and the appliances that
                keep a home running. We're a growing storefront, and this page will be
                updated with our full story as the business develops.
            </p>

            <p>
                Our approach is straightforward: a curated catalog, clear pricing, and a shopping
                experience that stays out of your way. Whether you're upgrading a single appliance
                or outfitting a whole kitchen, we aim to make the process fast and dependable.
            </p>

            <p>
                This page currently uses placeholder content. Details about our history,
                certifications, and any physical locations will be added once that information
                is finalized — we won't publish claims about our company that haven't been
                confirmed.
            </p>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-3">
            <div class="rounded-lg border border-slate-200 bg-white p-6">
                <h2 class="mb-2 text-sm font-semibold text-slate-900">What We Offer</h2>
                <p class="text-sm text-slate-600">A curated range of electrical appliances across
                    eight core categories, from LED TVs to ovens.</p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-6">
                <h2 class="mb-2 text-sm font-semibold text-slate-900">How We Work</h2>
                <p class="text-sm text-slate-600">Clear product information, honest pricing, and
                    a simple path from browsing to checkout.</p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-6">
                <h2 class="mb-2 text-sm font-semibold text-slate-900">Get in Touch</h2>
                <p class="text-sm text-slate-600">
                    Questions? Visit our
                    <a href="{{ route('contact') }}" class="font-medium text-slate-900 hover:underline">Contact page</a>.
                </p>
            </div>
        </div>
    </div>
</x-layout>
