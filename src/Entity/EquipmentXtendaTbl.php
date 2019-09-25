<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * EquipmentXtendaTbl
 *
 * @ORM\Table(name="equipment_xtenda_tbl")
 * @ORM\Entity
 */
class EquipmentXtendaTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipment_xtenda_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="details", type="text", nullable=true)
     */
    private $details;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;

        return $this;
    }


}
