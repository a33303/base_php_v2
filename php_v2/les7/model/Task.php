<?php

include_once "model/Model.php";

class Task extends Model
{
    private int $user_id;
    private ?string $description;
    private bool $isDone = false;


    public function __construct(int $id = null, string $description = null)
    {
       $this->description = $description;
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


    public function isDone(): bool
    {
        return $this->isDone;
    }


    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }




}