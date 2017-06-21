<?php
/**
 * Created by PhpStorm.
 * User: Bless
 * Date: 4/6/2017
 * Time: 1:33 PM
 */

namespace app\Http\Requests;

use app\Http\Requests\Request;

class userRequest extends Request
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
            'email' => 'required',
            'password' => 'required',

        ];
    }
}
