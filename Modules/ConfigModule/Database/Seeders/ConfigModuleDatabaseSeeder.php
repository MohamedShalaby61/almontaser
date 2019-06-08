<?php

namespace Modules\ConfigModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\ConfigModule\Entities\Config;
use Modules\ConfigModule\Entities\ConfigCategory;

class ConfigModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = Config::class;
        $config_categ = ConfigCategory::class;

        $config_categ::insert([
            'title' => 'general'
        ]);
        $config_categ::insert([
            'title' => 'seo'
        ]);
        $config_categ::insert([
            'title' => 'contact'
        ]);
        $config_categ::insert([
            'title' => 'social'
        ]);
        $config_categ::insert([
            'title' => 'Ads'
        ]);


        //////////////////////////////////////////////////////////////////////////////////////
        ///  General  ///////////////////////////////////////////////////////////////////////

        $config::insert([
            'var' => 'title',
            'display_name' => 'Website Name',
            'type' => 1,
            'value' => 'Car Rental',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'about',
            'display_name' => 'About',
            'type' => 3,
            'value' => 'detail about website ',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'logo',
            'display_name' => 'Logo',
            'type' => 2,
            'value' => 'logo.png',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'about_index',
            'display_name' => 'about_index',
            'type' => 3,
            'value' => 'فيردى هى شركه مساهمه مصريه متخصصه فى انتاج وتوزيع الاسمده المتخصصه والكيماويات وبالتالى نضمن استمرار تحسين جوده وحلول مبتكره بالاضافه الى ذلك اننا نهتم بالصناعه المصريه ونضمن خدمتنا الفنيه ونعطى شراكه واعده لتحقيق الازدهار الانسانى للحفاظ على ثقه عملائنا حيث ان الجوده هيا المعيار الاول ولذلك يتم التحقق من جميع المنتجات فى كل مستوى والتاكد من تحقيق مقياس التميز المطلوب لتحقيق التميز فى قطاع الاعمال',
            'category_id' => 1
        ]);


         //////////////////////////////////////////////////////////////////////////////////////
        ///  SEO  ///////////////////////////////////////////////////////////////////////
        $config::insert([
            'var' => 'meta_title',
            'display_name' => 'Meta Title',
            'type' => 1,
            'value' => '0123456789',
            'category_id' => 2
        ]);
        $config::insert([
            'var' => 'meta_desc',
            'display_name' => 'Meta Description',
            'type' => 3,
            'value' => '0123456789',
            'category_id' => 2
        ]);
        $config::insert([
            'var' => 'meta_keywords',
            'display_name' => 'Meta Keywords',
            'type' => 3,
            'value' => '0123456789',
            'category_id' => 2
        ]);
        //////////////////////////////////////////////////////////////////////////////////////
        ///  Contact  ///////////////////////////////////////////////////////////////////////
        $config::insert([
            'var' => 'phone',
            'display_name' => 'Phone',
            'type' => 1,
            'value' => '0123456789',
            'category_id' => 3
        ]);
        $config::insert([
            'var' => 'email',
            'display_name' => 'Email',
            'type' => 1,
            'value' => 'ddd@ff.com',
            'category_id' => 3
        ]);
        $config::insert([
            'var' => 'address',
            'display_name' => 'Address',
            'type' => 3,
            'value' => '23 st cairo',
            'category_id' => 3
        ]);
        //////////////////////////////////////////////////////////////////////////////////////
        ///  Social  ///////////////////////////////////////////////////////////////////////
        $config::insert([
            'var' => 'youtube',
            'display_name' => 'Youtube ',
            'type' => 1,
            'value' => '',
            'category_id' => 4
        ]);
        $config::insert([
            'var' => 'telegram',
            'display_name' => 'Telegram',
            'type' => 1,
            'value' => '',
            'category_id' => 4
        ]);
        $config::insert([
            'var' => 'tw_link',
            'display_name' => 'Twitter ',
            'type' => 1,
            'value' => '',
            'category_id' => 4
        ]);
        $config::insert([
            'var' => 'fb_link',
            'display_name' => 'FaceBook',
            'type' => 1,
            'value' => '',
            'category_id' => 4
        ]);

        //////////////////////////////////
        /// ADs
        $config::insert([
            'var' => 'header_ads',
            'display_name' => 'Header Ad 728*90',
            'type' => 3,
            'value' => '  ',
            'category_id' => 5
        ]);

        $config::insert([
            'var' => 'sidebar_ads_1',
            'display_name' => 'Side Ad 300*250 (1)',
            'type' => 3,
            'value' => '  ',
            'category_id' => 5
        ]);
        $config::insert([
            'var' => 'sidebar_ads_2',
            'display_name' => 'Side Ad 300*250 (2)',
            'type' => 3,
            'value' => '  ',
            'category_id' => 5
        ]);
        $config::insert([
            'var' => 'bottom_ads',
            'display_name' => 'Bottom Ad 728*90',
            'type' => 3,
            'value' => '  ',
            'category_id' => 5
        ]);
        $config::insert([
            'var' => 'g+_link',
            'display_name' => 'google+_link',
            'type' => 4,
            'value' => ' https://www.googleplus.com/ ',
            'category_id' => 5
        ]);
        $config::insert([
            'var' => 'be_link',
            'display_name' => 'be_link',
            'type' => 4,
            'value' => ' https://www.behance.com/ ',
            'category_id' => 5
        ]);

    }
}
