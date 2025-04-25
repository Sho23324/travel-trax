<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = [
            [
                'id' => 1,
                'destination_id' => 1,
                'name' => 'Bagan River View Resort',
                'description' => 'A serene hotel with views of the Irrawaddy River and easy access to nearby pagodas.',
                'price'=>1111,
                'location' => 'Bagan, Mandalay Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'
            ],
            [
                'id' => 2,
                'destination_id' => 2,
                'name' => 'Inle Lake Paradise Resort',
                'description' => 'Floating villas and peaceful lake views make this resort a perfect escape.',
                'price'=>1111,
                'location' => 'Inle Lake, Shan State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 3,
                'destination_id' => 3,
                'name' => 'Hotel Mandalay City',
                'description' => 'A central hotel near Mandalay Palace and key attractions.',
                'price'=>1111,
                'location' => 'Mandalay, Mandalay Region',
               'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 4,
                'destination_id' => 4,
                'name' => 'Downtown Yangon Boutique Hotel',
                'description' => 'Stylish colonial-era building turned hotel in the heart of Yangon.',
                'price'=>1111,
                'location' => 'Yangon, Yangon Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 5,
                'destination_id' => 5,
                'name' => 'Naypyidaw Grand Palace Hotel',
                'description' => 'Luxury and comfort in the nation’s quiet capital.',
                'price'=>1111,
                'location' => 'Naypyidaw, Naypyidaw Union Territory',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 6,
                'destination_id' => 6,
                'name' => 'Hpa-An Lodge',
                'description' => 'Nature-focused lodge surrounded by mountains and rice paddies.',
                'price'=>1111,
                'location' => 'Hpa-An, Kayin State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 7,
                'destination_id' => 8,
                'name' => 'Ngapali Bay Resort',
                'description' => 'Luxury beachfront resort offering seafood and sunsets.',
                'price'=>1111,
                'location' => 'Ngapali Beach, Rakhine State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 8,
                'destination_id' => 10,
                'name' => 'Sky Palace Hotel Taunggyi',
                'description' => 'Modern hotel in the hills with panoramic city views.',
                'price'=>1111,
                'location' => 'Taunggyi, Shan State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 9,
                'destination_id' => 11,
                'name' => 'Golden Rock Mountain View Hotel',
                'description' => 'Popular hotel near the famous Golden Rock pagoda.',
                'price'=>1111,
                'location' => 'Kyaiktiyo, Mon State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 10,
                'destination_id' => 14,
                'name' => 'Kalaw Hill Lodge',
                'description' => 'Eco-friendly retreat in the pine forests of Kalaw.',
                'price'=>1111,
                'location' => 'Kalaw, Shan State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 11,
                'destination_id' => 15,
                'name' => 'Hotel Myitkyina',
                'description' => 'Business-class comfort near the Ayeyarwady River.',
                'price'=>1111,
                'location' => 'Myitkyina, Kachin State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 12,
                'destination_id' => 18,
                'name' => 'Thandwe View Hotel',
                'description' => 'Gateway to Ngapali Beach with local charm.',
                'price'=>1111,
                'location' => 'Thandwe, Rakhine State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 13,
                'destination_id' => 23,
                'name' => 'Bago Royal Hotel',
                'description' => 'Close to Shwemawdaw Pagoda, a historic spiritual site.',
                'price'=>1111,
                'location' => 'Bago, Bago Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 14,
                'destination_id' => 26,
                'name' => 'Pindaya Caves View Lodge',
                'description' => 'Overlooks the famous Pindaya Caves with peaceful mountain views.',
                'price'=>1111,
                'location' => 'Pindaya, Shan State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 15,
                'destination_id' => 42,
                'name' => 'Mawlamyine Strand Hotel',
                'description' => 'Colonial-style riverside hotel in the former capital of British Burma.',
                'price'=>1111,
                'location' => 'Mawlamyine, Mon State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 16,
                'destination_id' => 7,
                'name' => 'Pyin Oo Lwin Flower Garden Resort',
                'description' => 'A scenic hotel surrounded by botanical gardens and colonial charm.',
                'price'=>1111,
                'location' => 'Pyin Oo Lwin, Mandalay Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 17,
                'destination_id' => 9,
                'name' => 'Mrauk U Heritage Hotel',
                'description' => 'Stay among ancient stone temples in this peaceful heritage retreat.',
                'price'=>1111,
                'location' => 'Mrauk U, Rakhine State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 18,
                'destination_id' => 12,
                'name' => 'Pathein Riverside Inn',
                'description' => 'Simple riverside hotel known for its hospitality and umbrella crafts.',
                'price'=>1111,
                'location' => 'Pathein, Ayeyarwady Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 19,
                'destination_id' => 13,
                'name' => 'Chaung Tha Beach Resort',
                'description' => 'A popular family beach hotel with ocean views and seafood cuisine.',
                'price'=>1111,
                'location' => 'Chaung Tha, Ayeyarwady Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 20,
                'destination_id' => 16,
                'name' => 'Loikaw Hill Resort',
                'description' => 'Rustic charm and culture meet in this quiet resort near Kayah villages.',
                'price'=>1111,
                'location' => 'Loikaw, Kayah State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 21,
                'destination_id' => 17,
                'name' => 'Sittwe Seaview Hotel',
                'description' => 'Basic comfort and seafront access in Myanmar’s western coast.',
                'price'=>1111,
                'location' => 'Sittwe, Rakhine State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 22,
                'destination_id' => 19,
                'name' => 'Minbu Hot Springs Resort',
                'description' => 'Relax in natural hot springs near Buddhist temples.',
                'price'=>1111,
                'location' => 'Minbu, Magway Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 23,
                'destination_id' => 20,
                'name' => 'Magway Diamond Hotel',
                'description' => 'Modern amenities near the city’s pagodas and energy sites.',
                'price'=>1111,
                'location' => 'Magway, Magway Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 24,
                'destination_id' => 21,
                'name' => 'Pakokku Grand Hotel',
                'description' => 'Gateway to Bagan with a local market right next door.',
                'price'=>1111,
                'location' => 'Pakokku, Magway Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 25,
                'destination_id' => 22,
                'name' => 'Meiktila Lakefront Hotel',
                'description' => 'Overlooking Meiktila Lake with peaceful scenery.',
                'price'=>1111,
                'location' => 'Meiktila, Mandalay Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 26,
                'destination_id' => 24,
                'name' => 'Thanlyin Colonial Guesthouse',
                'description' => 'Old-world charm with a view of Yangon across the river.',
                'price'=>1111,
                'location' => 'Thanlyin, Yangon Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 27,
                'destination_id' => 25,
                'name' => 'Twante Pottery Lodge',
                'description' => 'A cultural stay near local pottery workshops.',
                'price'=>1111,
                'location' => 'Twante, Yangon Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 28,
                'destination_id' => 27,
                'name' => 'Kyaukme Tea Hill Hotel',
                'description' => 'Trekking hub with views of surrounding tea fields.',
                'price'=>1111,
                'location' => 'Kyaukme, Shan State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 29,
                'destination_id' => 28,
                'name' => 'Muse Border Trade Hotel',
                'description' => 'Convenient stay near the China–Myanmar border.',
                'price'=>1111,
                'location' => 'Muse, Shan State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
            [
                'id' => 30,
                'destination_id' => 29,
                'name' => 'Tachileik Golden Triangle Resort',
                'description' => 'Comfortable hotel close to the Thai border with cross-cultural vibes.',
                'price'=>1111,
                'location' => 'Tachileik, Shan State',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'

            ],
        ];

        foreach($hotels as $hotel) {
            Hotel::create($hotel);
        }
    }
}
