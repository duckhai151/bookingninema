<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
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
            'name' => 'required',
            'movie_type_id' => 'required',
            'description' => 'required',
            'director' => 'required',
            'running_time' => 'required',
            'cast' => 'required',
            'language' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên.',
            'movie_type_id.required' => 'Vui lòng nhập kiểu phim.',
            'description.required' => 'Vui lòng nhập mô tả.',
            'director.required' => 'Vui lòng nhập đạo diễn.',
            'running_time.required' => 'Vui lòng nhập số phút.',
            'cast.required' => 'Vui lòng nhập diễn viên.',
            'language.required' => 'Vui lòng nhập tên.',
            'start_date.required' => 'Vui lòng nhập ngày bắt đầu.',
            'end_date.required' => 'Vui lòng nhập ngày kết thúc.',
            'image.required' => 'Vui lòng nhập ảnh.',
        ];
    }
}
