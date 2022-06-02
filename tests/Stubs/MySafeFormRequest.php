<?php

declare(strict_types=1);

namespace MichaelRubel\HelpfulTraits\Tests\Stubs;

use Illuminate\Foundation\Http\FormRequest;
use MichaelRubel\HelpfulTraits\Traits\RetrievesSafeInput;

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
