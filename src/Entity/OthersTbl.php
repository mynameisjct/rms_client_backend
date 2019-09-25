<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OthersTbl
 *
 * @ORM\Table(name="others_tbl")
 * @ORM\Entity
 */
class OthersTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="others_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="past_reading", type="integer", nullable=true)
     */
    private $pastReading;

    /**
     * @var int|null
     *
     * @ORM\Column(name="current_reading", type="integer", nullable=true)
     */
    private $currentReading;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_installed", type="date", nullable=true)
     */
    private $dateInstalled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_handled", type="string", length=50, nullable=true)
     */
    private $userHandled;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPastReading(): ?int
    {
        return $this->pastReading;
    }

    public function setPastReading(?int $pastReading): self
    {
        $this->pastReading = $pastReading;

        return $this;
    }

    public function getCurrentReading(): ?int
    {
        return $this->currentReading;
    }

    public function setCurrentReading(?int $currentReading): self
    {
        $this->currentReading = $currentReading;

        return $this;
    }

    public function getDateInstalled(): ?\DateTimeInterface
    {
        return $this->dateInstalled;
    }

    public function setDateInstalled(?\DateTimeInterface $dateInstalled): self
    {
        $this->dateInstalled = $dateInstalled;

        return $this;
    }

    public function getUserHandled(): ?string
    {
        return $this->userHandled;
    }

    public function setUserHandled(?string $userHandled): self
    {
        $this->userHandled = $userHandled;

        return $this;
    }


}
