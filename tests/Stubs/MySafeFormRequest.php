<?php

declare(strict_types=1);

namespace MichaelRubel\SafeFormRequest\Tests\Stubs;

use Illuminate\Foundation\Http\FormRequest;
use MichaelRubel\SafeFormRequest\Traits\RetrievesSafeInput;

class MySafeFormRequest extends FormRequest
{
    use RetrievesSafeInput;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'safe' => ['string'],
        ];
    }
}
