<?php

namespace Trexima\Issz\Model\JobOffer;

class Accomodation implements \JsonSerializable
{
    /**
     * Hradené ubytovanie
     *
     * @var bool
     */
    protected ?bool $paid = null;

    /**
     * Zabezpečené ubytovanie
     *
     * @var bool
     */
    protected ?bool $warranted = null;

    /**
     * Hradené ubytovanie
     *
     * @return bool
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    /**
     * Hradené ubytovanie
     *
     * @param bool $paid
     *
     * @return self
     */
    public function setPaid(?bool $paid): self
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * Zabezpečené ubytovanie
     *
     * @return bool
     */
    public function getWarranted(): ?bool
    {
        return $this->warranted;
    }

    /**
     * Zabezpečené ubytovanie
     *
     * @param bool $warranted
     *
     * @return self
     */
    public function setWarranted(?bool $warranted): self
    {
        $this->warranted = $warranted;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'paid' => $this->getPaid(),
            'warranted' => $this->getWarranted(),
        ];
    }
}