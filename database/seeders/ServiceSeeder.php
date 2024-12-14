<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'title' => [
                    'en' => 'Car Rental',
                    'ar' => 'تأجير السيارات',
                ],
                'description' => [
                    'en' => 'Our car rental service offers a vast array of vehicles to match any need or budget. Choose from compact cars for city rides, spacious SUVs for family trips, or luxury vehicles for a special occasion. We guarantee competitive pricing, straightforward terms, and 24/7 support to ensure a smooth rental experience.',
                    'ar' => 'تقدم خدمة تأجير السيارات لدينا مجموعة واسعة من المركبات لتناسب أي احتياج أو ميزانية. اختر من بين السيارات المدمجة للتنقل في المدينة، سيارات الدفع الرباعي الفسيحة للرحلات العائلية، أو السيارات الفاخرة للمناسبات الخاصة. نضمن لك أسعارًا تنافسية وشروطًا واضحة ودعمًا على مدار الساعة لضمان تجربة تأجير سلسة.',
                ],
                'content' => [
                    'en' => '<p>We provide cars for <strong>daily</strong>, <em>weekly</em>, and <u>monthly rentals</u> to suit your needs. Our fleet includes a wide range of vehicles from economy to luxury models, ensuring that you find the perfect car for your requirements. Whether you need a compact car for city driving or a spacious SUV for family trips, we have you covered. Enjoy competitive prices, flexible rental terms, and excellent customer support with every booking.</p>',
                    'ar' => '<p>نقدم سيارات للإيجار <strong>اليومي</strong>، <em>الأسبوعي</em>، و<u>الشهري</u> لتلبية احتياجاتك. يشمل أسطولنا مجموعة متنوعة من المركبات من النماذج الاقتصادية إلى الفاخرة، مما يضمن لك العثور على السيارة المثالية لتلبية متطلباتك. سواء كنت بحاجة إلى سيارة صغيرة للتنقل داخل المدينة أو سيارة دفع رباعي واسعة للرحلات العائلية، نحن هنا لخدمتك. استمتع بأسعار تنافسية وشروط تأجير مرنة ودعم عملاء متميز مع كل حجز.</p>',
                ],
                'image' => 'services/car-rental.jpg',
            ],
            [
                'title' => [
                    'en' => 'Chauffeur Services',
                    'ar' => 'خدمات السائق',
                ],
                'description' => [
                    'en' => 'Our chauffeur services combine luxury, convenience, and professionalism. Enjoy the peace of mind of having a highly trained driver manage your transportation while you relax or focus on your tasks. Ideal for business events, weddings, or city tours.',
                    'ar' => 'تجمع خدمات السائق لدينا بين الفخامة والراحة والاحترافية. استمتع براحة البال مع وجود سائق مدرب تدريباً عالياً يتولى إدارة النقل الخاص بك بينما تسترخي أو تركز على مهامك. مثالي للأحداث التجارية أو حفلات الزفاف أو جولات المدينة.',
                ],
                'content' => [
                    'en' => '<p>Enjoy the <strong>luxury</strong> of a personal chauffeur for your journeys. Our professional drivers are highly trained, courteous, and knowledgeable about local routes, ensuring a seamless travel experience. Whether you need transportation for a business meeting, special event, or sightseeing, our chauffeur services provide unmatched convenience and style. Relax in a comfortable, well-maintained vehicle while we take care of the driving, allowing you to focus on what matters most.</p>',
                    'ar' => '<p>استمتع برفاهية وجود <strong>سائق شخصي</strong> لرحلاتك. يتميز سائقونا بالاحترافية العالية والأدب والمعرفة التامة بالطرق المحلية، مما يضمن لك تجربة سفر سلسة. سواء كنت بحاجة إلى وسيلة نقل لاجتماع عمل أو حدث خاص أو جولة سياحية، توفر خدماتنا للسائقين الراحة والأناقة التي لا مثيل لها. استرخِ في مركبة مريحة ومُصانة جيدًا بينما نتولى القيادة، مما يتيح لك التركيز على ما يهمك.</p>',
                ],
                'image' => 'services/chauffeur-services.jpg',
            ],
            [
                'title' => [
                    'en' => 'Airport Transfers',
                    'ar' => 'خدمات النقل من وإلى المطار',
                ],
                'description' => [
                    'en' => 'Make your airport transfers seamless with our reliable and punctual services. Our drivers ensure timely pickups and drop-offs, allowing you to travel stress-free. Choose from a variety of vehicles to suit your luggage and travel needs.',
                    'ar' => 'اجعل انتقالاتك من وإلى المطار سلسة مع خدماتنا الموثوقة والدقيقة. يضمن سائقونا الالتزام بالمواعيد للنقل، مما يتيح لك السفر بدون قلق. اختر من بين مجموعة متنوعة من المركبات لتناسب احتياجات الأمتعة والسفر الخاصة بك.',
                ],
                'content' => [
                    'en' => '<p>Arrive at your destination <strong>comfortably</strong> and <em>on time</em> with our airport transfer services. Our fleet includes options for all group sizes, and our drivers are committed to providing a hassle-free experience. We monitor flight schedules to ensure timely pickups and adjust for delays.</p>',
                    'ar' => '<p>وصل إلى وجهتك <strong>براحة</strong> و<em>في الوقت المناسب</em> مع خدمات النقل من وإلى المطار. يشمل أسطولنا خيارات تناسب جميع أحجام المجموعات، ويكرس سائقونا جهودهم لتقديم تجربة خالية من المتاعب. نراقب جداول الرحلات الجوية لضمان النقل في الوقت المناسب والتكيف مع أي تأخير.</p>',
                ],
                'image' => 'services/airport-transfer.jpg',
            ],
        ];

        foreach ($services as $service) {
            DB::table('services')->insert([
                'title' => json_encode($service['title']),
                'description' => json_encode($service['description']),
                'content' => json_encode($service['content']),
                'image' => $service['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
