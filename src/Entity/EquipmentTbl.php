<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipmentTbl
 *
 * @ORM\Table(name="equipment_tbl")
 * @ORM\Entity
 */
class EquipmentTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipment_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="equipment_type", type="string", length=20, nullable=true)
     */
    private $equipmentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="manufacturer", type="string", length=50, nullable=true)
     */
    private $manufacturer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model", type="string", length=50, nullable=true)
     */
    private $model;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial", type="string", length=50, nullable=true)
     */
    private $serial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag_no", type="string", length=50, nullable=true)
     */
    private $tagNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier", type="string", length=50, nullable=true)
     */
    private $supplier;

    /**
     * @var float|null
     *
     * @ORM\Column(name="purchase_amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $purchaseAmount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="purchase_date", type="date", nullable=true)
     */
    private $purchaseDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="warranty", type="date", nullable=true)
     */
    private $warranty;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_dr", type="string", length=50, nullable=true)
     */
    private $invoiceDr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEquipmentType(): ?string
    {
        return $this->equipmentType;
    }

    public function setEquipmentType(?string $equipmentType): self
    {
        $this->equipmentType = $equipmentType;

        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

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

    public function getSerial(): ?string
    {
        return $this->serial;
    }

    public function setSerial(?string $serial): self
    {
        $this->serial = $serial;

        return $this;
    }

    public function getTagNo(): ?string
    {
        return $this->tagNo;
    }

    public function setTagNo(?string $tagNo): self
    {
        $this->tagNo = $tagNo;

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

    public function getPurchaseAmount(): ?float
    {
        return $this->purchaseAmount;
    }

    public function setPurchaseAmount(?float $purchaseAmount): self
    {
        $this->purchaseAmount = $purchaseAmount;

        return $this;
    }

    public function getPurchaseDate(): ?\DateTimeInterface
    {
        return $this->purchaseDate;
    }

    public function setPurchaseDate(?\DateTimeInterface $purchaseDate): self
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    public function getWarranty(): ?\DateTimeInterface
    {
        return $this->warranty;
    }

    public function setWarranty(?\DateTimeInterface $warranty): self
    {
        $this->warranty = $warranty;

        return $this;
    }

    public function getInvoiceDr(): ?string
    {
        return $this->invoiceDr;
    }

    public function setInvoiceDr(?string $invoiceDr): self
    {
        $this->invoiceDr = $invoiceDr;

        return $this;
    }


}
