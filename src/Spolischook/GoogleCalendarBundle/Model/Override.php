<?php

namespace Spolischook\GoogleCalendarBundle\Model;

class Override
{
    /**
     * The method used by this reminder. Possible values are:
     *      "email" - Reminders are sent via email.
     *      "sms" - Reminders are sent via SMS.
     *      "popup" - Reminders are sent via a UI popup.
     * @var string
     */
    protected $method;

    /**
     * Number of minutes before the start of the event when the reminder should trigger.
     * @var integer
     */
    protected $minutes;
}