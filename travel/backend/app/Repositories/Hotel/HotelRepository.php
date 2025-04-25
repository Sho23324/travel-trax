<?php
namespace App\Repositories\Hotel;

use App\Models\Hotel;
use App\Models\Review;

class HotelRepository implements HotelRepositoryInterface{
    public function index() {
        return Hotel::all();
    }

    public function show($id) {
        return Hotel::find($id);
    }

    public function store($validatedData) {
        return Hotel::create($validatedData);
    }

    public function getHotelAverageRatings($id) {
        $average = Review::where('hotel_id', $id)->avg('rating');
        return $average;
    }

    public function allHotelRatings($id) {
        $ratings = Review::where('hotel_id', $id)->count();
        return $ratings;
    }

    public function update($id, $validatedData) {
        $hotel = Hotel::find($id);
        return $hotel->update($validatedData);
    }

    public function delete($id) {
        $hotel = Hotel::find($id);
        return $hotel->delete();
    }
}
