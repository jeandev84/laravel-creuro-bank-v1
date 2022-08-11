<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 *
*/
class Parking extends Model
{

      protected $table = 'parkings';


      protected $fillable = [
         'id', 'city', 'address_parking'
      ];
}
