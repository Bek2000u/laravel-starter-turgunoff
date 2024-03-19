<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*  public function getScheduleAttribute() {
          $now = new Datetime('now');
          $begintime = new DateTime($this->schedule_from);
          $endtime = new DateTime($this->schedule_to);

          if($now >= $begintime && $now <= $endtime){
             return true;
          } else {
              return false;
          }
      }*/

//    public function getPhoneStrAttribute()
//    {
//        $phone_str = strval($this->phone);
//        $phone_str = substr($phone_str, 0, 4)." (".substr($phone_str, 4, 2).") ".substr($phone_str, 6, 3)." ".substr($phone_str, 9, 2)." ".substr($phone_str, 11, 2);
//        return $phone_str;
//    }
}
