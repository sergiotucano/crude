<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    public $timestamps = true;

    protected $casts = [
        'quantity' => 'float',
        'total' => 'float',
    ];

    protected $fillable = [
        'product',
        'date',
        'quantity',
        'total',
        'created_at'
    ];

    public function produto()
    {
        return $this->hasOne(Product::class, 'product', 'product');
    }

}
