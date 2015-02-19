<?php
/**
 * Contains \jamesiarmes\PEWS\Type\ContainsExpressionType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Represents a search expression that determines whether a given property
 * contains the supplied constant string value.
 *
 * @package php-ews\Types
 */
class ContainsExpressionType extends SearchExpressionType
{
    /**
     * Identifies a constant value in a restriction.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ConstantValueType
     */
    public $Constant;

    /**
     * Determines whether the search ignores cases and spaces.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\ContainmentComparisonType
     */
    public $ContainmentComparison;

    /**
     * Identifies the boundaries of a search.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\ContainmentModeType
     */
    public $ContainmentMode;
}
