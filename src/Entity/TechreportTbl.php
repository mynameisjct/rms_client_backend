<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TechreportTbl
 *
 * @ORM\Table(name="techreport_tbl")
 * @ORM\Entity
 */
class TechreportTbl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="techreport_tbl_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="submittedto", type="string", length=50, nullable=true)
     */
    private $submittedto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="submittedby", type="string", length=50, nullable=true)
     */
    private $submittedby;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rtr_no", type="integer", nullable=true)
     */
    private $rtrNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag_no", type="string", length=150, nullable=true)
     */
    private $tagNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_dept", type="string", length=150, nullable=true)
     */
    private $userDept;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial", type="string", length=100, nullable=true)
     */
    private $serial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asset_description", type="string", length=500, nullable=true)
     */
    private $assetDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reported_problem", type="string", length=2000, nullable=true)
     */
    private $reportedProblem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="troubleshooting_performed", type="string", length=3000, nullable=true)
     */
    private $troubleshootingPerformed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assessment", type="string", length=2500, nullable=true)
     */
    private $assessment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recommendation", type="string", length=2048, nullable=true)
     */
    private $recommendation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="history", type="text", nullable=true)
     */
    private $history;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_created", type="date", nullable=true)
     */
    private $dateCreated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubmittedto(): ?string
    {
        return $this->submittedto;
    }

    public function setSubmittedto(?string $submittedto): self
    {
        $this->submittedto = $submittedto;

        return $this;
    }

    public function getSubmittedby(): ?string
    {
        return $this->submittedby;
    }

    public function setSubmittedby(?string $submittedby): self
    {
        $this->submittedby = $submittedby;

        return $this;
    }

    public function getRtrNo(): ?int
    {
        return $this->rtrNo;
    }

    public function setRtrNo(?int $rtrNo): self
    {
        $this->rtrNo = $rtrNo;

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

    public function getUserDept(): ?string
    {
        return $this->userDept;
    }

    public function setUserDept(?string $userDept): self
    {
        $this->userDept = $userDept;

        return $this;
    }

    public function getSerial(): ?string
    {
        return $this->serial;
    }

    public function setSerial(?string $serial): self
    {
        $this->serial = $serial;

        return $this;
    }

    public function getAssetDescription(): ?string
    {
        return $this->assetDescription;
    }

    public function setAssetDescription(?string $assetDescription): self
    {
        $this->assetDescription = $assetDescription;

        return $this;
    }

    public function getReportedProblem(): ?string
    {
        return $this->reportedProblem;
    }

    public function setReportedProblem(?string $reportedProblem): self
    {
        $this->reportedProblem = $reportedProblem;

        return $this;
    }

    public function getTroubleshootingPerformed(): ?string
    {
        return $this->troubleshootingPerformed;
    }

    public function setTroubleshootingPerformed(?string $troubleshootingPerformed): self
    {
        $this->troubleshootingPerformed = $troubleshootingPerformed;

        return $this;
    }

    public function getAssessment(): ?string
    {
        return $this->assessment;
    }

    public function setAssessment(?string $assessment): self
    {
        $this->assessment = $assessment;

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

    public function getHistory(): ?string
    {
        return $this->history;
    }

    public function setHistory(?string $history): self
    {
        $this->history = $history;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(?\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }


}
