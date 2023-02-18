<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $casts = ['send' => 'boolean'];

    protected $guarded = ['id'];

    public function prize()
    {
        return $this->belongsTo(Prize::class, 'prize_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
