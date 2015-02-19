<?php
/**
 * Contains \jamesiarmes\PEWS\Type\SearchExpressionType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Represents the substituted element within a restriction.
 *
 * @package php-ews\Types
 *
 * @todo Determine which classes need to extend this.
 */
abstract class SearchExpressionType extends Type
{
    /**
     * Identifies MAPI properties.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
