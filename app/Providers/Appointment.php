<?php

namespace App\Providers;

class Appointment
{

    private $id;
    private $name;
    private $email;
    private $service;
    private $phone_number;
    private $date;
    private $time;
    private $your_notes;
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

    public function getService(): String
    {
        return $this->service;
    }

    public function getPhoneNumber(): String
    {
        return $this->phone_number;
    }

    public function getDate(): String
    {
        return $this->date;
    }

    public function getTime(): String
    {
        return $this->time;
    }

    public function getYourNotes(): String
    {
        return $this->your_notes;
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

    public function setService($service): Appointment
    {
        $this->service = $service;
        return $this;
    }

    public function setPhoneNumber($phone_number): Appointment
    {
        $this->phone_number = $phone_number;
        return $this;
    }

    public function setDate($date): Appointment
    {
        $this->date = $date;
        return $this;
    }

    public function setTime($time): Appointment
    {
        $this->time = $time;
        return $this;
    }

    public function setYourNotes($your_notes): Appointment
    {
        $this->your_notes = $your_notes;
        return $this;
    }

}
