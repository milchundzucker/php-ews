<?php
/**
 * Contains \jamesiarmes\PEWS\Type\SetItemFieldType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Represents an update to a single property of an item in an UpdateItem
 * operation.
 *
 * @package php-ews\Types
 */
class SetItemFieldType extends ItemChangeDescriptionType
{
    /**
     * Represents an Exchange calendar item to update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item to update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list to update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DistributionListType
     */
    public $DistributionList;

    /**
     * Represents an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation to update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message to update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request to update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response to update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\MessageType
     */
    public $Message;

    /**
     * Represents a task to update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TaskType
     */
    public $Task;
}
