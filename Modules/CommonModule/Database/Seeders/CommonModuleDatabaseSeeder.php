<?php

namespace Modules\CommonModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\CommonModule\Entities\Language;
use Modules\CommonModule\Entities\Apps;

class CommonModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'lang' => 'ar',
            'display_lang' => 'Arabic',
            'active' => 1,
            'lang_type'=>0
        ]);

        Language::create([
            'lang' => 'en',
            'display_lang' => 'English',
            'active' => 1,
            'lang_type'=>0
        ]);

        Language::create([
            'lang' => 'en',
            'display_lang' => 'English',
            'active' => 1,
            'lang_type'=>1
        ]);
        Language::create([
            'lang' => 'ar',
            'display_lang' => 'Arabic',
            'active' => 1,
            'lang_type'=>1
        ]);

        // Create default apps
        Apps::create([
            'key' => 'service_app',
            'title' => 'service',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'project_app',
            'title' => 'project',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'product_app',
            'title' => 'product',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'blog_app',
            'title' => 'blog',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'video_app',
            'title' => 'video',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'photo_app',
            'title' => 'photo',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'slider_app',
            'title' => 'slider',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'team_app',
            'title' => 'team',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'testimonial_app',
            'title' => 'testimonial',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'partner_app',
            'title' => 'partner',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'pages_app',
            'title' => 'pages',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'workhours_app',
            'title' => 'workhours',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'contactus_app',
            'title' => 'contactus',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'subscribe_app',
            'title' => 'subscribe',
            'active' => 1
        ]);

        Apps::create([
            'key' => 'bookings_app',
            'title' => 'bookings',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'why_us_app',
            'title' => 'why_us',
            'active' => 1
        ]);

    }
}
