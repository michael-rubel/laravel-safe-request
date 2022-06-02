<?php

declare(strict_types=1);

namespace MichaelRubel\HelpfulTraits\Traits;

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
        return Arr::get($this->validated(), $key, fn () => $this->route($key));
    }
}
