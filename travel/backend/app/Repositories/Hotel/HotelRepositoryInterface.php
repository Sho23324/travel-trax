<?php
namespace App\Repositories\Hotel;

interface HotelRepositoryInterface {
    public function index();
    public function show($id);
    public function store($validatedData);
    public function getHotelAverageRatings($id);
    public function allHotelRatings($id);

}
