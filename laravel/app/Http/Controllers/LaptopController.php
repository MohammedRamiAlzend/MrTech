<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\ApiResponseTrait;
use App\Http\Requests\LaptopRequest;
use App\Models\Laptop;

class LaptopController extends Controller
{
    use ApiResponseTrait;

    /**
     * Display a listing of the resource.ذ
     */
    public function index()
    {
        $laptops = Laptop::all();
        if ($laptops->count() != 0) {
            return $this->apiResponse($laptops,'successful',200);
        } else {
            return $this->apiResponse('nothing to show');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LaptopRequest $request)
    {
        $laptop = Laptop::create($request->validated());
        return $this->apiResponse($laptop,'laptop created successfully',201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop)
    {
            return $this->apiResponse($laptop,'ss',200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LaptopRequest $request, Laptop $laptop)
    {
        $laptop->update($request->validated());
        return $this->apiResponse($laptop,'laptop updated successfully',200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laptop $laptop)
    {
        $laptop->delete();
        return $this->apiResponse(null, '204',204);
    }
}
