<?php

namespace Modules\BlogModule\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryRequest extends FormRequest
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
                        'photo' => 'mimes:jpeg,jpg,png | max:2048',
                    ];
                }
            case 'PATCH':
            case 'PUT':
                {
                    return [
                        'ar.title'=>'required',
                        'photo' => 'mimes:jpeg,jpg,png | max:2048',
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
