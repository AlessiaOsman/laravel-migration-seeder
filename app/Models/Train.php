<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getOnTime(){
        return $this->on_time ? 'Il treno è in orario' : 'Il treno è in ritardo';
    }


    public function getStatus(){
        return $this->canceled ? 'Il tuo treno è stato cancellato' : $this->getOnTime();
    }
}
