<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'fullname' => ['max:255'],
            'gender' => ['required'],
            'email' => ['required', 'email', 'max:255'],
            'postcode' => ['required', 'max:8'],
            'address' => ['required', 'string', 'max:255'],
            'building_name' => ['string', 'max:255'],
            'opinion' => ['required', 'max:120']
        ];
    }

    public function messages(){
        return[
            'first_name.required' => '姓を入力してください',
            'first_name.string' => '姓は文字列で入力してください',
            'last_name.required' => '名を入力してください',
            'last_name.string' => '名は文字列で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.max:255' => 'メールアドレスは255字以内で入力してください',
            'email.email' => 'メールアドレスとして不正な形式です',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.max:8' => '郵便番号はハイフンを含む8字以内で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所は文字列で入力してください',
            'address.max:255' => '住所は255字以内で入力してください',
            'building_name.string' => '建物名は文字列で入力してください',
            'building_name.max:255' => '建物名は255字以内で入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max:120' => 'ご意見は120字以内で入力してください'
        ];
    }
}
