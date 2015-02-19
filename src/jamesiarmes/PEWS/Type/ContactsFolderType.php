<?php
/**
 * Contains \jamesiarmes\PEWS\Type\ContactsFolderType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Represents a contacts folder that is contained in a mailbox.
 *
 * @package php-ews\Types
 */
class ContactsFolderType extends BaseFolderType
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
     * Indicates the permissions that the user has for the contact data that is
     * being shared.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Enumeration\PermissionReadAccessType
     */
    public $SharingEffectiveRights;
}
