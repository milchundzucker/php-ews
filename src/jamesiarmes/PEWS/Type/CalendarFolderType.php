<?php
/**
 * Contains \jamesiarmes\PEWS\Type\CalendarFolderType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Represents a folder that primarily contains calendar items.
 *
 * @package php-ews\Types
 */
class CalendarFolderType extends BaseFolderType
{
    /**
     * Contains all the configured permissions for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PEWS\Type\CalendarPermissionSetType
     */
    public $PermissionSet;

    /**
     * Indicates the permissions that the user has for the calendar data that is
     * being shared.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Enumeration\CalendarPermissionReadAccessType
     */
    public $SharingEffectiveRights;
}
