<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Record4 extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'records4';
    protected $guarded = false;

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    public function speciality(){
        return $this->belongsTo(Speciality::class);
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function service(){
        return $this->belongsTo(Service::class);
    }
}
