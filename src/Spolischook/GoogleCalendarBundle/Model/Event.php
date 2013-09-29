<?php

namespace Spolischook\GoogleCalendarBundle\Model;

class Event implements EventInterface {

    /** @var  string */
    protected $id;

    /**
     * Type of the resource ("calendar#event").
     * @var string
     */
    protected $kind;

    /**
     * ETag of the resource.
     * @var string
     */
    protected $etag;

    /**
     * Status of the event. Optional. Possible values are:
     *      "confirmed" - The event is confirmed. This is the default status.
     *      "tentative" - The event is tentatively confirmed.
     *      "cancelled" - The event is cancelled.
     * @var string
     */
    protected $status;

    /**
     * An absolute link to this event in the Google Calendar Web UI. Read-only.
     * @var string
     */
    protected $htmlLink;

    /**
     * Creation time of the event (as a RFC 3339 timestamp). Read-only.
     * @var \DateTime
     */
    protected $created;

    /**
     * Last modification time of the event (as a RFC 3339 timestamp). Read-only.
     * @var \DateTime
     */
    protected $updated;

    /**
     * Title of the event.
     * @var string
     */
    protected $summary;

    /**
     * Description of the event. Optional.
     * @var string
     */
    protected $description;

    /**
     * Geographic location of the event as free-form text. Optional.
     * @var string
     */
    protected $location;

    /**
     * The color of the event. This is an ID referring to an entry in the "event" section
     * of the colors definition (see the "colors" endpoint). Optional.
     * @var string
     */
    protected $colorId;

    /**
     * The creator of the event. Read-only.
     * @var \Spolischook\GoogleCalendarApi\Model\UserInterface
     */
    protected $creator;

    /**
     * The organizer of the event. If the organizer is also an attendee, this is indicated with a separate entry
     * in 'attendees' with the 'organizer' field set to True. To change the organizer, use the "move" operation.
     * Read-only, except when importing an event.
     * @var \Spolischook\GoogleCalendarApi\Model\UserInterface
     */
    protected $organizer;

    /**
     * The (inclusive) start time of the event. For a recurring event, this is the start time of the first instance.
     * @var \Spolischook\GoogleCalendarApi\Model\EventDateTime
     */
    protected $start;

    /**
     * The (exclusive) end time of the event. For a recurring event, this is the end time of the first instance.
     * @var \Spolischook\GoogleCalendarApi\Model\EventDateTime
     */
    protected $end;

    /**
     * List of RRULE, EXRULE, RDATE and EXDATE lines for a recurring event.
     * This field is omitted for single events or instances of recurring events.
     * @var array
     */
    protected $recurrence = array();

    /**
     * For an instance of a recurring event, this is the event ID of the recurring event itself. Immutable.
     * @var string
     */
    protected $recurringEventId;

    /**
     * For an instance of a recurring event, this is the time at which this event would start according
     * to the recurrence data in the recurring event identified by recurringEventId. Immutable.
     * @var \Spolischook\GoogleCalendarApi\Model\EventDateTime
     */
    protected $originalStartTime;

    /**
     * Whether the event blocks time on the calendar. Optional. Possible values are:
     *      "opaque" - The event blocks time on the calendar. This is the default value.
     *      "transparent" - The event does not block time on the calendar.
     * @var string
     */
    protected $transparency;

    /**
     * Visibility of the event. Optional. Possible values are:
     *      "default" - Uses the default visibility for events on the calendar. This is the default value.
     *      "public" - The event is public and event details are visible to all readers of the calendar.
     *      "private" - The event is private and only event attendees may view event details.
     *      "confidential" - The event is private. This value is provided for compatibility reasons.
     * @var string
     */
    protected $visibility;

    /**
     * Event ID in the iCalendar format.
     * @var string
     */
    protected $iCalUID;

    /**
     * Sequence number as per iCalendar.
     * @var integer
     */
    protected $sequence;

    /**
     * The attendees of the event.
     * @var array
     */
    protected $attendees;

    /**
     * Whether attendees may have been omitted from the event's representation. When retrieving an event,
     * this may be due to a restriction specified by the 'maxAttendee' query parameter. When updating an
     * event, this can be used to only update the participant's response. Optional. The default is False.
     * @var boolean
     */
    protected $attendeesOmitted = false;

    /**
     * Extended properties of the event.
     * not used for now
     * @var object
     */
    protected $extendedProperties;

    /**
     * A gadget that extends this event.
     * not used for now
     * @var object
     */
    protected $gadget;

    /**
     * Whether anyone can invite themselves to the event. Optional.
     * @var bool
     */
    protected $anyoneCanAddSelf = false;

    /**
     * Whether attendees other than the organizer can invite others to the event. Optional.
     * @var bool
     */
    protected $guestsCanInviteOthers = true;

    /**
     * Whether attendees other than the organizer can see who the event's attendees are. Optional.
     * @var bool
     */
    protected $guestsCanSeeOtherGuests = true;

    /**
     * Whether this is a private event copy where changes are not shared with other copies on other
     * calendars. Optional. Immutable.
     * @var bool
     */
    protected $privateCopy = false;

    /**
     * Information about the event's reminders for the authenticated user.
     * @var \Spolischook\GoogleCalendarApi\Model\Reminders
     */
    protected $reminders;

    /**
     * Whether the end time is actually unspecified. An end time is still provided for compatibility reasons,
     * even if this attribute is set to True.
     * @var bool
     */
    protected $endTimeUnspecified = false;

    /**
     * Whether this is a locked event copy where no changes can be made to the main event
     * fields "summary", "description", "location", "start", "end" or "recurrence".
     * @var bool
     */
    protected $locked = false;

    /**
     * An absolute link to the Google+ hangout associated with this event. Read-only.
     * @var string
     */
    protected $hangoutLink;

    /**
     * Source of an event from which it was created; for example a web page,
     * an email message or any document identifiable by an URL using HTTP/HTTPS protocol.
     * Accessible only by the creator of the event.
     * @var \Spolischook\GoogleCalendarApi\Model\Source
     */
    protected $source;
}