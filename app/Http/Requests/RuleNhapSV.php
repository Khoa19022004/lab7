<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'masv'=>'required|regex:/^PS\d{5}/',
            'hoten'=>'required|min:3',
            'tuoi'=>'required|integer|min:16|max:120',
            'ngaysinh'=>'required|regex: /\d{1,2}\/\d{1,2}\/\d{4}/',
            'cccd'=> 'digits:11',
            'email'=>'required|email|end_with:@fpt.edu.vn'
        ];
    }
    public function messages()
    {
        return [
          'masv.required'=>'Vui lòng nhập mã sinh viên',
          'masv.regex'=>"Mã sinh viên không đúng định dạng",
          'hoten'=>'Vui lòng nhập họ ten',
          'hoten.min'=>'Tên ngắn hơn 8 kí tự'  
        ];
    }
}