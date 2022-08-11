<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Parking;
use Illuminate\Http\Request;


/**
 *
*/
class ParkingController extends Controller
{

      public function index()
      {
           return Parking::all();
      }
}
