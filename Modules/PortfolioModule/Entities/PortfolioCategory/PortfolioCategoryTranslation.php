<?php

namespace Modules\PortfolioModule\Entities\PortfolioCategory;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategoryTranslation extends Model
{
    protected $fillable = ['title', 'description'];
    public $timestamps = false;
    protected $table = 'portfolio_categ_trans';
}
