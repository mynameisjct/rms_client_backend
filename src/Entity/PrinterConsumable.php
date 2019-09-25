<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrinterConsumable
 *
 * @ORM\Table(name="printer_consumable", indexes={@ORM\Index(name="IDX_315B2007A94ADB61", columns={"consumable_id"}), @ORM\Index(name="IDX_315B200746EC494A", columns={"printer_id"})})
 * @ORM\Entity
 */
class PrinterConsumable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="printer_consumable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ConsumableTbl
     *
     * @ORM\ManyToOne(targetEntity="ConsumableTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="consumable_id", referencedColumnName="id")
     * })
     */
    private $consumable;

    /**
     * @var \PrinterTbl
     *
     * @ORM\ManyToOne(targetEntity="PrinterTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="printer_id", referencedColumnName="id")
     * })
     */
    private $printer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConsumable(): ?ConsumableTbl
    {
        return $this->consumable;
    }

    public function setConsumable(?ConsumableTbl $consumable): self
    {
        $this->consumable = $consumable;

        return $this;
    }

    public function getPrinter(): ?PrinterTbl
    {
        return $this->printer;
    }

    public function setPrinter(?PrinterTbl $printer): self
    {
        $this->printer = $printer;

        return $this;
    }


}
