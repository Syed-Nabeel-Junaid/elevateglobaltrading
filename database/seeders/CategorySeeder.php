<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * The categories that make up the Elevate Global Trading appliance catalog.
     */
    private const CATEGORIES = [
        ['name' => 'LED TVs', 'description' => 'LED and smart televisions from leading display brands.'],
        ['name' => 'Air Conditioners', 'description' => 'Split and inverter air conditioners for home and office cooling.'],
        ['name' => 'Refrigerators', 'description' => 'Single-door, double-door, and side-by-side refrigerators.'],
        ['name' => 'Washing Machines', 'description' => 'Front-load and top-load automatic washing machines.'],
        ['name' => 'Dishwashers', 'description' => 'Built-in and freestanding dishwashers for the modern kitchen.'],
        ['name' => 'Microwaves', 'description' => 'Solo, grill, and convection microwave ovens.'],
        ['name' => 'Electric Geysers', 'description' => 'Instant and storage electric water heaters.'],
        ['name' => 'Electrical Ovens', 'description' => 'Built-in and countertop electric ovens for baking and cooking.'],
    ];

    public function run(): void
    {
        foreach (self::CATEGORIES as $category) {
            Category::updateOrCreate(
                ['slug' => Str::slug($category['name'])],
                [
                    'name' => $category['name'],
                    'description' => $category['description'],
                    'status' => true,
                ]
            );
        }
    }

    /**
     * Remove any category that isn't part of the current 5-category catalog.
     *
     * Must run after ProductSeeder, once no product references the old
     * categories — products.category_id has a restrictOnDelete FK, so this
     * would fail if any product still pointed at one of them.
     */
    public function pruneOldCategories(): void
    {
        $currentSlugs = array_map(fn ($category) => Str::slug($category['name']), self::CATEGORIES);

        Category::whereNotIn('slug', $currentSlugs)->delete();
    }
}
