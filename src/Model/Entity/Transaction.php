<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity.
 *
 * @property string $transactionID
 * @property int $providerID
 * @property string $providerNotes
 * @property int $receiverID
 * @property string $receiverNotes
 * @property \Cake\I18n\Time $date
 * @property int $productID
 * @property int $productGateway
 * @property string $productDesc
 * @property string $status
 * @property \Cake\I18n\Time $dateAdded
 * @property int $createdBy
 * @property \Cake\I18n\Time $dateClosed
 * @property float $nbr
 * @property int $satisfaction
 */
class Transaction extends Entity
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
        'transactionID' => false,
    ];
}
