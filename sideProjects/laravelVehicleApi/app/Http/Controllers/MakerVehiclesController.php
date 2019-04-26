<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Maker; 
use App\Vehicle;
use App\http\Requests\CreateVehicleRequest;

class MakerVehiclesController extends Controller
{

     public function __construct(){
        $this->middleware('auth.basic', ['except' =>['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $maker = Maker::find($id);

        if(!$maker) {
            return response()->json(['message' =>'Maker does not exist', 'code'=>404], 404);
        }

        return response()->json(['data'=>$maker->vehicles], 200); 
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVechicleRequest $request, $makerId)
    {
        $maker = Maker::find($makerId);

         if(!$maker) {
            return response()->json(['message' =>'Maker does not exist', 'code'=>404], 404);
        }

        $values = $request->all(); 

        $maker->vehicles()->create($values);

       return response()->json(['message'=> 'The vehicle associated was created'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $vehicleId)
    {
        $maker = Maker::find($id);

        if(!$maker) {
            return response()->json(['message' =>'Maker does not exist', 'code'=>404], 404);
        }

        $vehicle = $maker->vehicles->find($vehicleId);

        if(!$vehicle){
             return response()->json(['message' =>'vehicle does not exist', 'code'=>404], 404);
        }
        return response()->json(['data'=>$vehicle], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function update(CreateVehicleRequest $request, $makerId,$vehicleId)
    {
        $maker = Maker::find($makerId);

         if(!$maker) {
            return response()->json(['message' =>'Maker does not exist', 'code'=>404], 404);
        }

        $vehicle = $maker->vehicles->find($vehicleId);

        if(!$vehicle) {
            return response()->json(['message' =>'Maker does not exist', 'code'=>404], 404);
        }

        $color = $request->get('color');
        $power = $request->get('power');
        $capacity = $request->get('capacity');
        $speed = $request->get('speed');

        $vehicle->color = $color; 
        $vehicle->power = $power; 
        $vehicle->capacity = $capacity; 
        $vehicle->speed = $speed; 

        $vehicle->save();

        return response()->json(['message'=>'The vehicle has been updated'], 200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($makerId, $vehicleId)
    {
        $maker = Maker::find($makerId);

         if(!$maker) {
            return response()->json(['message' =>'Maker does not exist', 'code'=>404], 404);
        }

        $vehicle = $maker->vehicles->find($vehicleId);

        if(!$vehicle) {
            return response()->json(['message' =>'vehicle does not exist', 'code'=>404], 404);
        }

        $vehicle->delete();

        response()->json(['message' =>'Vehicle has been deleted', 'code'=>200], 200);


    }
}
