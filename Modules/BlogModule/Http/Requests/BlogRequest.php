<?php

namespace Modules\BlogModule\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
                {
                    return [];
                }
            case 'POST':
                {
                    return [
                        'ar.title'=>'required',
                        'ar.description'=>'required',
                        'ar.tags'=>'required',
                        'photo' => 'mimes:jpeg,jpg,png | max:2048',
                        'is_featured'=>'required',
                        'blog_category_id'=>'required'
                    ];
                }
            case 'PATCH':
            case 'PUT':
                {
                    return [
                        'ar.title'=>'required',
                        'ar.short_desc'=>'required',
                        'ar.tags'=>'required',
                        'photo' => 'mimes:jpeg,jpg,png | max:2048',
                        'is_featured'=>'required',
                        'blog_category_id'=>'required'
                    ];
                }
            default:break;
        }

    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
