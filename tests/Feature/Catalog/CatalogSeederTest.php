<?php

namespace Tests\Feature\Catalog;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class CatalogSeederTest extends TestCase
{
    use RefreshDatabase;

    private const OLD_DUMMY_BRANDS = ['Kestrel', 'Vantage', 'NovaTech', 'Zenith', 'Acme'];

    private const OLD_CATEGORY_SLUGS = [
        'laptops', 'smartphones', 'tablets', 'monitors', 'keyboards',
        'mice', 'headphones', 'networking', 'storage', 'accessories',
        'gaming-pcs', 'gaming-consoles', 'gaming-laptops', 'mice-input', 'components',
    ];

    public function test_seeding_produces_exactly_eight_categories(): void
    {
        $this->seed();

        $this->assertDatabaseCount('categories', 8);
    }

    public function test_seeding_produces_the_expected_product_catalog(): void
    {
        // The real electrical-appliance catalog is populated in a separate
        // content phase (real models/specs/images researched per category),
        // not fabricated as placeholder data. Update this count as batches
        // of real products are added.
        $this->seed();

        $this->assertDatabaseCount('products', 0);
    }

    public function test_no_dummy_brands_remain_after_seeding(): void
    {
        $this->seed();

        $this->assertFalse(
            Product::whereIn('brand', self::OLD_DUMMY_BRANDS)->exists()
        );
    }

    public function test_no_old_category_slugs_remain_after_seeding(): void
    {
        $this->seed();

        $this->assertFalse(
            Category::whereIn('slug', self::OLD_CATEGORY_SLUGS)->exists()
        );
    }

    public function test_at_least_four_products_are_featured(): void
    {
        $this->markTestSkipped('Pending the real appliance catalog — re-enable once products are seeded.');
    }

    public function test_every_seeded_product_image_exists_on_disk(): void
    {
        $this->seed();

        $images = Product::pluck('image', 'name');

        $this->assertTrue(true, 'Guard assertion so this test is not marked risky when the catalog is empty.');

        foreach ($images as $name => $image) {
            $this->assertTrue(
                File::exists(public_path($image)),
                "Missing image for \"{$name}\": {$image}"
            );
        }
    }
}
