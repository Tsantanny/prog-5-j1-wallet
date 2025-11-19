<?php

namespace App;

class Wallet
{
    private string $color;
    private float $weight;
    private string $brand;
    private array $cards = [];
    private float $balance;

    public function __construct(
        string $color,
        array $cards,
        float $weight,
        string $brand,
        float $balance
    ) {
        $this->color = $color;
        $this->cards = $cards;
        $this->weight = $weight;
        $this->brand = $brand;
        $this->balance = $balance;
    }

    public function withdraw(float $amount): float
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException("Amount must be positive");
        }

        if ($amount > $this->balance) {
            throw new \InvalidArgumentException("Insufficient funds");
        }

        $this->balance -= $amount;

        return $amount;
    }

    public function addMoney(float $amount): void
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException("Amount must be positive");
        }

        $this->balance += $amount;
    }

    public function addCard(string $card): string
    {
        if (!in_array($card, $this->cards, true)) {
            $this->cards[] = $card;
        }

        return $card;
    }

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

    public function getCards(): array
    {
        return $this->cards;
    }

    public function setCards(array $cards): void
    {
        $this->cards = $cards;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
