<?php

namespace SLLH\IsoCodesValidator\Tests\Constraints;

/**
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
final class IbanValidatorTest extends AbstractGenericConstraintValidatorTest
{
    /**
     * {@inheritdoc}
     */
    protected function getInvalidMessage()
    {
        return 'This value is not a valid IBAN.';
    }
}
