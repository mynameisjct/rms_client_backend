<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IsBulletin
 *
 * @ORM\Table(name="is_bulletin")
 * @ORM\Entity
 */
class IsBulletin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="is_bulletin_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logs", type="text", nullable=true)
     */
    private $logs;

    public function getId(): ?int
    {
        return $this->id;
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


}
