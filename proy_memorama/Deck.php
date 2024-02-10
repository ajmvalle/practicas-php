<?php

require 'Card.php';

class Deck
{
    private $cards = [];


    private $images = [
        "images/bulbasaur.png",
        "images/charizard.png",
        "images/pikachu.png",
        "images/squirtle.png",
    ];

    public function __construct()
    {
        $this->cards = $this->createDeck();
    }

    public function getCards()
    {
        return $this->cards;
    }

    public function shuffle()
    {
        shuffle($this->cards);
    }

    private function createDeck()
    {
        $cards = [];

        $id = 1;
        foreach ($this->images as $image) {
            $cards[] = new Card($id, $image);
            $cards[] = new Card($id, $image);
            $id++;
        }
        return $cards;
    }
}
