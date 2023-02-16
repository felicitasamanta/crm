<?php

use Cassandra\Date;

class Conversation
{
    private ?int $id;
    private ?int $customer_id;
    private ?Date $date;
    private ?string $conversation;

    /**
     * @param int|null $id
     * @param int|null $customer_id
     * @param Date|null $date
     * @param string|null $conversation
     */
    public function __construct(?int $customer_id, ?Date $date, ?string $conversation, ?int $id=null)
    {
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->date = $date;
        $this->conversation = $conversation;
    }


}