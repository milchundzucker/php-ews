<?php
/**
 * Contains \jamesiarmes\PEWS\Type\FolderType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Defines a folder to create, get, find, synchronize, or update.
 *
 * @package php-ews\Types
 */
class FolderType extends BaseFolderType
{
    /**
     * Contains all the configured permissions for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PEWS\Type\PermissionSetType
     */
    public $PermissionSet;

    /**
     * Represents the count of unread items within a given folder.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $UnreadCount;
}
