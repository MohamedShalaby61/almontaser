<?php

namespace Modules\WidgetsModule\Entities\Team;

use Illuminate\Database\Eloquent\Model;

class TeamTranslations extends Model
{
    public $timestamps = false;

    protected $table = 'team_translations';

    protected $fillable = ['name', 'job_title', 'description', 'meta_title', 'meta_desc', 'meta_keywords', 'slug'];
}
