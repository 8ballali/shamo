<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;
            /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'transaction_items';
    protected $fillable = [
        'users_id',
        'transactions_id',
        'products_id',
        'quantity'
    ];

    public function product(){
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

}
