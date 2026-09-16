<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * The Elevate Global Trading electrical-appliance catalog, grouped by
     * category name. Empty pending real product research: each category
     * below is seeded with genuine, currently-sold appliance models, real
     * manufacturer specs, a consistent markup over reference market price,
     * and a locally-downloaded product image — added in batches by
     * category, never placeholder/dummy entries.
     */
    public function run(): void
    {
        // Replace the catalog wholesale rather than diffing it, so a
        // re-seed never leaves orphaned rows from a prior batch.
        Product::query()->delete();

        $catalog = [
            'LED TVs' => [],
            'Air Conditioners' => [],
            'Refrigerators' => [],
            'Washing Machines' => [],
            'Dishwashers' => [],
            'Microwaves' => [],
            'Electric Geysers' => [],
            'Electrical Ovens' => [],
        ];

        foreach ($catalog as $categoryName => $products) {
            foreach ($products as $index => $product) {
                $category = Category::where('slug', Str::slug($categoryName))->first();

                if (! $category) {
                    continue;
                }

                $slug = Str::slug($product['name']);

                Product::updateOrCreate(
                    ['slug' => $slug],
                    [
                        'name' => $product['name'],
                        'sku' => $product['skuCode'].'-'.Str::upper(Str::substr($categoryName, 0, 3)).'-'.(1001 + $index),
                        'category_id' => $category->id,
                        'brand' => $product['brand'],
                        'price' => $product['price'],
                        'sale_price' => null,
                        'short_description' => $product['short_description'],
                        'description' => $product['short_description'].' Available now at '.config('business.name').'.',
                        'specifications' => $product['specifications'],
                        'stock' => $product['stock'],
                        'status' => true,
                        'featured' => $product['featured'],
                        'image' => "images/products/{$slug}.".($product['imageExt'] ?? 'jpg'),
                    ]
                );
            }
        }
    }
}
