<?php
/**
 * Contains \jamesiarmes\PEWS\Type\SearchFolderType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Represents a search folder that is contained in a mailbox.
 *
 * @package php-ews\Types
 */
class SearchFolderType extends FolderType
{
    /**
     * Contains the parameters that define a search folder.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\SearchParametersType
     */
    public $SearchParameters;
}
