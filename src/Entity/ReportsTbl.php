<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportsTbl
 *
 * @ORM\Table(name="reports_tbl", indexes={@ORM\Index(name="IDX_85000BCCAE80F5DF", columns={"department_id"}), @ORM\Index(name="IDX_85000BCC126F525E", columns={"item_id"}), @ORM\Index(name="IDX_85000BCC7BDF701C", columns={"rtr_no"}), @ORM\Index(name="IDX_85000BCCA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class ReportsTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reports_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="problem", type="string", length=50, nullable=true)
     */
    private $problem;

    /**
     * @var \DeptTbl
     *
     * @ORM\ManyToOne(targetEntity="DeptTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="department_id", referencedColumnName="id")
     * })
     */
    private $department;

    /**
     * @var \ItemTbl
     *
     * @ORM\ManyToOne(targetEntity="ItemTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \RtrTbl
     *
     * @ORM\ManyToOne(targetEntity="RtrTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rtr_no", referencedColumnName="rtr_no")
     * })
     */
    private $rtrNo;

    /**
     * @var \UserTbl
     *
     * @ORM\ManyToOne(targetEntity="UserTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProblem(): ?string
    {
        return $this->problem;
    }

    public function setProblem(?string $problem): self
    {
        $this->problem = $problem;

        return $this;
    }

    public function getDepartment(): ?DeptTbl
    {
        return $this->department;
    }

    public function setDepartment(?DeptTbl $department): self
    {
        $this->department = $department;

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

    public function getRtrNo(): ?RtrTbl
    {
        return $this->rtrNo;
    }

    public function setRtrNo(?RtrTbl $rtrNo): self
    {
        $this->rtrNo = $rtrNo;

        return $this;
    }

    public function getUser(): ?UserTbl
    {
        return $this->user;
    }

    public function setUser(?UserTbl $user): self
    {
        $this->user = $user;

        return $this;
    }


}
