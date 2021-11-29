<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use App\Models\Rank;

class Company extends Model
{
    use HasFactory;
    
    protected $table='companies';
    public function trans()
    {
        return $this->hasOne(Transaction::class, 'client_id')->where('income_type', 'Investment');
    }
    public function rank_name()
    {
        return $this->belongsTo(Rank::class, 'rank');
    }
}
