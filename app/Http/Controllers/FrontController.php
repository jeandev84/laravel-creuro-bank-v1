<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


/**
 * @FrontController
*/
class FrontController extends Controller
{

     public function index()
     {
         return view('front/index');
     }
}
