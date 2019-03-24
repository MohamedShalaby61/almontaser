<?php

namespace Modules\PortfolioModule\Entities\Portfolio;

use Illuminate\Database\Eloquent\Model;

class PortfolioTranslation extends Model
{
    protected $fillable = ['slug', 'title', 'description', 'meta_title', 'meta_desc', 'meta_keywords'];
    public $timestamps = false;
    protected $table = 'portfolio_translation';
}
