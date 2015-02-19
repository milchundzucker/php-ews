<?php
/**
 * Contains EWSType_NonEmptyArrayOfFoldersType.
 */

/**
 * Represents an array of folders that are used in folder operations.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfFoldersType extends EWSType
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * Represents a Contacts folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Identifies a folder to create, get, find, synchronize, or update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\FolderType
     */
    public $Folder;

    /**
     * Represents a Search folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a Tasks folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\TasksFolderType
     */
    public $TasksFolder;
}
