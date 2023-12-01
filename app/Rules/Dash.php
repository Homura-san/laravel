<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Dash implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        #dd($attribute, $value);
        $case = strpos($value, '-');
        #dd($case);
        if ($case != false){
            $fail("O atributo não pode conter traço.");
        }
    }
}
