<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrinterTbl
 *
 * @ORM\Table(name="printer_tbl", uniqueConstraints={@ORM\UniqueConstraint(name="printer_tbl_serial_no_key", columns={"serial_no"})})
 * @ORM\Entity
 */
class PrinterTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="printer_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model", type="string", length=50, nullable=true)
     */
    private $model;

    /**
     * @var string|null
     *
     * @ORM\Column(name="addon", type="string", length=100, nullable=true)
     */
    private $addon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier", type="string", length=50, nullable=true)
     */
    private $supplier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requestor", type="string", length=25, nullable=true)
     */
    private $requestor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial_no", type="string", length=20, nullable=true)
     */
    private $serialNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inv_dr_no", type="string", length=15, nullable=true)
     */
    private $invDrNo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="aquisition_date", type="date", nullable=true)
     */
    private $aquisitionDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cost", type="string", length=8, nullable=true)
     */
    private $cost;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="string", length=10, nullable=true)
     */
    private $department;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag", type="string", length=50, nullable=true)
     */
    private $tag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dealer", type="string", length=5, nullable=true)
     */
    private $dealer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usr", type="string", length=50, nullable=true)
     */
    private $usr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=10, nullable=true)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getAddon(): ?string
    {
        return $this->addon;
    }

    public function setAddon(?string $addon): self
    {
        $this->addon = $addon;

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

    public function getRequestor(): ?string
    {
        return $this->requestor;
    }

    public function setRequestor(?string $requestor): self
    {
        $this->requestor = $requestor;

        return $this;
    }

    public function getSerialNo(): ?string
    {
        return $this->serialNo;
    }

    public function setSerialNo(?string $serialNo): self
    {
        $this->serialNo = $serialNo;

        return $this;
    }

    public function getInvDrNo(): ?string
    {
        return $this->invDrNo;
    }

    public function setInvDrNo(?string $invDrNo): self
    {
        $this->invDrNo = $invDrNo;

        return $this;
    }

    public function getAquisitionDate(): ?\DateTimeInterface
    {
        return $this->aquisitionDate;
    }

    public function setAquisitionDate(?\DateTimeInterface $aquisitionDate): self
    {
        $this->aquisitionDate = $aquisitionDate;

        return $this;
    }

    public function getCost(): ?string
    {
        return $this->cost;
    }

    public function setCost(?string $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(?string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getDealer(): ?string
    {
        return $this->dealer;
    }

    public function setDealer(?string $dealer): self
    {
        $this->dealer = $dealer;

        return $this;
    }

    public function getUsr(): ?string
    {
        return $this->usr;
    }

    public function setUsr(?string $usr): self
    {
        $this->usr = $usr;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }


}
