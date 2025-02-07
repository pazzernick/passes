<?php

namespace Chiiya\Passes\Common\Validation;

use Attribute;
use Spatie\DataTransferObject\Validation\ValidationResult;
use Spatie\DataTransferObject\Validator;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
class MinItems implements Validator
{
    public function __construct(
        private int $size,
    ) {}

    public function validate(mixed $value): ValidationResult
    {
        if ($value === null || (is_array($value) && count($value) >= $this->size)) {
            return ValidationResult::valid();
        }

        return ValidationResult::invalid("The value must have at least {$this->size} items.");
    }
}
