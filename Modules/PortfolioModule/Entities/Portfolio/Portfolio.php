<?php

namespace Modules\PortfolioModule\Entities\Portfolio;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\PortfolioModule\Entities\PortfolioPhoto;
use Modules\PortfolioModule\Entities\PortfolioCategory\PortfolioCategory;

class Portfolio extends Model
{
    use Translatable;

    protected $table = 'portfolio';
    protected $fillable = ['photo', 'portfolio_category_id', 'created_by'];
    public $translatedAttributes = ['slug', 'title', 'description', 'meta_title', 'meta_desc', 'meta_keywords'];
    public $translationModel = PortfolioTranslation::class;

    # Relation
    public function portfolio_category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }

    # Relation
    public function portfolio_photo()
    {
        return $this->hasMany(PortfolioPhoto::class);
    }
}
