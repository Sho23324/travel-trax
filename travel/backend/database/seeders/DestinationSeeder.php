<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = [
            ['id' => 1, 'name' => 'Bagan', 'description' => 'Ancient city known for its thousands of Buddhist temples and pagodas.', 'location' => 'Mandalay Region, Myanmar'],
            ['id' => 2, 'name' => 'Inle Lake', 'description' => 'A freshwater lake known for stilt villages and floating gardens.', 'location' => 'Shan State, Myanmar'],
            ['id' => 3, 'name' => 'Mandalay', 'description' => 'Cultural capital with palaces and religious monuments.', 'location' => 'Mandalay Region, Myanmar'],
            ['id' => 4, 'name' => 'Yangon', 'description' => 'Commercial hub with colonial architecture and Shwedagon Pagoda.', 'location' => 'Yangon Region, Myanmar'],
            ['id' => 5, 'name' => 'Naypyidaw', 'description' => 'Modern capital with wide streets and government buildings.', 'location' => 'Naypyidaw Union Territory, Myanmar'],
            ['id' => 6, 'name' => 'Hpa-An', 'description' => 'Town known for limestone caves and scenic countryside.', 'location' => 'Kayin State, Myanmar'],
            ['id' => 7, 'name' => 'Pyin Oo Lwin', 'description' => 'Hill town known for botanical gardens and colonial charm.', 'location' => 'Mandalay Region, Myanmar'],
            ['id' => 8, 'name' => 'Ngapali Beach', 'description' => 'Popular beach with clear waters and luxury resorts.', 'location' => 'Rakhine State, Myanmar'],
            ['id' => 9, 'name' => 'Mrauk U', 'description' => 'Ancient Arakan capital with stone temples.', 'location' => 'Rakhine State, Myanmar'],
            ['id' => 10, 'name' => 'Taunggyi', 'description' => 'Capital of Shan State with cultural diversity.', 'location' => 'Shan State, Myanmar'],
            ['id' => 11, 'name' => 'Kyaiktiyo', 'description' => 'Home of the Golden Rock pagoda balancing on a cliff.', 'location' => 'Mon State, Myanmar'],
            ['id' => 12, 'name' => 'Pathein', 'description' => 'Delta town known for umbrella making and riverside beauty.', 'location' => 'Ayeyarwady Region, Myanmar'],
            ['id' => 13, 'name' => 'Chaung Tha', 'description' => 'Popular local beach destination.', 'location' => 'Ayeyarwady Region, Myanmar'],
            ['id' => 14, 'name' => 'Kalaw', 'description' => 'A hill town and trekking base to Inle Lake, with cool climate and scenic views.', 'location' => 'Shan State, Myanmar'],
            ['id' => 15, 'name' => 'Myitkyina', 'description' => 'Capital of Kachin State with river cruises and markets.', 'location' => 'Kachin State, Myanmar'],
            ['id' => 16, 'name' => 'Loikaw', 'description' => 'Town near the Kayah State border, known for ethnic diversity.', 'location' => 'Kayah State, Myanmar'],
            ['id' => 17, 'name' => 'Sittwe', 'description' => 'Coastal town with views of the Bay of Bengal.', 'location' => 'Rakhine State, Myanmar'],
            ['id' => 18, 'name' => 'Thandwe', 'description' => 'Gateway to Ngapali Beach with a laid-back vibe.', 'location' => 'Rakhine State, Myanmar'],
            ['id' => 19, 'name' => 'Minbu', 'description' => 'Town known for the hot springs and Buddhist monasteries.', 'location' => 'Magway Region, Myanmar'],
            ['id' => 20, 'name' => 'Magway', 'description' => 'Region with pagodas and oil fields.', 'location' => 'Magway Region, Myanmar'],
            ['id' => 21, 'name' => 'Pakokku', 'description' => 'Town across the river from Bagan.', 'location' => 'Magway Region, Myanmar'],
            ['id' => 22, 'name' => 'Meiktila', 'description' => 'Central Myanmar town with lakes and Buddhist schools.', 'location' => 'Mandalay Region, Myanmar'],
            ['id' => 23, 'name' => 'Bago', 'description' => 'Historical city with ancient temples and reclining Buddha.', 'location' => 'Bago Region, Myanmar'],
            ['id' => 24, 'name' => 'Thanlyin', 'description' => 'Town across the river from Yangon with colonial buildings.', 'location' => 'Yangon Region, Myanmar'],
            ['id' => 25, 'name' => 'Twante', 'description' => 'Town known for traditional pottery.', 'location' => 'Yangon Region, Myanmar'],
            ['id' => 26, 'name' => 'Pindaya', 'description' => 'Hill town famous for its limestone caves.', 'location' => 'Shan State, Myanmar'],
            ['id' => 27, 'name' => 'Kyaukme', 'description' => 'A small town with tea plantations and trekking routes.', 'location' => 'Shan State, Myanmar'],
            ['id' => 28, 'name' => 'Muse', 'description' => 'Border trade town with China.', 'location' => 'Shan State, Myanmar'],
            ['id' => 29, 'name' => 'Tachileik', 'description' => 'Border town with Thailand.', 'location' => 'Shan State, Myanmar'],
            ['id' => 30, 'name' => 'Dawei', 'description' => 'Coastal town with beautiful beaches and seafood.', 'location' => 'Tanintharyi Region, Myanmar'],
            ['id' => 31, 'name' => 'Myeik', 'description' => 'Historic seaport town.', 'location' => 'Tanintharyi Region, Myanmar'],
            ['id' => 32, 'name' => 'Kawthaung', 'description' => 'Southernmost point of Myanmar.', 'location' => 'Tanintharyi Region, Myanmar'],
            ['id' => 33, 'name' => 'Kyaukphyu', 'description' => 'Port town in the Bay of Bengal.', 'location' => 'Rakhine State, Myanmar'],
            ['id' => 34, 'name' => 'Hinthada', 'description' => 'Delta town with river-based transport.', 'location' => 'Ayeyarwady Region, Myanmar'],
            ['id' => 35, 'name' => 'Sagaing', 'description' => 'Religious hub with monasteries and pagodas.', 'location' => 'Sagaing Region, Myanmar'],
            ['id' => 36, 'name' => 'Shwebo', 'description' => 'Historic capital of Konbaung Dynasty.', 'location' => 'Sagaing Region, Myanmar'],
            ['id' => 37, 'name' => 'Lashio', 'description' => 'Northern trade town with markets and ethnic diversity.', 'location' => 'Shan State, Myanmar'],
            ['id' => 38, 'name' => 'Pakkoku', 'description' => 'Town near Bagan known for agriculture.', 'location' => 'Magway Region, Myanmar'],
            ['id' => 39, 'name' => 'Toungoo', 'description' => 'Town known for colonial history and agriculture.', 'location' => 'Bago Region, Myanmar'],
            ['id' => 40, 'name' => 'Thayet', 'description' => 'Quiet town with hills and colonial relics.', 'location' => 'Magway Region, Myanmar'],
            ['id' => 41, 'name' => 'Yenangyaung', 'description' => 'Old oil town with interesting geology.', 'location' => 'Magway Region, Myanmar'],
            ['id' => 42, 'name' => 'Mawlamyine', 'description' => 'Colonial town and former British capital.', 'location' => 'Mon State, Myanmar'],
            ['id' => 43, 'name' => 'Thaton', 'description' => 'Old Mon capital with Buddhist heritage.', 'location' => 'Mon State, Myanmar'],
            ['id' => 44, 'name' => 'Pyay', 'description' => 'Town near the ancient city of Sri Ksetra.', 'location' => 'Bago Region, Myanmar'],
            ['id' => 45, 'name' => 'Aungban', 'description' => 'Transit town to Kalaw and Inle.', 'location' => 'Shan State, Myanmar'],
            ['id' => 46, 'name' => 'Letpadan', 'description' => 'Quiet town in the Bago region.', 'location' => 'Bago Region, Myanmar'],
            ['id' => 47, 'name' => 'Thanbyuzayat', 'description' => 'Site of the WWII Death Railway.', 'location' => 'Mon State, Myanmar'],
            ['id' => 48, 'name' => 'Minhla', 'description' => 'Town near the Irrawaddy river.', 'location' => 'Magway Region, Myanmar'],
            ['id' => 49, 'name' => 'Tamu', 'description' => 'Border town with India.', 'location' => 'Sagaing Region, Myanmar'],
            ['id' => 50, 'name' => 'Chin State Hills', 'description' => 'Scenic mountain area with remote villages.', 'location' => 'Chin State, Myanmar'],
        ];

        foreach ($destinations as $destination) {
            Destination::create($destination);
        }
    }
}
