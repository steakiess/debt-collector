<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    protected $table = 'debts';
    protected $guarded = [];

    public function user()
    {
        $this->belongsTo(User::class,'id');
    }
}
