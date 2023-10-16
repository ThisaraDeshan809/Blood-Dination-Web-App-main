<?php

namespace App\Helpers;

class DateHelper{

  static function changeDateFormat($date){

    return \Carbon\Carbon::parse($date)->format('M ,d ,Y');
}

}