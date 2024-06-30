<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'option_id',
        'name',
        'email',
        'phone',
        'start',
        'end',
    ];

    public function option()
    {
        return $this->hasOne('App\Models\Options', 'id','option_id');
    }

}
