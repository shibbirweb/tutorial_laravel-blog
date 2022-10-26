<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:191',
            'content' => 'required|string|max:5000',
            'is_published' => 'required|boolean',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'title.required' => 'Title must required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            // 'content' => 'post body',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        // $merge_items = [
        //     'published_at' => $this->boolean('is_published') ? now() : null,
        //     'user_id' => auth()->id(),
        // ];

        // $this->merge($merge_items);
    }

    /**
     * Get the validated data from the request.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();

        // return [
        //     ...$validated,
        //     'published_at' => $this->boolean('is_published') ? now() : null,
        //     'user_id' => auth()->id(),
        //     'title' => Str::uniqueSlug(Post::class, $this->title),
        // ];

        return $validated + [
            'published_at' => $this->boolean('is_published') ? now() : null,
            'user_id' => auth()->id(),
            'slug' => Str::uniqueSlug(Post::class, $this->title),
        ];
    }
}
