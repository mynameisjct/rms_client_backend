<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipmentUserRelationship
 *
 * @ORM\Table(name="equipment_user_relationship", indexes={@ORM\Index(name="IDX_7FDDCA10517FE9FE", columns={"equipment_id"}), @ORM\Index(name="IDX_7FDDCA10A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class EquipmentUserRelationship
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipment_user_relationship_id_seq", allocationSize=1, initialValue=1)
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
     * @var \EquipmentUserTbl
     *
     * @ORM\ManyToOne(targetEntity="EquipmentUserTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

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

    public function getUser(): ?EquipmentUserTbl
    {
        return $this->user;
    }

    public function setUser(?EquipmentUserTbl $user): self
    {
        $this->user = $user;

        return $this;
    }


}
