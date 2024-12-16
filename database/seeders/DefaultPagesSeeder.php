<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DefaultPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'name' => [
                    "en" => "Our Mission",
                    "ar" => "مهمتنا"
                    ],
                'content' => [
                    "en" => "<p>To provide exceptional car rental services by offering luxury, sports, and SUV vehicles tailored to our customers' needs, ensuring comfort and unforgettable experiences in Dubai and the Emirates.</p>",
                    "ar" => "<p>تقديم خدمات تأجير سيارات استثنائية من خلال تقديم سيارات فاخرة ورياضية ودفع رباعي تلبي احتياجات عملائنا، مما يضمن الراحة وتجارب لا تُنسى في دبي والإمارات.</p>"
                ],
                'slug' => Str::slug('Our Mission'),
                'image' => null,
                'show_header' => true,
                'show_footer' => true,
                'show_rent_car' => true,
                'is_default' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => [
                    "en" => "Our Vision",
                    "ar" => "رؤيتنا"
                ],
                'content' => [
                    "en" => "<p>To be the leading luxury car rental provider in Dubai and the Emirates, setting new standards in customer satisfaction, vehicle quality, and service excellence.</p>",
                    "ar" => "<p>أن نكون المزود الرائد لخدمات تأجير السيارات الفاخرة في دبي والإمارات، ووضع معايير جديدة في رضا العملاء وجودة المركبات وتميز الخدمة.</p>"
                ],
                'slug' => Str::slug('Our Vision'),
                'image' => null,
                'show_header' => true,
                'show_footer' => true,
                'show_rent_car' => true,
                'is_default' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
