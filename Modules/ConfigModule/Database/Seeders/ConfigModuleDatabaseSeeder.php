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

<<<<<<< HEAD
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
=======
        $config::insert([
            'var' => 'title_ar',
            'display_name' => 'Website Name Arabic',
>>>>>>> a08834609e574814c04d9dd5b02aed321e40c1d9
            'type' => 1,
            'category_id' => 1
        ]);
<<<<<<< HEAD
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
=======
        $config::insert([
            'var' => 'title_en',
            'display_name' => 'Website Name English',
            'type' => 1,
            'value' => 'Car Rental',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'work_hour_ar',
            'display_name' => 'Work Hour Arabic',
            'type' => 1,
            'value' => 'السبت - الاحد من 10 صباحا الي 2 مسائا',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'work_hour_en',
            'display_name' => 'Work Hour English',
            'type' => 1,
            'value' => 'Saturday - thursday from 2 am to 10pm',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'about_ar',
            'display_name' => 'About Arabic',
            'type' => 3,
            'value' => 'detail about website ',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'about_en',
            'display_name' => 'About English',
>>>>>>> a08834609e574814c04d9dd5b02aed321e40c1d9
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
<<<<<<< HEAD
        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'about_index',
            'ar' => [
                'display_name' => 'وصف مختصر للموقع',
                'value' => 'وصف مختصر للموقع',
            ],
            'en' => [
                'display_name' => 'short description',
                'value' => 'short description',
            ],
=======

        $config::insert([
            'var' => 'about',
            'display_name' => 'About Us Photo',
            'type' => 2,
            'value' => 'about.png',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'about_us_message_ar',
            'display_name' => 'About Us Message AR',
            'type' => 1,
            'value' => 'كلماتنا واهدافنا في الطب',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'about_us_message_en',
            'display_name' => 'About Us Message EN',
            'type' => 1,
            'value' => 'Our Words In Medicine',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'about_index_ar',
            'display_name' => 'about_index_ar',
            'type' => 3,
            'value' => 'فيردى هى شركه مساهمه مصريه متخصصه فى انتاج وتوزيع الاسمده المتخصصه والكيماويات وبالتالى نضمن استمرار تحسين جوده وحلول مبتكره بالاضافه الى ذلك اننا نهتم بالصناعه المصريه ونضمن خدمتنا الفنيه ونعطى شراكه واعده لتحقيق الازدهار الانسانى للحفاظ على ثقه عملائنا حيث ان الجوده هيا المعيار الاول ولذلك يتم التحقق من جميع المنتجات فى كل مستوى والتاكد من تحقيق مقياس التميز المطلوب لتحقيق التميز فى قطاع الاعمال',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'about_index_en',
            'display_name' => 'about_index_en',
            'type' => 3,
            'value' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'about_message_question_ar',
            'display_name' => 'About Us In Appointment Page Title AR',
            'type' => 1,
            'value' => 'بسبسي بس بسي ب',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'about_message_question_en',
            'display_name' => 'About Us In Appointment Page Title EN',
            'type' => 1,
            'value' => 'dasdasdasd das dda d as d as',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'about_question_photo',
            'display_name' => 'About Us In Appointment Page Photo',
            'type' => 2,
                'value' => 'photo.jpg',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'about_index_question_ar',
            'display_name' => 'About Us In Appointment Page AR',
            'type' => 3,
            'value' => 'فيردى هى شركه مساهمه مصريه متخصصه فى انتاج وتوزيع الاسمده المتخصصه والكيماويات وبالتالى نضمن استمرار تحسين جوده وحلول مبتكره بالاضافه الى ذلك اننا نهتم بالصناعه المصريه ونضمن خدمتنا الفنيه ونعطى شراكه واعده لتحقيق الازدهار الانسانى للحفاظ على ثقه عملائنا حيث ان الجوده هيا المعيار الاول ولذلك يتم التحقق من جميع المنتجات فى كل مستوى والتاكد من تحقيق مقياس التميز المطلوب لتحقيق التميز فى قطاع الاعمال',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'about_index_question_en',
            'display_name' => 'About Us In Appointment Page EN',
>>>>>>> a08834609e574814c04d9dd5b02aed321e40c1d9
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
<<<<<<< HEAD
        $config::create([
            'var' => 'address',
            'ar' => [
                'display_name' => 'العنوان',
            ],
            'en' => [
                'display_name' => 'address',
            ],
=======
        $config::insert([
            'var' => 'address_ar',
            'display_name' => 'Address Arabic',
            'type' => 3,
            'value' => '23 st cairo',
            'category_id' => 3
        ]);

        $config::insert([
            'var' => 'address_en',
            'display_name' => 'Address English',
>>>>>>> a08834609e574814c04d9dd5b02aed321e40c1d9
            'type' => 3,
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

<<<<<<< HEAD
=======
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
        $config::insert([
            'var' => 'about_photo',
            'display_name' => 'About Photo',
            'type' => 2,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'appointment_photo',
            'display_name' => 'Appointment Photo',
            'type' => 2,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'first_title_en',
            'display_name' => 'First Title English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'first_title_ar',
            'display_name' => 'First Title Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'first_desc_en',
            'display_name' => 'First Desc English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'first_desc_ar',
            'display_name' => 'First Desc Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'second_title_en',
            'display_name' => 'Second Title English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'second_title_ar',
            'display_name' => 'Second Title Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'second_desc_en',
            'display_name' => 'Second Desc English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'second_desc_ar',
            'display_name' => 'Second Desc Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'third_title_en',
            'display_name' => 'Third Title English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'third_title_ar',
            'display_name' => 'Third Title Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'third_desc_en',
            'display_name' => 'Third Desc English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'third_desc_ar',
            'display_name' => 'Third Desc Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);



        $config::insert([
            'var' => 'fourth_title_en',
            'display_name' => 'Fourth Title English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'fourth_title_ar',
            'display_name' => 'Fourth Title Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'fourth_desc_en',
            'display_name' => 'Fourth Desc English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'fourth_desc_ar',
            'display_name' => 'Fourth Desc Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'fifth_title_en',
            'display_name' => 'Fifth Title English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'fifth_title_ar',
            'display_name' => 'Fifth Title Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'fifth_desc_en',
            'display_name' => 'Fifth Desc English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'fifth_desc_ar',
            'display_name' => 'Fifth Desc Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'sixth_title_en',
            'display_name' => 'Sixth Title English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'sixth_title_ar',
            'display_name' => 'Sixth Title Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'sixth_desc_en',
            'display_name' => 'Sixth Desc English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'sixth_desc_ar',
            'display_name' => 'Sixth Desc Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'seventh_title_en',
            'display_name' => 'Seventh Title English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'seventh_title_ar',
            'display_name' => 'Seventh Title Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'seventh_desc_en',
            'display_name' => 'Seventh Desc English',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'seventh_desc_ar',
            'display_name' => 'Seventh Desc Arabic',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);
>>>>>>> a08834609e574814c04d9dd5b02aed321e40c1d9

    }
}
