<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mytest extends Model
{
    public static function Call() {

      $exe = exec("/home/robert/go_code/executable_go/executable_go");

      return json_decode($exe, true);
    }
}
