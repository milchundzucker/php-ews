<?php
/**
 * Contains \jamesiarmes\PEWS\Type\OrType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Represents a search expression that performs a logical OR on the search
 * expression that it contains.
 *
 * Or will return true if any of its children return true. Or must have two or
 * more children.
 *
 * @package php-ews\Types
 */
class OrType extends MultipleOperandBooleanExpressionType
{

}
