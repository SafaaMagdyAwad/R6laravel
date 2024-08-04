<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class RangeRule implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    
     private $min;
     private $max;
     public function __construct($min, $max)
     {
         $this->min = $min;
         $this->max = $max;
     }
     public function passes($attribute, $value)
    {
        return $value >= $this->min &&
               $value <= $this->max ;
        }

    public function message()
    {
        return 'The :attribute must be a number between ' . $this->min . ' and ' . $this->max ;
    }

}
