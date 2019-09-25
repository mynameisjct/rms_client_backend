<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrinterOthers
 *
 * @ORM\Table(name="printer_others", indexes={@ORM\Index(name="IDX_15E01005CE31F925", columns={"others_id"}), @ORM\Index(name="IDX_15E0100546EC494A", columns={"printer_id"})})
 * @ORM\Entity
 */
class PrinterOthers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="printer_others_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \OthersTbl
     *
     * @ORM\ManyToOne(targetEntity="OthersTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="others_id", referencedColumnName="id")
     * })
     */
    private $others;

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

    public function getOthers(): ?OthersTbl
    {
        return $this->others;
    }

    public function setOthers(?OthersTbl $others): self
    {
        $this->others = $others;

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
