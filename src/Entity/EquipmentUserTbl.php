<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipmentUserTbl
 *
 * @ORM\Table(name="equipment_user_tbl")
 * @ORM\Entity
 */
class EquipmentUserTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipment_user_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept", type="string", length=20, nullable=true)
     */
    private $dept;

    /**
     * @var string|null
     *
     * @ORM\Column(name="branchcode", type="string", length=15, nullable=true)
     */
    private $branchcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_request", type="text", nullable=true)
     */
    private $userRequest;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expected_install_date", type="date", nullable=true)
     */
    private $expectedInstallDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDept(): ?string
    {
        return $this->dept;
    }

    public function setDept(?string $dept): self
    {
        $this->dept = $dept;

        return $this;
    }

    public function getBranchcode(): ?string
    {
        return $this->branchcode;
    }

    public function setBranchcode(?string $branchcode): self
    {
        $this->branchcode = $branchcode;

        return $this;
    }

    public function getUserRequest(): ?string
    {
        return $this->userRequest;
    }

    public function setUserRequest(?string $userRequest): self
    {
        $this->userRequest = $userRequest;

        return $this;
    }

    public function getExpectedInstallDate(): ?\DateTimeInterface
    {
        return $this->expectedInstallDate;
    }

    public function setExpectedInstallDate(?\DateTimeInterface $expectedInstallDate): self
    {
        $this->expectedInstallDate = $expectedInstallDate;

        return $this;
    }


}
