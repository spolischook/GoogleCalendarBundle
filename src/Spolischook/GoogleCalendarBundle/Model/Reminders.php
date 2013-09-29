<?php

namespace Spolischook\GoogleCalendarBundle\Model;

class Reminders
{
    /**
     * Whether the default reminders of the calendar apply to the event.
     * @var bool
     */
    protected $useDefault;

    /**
     * If the event doesn't use the default reminders, this lists the reminders specific to the event, or,
     * if not set, indicates that no reminders are set for this event.
     * @var array
     */
    protected $overrides;
}