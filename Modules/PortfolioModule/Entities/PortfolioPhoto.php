<?php

namespace Modules\PortfolioModule\Entities;

use Illuminate\Database\Eloquent\Model;

class PortfolioPhoto extends Model
{
    protected $table = 'portfolio_photo';

    protected $fillable = ['photo'];

    //* Relation: PortfolioPhoto <==> Portfolio
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
