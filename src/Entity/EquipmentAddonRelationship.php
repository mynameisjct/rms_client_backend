<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EquipmentAddonRelationship
 *
 * @ORM\Table(name="equipment_addon_relationship", indexes={@ORM\Index(name="IDX_8374FB33CC642678", columns={"addon_id"}), @ORM\Index(name="IDX_8374FB33517FE9FE", columns={"equipment_id"})})
 * @ORM\Entity
 */
class EquipmentAddonRelationship
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipment_addon_relationship_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \EquipmentAddonTbl
     *
     * @ORM\ManyToOne(targetEntity="EquipmentAddonTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addon_id", referencedColumnName="id")
     * })
     */
    private $addon;

    /**
     * @var \EquipmentTbl
     *
     * @ORM\ManyToOne(targetEntity="EquipmentTbl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipment_id", referencedColumnName="id")
     * })
     */
    private $equipment;


}
