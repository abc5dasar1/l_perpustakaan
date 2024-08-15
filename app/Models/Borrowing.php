<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'transaction_code',
        'borrowing_date',
        'returning_date',
        'operator'
    ];

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
