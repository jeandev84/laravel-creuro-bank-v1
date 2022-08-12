<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParkingStoreRequest;
use App\Http\Resources\ParkingResource;
use App\Models\Parking;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return ParkingResource::collection(Parking::all());
         // return response()->json(Parking::all(), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParkingStoreRequest $request)
    {
        /* $createdParking = Parking::create($request->all()); */

        $createdParking = Parking::create($request->validated());

        return new ParkingResource($createdParking);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Parking $parking)
    {
        /* return new ParkingResource(Parking::findOrFail($id)); */

        return new ParkingResource($parking);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param ParkingStoreRequest $request
     * @param Parking $parking
     * @return Response
    */
    public function update(ParkingStoreRequest $request, Parking $parking)
    {
          $parking->update($request->validated());

          return new ParkingResource($parking);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Parking $parking
     * @return Response
     * @throws \Exception
    */
    public function destroy(Parking $parking)
    {
        $parking->delete();

        return \response(null, Response::HTTP_NO_CONTENT);
    }
}
