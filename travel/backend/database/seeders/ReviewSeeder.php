<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'user_id' => 1,
                'hotel_id' => 1,
                'restaurant_id' => null,
                'rating' => 5,
                'comment' => 'Excellent stay and great service!',
            ],
            [
                'user_id' => 2,
                'hotel_id' => null,
                'restaurant_id' => 2,
                'rating' => 4,
                'comment' => 'The food was delicious but service was a bit slow.',
            ],
            [
                'user_id' => 3,
                'hotel_id' => 2,
                'restaurant_id' => null,
                'rating' => 3,
                'comment' => 'Room was clean but noisy at night.',
            ],
            [
                'user_id' => 4,
                'hotel_id' => null,
                'restaurant_id' => 3,
                'rating' => 5,
                'comment' => 'Best pasta I’ve ever had!',
            ],
            [
                'user_id' => 5,
                'hotel_id' => 3,
                'restaurant_id' => null,
                'rating' => 2,
                'comment' => 'Front desk was unhelpful, and room was cold.',
            ],
            [
                'user_id' => 6,
                'hotel_id' => null,
                'restaurant_id' => 1,
                'rating' => 4,
                'comment' => 'Loved the ambiance and desserts.',
            ],
            [
                'user_id' => 7,
                'hotel_id' => 4,
                'restaurant_id' => null,
                'rating' => 5,
                'comment' => 'Perfect for a weekend getaway.',
            ],
            [
                'user_id' => 8,
                'hotel_id' => null,
                'restaurant_id' => 4,
                'rating' => 3,
                'comment' => 'Good food but too expensive for what it is.',
            ],
            [
                'user_id' => 9,
                'hotel_id' => 5,
                'restaurant_id' => null,
                'rating' => 1,
                'comment' => 'Worst experience. Dirty bathroom and rude staff.',
            ],
            [
                'user_id' => 10,
                'hotel_id' => null,
                'restaurant_id' => 5,
                'rating' => 5,
                'comment' => 'Amazing flavors and fast service!',
            ],
            [
                'user_id' => 11,
                'hotel_id' => null,
                'restaurant_id' => 5,
                'rating' => 2,
                'comment' => 'Amazing flavors and fast service!',
            ],
            [
                'user_id' => 12,
                'hotel_id' => null,
                'restaurant_id' => 5,
                'rating' => 4,
                'comment' => 'Amazing flavors and fast service!',
            ],
            [
                'user_id' => 12,
                'hotel_id' => 1,
                'restaurant_id' => null,
                'rating' => 4,
                'comment' => 'Amazing flavors and fast service!',
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
