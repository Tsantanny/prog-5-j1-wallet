<?php

namespace App;

class Wallet
{
    private string $color;
    private string $cardHolder;
    private string $weight;
    private string $brand;

    public function __construct(
        string $color,
        string $cardHolder,
        string $weight,
        string $brand
    ) {
        $this->color = $color;
        $this->cardHolder = $cardHolder;
        $this->weight = $weight;
        $this->brand = $brand;
    }

    public function getMoney(float $amount): float
    {
        return 0.0;
    }

    public function addMoney(float $amount): void {}

    public function checkMoney(): float
    {
        return 0.0;
    }

    public function addCard(string $card): void {}

    public function isLost(): bool
    {
        return true;
    }


    // Getters and Setters
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCardHolder(): string
    {
        return $this->cardHolder;
    }

    public function setCardHolder(string $cardHolder): void
    {
        $this->cardHolder = $cardHolder;
    }

    public function getWeight(): string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
}
