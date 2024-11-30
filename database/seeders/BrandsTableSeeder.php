<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('brands')->delete();

        \DB::table('brands')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => '{"en":"PEUGEOT","ar":"بيجو"}',
                'image' => 'brands/peugeot.webp',
                'slug' => 'peugeot',
                'sync_id' => '89',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-09-03 17:53:47',
                'page_title' => '{"ar":"تأجير سيارة بيجو دبي","en":"Rent Peugeot Dubai"}',
                'page_description' => '{"ar":"استئجار سيارات بيجو في دبي: اكتشف أناقة وأداء سيارات بيجو من خلال خدمة تأجير السيارات الموثوقة لدينا في دبي. اختر من بين مجموعة من موديلات بيجو واستمتع برحلة مريحة وأنيقة أثناء إقامتك في المدينة.","en":"Rent Peugeot cars in Dubai: Discover the elegance and performance of Peugeot cars with our reliable car rental service in Dubai. Choose from a range of Peugeot models and enjoy a comfortable and stylish ride during your stay in the city."}',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => '{"en":"Chevrolet","ar":"شفروليه"}',
                'image' => 'brands/chevrolet.webp',
                'slug' => 'chevrolet',
                'sync_id' => '59',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 22:59:52',
                'page_title' => '{"en":"Rent a Chevrolet Car in Dubai, UAE","ar":"تأجير سيارات شفروليه في دبي"}',
                'page_description' => '{"en":"Rent Chevrolet cars in Dubai: Experience the power and versatility of Chevrolet cars with our convenient car rental options in Dubai. Whether you need a compact car or an SUV, we have a wide selection of Chevrolet vehicles to suit your needs and enhance your travel experience.","ar":"استئجار سيارات شيفروليه في دبي: اختبر قوة وتعدد استخدامات سيارات شيفروليه من خلال خيارات تأجير السيارات المريحة لدينا في دبي. سواء كنت بحاجة إلى سيارة مدمجة أو سيارة دفع رباعي، فلدينا مجموعة واسعة من سيارات شيفروليه التي تناسب احتياجاتك وتعزز تجربة سفرك."}',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => '{"en":"Ford","ar":"فورد"}',
                'image' => 'brands/ford.webp',
                'slug' => 'ford',
                'sync_id' => '60',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:01:27',
                'page_title' => '{"en":"Ford Rental Cars in Dubai, UAE","ar":"تأجير سيارات فورد فى دبى"}',
                'page_description' => '{"en":"Rent Ford cars in Dubai: Get behind the wheel of a Ford car and explore Dubai with confidence. Our car rental service offers a variety of Ford models, from compact cars to spacious SUVs, ensuring a smooth and enjoyable journey throughout the city.","ar":"استئجار سيارات فورد في دبي: اجلس خلف عجلة قيادة سيارة فورد واستكشف دبي بثقة. تقدم خدمة تأجير السيارات لدينا مجموعة متنوعة من موديلات فورد، بدءًا من السيارات الصغيرة وحتى سيارات الدفع الرباعي الفسيحة، مما يضمن رحلة سلسة وممتعة في جميع أنحاء المدينة."}',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => '{"en":"GMC","ar":"جي أم سي"}',
                'image' => 'brands/gmc.webp',
                'slug' => 'gmc',
                'sync_id' => '61',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:02:53',
                'page_title' => '{"en":"GMC Car Rental in Dubai","ar":"تأجير سيارات GMC فى دبى"}',
                'page_description' => '{"en":"Rent GMC cars in Dubai: Drive in style and luxury with our GMC car rental options in Dubai. Whether you\'re looking for a rugged SUV or a spacious pickup truck, our fleet of GMC vehicles will meet your expectations and provide comfort and reliability during your travels.","ar":"استئجار سيارات جي إم سي في دبي: استمتع بالقيادة بأناقة ورفاهية مع خيارات تأجير سيارات جي إم سي في دبي. سواء كنت تبحث عن سيارة دفع رباعي متينة أو شاحنة صغيرة فسيحة، فإن أسطول سيارات جي إم سي لدينا سوف يلبي توقعاتك ويوفر لك الراحة والموثوقية أثناء رحلاتك."}',
            ),
            4 =>
            array (
                'id' => 5,
                'title' => '{"en":"Dodge","ar":"دودج"}',
                'image' => 'brands/dodge.webp',
                'slug' => 'dodge',
                'sync_id' => '62',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:05:27',
                'page_title' => '{"en":"Dodge Challenger Rental in Dubai","ar":"Dodge Challenger Rental in Dubai"}',
                'page_description' => '{"en":"Rent Dodge cars in Dubai: Experience the thrill of driving a Dodge car in Dubai with our hassle-free car rental service. Choose from a range of Dodge models and enjoy the power, performance, and unique design that Dodge is known for.","ar":"استئجار سيارات دودج في دبي: استمتع بتجربة قيادة سيارة دودج في دبي من خلال خدمة تأجير السيارات الخالية من المتاعب. اختر من بين مجموعة من موديلات دودج واستمتع بالقوة والأداء والتصميم الفريد الذي تشتهر به دودج."}',
            ),
            5 =>
            array (
                'id' => 6,
                'title' => '{"en":"Jeep","ar":"جيب"}',
                'image' => 'brands/jeep.webp',
                'slug' => 'jeep',
                'sync_id' => '63',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:07:32',
                'page_title' => '{"en":"Jeep Rental Dubai","ar":"تأجير سيارات جيب فى دبى"}',
                'page_description' => '{"en":"Rent Jeep cars in Dubai: Embark on off-road adventures or explore the city in style with our Jeep car rental service in Dubai. Discover the iconic Jeep models, known for their ruggedness and capability, and enjoy a memorable driving experience during your time in Dubai.","ar":"استأجر سيارات جيب في دبي: انطلق في مغامرات على الطرق الوعرة أو استكشف المدينة بأناقة مع خدمة تأجير سيارات جيب في دبي. اكتشف طرازات جيب المميزة، المعروفة بقوتها وقدراتها، واستمتع بتجربة قيادة لا تُنسى خلال إقامتك في دبي."}',
            ),
            6 =>
            array (
                'id' => 7,
                'title' => '{"en":"Cadillac","ar":"كاديلاك"}',
                'image' => 'brands/cadillac.webp',
                'slug' => 'cadillac',
                'sync_id' => '65',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:09:31',
                'page_title' => '{"en":"Rent Cadillac In Dubai","ar":"Rent Cadillac In Dubai"}',
                'page_description' => '{"en":"Rent Cadillac cars in Dubai: Indulge in luxury and sophistication with our Cadillac car rental service in Dubai. Experience the comfort, elegance, and advanced features of Cadillac vehicles as you navigate the city in style and opulence.","ar":"استئجار سيارات كاديلاك في دبي: انغمس في الفخامة والرقي مع خدمة تأجير سيارات كاديلاك في دبي. استمتع بتجربة الراحة والأناقة والميزات المتقدمة لسيارات كاديلاك أثناء تنقلك في المدينة بأناقة وفخامة."}',
            ),
            7 =>
            array (
                'id' => 8,
                'title' => '{"en":"Chrysler","ar":"كرايزلر"}',
                'image' => 'brands/chrysler.webp',
                'slug' => 'chrysler',
                'sync_id' => '66',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:14:15',
                'page_title' => '{"en":"Rent Chrysler Car in Dubai, UAE | Best rates","ar":"Rent Chrysler Car in Dubai, UAE | Best rates"}',
                'page_description' => '{"en":"8. Rent Chrysler cars in Dubai: Enjoy a smooth and comfortable ride with our Chrysler car rental service in Dubai. From sedans to minivans, our fleet of Chrysler vehicles offers spaciousness, reliability, and modern amenities for your convenience.","ar":"8. استئجار سيارات كرايسلر في دبي: استمتع برحلة سلسة ومريحة مع خدمة تأجير سيارات كرايسلر في دبي. من سيارات السيدان إلى الشاحنات الصغيرة، يوفر أسطول سيارات كرايسلر لدينا الرحابة والموثوقية ووسائل الراحة الحديثة لراحتك."}',
            ),
            8 =>
            array (
                'id' => 9,
                'title' => '{"en":"Lincoln","ar":"لينكولن"}',
                'image' => 'brands/lincoln.webp',
                'slug' => 'lincoln',
                'sync_id' => '68',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:16:07',
                'page_title' => '{"en":"lincoln rent a car in dubai | Best rates","ar":"lincoln rent a car in dubai | Best rates"}',
                'page_description' => '{"en":"Rent Lincoln cars in Dubai: Enhance your travel experience with our Lincoln car rental service in Dubai. Experience the luxury, comfort, and advanced technology of Lincoln vehicles as you explore the city in style and elegance.","ar":"استئجار سيارات لينكولن في دبي: عزز تجربة سفرك من خلال خدمة تأجير سيارات لينكولن في دبي. استمتع بالفخامة والراحة والتكنولوجيا المتقدمة لمركبات لينكولن بينما تستكشف المدينة بأسلوب وأناقة."}',
            ),
            9 =>
            array (
                'id' => 10,
                'title' => '{"en":"Mercedes","ar":"مرسيدس"}',
                'image' => 'brands/mercedes.webp',
                'slug' => 'mercedes',
                'sync_id' => '72',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-08-03 05:39:56',
                'page_title' => '{"en":"Rent Mercedes in Dubai","ar":"تأجير سيارات مرسيدس فى دبى"}',
                'page_description' => '{"en":"Experience luxury and performance by renting a Mercedes in Dubai. Choose from a range of models for comfort and the power of AMG series for thrill-seekers. With cutting-edge technology, plush interiors, and superior handling, driving a Mercedes offers an unforgettable experience as you explore the city\'s stunning skyline and attractions. Enjoy competitive rates, flexible rental options, and exceptional customer service, making your trip to Dubai truly memorable.","ar":"استمتع بالفخامة والأداء من خلال استئجار سيارة مرسيدس في دبي. اختر من بين مجموعة من الموديلات التي توفر لك الراحة وقوة سلسلة AMG لمحبي الإثارة. بفضل التكنولوجيا المتطورة والتصميمات الداخلية الفخمة والتحكم الفائق، توفر لك قيادة سيارة مرسيدس تجربة لا تُنسى أثناء استكشاف أفق المدينة المذهل ومعالمها السياحية. استمتع بأسعار تنافسية وخيارات استئجار مرنة وخدمة عملاء استثنائية، مما يجعل رحلتك إلى دبي لا تُنسى حقًا."}',
            ),
            10 =>
            array (
                'id' => 11,
                'title' => '{"en":"BMW","ar":"بي أم دبليو"}',
                'image' => 'brands/bmw.webp',
                'slug' => 'bmw',
                'sync_id' => '73',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-09-05 15:14:14',
                'page_title' => '{"en":"BMW Car Rental in Dubai","ar":"تأجير سيارات بي أم دبليو فى دبى"}',
                'page_description' => '{"en":"Unleash your inner driving enthusiast by renting a BMW from TAJEER Rent a Car in Dubai. Our premium fleet includes the latest BMW models, renowned for their dynamic performance, innovative technology, and luxurious interiors. Whether you\'re in town for business or leisure, a BMW rental offers a memorable driving experience. We pride ourselves on providing excellent customer service, flexible rental options, and affordable rates. Choose TAJEER Rent a Car for your BMW adventure in Dubai and enjoy the open road!","ar":"أطلق العنان لحماسك الداخلي في القيادة من خلال استئجار سيارة BMW من شركة TAJEER لتأجير السيارات في دبي. يضم أسطولنا المتميز أحدث طرازات BMW، المشهورة بأدائها الديناميكي وتقنياتها المبتكرة وتصميماتها الداخلية الفاخرة. سواء كنت في المدينة للعمل أو الترفيه، فإن استئجار سيارة BMW يوفر لك تجربة قيادة لا تُنسى. نحن نفخر بتقديم خدمة عملاء ممتازة وخيارات تأجير مرنة وأسعار معقولة. اختر تأجير لتأجير السيارات لمغامرة BMW الخاصة بك في دبي واستمتع بالطريق المفتوح!"}',
            ),
            11 =>
            array (
                'id' => 12,
                'title' => '{"en":"Porsche","ar":"بورش"}',
                'image' => 'brands/porsche.webp',
                'slug' => 'porsche',
                'sync_id' => '74',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:35:03',
                'page_title' => '{"en":"Rent Porsche Car in Dubai","ar":"تأجير سيارات بورش فى دبى"}',
                'page_description' => '{"en":"Rent Porsche cars in Dubai: Drive in style and performance with our Porsche car rental service in Dubai. Choose from our selection of iconic models and make a statement on the road.","ar":"استأجر سيارات بورشه في دبي: استمتع بالقيادة بأناقة وأداء مع خدمة تأجير سيارات بورشه في دبي. اختر من بين مجموعتنا المختارة من الطرازات المميزة واترك انطباعًا على الطريق."}',
            ),
            12 =>
            array (
                'id' => 13,
                'title' => '{"en":"Audi","ar":"أودي"}',
                'image' => 'brands/audi.webp',
                'slug' => 'audi',
                'sync_id' => '75',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-31 03:32:01',
                'page_title' => '{"en":"Rent Audi Dubai","ar":"تأجير سيارات أودي فى دبى"}',
                'page_description' => '{"en":"Experience the perfect combination of luxury and performance by renting an Audi from TAJEER Rent a Car in Dubai. Our diverse selection of Audi models caters to all tastes, whether you desire a sporty coupe or a spacious SUV. With advanced engineering and a focus on comfort, driving an Audi guarantees an exhilarating journey. Enjoy personalized service, flexible rental terms, and competitive pricing. Discover the thrill of driving an Audi in the vibrant city of Dubai – your adventure begins here!","ar":"استمتع بالمزيج المثالي بين الفخامة والأداء من خلال استئجار سيارة أودي من شركة TAJEER لتأجير السيارات في دبي. تلبي مجموعتنا المتنوعة من موديلات أودي جميع الأذواق، سواء كنت ترغب في سيارة كوبيه رياضية أو سيارة رياضية متعددة الاستخدامات واسعة. بفضل الهندسة المتقدمة والتركيز على الراحة، تضمن لك قيادة سيارة أودي رحلة مبهجة. استمتع بخدمة شخصية وشروط إيجار مرنة وأسعار تنافسية. اكتشف التشويق الذي توفره لك قيادة سيارة أودي في مدينة دبي النابضة بالحياة - تبدأ مغامرتك هنا!"}',
            ),
            13 =>
            array (
                'id' => 14,
                'title' => '{"en":"Land Rover","ar":"لاند روفر"}',
                'image' => 'brands/land-rover.webp',
                'slug' => 'land-rover',
                'sync_id' => '76',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:39:33',
                'page_title' => '{"en":"Land Rover Rental in Dubai","ar":"تأجير سيارات لاند روفر فى دبى"}',
                'page_description' => '{"en":"Rent Land Rover and Range Rover cars in Dubai: Conquer the desert and explore the city in style with our Land Rover and Range Rover car rental service in Dubai. Choose from our selection of rugged and luxurious SUVs.","ar":"استئجار سيارات لاند روفر ورينج روفر في دبي: غزو الصحراء واستكشف المدينة بأناقة من خلال خدمة تأجير سيارات لاند روفر ورينج روفر في دبي. اختر من بين مجموعتنا المختارة من سيارات الدفع الرباعي القوية والفاخرة."}',
            ),
            14 =>
            array (
                'id' => 15,
                'title' => '{"en":"Jaguar","ar":"جاكور"}',
                'image' => 'brands/jaguar.webp',
                'slug' => 'jaguar',
                'sync_id' => '77',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:41:31',
                'page_title' => '{"en":"Jaguar Car Rental in Dubai","ar":"تأجير سيارات جاكور فى دبى"}',
                'page_description' => '{"en":"Rent Jaguar cars in Dubai: Experience the perfect balance of elegance and power with our Jaguar car rental service in Dubai. Choose from our range of models and enjoy a refined driving experience.","ar":"استئجار سيارات جاكوار في دبي: استمتع بالتوازن المثالي بين الأناقة والقوة من خلال خدمة تأجير سيارات جاكوار في دبي. اختر من بين مجموعة الطرازات لدينا واستمتع بتجربة قيادة راقية."}',
            ),
            15 =>
            array (
                'id' => 16,
                'title' => '{"en":"Volkswagen","ar":"فولكس واجن"}',
                'image' => 'brands/volkswagen.webp',
                'slug' => 'volkswagen',
                'sync_id' => '78',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:43:53',
                'page_title' => '{"en":"Rent Volkswagen in Dubai","ar":"تأجير سيارات  فولكس في دبي"}',
                'page_description' => '{"en":"Rent Volkswagen cars in Dubai: Discover reliability and comfort with our Volkswagen car rental service in Dubai. Choose from our selection of models and enjoy a smooth ride.","ar":"استئجار سيارات فولكس فاجن في دبي: اكتشف الموثوقية والراحة مع خدمة تأجير سيارات فولكس فاجن في دبي. اختر من بين مجموعة الموديلات لدينا واستمتع برحلة سلسة."}',
            ),
            16 =>
            array (
                'id' => 17,
                'title' => '{"en":"Bentley","ar":"بنتلي"}',
                'image' => 'brands/bentley.webp',
                'slug' => 'bentley',
                'sync_id' => '79',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:46:30',
                'page_title' => '{"en":"Rent Bentley car","ar":"تأجير سيارات بنتلي فى دبى"}',
                'page_description' => '{"en":"Rent Bentley cars in Dubai: Indulge in luxury and opulence with our Bentley car rental service in Dubai. Choose from our selection of prestigious models and enjoy a truly memorable experience.","ar":"استئجار سيارات بنتلي في دبي: انغمس في الفخامة والرفاهية مع خدمة تأجير سيارات بنتلي في دبي. اختر من بين مجموعتنا المختارة من الطرازات المرموقة واستمتع بتجربة لا تُنسى حقًا."}',
            ),
            17 =>
            array (
                'id' => 18,
                'title' => '{"en":"Rolls-Royce","ar":"رولز رويس"}',
                'image' => 'brands/rolls-royce.webp',
                'slug' => 'rolls-royce',
                'sync_id' => '80',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:47:51',
                'page_title' => '{"en":"Rolls Royce Rental Dubai, UAE","ar":"تأجير سيارات رولز رويس فى دبى"}',
                'page_description' => '{"en":"Rent Rolls Royce cars in Dubai: Experience the epitome of luxury and elegance with our Rolls Royce car rental service in Dubai. Choose from our selection of iconic models and make a grand entrance wherever you go.","ar":"استئجار سيارات رولز رويس في دبي: اختبر مثالاً للفخامة والأناقة مع خدمة تأجير سيارات رولز رويس في دبي. اختر من بين مجموعتنا المختارة من النماذج المميزة وادخل بشكل رائع أينما ذهبت."}',
            ),
            18 =>
            array (
                'id' => 19,
                'title' => '{"en":"Maserati","ar":"مازيراتي"}',
                'image' => 'brands/maserati.webp',
                'slug' => 'maserati',
                'sync_id' => '81',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-17 23:51:27',
                'page_title' => '{"ar":"تأجير مازيراتي دبي","en":"ٍRent Maserati Dubai"}',
                'page_description' => '{"ar":"استئجار سيارات مازيراتي في دبي: استمتع بروح الفخامة والأداء الإيطالي من خلال خدمة تأجير سيارات مازيراتي في دبي. اختر من بين مجموعة الطرازات لدينا واستمتع بتجربة قيادة مثيرة.","en":"Rent Maserati cars in Dubai: Embrace the spirit of Italian luxury and performance with our Maserati car rental service in Dubai. Choose from our range of models and enjoy a thrilling driving experience."}',
            ),
            19 =>
            array (
                'id' => 20,
                'title' => '{"en":"Ferrari","ar":"فيراري"}',
                'image' => 'brands/ferrari.webp',
                'slug' => 'ferrari',
                'sync_id' => '82',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-09-05 15:03:13',
                'page_title' => '{"en":"Rent Ferrari in Dubai | Ferrari Car Rental UAE","ar":"Rent Ferrari in Dubai | Ferrari Car Rental UAE"}',
                'page_description' => '{"en":"Rent Ferrari cars in Dubai: Fulfill your dreams of driving a Ferrari with our Ferrari car rental service in Dubai. Choose from our selection of powerful and stylish models and experience the thrill of the open road.","ar":"استئجار سيارات فيراري في دبي: حقق أحلامك في قيادة سيارة فيراري من خلال خدمة تأجير سيارات فيراري في دبي. اختر من بين مجموعتنا المختارة من الطرازات القوية والأنيقة واستمتع بتجربة إثارة الطريق المفتوح."}',
            ),
            20 =>
            array (
                'id' => 21,
                'title' => '{"en":"Aston Martin","ar":"استون مارتن"}',
                'image' => 'brands/aston-martin.png',
                'slug' => 'aston-martin',
                'sync_id' => '85',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:06:11',
                'page_title' => '{"en":"Rent Aston Martin in Dubai |Best Price","ar":"Rent Aston Martin in Dubai |Best Price"}',
                'page_description' => '{"en":"Rent Aston Martin cars in Dubai: Experience luxury at its finest with our Aston Martin car rentals in Dubai. Drive in style and make a statement wherever you go.","ar":"استئجار سيارات أستون مارتن في دبي: استمتع بتجربة الرفاهية في أفضل حالاتها مع تأجير سيارات أستون مارتن في دبي. قم بالقيادة بأناقة واترك انطباعًا أينما ذهبت."}',
            ),
            21 =>
            array (
                'id' => 22,
                'title' => '{"en":"Renault","ar":"رينو"}',
                'image' => 'brands/renault.webp',
                'slug' => 'renault',
                'sync_id' => '86',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:08:18',
                'page_title' => '{"ar":"تأجير سيارات رينو دبي","en":"Rent Renault car Dubai"}',
                'page_description' => '{"ar":"استئجار سيارات رينو في دبي: اكتشف المزيج المثالي من الراحة والأداء مع سيارات رينو المستأجرة في دبي. استكشف المدينة بكل سهولة وأناقة.","en":"Rent Renault cars in Dubai: Discover the perfect blend of comfort and performance with our Renault car rentals in Dubai. Explore the city with ease and style."}',
            ),
            22 =>
            array (
                'id' => 23,
                'title' => '{"en":"Mini","ar":"ميني"}',
                'image' => 'brands/mini.webp',
                'slug' => 'mini',
                'sync_id' => '87',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:10:04',
                'page_title' => '{"en":"Mini Cooper Rental Dubai","ar":"تأجير سيارات ميني كوبر فى دبى"}',
                'page_description' => '{"en":"Rent Mini cars in Dubai: Get ready to turn heads with our Mini car rentals in Dubai. Enjoy the iconic design and zippy performance of these stylish vehicles.","ar":"استئجار سيارات ميني في دبي: استعد لجذب الأنظار من خلال تأجير سيارات ميني في دبي. استمتع بالتصميم الأيقوني والأداء الرائع لهذه المركبات الأنيقة."}',
            ),
            23 =>
            array (
                'id' => 24,
                'title' => '{"en":"McLaren","ar":"ماكلارن"}',
                'image' => 'brands/mclaren.webp',
                'slug' => 'mclaren',
                'sync_id' => '88',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:11:30',
                'page_title' => '{"en":"McLaren for rent in Dubai | supercar rental","ar":"McLaren for rent in Dubai | supercar rental"}',
                'page_description' => '{"en":"Rent McLaren cars in Dubai: Feel the thrill of speed and luxury with our McLaren car rentals in Dubai. Experience the ultimate driving experience in the city.","ar":"استئجار سيارات ماكلارين في دبي: اشعر بإثارة السرعة والرفاهية مع تأجير سيارات ماكلارين في دبي. استمتع بتجربة القيادة المثالية في المدينة."}',
            ),
            24 =>
            array (
                'id' => 25,
                'title' => '{"en":"Citroen","ar":"ستروين"}',
                'image' => 'brands/citroen.webp',
                'slug' => 'citroen',
                'sync_id' => '92',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:13:09',
                'page_title' => '{"en":"Rent a Citroen Car in Dubai, UAE | Best rates | Book Now","ar":"Rent a Citroen Car in Dubai, UAE | Best rates | Book Now"}',
                'page_description' => '{"en":"Rent Citroen cars in Dubai: Experience French sophistication and elegance with our Citroen car rentals in Dubai. Enjoy a smooth and stylish ride.","ar":"استئجار سيارات سيتروين في دبي: استمتع بالرقي والأناقة الفرنسية مع تأجير سيارات سيتروين في دبي. استمتع برحلة سلسة وأنيقة."}',
            ),
            25 =>
            array (
                'id' => 26,
                'title' => '{"en":"Fiat","ar":"فيات"}',
                'image' => 'brands/fiat.jpg',
                'slug' => 'fiat',
                'sync_id' => '94',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:15:08',
                'page_title' => '{"ar":"تأجير سيارات فيات دبي","en":"Rent Fiat Dubai"}',
                'page_description' => '{"ar":"استئجار سيارات فيات في دبي: استكشف المدينة مع شركة فيات لتأجير السيارات في دبي. استمتع بالمزيج المثالي بين الأسلوب والكفاءة والمرح.","en":"Rent Fiat cars in Dubai: Explore the city with our Fiat car rentals in Dubai. Experience the perfect combination of style, efficiency, and fun."}',
            ),
            26 =>
            array (
                'id' => 27,
                'title' => '{"en":"Nissan","ar":"نيسان"}',
                'image' => 'brands/nissan.webp',
                'slug' => 'nissan',
                'sync_id' => '96',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:17:22',
                'page_title' => '{"en":"Rent Nissan Dubai","ar":"تأجير سيارات نيسان دبي"}',
                'page_description' => '{"en":"Rent Nissan cars in Dubai: Enjoy reliability and versatility with our Nissan car rentals in Dubai. Experience a comfortable and practical ride.","ar":"استئجار سيارات نيسان في دبي: استمتع بالموثوقية والتنوع مع تأجير سيارات نيسان في دبي. استمتع بتجربة قيادة مريحة وعملية."}',
            ),
            27 =>
            array (
                'id' => 28,
                'title' => '{"en":"Lexus","ar":"لكزس"}',
                'image' => 'brands/lexus.webp',
                'slug' => 'lexus',
                'sync_id' => '97',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:19:14',
                'page_title' => '{"en":"Rent Lexus in Dubai, UAE | Best rates","ar":"Rent Lexus in Dubai, UAE | Best rates"}',
                'page_description' => '{"en":"Rent Lexus cars in Dubai: Indulge in luxury and refinement with our Lexus car rentals in Dubai. Experience the epitome of comfort and sophistication.","ar":"استئجار سيارات لكزس في دبي: انغمس في الفخامة والرفاهية مع تأجير سيارات لكزس في دبي. استمتع بتجربة الراحة والرقي."}',
            ),
            28 =>
            array (
                'id' => 29,
                'title' => '{"en":"Toyota","ar":"تويوتا"}',
                'image' => 'brands/toyota.webp',
                'slug' => 'toyota',
                'sync_id' => '98',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:20:53',
                'page_title' => '{"en":"Rent Toyota Car in Dubai, UAE | Tajeer Car Rental","ar":"تأجير سيارات تويوتا فى دبى"}',
                'page_description' => '{"en":"9. Rent Toyota cars in Dubai: Trust in quality and reliability with our Toyota car rentals in Dubai. Enjoy a smooth and efficient ride wherever you go.","ar":"9. استئجار سيارات تويوتا في دبي: ثق في الجودة والموثوقية مع تأجير سيارات تويوتا في دبي. استمتع برحلة سلسة وفعالة أينما ذهبت."}',
            ),
            29 =>
            array (
                'id' => 30,
                'title' => '{"en":"Slingshot","ar":"Slingshot"}',
                'image' => 'brands/slingshot.png',
                'slug' => 'slingshot',
                'sync_id' => '123',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-06-22 07:54:10',
                'page_title' => '{"ar":""}',
                'page_description' => '{"ar":""}',
            ),
            30 =>
            array (
                'id' => 31,
                'title' => '{"en":"Honda","ar":"هوندا"}',
                'image' => 'brands/honda.webp',
                'slug' => 'honda',
                'sync_id' => '99',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:29:20',
                'page_title' => '{"en":"Rent Honda Car in Dubai, UAE | Best rates | Book Now","ar":"تأجير سيارات هوندا فى دبى"}',
                'page_description' => '{"en":"1. Rent Honda cars Dubai: Affordable and reliable Honda car rentals in Dubai. Choose from a wide range of Honda models for your next adventure.","ar":"1. استئجار سيارات هوندا دبي: تأجير سيارات هوندا بأسعار معقولة وموثوقة في دبي. اختر من بين مجموعة واسعة من موديلات هوندا لمغامرتك القادمة."}',
            ),
            31 =>
            array (
                'id' => 32,
                'title' => '{"en":"Mitsubishi","ar":"ميتسوبيشي"}',
                'image' => 'brands/mitsubishi.webp',
                'slug' => 'mitsubishi',
                'sync_id' => '100',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:30:32',
                'page_title' => '{"en":"Rent a Mitsubishi Car in Dubai","ar":"أستئجار سيارة ميتسوبيشي في دبي: الخيار المثالي"}',
                'page_description' => '{"en":"2. Rent Mitsubishi cars Dubai: Experience luxury and performance with our Mitsubishi car rentals in Dubai. Rent a Mitsubishi and explore the city in style.","ar":"2. استئجار سيارات ميتسوبيشي في دبي: استمتع بالفخامة والأداء مع تأجير سيارات ميتسوبيشي في دبي. استأجر سيارة ميتسوبيشي واستكشف المدينة بأناقة."}',
            ),
            32 =>
            array (
                'id' => 33,
                'title' => '{"en":"Infiniti","ar":"إنفينيتي"}',
                'image' => 'brands/infiniti.webp',
                'slug' => 'infiniti',
                'sync_id' => '101',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:32:16',
                'page_title' => '{"en":"Rent Infiniti Car in Dubai, UAE | Best rates | Book Now","ar":"Rent Infiniti Car in Dubai, UAE | Best rates | Book Now"}',
                'page_description' => '{"en":"Rent Infiniti cars Dubai: Discover the elegance and sophistication of Infiniti car rentals in Dubai. Drive in comfort and luxury with our wide selection of Infiniti models.","ar":"استئجار سيارات إنفينيتي دبي: اكتشف الأناقة والرقي لتأجير سيارات إنفينيتي في دبي. استمتع بالقيادة براحة وفخامة مع مجموعتنا الواسعة من موديلات إنفينيتي."}',
            ),
            33 =>
            array (
                'id' => 34,
                'title' => '{"en":"Mazda","ar":"مازدا"}',
                'image' => 'brands/mazda.webp',
                'slug' => 'mazda',
                'sync_id' => '103',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:33:55',
                'page_title' => '{"en":"Mazda Car Rental in Dubai","ar":"Mazda Car Rental in Dubai"}',
                'page_description' => '{"en":"4. Rent Mazda cars Dubai: Enjoy the thrill of driving a Mazda with our car rental service in Dubai. Rent a Mazda and explore the city with style and performance.","ar":"4. استئجار سيارات مازدا دبي: استمتع بإثارة قيادة سيارة مازدا مع خدمة تأجير السيارات لدينا في دبي. استأجر سيارة مازدا واستكشف المدينة بأناقة وأداء."}',
            ),
            34 =>
            array (
                'id' => 35,
                'title' => '{"en":"Kia","ar":"كيا"}',
                'image' => 'brands/kia.webp',
                'slug' => 'kia',
                'sync_id' => '104',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:36:10',
                'page_title' => '{"en":"Kia Car Rental in Dubai","ar":"Kia Car Rental in Dubai"}',
                'page_description' => '{"en":"5. Rent Kia cars Dubai: Affordable and reliable Kia car rentals in Dubai. Choose from a variety of Kia models and enjoy a comfortable and convenient ride.","ar":"5. استئجار سيارات كيا دبي: تأجير سيارات كيا بأسعار معقولة وموثوقة في دبي. اختر من بين مجموعة متنوعة من موديلات كيا واستمتع برحلة مريحة وملائمة."}',
            ),
            35 =>
            array (
                'id' => 36,
                'title' => '{"en":"Hyundai","ar":"هيونداي"}',
                'image' => 'brands/hyundai.webp',
                'slug' => 'hyundai',
                'sync_id' => '105',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:37:44',
                'page_title' => '{"en":"Rent a Hyundai Car in Dubai, UAE","ar":"Rent a Hyundai Car in Dubai, UAE"}',
                'page_description' => '{"en":"Rent Hyundai cars Dubai: Experience quality and performance with our Hyundai car rentals in Dubai. Rent a Hyundai and enjoy a smooth and comfortable ride.","ar":"استئجار سيارات هيونداي دبي: استمتع بالجودة والأداء مع تأجير سيارات هيونداي في دبي. استأجر سيارة هيونداي واستمتع برحلة سلسة ومريحة."}',
            ),
            36 =>
            array (
                'id' => 37,
                'title' => '{"en":"Jetour","ar":"Jetour"}',
                'image' => 'brands/jetour.png',
                'slug' => 'jetour',
                'sync_id' => '125',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:40:10',
                'page_title' => '{"ar":"تأجير سيارت جيتور الصينية دبي","en":"Rent Jetour Chinese car Dubai"}',
                'page_description' => '{"ar":"7. استئجار سيارات جيتور دبي: استكشف المدينة بأناقة مع تأجير سيارات جيتور في دبي. استأجر سيارة جيتور واستمتع بتجربة الراحة والرفاهية على الطريق.","en":"7. Rent Jetour cars Dubai: Explore the city in style with our Jetour car rentals in Dubai. Rent a Jetour and experience comfort and luxury on the road."}',
            ),
            37 =>
            array (
                'id' => 38,
                'title' => '{"en":"GAC","ar":"جي ايه سي"}',
                'image' => 'brands/gac.webp',
                'slug' => 'gac',
                'sync_id' => '107',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:42:30',
                'page_title' => '{"ar":"تأجير سيارات جاك الصينية","en":"Rent GAC Chinese car Dubai"}',
                'page_description' => '{"ar":"8. استئجار سيارات جاك دبي: تأجير سيارات جاك بأسعار معقولة وموثوقة في دبي. اختر من بين مجموعة من موديلات JAC واستمتع برحلة مريحة.","en":"8. Rent JAC cars Dubai: Affordable and reliable JAC car rentals in Dubai. Choose from a range of JAC models and enjoy a comfortable ride."}',
            ),
            38 =>
            array (
                'id' => 39,
                'title' => '{"en":"Suzuki","ar":"سوزوكي"}',
                'image' => 'brands/suzuki.webp',
                'slug' => 'suzuki',
                'sync_id' => '110',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:43:58',
                'page_title' => '{"en":"Rent Suzuki Car in Dubai, UAE","ar":"Rent Suzuki Car in Dubai, UAE"}',
                'page_description' => '{"en":"Rent Suzuki cars Dubai: Experience the reliability and efficiency of Suzuki car rentals in Dubai. Rent a Suzuki and enjoy a smooth and economical ride.","ar":"استئجار سيارات سوزوكي دبي: اختبر موثوقية وكفاءة تأجير سيارات سوزوكي في دبي. استأجر سيارة سوزوكي واستمتع برحلة سلسة واقتصادية."}',
            ),
            39 =>
            array (
                'id' => 40,
                'title' => '{"en":"Lamborghini","ar":"لامبورجيني"}',
                'image' => 'brands/16833991552.webp',
                'slug' => 'lamborghini',
                'sync_id' => '116',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:45:15',
                'page_title' => '{"en":"Rent lamborghini Dubai","ar":"Rent lamborghini Dubai"}',
                'page_description' => '{"en":"Rent Lamborghini cars Dubai: Fulfill your dreams of driving a Lamborghini with our car rental service in Dubai. Rent a Lamborghini and make a statement on the road.","ar":"استئجار سيارات لامبورغيني دبي: حقق أحلامك في قيادة سيارة لامبورغيني من خلال خدمة تأجير السيارات لدينا في دبي. استأجر سيارة لامبورغيني واترك انطباعًا على الطريق."}',
            ),
            40 =>
            array (
                'id' => 41,
                'title' => '{"en":"Tesla","ar":"تسلا"}',
                'image' => 'brands/tesla.webp',
                'slug' => 'tesla',
                'sync_id' => '118',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:47:44',
                'page_title' => '{"ar":"تأجير سيارات تسلا كهربائية دبي","en":"Rent Tesla Electric car Dubai"}',
                'page_description' => '{"ar":"استئجار سيارات تيسلا دبي: اختبر مستقبل القيادة مع تأجير سيارات تيسلا في دبي. استأجر سيارة تسلا واستمتع بقوة وابتكار السيارات الكهربائية.","en":"Rent Tesla cars Dubai: Experience the future of driving with our Tesla car rentals in Dubai. Rent a Tesla and enjoy the power and innovation of electric vehicles."}',
            ),
            41 =>
            array (
                'id' => 42,
                'title' => '{"en":"Range Rover","ar":"رنج روفر"}',
                'image' => 'brands/range-rover.webp',
                'slug' => 'range-rover',
                'sync_id' => '119',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:49:11',
                'page_title' => '{"en":"Range Rover Rental Dubai | Best rent  car","ar":"تأجير سيارات رنج روفر فى دبى"}',
                'page_description' => '{"en":"Rent Range Rover cars Dubai: Experience luxury and off-road capabilities with our Range Rover car rentals in Dubai. Rent a Range Rover and explore the city and beyond.","ar":"استئجار سيارات رينج روفر دبي: استمتع بالفخامة وقدرات الطرق الوعرة من خلال تأجير سيارات رينج روفر في دبي. استأجر سيارة رينج روفر واستكشف المدينة وخارجها."}',
            ),
            42 =>
            array (
                'id' => 43,
                'title' => '{"en":"MG","ar":"MG"}',
                'image' => 'brands/mg.webp',
                'slug' => 'mg',
                'sync_id' => '122',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-07-18 18:50:35',
                'page_title' => '{"en":"Rent MG Car in Dubai | rent a car with driver in UAE","ar":"Rent MG Car in Dubai | rent a car with driver in UAE"}',
                'page_description' => '{"en":"12. Rent MG cars Dubai: Discover the style and performance of MG car rentals in Dubai. Rent an MG and experience a blend of luxury and affordability.","ar":"12. استئجار سيارات إم جي دبي: اكتشف أسلوب وأداء سيارات إم جي المستأجرة في دبي. استأجر سيارة MG واستمتع بتجربة مزيج من الفخامة والقدرة على تحمل التكاليف."}',
            ),
            43 =>
            array (
                'id' => 44,
                'title' => '{"en":"JAC","ar":"جاك"}',
                'image' => 'brands/jac.webp',
                'slug' => 'jac',
                'sync_id' => '124',
                'created_at' => '2024-06-22 07:54:10',
                'updated_at' => '2024-06-22 07:54:10',
                'page_title' => '{"en":"Rent JAC Car in Dubai | Best Cars in UAE","ar":""}',
                'page_description' => '{"en":"Discover the ultimate car rental experience with JAC Car Rental in Dubai. Get your dream car at affordable prices today with Tajeer. Book now!","ar":""}',
            ),
        ));


    }
}
