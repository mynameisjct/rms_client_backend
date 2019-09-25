<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsumableTbl
 *
 * @ORM\Table(name="consumable_tbl")
 * @ORM\Entity
 */
class ConsumableTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="consumable_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier", type="string", length=25, nullable=true)
     */
    private $supplier;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_installed", type="date", nullable=true)
     */
    private $dateInstalled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarks", type="string", length=250, nullable=true)
     */
    private $remarks;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_received", type="date", nullable=true)
     */
    private $dateReceived;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_handled", type="string", length=50, nullable=true)
     */
    private $userHandled;

    /**
     * @var int|null
     *
     * @ORM\Column(name="current_reading", type="integer", nullable=true)
     */
    private $currentReading;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSupplier(): ?string
    {
        return $this->supplier;
    }

    public function setSupplier(?string $supplier): self
    {
        $this->supplier = $supplier;

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

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(?string $remarks): self
    {
        $this->remarks = $remarks;

        return $this;
    }

    public function getDateReceived(): ?\DateTimeInterface
    {
        return $this->dateReceived;
    }

    public function setDateReceived(?\DateTimeInterface $dateReceived): self
    {
        $this->dateReceived = $dateReceived;

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

    public function getCurrentReading(): ?int
    {
        return $this->currentReading;
    }

    public function setCurrentReading(?int $currentReading): self
    {
        $this->currentReading = $currentReading;

        return $this;
    }


}
