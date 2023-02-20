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
    public function __construct(?int $customer_id, ?Date $date, ?string $conversation, ?int $id = null)
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
        $contract = $stm->fetch(PDO::FETCH_ASSOC);
        return new Contract($contract['customer_id'], $contract['date'], $contract['conversation']);

    }

    public function save(): void
    {
        $pdo = DB::getDB();
        if ($this->id === null) {
            $stm = $pdo->prepare("INSERT INTO contracts(date, conversation) VALUES ( ?, ?)");
            $stm->execute([$this->date, $this->conversation]);
            $this->id = $pdo->lastInsertId();
        } else {
            $stm = $pdo->prepare("UPDATE contracts SET =?, =?, phone=?, email=?, address=?, position=?, company_id=? WHERE customer_id=?");
            $stm->execute([$this->date, $this->conversation, $this->customer_id, $this->id]);
        }
    }

    public static function allContracts($customer_id = null): array
    {
        $pdo = DB::getDB();
        if ($customer_id === null) {
            $stm = $pdo->prepare("SELECT * FROM contracts");
            $stm->execute([]);
        } else {
            $stm = $pdo->prepare("SELECT * FROM contracts WHERE customer_id=?");
            $stm->execute([$customer_id]);
        }
        $result = [];
        foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $contract) {
            $result[] = new Contract($contract['customer_id'], $contract['date'], $contract['conversation'], $contract['customer_id']);
        }
        return $result;
    }

    public static function getAllContracts(): array
    {
        $pdo = DB::getDB();
        $stm = $pdo->prepare("SELECT * FROM contracts");
        $stm->execute([]);
        $result = [];
        foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $contract) {
            $result[] = new Contract($contract['customer_id'], $contract['date'], $contract['conversation'], $contract['id']);
        }
        return $result;
    }

    public function delete(): void
    {
        $pdo = DB::getDB();
        $stm = $pdo->prepare("DELETE FROM contracts WHERE id=?");
        $stm->execute([$this->id]);
    }
}