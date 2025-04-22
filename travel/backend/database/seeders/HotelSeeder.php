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
                'location' => 'Bagan, Mandalay Region',
                'image'=>'https://cf.bstatic.com/xdata/images/hotel/max1280x900/220257110.jpg?k=275717e61ce2b5c3119d66a26d28b09b2ff439c72edb3ea80c998fdb099ee3d6&o=&hp=1'
            ],
            [
                'id' => 2,
                'destination_id' => 2,
                'name' => 'Inle Lake Paradise Resort',
                'description' => 'Floating villas and peaceful lake views make this resort a perfect escape.',
                'location' => 'Inle Lake, Shan State',
                'image'=>''
            ],
            [
                'id' => 3,
                'destination_id' => 3,
                'name' => 'Hotel Mandalay City',
                'description' => 'A central hotel near Mandalay Palace and key attractions.',
                'location' => 'Mandalay, Mandalay Region',
                'image'=>''
            ],
            [
                'id' => 4,
                'destination_id' => 4,
                'name' => 'Downtown Yangon Boutique Hotel',
                'description' => 'Stylish colonial-era building turned hotel in the heart of Yangon.',
                'location' => 'Yangon, Yangon Region',
                'image'=>''
            ],
            [
                'id' => 5,
                'destination_id' => 5,
                'name' => 'Naypyidaw Grand Palace Hotel',
                'description' => 'Luxury and comfort in the nation’s quiet capital.',
                'location' => 'Naypyidaw, Naypyidaw Union Territory',
                'image'=>''
            ],
            [
                'id' => 6,
                'destination_id' => 6,
                'name' => 'Hpa-An Lodge',
                'description' => 'Nature-focused lodge surrounded by mountains and rice paddies.',
                'location' => 'Hpa-An, Kayin State',
                'image'=>''
            ],
            [
                'id' => 7,
                'destination_id' => 8,
                'name' => 'Ngapali Bay Resort',
                'description' => 'Luxury beachfront resort offering seafood and sunsets.',
                'location' => 'Ngapali Beach, Rakhine State',
                'image'=>''
            ],
            [
                'id' => 8,
                'destination_id' => 10,
                'name' => 'Sky Palace Hotel Taunggyi',
                'description' => 'Modern hotel in the hills with panoramic city views.',
                'location' => 'Taunggyi, Shan State',
                'image'=>''
            ],
            [
                'id' => 9,
                'destination_id' => 11,
                'name' => 'Golden Rock Mountain View Hotel',
                'description' => 'Popular hotel near the famous Golden Rock pagoda.',
                'location' => 'Kyaiktiyo, Mon State',
                'image'=>''
            ],
            [
                'id' => 10,
                'destination_id' => 14,
                'name' => 'Kalaw Hill Lodge',
                'description' => 'Eco-friendly retreat in the pine forests of Kalaw.',
                'location' => 'Kalaw, Shan State',
                'image'=>''
            ],
            [
                'id' => 11,
                'destination_id' => 15,
                'name' => 'Hotel Myitkyina',
                'description' => 'Business-class comfort near the Ayeyarwady River.',
                'location' => 'Myitkyina, Kachin State',
                'image'=>''
            ],
            [
                'id' => 12,
                'destination_id' => 18,
                'name' => 'Thandwe View Hotel',
                'description' => 'Gateway to Ngapali Beach with local charm.',
                'location' => 'Thandwe, Rakhine State',
                'image'=>''
            ],
            [
                'id' => 13,
                'destination_id' => 23,
                'name' => 'Bago Royal Hotel',
                'description' => 'Close to Shwemawdaw Pagoda, a historic spiritual site.',
                'location' => 'Bago, Bago Region',
                'image'=>''
            ],
            [
                'id' => 14,
                'destination_id' => 26,
                'name' => 'Pindaya Caves View Lodge',
                'description' => 'Overlooks the famous Pindaya Caves with peaceful mountain views.',
                'location' => 'Pindaya, Shan State',
                'image'=>''
            ],
            [
                'id' => 15,
                'destination_id' => 42,
                'name' => 'Mawlamyine Strand Hotel',
                'description' => 'Colonial-style riverside hotel in the former capital of British Burma.',
                'location' => 'Mawlamyine, Mon State',
                'image'=>''
            ],
            [
                'id' => 16,
                'destination_id' => 7,
                'name' => 'Pyin Oo Lwin Flower Garden Resort',
                'description' => 'A scenic hotel surrounded by botanical gardens and colonial charm.',
                'location' => 'Pyin Oo Lwin, Mandalay Region',
                'image' => 'https://www.booking.com/hotel/mm/a-little-bit-of-bagan.html?label=bin859jc-1DCAIolQFCAm1tSDNYA2iVAYgBAZgBMbgBF8gBDNgBA-gBAfgBA4gCAagCA7gCq4eTwAbAAgHSAiRkMjZlNWY0NS03NzUxLTQyMzEtYjk4Ny0zYzBhYjk0NzU3YjXYAgTgAgE&sid=4e48df09a1a2226884a29011af6f62c9&aid=357028&ucfs=1&arphpl=1&dest_id=-436773&dest_type=city&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=1&hapos=1&sr_order=popularity&srpvid=17024567fa4b0303&srepoch=1745142729&from=searchresults',
            ],
            [
                'id' => 17,
                'destination_id' => 9,
                'name' => 'Mrauk U Heritage Hotel',
                'description' => 'Stay among ancient stone temples in this peaceful heritage retreat.',
                'location' => 'Mrauk U, Rakhine State',
                'image' => ''
            ],
            [
                'id' => 18,
                'destination_id' => 12,
                'name' => 'Pathein Riverside Inn',
                'description' => 'Simple riverside hotel known for its hospitality and umbrella crafts.',
                'location' => 'Pathein, Ayeyarwady Region',
                'image' => ''
            ],
            [
                'id' => 19,
                'destination_id' => 13,
                'name' => 'Chaung Tha Beach Resort',
                'description' => 'A popular family beach hotel with ocean views and seafood cuisine.',
                'location' => 'Chaung Tha, Ayeyarwady Region',
                'image' => ''
            ],
            [
                'id' => 20,
                'destination_id' => 16,
                'name' => 'Loikaw Hill Resort',
                'description' => 'Rustic charm and culture meet in this quiet resort near Kayah villages.',
                'location' => 'Loikaw, Kayah State',
                'image' => ''
            ],
            [
                'id' => 21,
                'destination_id' => 17,
                'name' => 'Sittwe Seaview Hotel',
                'description' => 'Basic comfort and seafront access in Myanmar’s western coast.',
                'location' => 'Sittwe, Rakhine State',
                'image' => ''
            ],
            [
                'id' => 22,
                'destination_id' => 19,
                'name' => 'Minbu Hot Springs Resort',
                'description' => 'Relax in natural hot springs near Buddhist temples.',
                'location' => 'Minbu, Magway Region',
                'image' => ''
            ],
            [
                'id' => 23,
                'destination_id' => 20,
                'name' => 'Magway Diamond Hotel',
                'description' => 'Modern amenities near the city’s pagodas and energy sites.',
                'location' => 'Magway, Magway Region',
                'image' => ''
            ],
            [
                'id' => 24,
                'destination_id' => 21,
                'name' => 'Pakokku Grand Hotel',
                'description' => 'Gateway to Bagan with a local market right next door.',
                'location' => 'Pakokku, Magway Region',
                'image' => ''
            ],
            [
                'id' => 25,
                'destination_id' => 22,
                'name' => 'Meiktila Lakefront Hotel',
                'description' => 'Overlooking Meiktila Lake with peaceful scenery.',
                'location' => 'Meiktila, Mandalay Region',
                'image' => ''
            ],
            [
                'id' => 26,
                'destination_id' => 24,
                'name' => 'Thanlyin Colonial Guesthouse',
                'description' => 'Old-world charm with a view of Yangon across the river.',
                'location' => 'Thanlyin, Yangon Region',
                'image' => ''
            ],
            [
                'id' => 27,
                'destination_id' => 25,
                'name' => 'Twante Pottery Lodge',
                'description' => 'A cultural stay near local pottery workshops.',
                'location' => 'Twante, Yangon Region',
                'image' => ''
            ],
            [
                'id' => 28,
                'destination_id' => 27,
                'name' => 'Kyaukme Tea Hill Hotel',
                'description' => 'Trekking hub with views of surrounding tea fields.',
                'location' => 'Kyaukme, Shan State',
                'image' => ''
            ],
            [
                'id' => 29,
                'destination_id' => 28,
                'name' => 'Muse Border Trade Hotel',
                'description' => 'Convenient stay near the China–Myanmar border.',
                'location' => 'Muse, Shan State',
                'image' => ''
            ],
            [
                'id' => 30,
                'destination_id' => 29,
                'name' => 'Tachileik Golden Triangle Resort',
                'description' => 'Comfortable hotel close to the Thai border with cross-cultural vibes.',
                'location' => 'Tachileik, Shan State',
                'image' => ''
            ],
        ];

        foreach($hotels as $hotel) {
            Hotel::create($hotel);
        }
    }
}
