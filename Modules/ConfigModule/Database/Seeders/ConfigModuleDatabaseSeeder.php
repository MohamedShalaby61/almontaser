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
        $config_categ::insert([
            'title' => 'Ads'
        ]);


        //////////////////////////////////////////////////////////////////////////////////////
        ///  General  ///////////////////////////////////////////////////////////////////////

        $config::insert([
            'var' => 'title_ar',
            'display_name' => 'Website Name Arabic',
            'type' => 1,
            'value' => 'Car Rental',
            'category_id' => 1
        ]);
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
            'var' => 'address_ar',
            'display_name' => 'Address Arabic',
            'type' => 3,
            'value' => '23 st cairo',
            'category_id' => 3
        ]);

        $config::insert([
            'var' => 'address_en',
            'display_name' => 'Address English',
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

    }
}
