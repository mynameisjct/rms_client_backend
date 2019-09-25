<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItMaintenance
 *
 * @ORM\Table(name="it_maintenance")
 * @ORM\Entity
 */
class ItMaintenance
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="it_maintenance_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=25, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hostname", type="string", length=100, nullable=true)
     */
    private $hostname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ipaddress", type="string", length=15, nullable=true)
     */
    private $ipaddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subnetmask", type="string", length=15, nullable=true)
     */
    private $subnetmask;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logs", type="text", nullable=true)
     */
    private $logs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="branch", type="string", length=35, nullable=true)
     */
    private $branch;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="string", length=10, nullable=true)
     */
    private $department;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    public function setHostname(?string $hostname): self
    {
        $this->hostname = $hostname;

        return $this;
    }

    public function getIpaddress(): ?string
    {
        return $this->ipaddress;
    }

    public function setIpaddress(?string $ipaddress): self
    {
        $this->ipaddress = $ipaddress;

        return $this;
    }

    public function getSubnetmask(): ?string
    {
        return $this->subnetmask;
    }

    public function setSubnetmask(?string $subnetmask): self
    {
        $this->subnetmask = $subnetmask;

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

    public function getBranch(): ?string
    {
        return $this->branch;
    }

    public function setBranch(?string $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;

        return $this;
    }


}
