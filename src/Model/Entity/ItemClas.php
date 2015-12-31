<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItemClas Entity.
 *
 * @property int $classID
 * @property string $name
 * @property int $suggestedGateway
 * @property float $cPdb
 * @property float $a
 * @property int $aMax
 * @property int $d
 * @property int $aPrime
 * @property float $cCb
 * @property float $m1
 * @property int $pO
 * @property float $m2
 * @property float $cEb
 * @property int $s
 * @property float $m3
 * @property int $sE
 * @property float $m4
 * @property int $sH
 * @property float $m5
 */
class ItemClas extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'classID' => false,
    ];
}
