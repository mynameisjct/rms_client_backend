<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipmentAddonTbl
 *
 * @ORM\Table(name="equipment_addon_tbl")
 * @ORM\Entity
 */
class EquipmentAddonTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipment_addon_tbl_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="model_brand", type="string", length=50, nullable=true)
     */
    private $modelBrand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial", type="string", length=25, nullable=true)
     */
    private $serial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag_no", type="string", length=25, nullable=true)
     */
    private $tagNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_type", type="string", length=25, nullable=true)
     */
    private $itemType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="log_date", type="text", nullable=true)
     */
    private $logDate;

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

    public function getModelBrand(): ?string
    {
        return $this->modelBrand;
    }

    public function setModelBrand(?string $modelBrand): self
    {
        $this->modelBrand = $modelBrand;

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

    public function getItemType(): ?string
    {
        return $this->itemType;
    }

    public function setItemType(?string $itemType): self
    {
        $this->itemType = $itemType;

        return $this;
    }

    public function getLogDate(): ?string
    {
        return $this->logDate;
    }

    public function setLogDate(?string $logDate): self
    {
        $this->logDate = $logDate;

        return $this;
    }


}
