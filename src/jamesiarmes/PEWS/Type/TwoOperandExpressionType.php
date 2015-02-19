<?php
/**
 * Contains \jamesiarmes\PEWS\Type\TwoOperandExpressionType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Base class for search expressions with two operands.
 *
 * @package php-ews\Types
 */
abstract class TwoOperandExpressionType extends SearchExpressionType
{
    /**
     * Represents either a property or a constant value to be used when
     * comparing with another property.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
