<?php

namespace Modules\ConfigModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\ConfigModule\Entities\Config;
use Modules\ConfigModule\Entities\ConfigCategory;
use Modules\WidgetsModule\Entities\WorkHours;

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


        //////////////////////////////////////////////////////////////////////////////////////
        ///  General  ///////////////////////////////////////////////////////////////////////
        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'title',
            'ar' => [
                'display_name' => 'اسم الموقع',
                'value' => 'جورنت',
            ],
            'en' => [
                'display_name' => 'website name',
                'value' => 'jorent',
            ],
            'type' => 1,
            'category_id' => 1
        ]);

        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'about',
            'ar' => [
                'display_name' => 'وصف الموقع',
                'value' => 'وصف الموقع',
            ],
            'en' => [
                'display_name' => 'website description',
                'value' => 'website description',
            ],
            'type' => 3,
            'category_id' => 1
        ]);

        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'logo',
            'ar' => [
                'display_name' => 'لوجو الموقع',
                'value' => '',
            ],
            'en' => [
                'display_name' => 'website logo',
                'value' => '',
            ],
            'type' => 2,
            'category_id' => 1
        ]);

        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'about_index',
            'ar' => [
                'display_name' => 'نبذه عن خدماتنا',
                'value' => 'نبذه عن خدماتنا',
            ],
            'en' => [
                'display_name' => 'short description about services',
                'value' => 'short description about services',
            ],
            'type' => 3,
            'category_id' => 1
        ]);


        //////////////////////////////////////////////////////////////////////////////////////
        ///  SEO  ///////////////////////////////////////////////////////////////////////
        $config::create([
            'is_static' => 0,
            'var' => 'meta_title',
            'ar' => [
                'display_name' => 'اسم الميتا',
                'value' => 'اسم الميتا',
            ],
            'en' => [
                'display_name' => 'meta_title',
                'value' => 'meta_title',
            ],
            'type' => 1,
            'category_id' => 2
        ]);
        $config::create([
            'is_static' => 0,
            'var' => 'meta_desc',
            'ar' => [
                'display_name' => 'وصف الميتا',
                'value' => 'وصف الميتا',
            ],
            'en' => [
                'display_name' => 'meta_desc',
                'value' => 'meta_desc',
            ],
            'type' => 3,
            'category_id' => 2
        ]);
        $config::create([
            'is_static' => 0,
            'var' => 'meta_keywords',
            'ar' => [
                'display_name' => 'كلمات الميتا',
                'value' => 'كلمات الميتا',
            ],
            'en' => [
                'display_name' => 'meta_keywords',
                'value' => 'meta_keywords',
            ],
            'type' => 3,
            'category_id' => 2
        ]);
        //////////////////////////////////////////////////////////////////////////////////////
        ///  Contact  ///////////////////////////////////////////////////////////////////////
        $config::create([
            'is_static' => 1,
            'static_value' => '0123456789',
            'ar' => [
                'display_name' => 'رقم الهاتف',
                'value' => 'dsadas',
            ],
            'en' => [
                'display_name' => 'phone',
            ],
            'var' => 'phone',
            'type' => 1,
            'category_id' => 3
        ]);
        $config::create([
            'var' => 'email',
            'is_static' => 1,
            'static_value' => '0123456789',
            'ar' => [
                'display_name' => 'البريد الالكتروني',
            ],
            'en' => [
                'display_name' => 'email',
            ],
            'type' => 1,
            'category_id' => 3
        ]);

        //////////////////////////////////////////////////////////////////////////////////////
        ///  Social  ///////////////////////////////////////////////////////////////////////
        $config::create([
            'var' => 'youtube',
            'is_static' => 1,
            'static_value' => 'youtube',
            'ar' => [
                'display_name' => 'اليوتيوب',
            ],
            'en' => [
                'display_name' => 'youtube',
            ],
            'type' => 1,
            'category_id' => 4
        ]);
        $config::create([
            'var' => 'telegram',
            'is_static' => 1,
            'static_value' => 'telegram',
            'ar' => [
                'display_name' => 'تليجرام',
            ],
            'en' => [
                'display_name' => 'telegram',
            ],
            'type' => 1,
            'category_id' => 4
        ]);
        $config::create([
            'var' => 'tw_link',
            'is_static' => 1,
            'static_value' => 'tw_link',
            'ar' => [
                'display_name' => 'تويتر',
            ],
            'en' => [
                'display_name' => 'twitter',
            ],
            'type' => 1,
            'category_id' => 4
        ]);
        $config::create([
            'var' => 'fb_link',
            'is_static' => 1,
            'static_value' => 'fb_link',
            'ar' => [
                'display_name' => 'فيس بوك',
            ],
            'en' => [
                'display_name' => 'facebook',
            ],
            'type' => 1,
            'category_id' => 4
        ]);

        $config::create([
            'var' => 'our_advantage_desc',
            'is_static' => 0,
            'static_value' => '',
            'ar' => [
                'display_name' => 'نبذه عن مميزاتنا',
            ],
            'en' => [
                'display_name' => 'Intro About Advantage',
            ],
            'type' => 3,
            'category_id' => 1
        ]);

        $config::create([
            'var' => 'first_services_features',
            'is_static' => 0,
            'static_value' => '',
            'ar' => [
                'display_name' => 'خدماتنا ( الجملة الاولي )',
            ],
            'en' => [
                'display_name' => 'Our Services ( First Sequence )',
            ],
            'type' => 1,
            'category_id' => 1
        ]);

        $config::create([
            'var' => 'second_services_features',
            'is_static' => 0,
            'static_value' => '',
            'ar' => [
                'display_name' => 'خدماتنا ( الجملة الثانية )',
            ],
            'en' => [
                'display_name' => 'Our Services ( Second Sequence )',
            ],
            'type' => 1,
            'category_id' => 1
        ]);

        $config::create([
            'var' => 'third_services_features',
            'is_static' => 0,
            'static_value' => '',
            'ar' => [
                'display_name' => 'خدماتنا ( الجملة الثالثة )',
            ],
            'en' => [
                'display_name' => 'Our Services ( Third Sequence )',
            ],
            'type' => 1,
            'category_id' => 1
        ]);

        $config::create([
            'var' => 'first_transaction_bank',
            'is_static' => 0,
            'static_value' => '',
            'ar' => [
                'display_name' => 'الحساب البنكي الاول',
            ],
            'en' => [
                'display_name' => 'First Bank Account',
            ],
            'type' => 1,
            'category_id' => 1
        ]);

        $config::create([
            'var' => 'second_transaction_bank',
            'is_static' => 0,
            'static_value' => '',
            'ar' => [
                'display_name' => 'الحساب البنكي الثاني',
            ],
            'en' => [
                'display_name' => 'Second Bank Account',
            ],
            'type' => 1,
            'category_id' => 1
        ]);

        $config::create([
            'var' => 'address',
            'is_static' => 0,
            'static_value' => '',
            'ar' => [
                'display_name' => 'العنوان',
            ],
            'en' => [
                'display_name' => 'Address',
            ],
            'type' => 1,
            'category_id' => 1
        ]);



    }
}
