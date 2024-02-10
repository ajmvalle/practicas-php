<?php

/**
 * Card class
 * 
 */
class Card {
    private $id;
    private $image;
    private $status; // hidden, visible

    public function __construct($id, $image) {
        $this->id = $id;
        $this->image = $image;
        $this->status = "hidden";
    }

    public function getId() {
        return $this->id;
    }

    public function getImage() {
        return $this->image;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}