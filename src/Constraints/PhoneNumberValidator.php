<?php

namespace SLLH\IsoCodesValidator\Constraints;

use IsoCodes;
use SLLH\IsoCodesValidator\AbstractIsoCodesConstraintValidator;
use Symfony\Component\Validator\Constraint;

/**
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
class PhoneNumberValidator extends AbstractIsoCodesConstraintValidator
{
    /**
     * @param mixed                  $value
     * @param PhoneNumber|Constraint $constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);

        if ($value && !IsoCodes\PhoneNumber::validate(
                $value,
                PhoneNumber::ANY === $constraint->country ? null : $constraint->country
            )) {
            $this->createViolation($constraint->message);
        }
    }
}
