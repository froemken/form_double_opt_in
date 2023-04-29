<?php

namespace LinaWolf\FormDoubleOptIn\Event;

use LinaWolf\FormDoubleOptIn\Domain\Model\OptIn;

/**
 * Event after OptIn record has been validated.
 */
final class AfterOptInValidationEvent
{
    private OptIn $optIn;

    public function __construct(OptIn $optIn)
    {
        $this->optIn = $optIn;
    }

    public function getOptIn(): OptIn
    {
        return $this->optIn;
    }
}
