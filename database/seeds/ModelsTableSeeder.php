<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('models')->insert([
            [
                'name' => "iPhone 7",
                'base_path' => "/images/cases/iphone7/base_iphone7_418600_black.png",
                'overlay_path' => "/images/cases/iphone7/overlay_iphone7-single-418600.png",
                'mask_path' => "/images/cases/iphone7/mask_snap-case_iphone7.png"
            ],
            [
                'name' => "iPhone 7 Plus",
                'base_path ' => "/images/cases/iphone7/",
                'overlay_path' => "/images/cases/iphone7/",
                'mask_path' => "/images/cases/iphone7/"
            ],
            [
                'name' => "iPhone 8",
                'base_path ' => "/images/cases/iphone7/",
                'overlay_path' => "/images/cases/iphone7/",
                'mask_path' => "/images/cases/iphone7/"
            ],
            [
                'name' => "iPhone 8 Plus",
                'base_path ' => "/images/cases/iphone7/",
                'overlay_path' => "/images/cases/iphone7/",
                'mask_path' => "/images/cases/iphone7/"
            ],
            [
                'name' => "iPhone X",
                'base_path ' => "/images/cases/iphone7/",
                'overlay_path' => "/images/cases/iphone7/",
                'mask_path' => "/images/cases/iphone7/"
            ],
            [
                'name' => "iPhone XS",
                'base_path ' => "/images/cases/iphone7/",
                'overlay_path' => "/images/cases/iphone7/",
                'mask_path' => "/images/cases/iphone7/"
            ],
            [
                'name' => "iPhone XS Max",
                'base_path ' => "/images/cases/iphone7/",
                'overlay_path' => "/images/cases/iphone7/",
                'mask_path' => "/images/cases/iphone7/"
            ],
            [
                'name' => "iPhone XR",
                'base_path ' => "/images/cases/iphone7/",
                'overlay_path' => "/images/cases/iphone7/",
                'mask_path' => "/images/cases/iphone7/"
            ],
            [
                'name' => "iPhone 11",
                'base_path ' => "/images/cases/iphone7/",
                'overlay_path' => "/images/cases/iphone7/",
                'mask_path' => "/images/cases/iphone7/"
            ],
            [
                'name' => "iPhone 11 Pro",
                'base_path ' => "/images/cases/iphone7/",
                'overlay_path' => "/images/cases/iphone7/",
                'mask_path' => "/images/cases/iphone7/"
            ],
            [
                'name' => "iPhone 11 Pro Max",
                'base_path ' => "/images/cases/iphone7/",
                'overlay_path' => "/images/cases/iphone7/",
                'mask_path' => "/images/cases/iphone7/"
            ]
        ]);
    }
}
