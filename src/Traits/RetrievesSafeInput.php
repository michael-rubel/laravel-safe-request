<?php

declare(strict_types=1);

namespace MichaelRubel\SafeFormRequest\Traits;

use Illuminate\Support\Arr;

trait RetrievesSafeInput
{
    /**
     * Get an element from the validated input.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key): mixed
    {
        $values = rescue(
            fn () => $this->validated(),
            fn () => $this->all(),
            false
        );

        return Arr::get($values, $key, fn () => $this->route($key));
    }
}
