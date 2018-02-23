<?php

namespace App\Providers;

use Illuminate\Validation\Validator;

class CustomValidator extends Validator {

    public function validateEmpty($attribute, $value)
    {
        return ! $this->validateRequired($attribute, $value);
    }

    public function validateEmptyWith($attribute, $value, $parameters)
    {
        $key = $parameters[0];

        if ($this->validateRequired($key, $this->getValue($key))) {
            return $this->validateEmpty($attribute, $value);
        }

        return true;
    }
}
