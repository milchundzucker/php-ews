<?php
/**
 * Contains \jamesiarmes\PEWS\Type\SearchParametersType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Represents the parameters that define a search folder.
 *
 * @package php-ews\Types
 */
class SearchParametersType extends Type
{
    /**
     * Represents the collection of folders that will be mined to determine the
     * contents of a search folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $BaseFolderIds;

    /**
     * Represents the restriction or query that is used to filter items or
     * folders in FindItem/FindFolder and search folder operations.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\RestrictionType
     */
    public $Restriction;

    /**
     * Describes how a search folder traverses the folder hierarchy.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\SearchFolderTraversalType
     */
    public $Traversal;
}
