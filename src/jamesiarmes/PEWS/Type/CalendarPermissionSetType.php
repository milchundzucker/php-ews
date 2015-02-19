<?php
/**
 * Contains \jamesiarmes\PEWS\Type\CalendarPermissionSetType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Contains all the permissions that are configured for a calendar folder.
 *
 * @package php-ews\Types
 */
class CalendarPermissionSetType extends Type
{
    /**
     * Contains an array of calendar permissions for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_ArrayOfCalendarPermissionsType
     */
    public $CalendarPermissions;

    /**
     * Contains an array of unknown entries that cannot be resolved against the
     * Active Directory directory service.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
