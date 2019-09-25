<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowersTbl
 *
 * @ORM\Table(name="borrowers_tbl")
 * @ORM\Entity
 */
class BorrowersTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="borrowers_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="borrowers_name", type="string", length=35, nullable=true)
     */
    private $borrowersName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="purpose", type="string", length=500, nullable=true)
     */
    private $purpose;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="borrowed_date", type="date", nullable=true)
     */
    private $borrowedDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="return_date", type="date", nullable=true)
     */
    private $returnDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarks", type="text", nullable=true)
     */
    private $remarks;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logs", type="text", nullable=true)
     */
    private $logs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dealer", type="string", length=10, nullable=true)
     */
    private $dealer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="borrow_status", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $borrowStatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBorrowersName(): ?string
    {
        return $this->borrowersName;
    }

    public function setBorrowersName(?string $borrowersName): self
    {
        $this->borrowersName = $borrowersName;

        return $this;
    }

    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    public function setPurpose(?string $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
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

    public function getBorrowedDate(): ?\DateTimeInterface
    {
        return $this->borrowedDate;
    }

    public function setBorrowedDate(?\DateTimeInterface $borrowedDate): self
    {
        $this->borrowedDate = $borrowedDate;

        return $this;
    }

    public function getReturnDate(): ?\DateTimeInterface
    {
        return $this->returnDate;
    }

    public function setReturnDate(?\DateTimeInterface $returnDate): self
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(?string $remarks): self
    {
        $this->remarks = $remarks;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLogs(): ?string
    {
        return $this->logs;
    }

    public function setLogs(?string $logs): self
    {
        $this->logs = $logs;

        return $this;
    }

    public function getDealer(): ?string
    {
        return $this->dealer;
    }

    public function setDealer(?string $dealer): self
    {
        $this->dealer = $dealer;

        return $this;
    }

    public function getBorrowStatus(): ?string
    {
        return $this->borrowStatus;
    }

    public function setBorrowStatus(?string $borrowStatus): self
    {
        $this->borrowStatus = $borrowStatus;

        return $this;
    }


}
