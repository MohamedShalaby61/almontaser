<?php

namespace Modules\ProductModule\Transformers;

use Modules\ProductModule\Entities\Product;
use Illuminate\Http\Resources\Json\Resource;

class CategoryResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'photo' => $this->photo,
            'ar' => $this->translate('ar'),
            'en' => $this->translate('en'),
        ];
    }
}
