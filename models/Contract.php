<?php

use Cassandra\Date;

class Contract
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

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customer_id;
    }

    /**
     * @param int|null $customer_id
     */
    public function setCustomerId(?int $customer_id): void
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @return Date|null
     */
    public function getDate(): ?Date
    {
        return $this->date;
    }

    /**
     * @param Date|null $date
     */
    public function setDate(?Date $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string|null
     */
    public function getConversation(): ?string
    {
        return $this->conversation;
    }

    /**
     * @param string|null $conversation
     */
    public function setConversation(?string $conversation): void
    {
        $this->conversation = $conversation;
    }
    public static function getOneContract(int $id): Contract
    {
        $pdo = DB::getDB();
        $stm = $pdo->prepare("SELECT * FROM contracts WHERE id=? ");
        $stm->execute([$id]);
        $company = $stm->fetch(PDO::FETCH_ASSOC);
        return new Company($company['name'], $company['address'], $company['vat_code'], $company['company_name'], $company['phone'], $company['email'], $company['id']);

    }


}