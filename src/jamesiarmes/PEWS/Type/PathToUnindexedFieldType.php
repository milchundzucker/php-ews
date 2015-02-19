<?php
/**
 * Contains \jamesiarmes\PEWS\Type\PathToUnindexedFieldType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Identifies frequently referenced properties by URI.
 *
 * @package php-ews\Types
 */
class PathToUnindexedFieldType extends BasePathToElementType
{
    /**
     * Identifies the URI of the property.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\UnindexedFieldURIType
     */
    public $FieldURI;
}
