<?php

namespace Spolischook\GoogleCalendarBundle\Model;

class Source
{
    /**
     * URL of the source pointing to a resource. URL's protocol must be HTTP or HTTPS.
     * @var string
     */
    protected $url;

    /**
     * Title of the source; for example a title of a web page or an email subject.
     * @var string
     */
    protected $title;
}