<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookmarksRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


      return [
          'title' => 'required|max:255',
          //The following parameter to the unique rule will skip that unique if we're updating a record
          'url' => 'required|url|unique:bookmarks,url,'.$this->id.',id',
          'description' => 'required|max:255',
      ];
    }
}
