<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
      'value' => 'integer',
      'count' => 'integer'
    ];


    public function type()
    {
        return $this->belongsTo(PrizeType::class, 'prize_types_id','id');
    }
}
