<?php
/**
 * Contains \jamesiarmes\PEWS\Type\ExcludesType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Represents a bitwise mask of a specified property and a supplied value.
 *
 * @package php-ews\Types
 */
class ExcludesType extends SearchExpressionType
{
    /**
     * Represents a hexadecimal or decimal mask to be used during an Excludes
     * restriction operation.
     *
     * If the bitmask represents a hexadecimal number, it must be prefixed by 0x
     * or 0X. Otherwise, it will be considered a decimal number.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ExcludesValueType
     */
    public $Bitmask;
}
