<?php


class User
{
    public string $username;
    public string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive = true;


    function __construct(string $username, string $email, ?int $age = null)
    {
        $this->username = $username;
        $this->email = $email;
        $this->age = $age;

    }

    function getUsername(): string
    {
        return $this->username ?? 'unknown';
    }

    public function setAge(?int $age): void
    {
        $this->age = $this->getValidAge($age);
    }

    function getAge(): ?int
    {
        return $this->age;
    }

    private function getValidAge(?int $age): ?int
    {
        if ($age > 0 && $age <= 125) {
            return $age;
        }
        return null;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

}
