<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipmentXtendaRelationship
 *
 * @ORM\Table(name="equipment_xtenda_relationship", indexes={@ORM\Index(name="IDX_DED45877517FE9FE", columns={"equipment_id"}), @ORM\Index(name="IDX_DED458771830BAA8", columns={"xtenda_id"})})
 * @ORM\Entity
 */
class EquipmentXtendaRelationship
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipment_xtenda_relationship_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \EquipmentTbl
     *
     * @ORM\ManyToOne(targetEntity="EquipmentTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipment_id", referencedColumnName="id")
     * })
     */
    private $equipment;

    /**
     * @var \EquipmentXtendaTbl
     *
     * @ORM\ManyToOne(targetEntity="EquipmentXtendaTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="xtenda_id", referencedColumnName="id")
     * })
     */
    private $xtenda;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEquipment(): ?EquipmentTbl
    {
        return $this->equipment;
    }

    public function setEquipment(?EquipmentTbl $equipment): self
    {
        $this->equipment = $equipment;

        return $this;
    }

    public function getXtenda(): ?EquipmentXtendaTbl
    {
        return $this->xtenda;
    }

    public function setXtenda(?EquipmentXtendaTbl $xtenda): self
    {
        $this->xtenda = $xtenda;

        return $this;
    }


}
