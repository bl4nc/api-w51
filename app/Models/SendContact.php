<?php

namespace App\Models;

class Appointment
{

    private $id;
    private $name;
    private $email;
    private $comment;
    private $created_at;


    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): String
    {
        return $this->name;
    }

    public function getEmail(): String
    {
        return $this->email;
    }

    public function getComment(): String
    {
        return $this->comment;
    }

    public function getCreated(): String
    {
        return $this->created_at;
    }

    public function setName($name): Appointment
    {
        $this->name = $name;
        return $this;
    }

    public function setEmail($email): Appointment
    {
        $this->email = $email;
        return $this;
    }

    public function setComment($comment): Appointment
    {
        $this->comment = $comment;
        return $this;
    }
}
