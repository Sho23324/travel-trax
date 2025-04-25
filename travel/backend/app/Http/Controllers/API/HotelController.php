<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelStoreRequest;
use App\Http\Requests\HotelUpdateRequest;
use App\Http\Resources\HotelResource;
use App\Repositories\Hotel\HotelRepositoryInterface;
use Illuminate\Http\Request;

class HotelController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    private $hotelRepository;
    public function __construct(HotelRepositoryInterface $hotelRepository)
    {
        $this->hotelRepository = $hotelRepository;
    }
    public function index()
    {
        $hotels = $this->hotelRepository->index();
        $data = HotelResource::collection($hotels);
        return $this->success($data, "Hotels retrieved successfully", 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HotelStoreRequest $request)
    {
        $validatedData = $request->validated();
        $createdHotel = $this->hotelRepository->store($validatedData);
        return $this->success($createdHotel, "Hotels retrieved successfully", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hotel = $this->hotelRepository->show($id);
        $data = new HotelResource($hotel);
        return $this->success($data, "Hotel details", 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HotelUpdateRequest $request, string $id)
    {
        $validatedData = $request->validated();
        $updatedHotel = $this->hotelRepository->update($id, $validatedData);
        return $this->success($updatedHotel, "Hotel updated successfully", 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->hotelRepository->delete($id);
        return $this->success(null, "Hotel details", 204);
    }

    public function getHotelAverageRatings(string $id) {
        $average = $this->hotelRepository->getHotelAverageRatings($id);
        return $this->success($average, "Hotel rating", 200);
    }

    public function allHotelRatings(string $id) {
        $ratings = $this->hotelRepository->allHotelRatings($id);
        return $this->success($ratings, "All hotel ratings", 200);
    }
}
