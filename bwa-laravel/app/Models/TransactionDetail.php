<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'products_id',
        'transactions_ids'
    ];
    protected $hidden = [];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
