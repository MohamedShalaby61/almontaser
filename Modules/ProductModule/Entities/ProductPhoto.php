<?php

namespace Modules\ProductModule\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $table = 'product_photo';

    protected $fillable = ['photo'];

    # Relation ProductPhoto <==> Product.
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
