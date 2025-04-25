<?php

namespace App\Repositories\Trip;

interface TripRepositoryInterface {
    public function index();
    public function show($id);
    public function getTripByUserId($id);
    public function store($validatedData);
}
