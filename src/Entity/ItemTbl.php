<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemTbl
 *
 * @ORM\Table(name="item_tbl")
 * @ORM\Entity
 */
class ItemTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="item_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_type_description", type="string", length=150, nullable=true)
     */
    private $itemTypeDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItemTypeDescription(): ?string
    {
        return $this->itemTypeDescription;
    }

    public function setItemTypeDescription(?string $itemTypeDescription): self
    {
        $this->itemTypeDescription = $itemTypeDescription;

        return $this;
    }


}
