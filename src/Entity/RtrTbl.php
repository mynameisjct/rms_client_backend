<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RtrTbl
 *
 * @ORM\Table(name="rtr_tbl")
 * @ORM\Entity
 */
class RtrTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="rtr_no", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rtr_tbl_rtr_no_seq", allocationSize=1, initialValue=1)
     */
    private $rtrNo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_received", type="date", nullable=true)
     */
    private $dateReceived;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finished", type="date", nullable=true)
     */
    private $dateFinished;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assignee", type="string", length=100, nullable=true)
     */
    private $assignee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complaint", type="string", length=2500, nullable=true)
     */
    private $complaint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diagnosis", type="string", length=3000, nullable=true)
     */
    private $diagnosis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recommendation", type="string", length=2500, nullable=true)
     */
    private $recommendation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=500, nullable=true)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="covered_days", type="integer", nullable=true)
     */
    private $coveredDays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag_no", type="string", length=50, nullable=true)
     */
    private $tagNo;

    /**
     * @var int
     *
     * @ORM\Column(name="ordering", type="integer", nullable=false)
     */
    private $ordering;

    /**
     * @var string|null
     *
     * @ORM\Column(name="landmark", type="string", length=20, nullable=true)
     */
    private $landmark;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notification", type="string", length=6, nullable=true)
     */
    private $notification;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_posted", type="time", nullable=true)
     */
    private $timePosted;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_updated", type="time", nullable=true)
     */
    private $timeUpdated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarks_pending", type="string", length=150, nullable=true)
     */
    private $remarksPending;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarks_okay", type="string", length=150, nullable=true)
     */
    private $remarksOkay;

    public function getRtrNo(): ?int
    {
        return $this->rtrNo;
    }

    public function getDateReceived(): ?\DateTimeInterface
    {
        return $this->dateReceived;
    }

    public function setDateReceived(?\DateTimeInterface $dateReceived): self
    {
        $this->dateReceived = $dateReceived;

        return $this;
    }

    public function getDateFinished(): ?\DateTimeInterface
    {
        return $this->dateFinished;
    }

    public function setDateFinished(?\DateTimeInterface $dateFinished): self
    {
        $this->dateFinished = $dateFinished;

        return $this;
    }

    public function getAssignee(): ?string
    {
        return $this->assignee;
    }

    public function setAssignee(?string $assignee): self
    {
        $this->assignee = $assignee;

        return $this;
    }

    public function getComplaint(): ?string
    {
        return $this->complaint;
    }

    public function setComplaint(?string $complaint): self
    {
        $this->complaint = $complaint;

        return $this;
    }

    public function getDiagnosis(): ?string
    {
        return $this->diagnosis;
    }

    public function setDiagnosis(?string $diagnosis): self
    {
        $this->diagnosis = $diagnosis;

        return $this;
    }

    public function getRecommendation(): ?string
    {
        return $this->recommendation;
    }

    public function setRecommendation(?string $recommendation): self
    {
        $this->recommendation = $recommendation;

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

    public function getCoveredDays(): ?int
    {
        return $this->coveredDays;
    }

    public function setCoveredDays(?int $coveredDays): self
    {
        $this->coveredDays = $coveredDays;

        return $this;
    }

    public function getTagNo(): ?string
    {
        return $this->tagNo;
    }

    public function setTagNo(?string $tagNo): self
    {
        $this->tagNo = $tagNo;

        return $this;
    }

    public function getOrdering(): ?int
    {
        return $this->ordering;
    }

    public function setOrdering(int $ordering): self
    {
        $this->ordering = $ordering;

        return $this;
    }

    public function getLandmark(): ?string
    {
        return $this->landmark;
    }

    public function setLandmark(?string $landmark): self
    {
        $this->landmark = $landmark;

        return $this;
    }

    public function getNotification(): ?string
    {
        return $this->notification;
    }

    public function setNotification(?string $notification): self
    {
        $this->notification = $notification;

        return $this;
    }

    public function getTimePosted(): ?\DateTimeInterface
    {
        return $this->timePosted;
    }

    public function setTimePosted(?\DateTimeInterface $timePosted): self
    {
        $this->timePosted = $timePosted;

        return $this;
    }

    public function getTimeUpdated(): ?\DateTimeInterface
    {
        return $this->timeUpdated;
    }

    public function setTimeUpdated(?\DateTimeInterface $timeUpdated): self
    {
        $this->timeUpdated = $timeUpdated;

        return $this;
    }

    public function getRemarksPending(): ?string
    {
        return $this->remarksPending;
    }

    public function setRemarksPending(?string $remarksPending): self
    {
        $this->remarksPending = $remarksPending;

        return $this;
    }

    public function getRemarksOkay(): ?string
    {
        return $this->remarksOkay;
    }

    public function setRemarksOkay(?string $remarksOkay): self
    {
        $this->remarksOkay = $remarksOkay;

        return $this;
    }


}
