<?php

namespace Modules\WidgetsModule\Entities\Team;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    use Translatable;
    public $translatedAttributes = ['name', 'job_title', 'description', 'meta_title', 'meta_desc', 'meta_keywords', 'slug'];

    protected $fillable =
    [
        'photo', 'created_by', 'skills', 'experience', 'phone', 'email', 'facebook', 'twitter', 'skype', 'instagram', 'youtube'
    ];

    public $translationModel = TeamTranslations::class;
}
