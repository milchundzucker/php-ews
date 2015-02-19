<?php
/**
 * Contains \jamesiarmes\PEWS\Type\ConstantValueType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Identifies a constant value in a restriction.
 *
 * @package php-ews\Types
 */
class ConstantValueType extends Type
{
    /**
     * Specifies the value to compare in the restriction.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Value;
}
