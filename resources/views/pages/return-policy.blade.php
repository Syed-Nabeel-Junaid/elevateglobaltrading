<x-layout title="Return Policy">
    <div class="mx-auto max-w-3xl">
        <h1 class="mb-2 text-3xl font-semibold text-slate-900">Return Policy</h1>
        <p class="mb-8 text-sm text-slate-500">Last updated: {{ now()->format('F Y') }}</p>

        <div class="space-y-6 text-sm leading-relaxed text-slate-600">
            <p>
                This Return Policy explains how returns and exchanges are handled for orders
                placed with {{ config('business.name') }}. This is a concise summary appropriate
                for our current MVP and will be expanded as the business grows.
            </p>

            <section>
                <h2 class="mb-2 text-base font-semibold text-slate-900">Return Window</h2>
                <p>
                    Eligible appliances may be returned within 7 days of delivery for a refund or
                    exchange. To be eligible, an item must be unused, uninstalled, in its original
                    condition, and in its original packaging with all accessories, manuals, and
                    protective seals intact. Appliances with a broken factory seal or signs of
                    installation/use are not eligible for return unless the item is defective.
                </p>
            </section>

            <section>
                <h2 class="mb-2 text-base font-semibold text-slate-900">Non-Returnable Items</h2>
                <p>
                    Items that have been installed, used, damaged after delivery, or are missing
                    original packaging, accessories, or protective seals are not eligible for
                    return. Clearance or final-sale items, where marked, are also not eligible
                    for return.
                </p>
            </section>

            <section>
                <h2 class="mb-2 text-base font-semibold text-slate-900">Damaged or Incorrect Items</h2>
                <p>
                    If an appliance arrives damaged, defective, or different from what you
                    ordered, contact us within 48 hours of delivery so we can arrange a
                    replacement or refund at no additional cost to you. For large appliances
                    (e.g. refrigerators, washing machines, dishwashers, ACs), please inspect the
                    unit at the time of delivery before signing off, where possible.
                </p>
            </section>

            <section>
                <h2 class="mb-2 text-base font-semibold text-slate-900">Large-Item Return Logistics</h2>
                <p>
                    For bulky appliances, return pickup will be coordinated directly with you
                    after eligibility is confirmed. Please keep original packaging and crating
                    where possible, as this is required for safe transport during a return.
                </p>
            </section>

            <section>
                <h2 class="mb-2 text-base font-semibold text-slate-900">Manufacturer Warranty</h2>
                <p>
                    Most appliances carry a manufacturer warranty against defects, separate from
                    this Return Policy. Warranty terms vary by brand and model and are honored
                    according to the manufacturer's own conditions once the return window above
                    has closed.
                </p>
            </section>

            <section>
                <h2 class="mb-2 text-base font-semibold text-slate-900">How to Request a Return</h2>
                <p>
                    To start a return, reach out via our
                    <a href="{{ route('contact') }}" class="font-medium text-slate-900 hover:underline">Contact page</a>
                    or at {{ config('business.email') }} with your order details and the reason
                    for the return. We'll confirm eligibility and provide next steps.
                </p>
            </section>

            <section>
                <h2 class="mb-2 text-base font-semibold text-slate-900">Refunds</h2>
                <p>
                    Once a returned item is received and inspected, approved refunds are issued
                    to the original payment method. Shipping charges, where applicable, are
                    non-refundable except in cases of damaged, defective, or incorrect items.
                </p>
            </section>

            <section>
                <h2 class="mb-2 text-base font-semibold text-slate-900">Current MVP Notice</h2>
                <p>
                    This site's checkout flow is currently a demonstration for our MVP: no
                    payment is processed, and orders placed through this site are not fulfilled
                    or shipped. This policy describes how returns will be handled once real
                    order processing is introduced in a future phase.
                </p>
            </section>

            <section>
                <h2 class="mb-2 text-base font-semibold text-slate-900">Contact Us</h2>
                <p>
                    Questions about this Return Policy can be sent via our
                    <a href="{{ route('contact') }}" class="font-medium text-slate-900 hover:underline">Contact page</a>
                    or to {{ config('business.email') }}.
                </p>
            </section>
        </div>
    </div>
</x-layout>
