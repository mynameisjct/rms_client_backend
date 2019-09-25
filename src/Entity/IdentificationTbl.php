<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IdentificationTbl
 *
 * @ORM\Table(name="identification_tbl", indexes={@ORM\Index(name="IDX_493DDCCE3E23E247", columns={"dept_id"}), @ORM\Index(name="IDX_493DDCCE126F525E", columns={"item_id"})})
 * @ORM\Entity
 */
class IdentificationTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="identification_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=150, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="branch_office", type="string", length=5, nullable=true)
     */
    private $branchOffice;

    /**
     * @var \DeptTbl
     *
     * @ORM\ManyToOne(targetEntity="DeptTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dept_id", referencedColumnName="id")
     * })
     */
    private $dept;

    /**
     * @var \ItemTbl
     *
     * @ORM\ManyToOne(targetEntity="ItemTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

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

    public function getBranchOffice(): ?string
    {
        return $this->branchOffice;
    }

    public function setBranchOffice(?string $branchOffice): self
    {
        $this->branchOffice = $branchOffice;

        return $this;
    }

    public function getDept(): ?DeptTbl
    {
        return $this->dept;
    }

    public function setDept(?DeptTbl $dept): self
    {
        $this->dept = $dept;

        return $this;
    }

    public function getItem(): ?ItemTbl
    {
        return $this->item;
    }

    public function setItem(?ItemTbl $item): self
    {
        $this->item = $item;

        return $this;
    }


}
