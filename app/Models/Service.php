<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'services';
    protected $guarded = false;
    //public function speciality()
    //{
    //    return $this->belongsTo(Speciality::class, 'speciality_id', 'id');
    //}
    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
