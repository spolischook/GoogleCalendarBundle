<?php

/*
 * (c) Sergey Polischuk <spolischook@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spolischook\GoogleCalendarBundle\Model;

class EventAttendee implements UserInterface
{
    /**
     * The attendee's Profile ID, if available.
     * @var string
     */
    protected $id;

    /**
     * The attendee's email address, if available. This field must be present when adding an attendee.
     * @var string
     */
    protected $email;

    /**
     * The attendee's name, if available. Optional.
     * @var string
     */
    protected $displayName;

    /**
     * Whether the attendee is the organizer of the event. Read-only. The default is False.
     * @var bool
     */
    protected $organizer = false;

    /**
     * Whether this entry represents the calendar on which this copy of the event appears. Read-only. The default is False.
     * @var bool
     */
    protected $self = false;

    /**
     * Whether the attendee is a resource. Read-only. The default is False.
     * @var bool
     */
    protected $resource = false;

    /**
     * Whether this is an optional attendee. Optional. The default is False.
     * @var bool
     */
    protected $optional = false;

    /**
     * The attendee's response status. Possible values are:
     *      "needsAction" - The attendee has not responded to the invitation.
     *      "declined" - The attendee has declined the invitation.
     *      "tentative" - The attendee has tentatively accepted the invitation.
     *      "accepted" - The attendee has accepted the invitation.
     * @var string
     */
    protected $responseStatus;

    /**
     * The attendee's response comment. Optional.
     * @var string
     */
    protected $comment;

    /**
     * Number of additional guests. Optional. The default is 0.
     * @var integer
     */
    protected $additionalGuests = 0;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return boolean
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @return boolean
     */
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * @return boolean
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @return boolean
     */
    public function getOptional()
    {
        return $this->optional;
    }

    /**
     * @param boolean $optional
     */
    public function setOptional($optional)
    {
        $this->optional = $optional;
    }

    /**
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * @param string $responseStatus
     */
    public function setResponseStatus($responseStatus)
    {
        $this->responseStatus = $responseStatus;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return int
     */
    public function getAdditionalGuests()
    {
        return $this->additionalGuests;
    }

    /**
     * @param int $additionalGuests
     */
    public function setAdditionalGuests($additionalGuests)
    {
        $this->additionalGuests = $additionalGuests;
    }
}