<?php

namespace App\Http\Requests\Admin\DetailMemo;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateDetailMemo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.detail-memo.edit', $this->detailMemo);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'memo_id' => ['sometimes', 'integer'],
            'odependency_id' => ['sometimes', 'integer'],
            'ddependency_id' => ['sometimes', 'integer'],
            'date_entry' => [''],
            'date_exit' => [''],
            'obs' => ['sometimes', 'string'],
            'state_id' => [''],

        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
