<?php

namespace Spolischook\GoogleCalendarBundle\Model;

interface UserInterface
{
    public function getId();
    public function getEmail();
    public function getDisplayName();
    public function getSelf();
}