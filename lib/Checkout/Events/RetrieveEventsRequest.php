<?php

namespace Checkout\Events;

use DateTime;

class RetrieveEventsRequest
{
    public string $payment_id;

    public string $charge_id;

    public string $track_id;

    public string $reference;

    public int $skip;

    public int $limit;

    public DateTime $from;

    public DateTime $to;
}
