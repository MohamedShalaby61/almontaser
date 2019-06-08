<?php

namespace Modules\ProductModule\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            "id" => $this->id,
            "thumb_photo" => asset('public/images/products/thumb/'.$this->photo),
            "price" => $this->price,
            "quantity"=> $this->quantity,
            'ar' => $this->translate('ar'),
            'en' => $this->translate('en'),
        ];
    }

}
