<?php

namespace App;

class Wallet
{
    private string $color;
    private array $cards = [];
    private float $weight;
    private string $brand;
    private float $money;

    public function __construct(
        string $color,
        array $cards,
        float $weight,
        string $brand,
        float $money
    ) {
        $this->color = $color;
        $this->cards = $cards;
        $this->weight = $weight;
        $this->brand = $brand;
        $this->money = $money;
    }

    // Money management
    public function withdraw(float $amount): float
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException("Amount must be positive");
        }

        if ($amount > $this->money) {
            throw new \InvalidArgumentException("Insufficient funds");
        }

        $this->money -= $amount;

        return $amount;
    }

    public function addMoney(float $amount): void
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException("Amount must be positive");
        }

        $this->money += $amount;
    }

    public function checkMoney(): float
    {
        return $this->money;
    }

    // Cards management
    public function addCard(string $card): string
    {
        if (!in_array($card, $this->cards, true)) {
            $this->cards[] = $card;
        }

        return $card;
    }

    public function getCards(): array
    {
        return $this->cards;
    }

    public function setCards(array $cards): void
    {
        $this->cards = $cards;
    }

    // Lost status
    public function isLost(): bool
    {
        return false;
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

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
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
