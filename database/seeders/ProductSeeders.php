<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(["name" => 'table']);
        Category::create(["name" => 'chair']);
        Category::create(["name" => 'lamp']);
        Category::create(["name" => 'wardrobe']);

        Product::insert([
            [
                'category_id' => 1,
                'name' => 'Brimnas',
                'desc' => '',
                'price' => 250000,
                'qty' => 20,
                'image' => 'product_img/2TOt4nh6MIHvgOzT3JedvBDbrMsALFr7Nx26iF4d.webp',
                'created_at' => '2022-12-02 16:02:33',
                'updated_at' => '2022-12-02 16:02:33',
            ],
            [
                'category_id' => 3,
                'name' => 'EyeComfort LED Bright',
                'desc' => '',
                'price' => 400000,
                'qty' => 40,
                'image' => 'product_img/szfRnBux9ZyDmKA0tD4CcjiGzivITCCZyHssMo2E.webp',
                'created_at' => '2022-12-02 16:02:33',
                'updated_at' => '2022-12-02 16:02:33',
            ],
            [
                'category_id' => 2,
                'name' => 'EyeComfort LED Bright',
                'desc' => '',
                'price' => 650000,
                'qty' => 20,
                'image' => 'product_img/PwgPCLPbN6Q8GkmN39Xx8tTlEbL005eKrG9tgE5O.webp',
                'created_at' => '2022-12-26 03:54:29',
                'updated_at' => '2022-12-26 03:54:29',
            ],
            [
                'category_id' => 4,
                'name' => 'Wardrobe',
                'desc' => '',
                'price' => 350000,
                'qty' => 65,
                'image' => 'product_img/F20JQYcbi3xdN8P2Vtp69lImjsgk5ZXOEa1w9H0R.webp',
                'created_at' => '2022-12-26 03:56:29',
                'updated_at' => '2022-12-26 03:56:29',
            ],
        ]);
    }
}
