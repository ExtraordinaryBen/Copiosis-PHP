<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $userID
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $firstName
 * @property string $lastName
 * @property int $status
 * @property float $nbr
 * @property \Cake\I18n\Time $lastLogin
 * @property \Cake\I18n\Time $prevLastLogin
 * @property int $locationID
 */
class User extends Entity
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
        'userID' => false,
	'username' => true,
	'password' => true,
	'confirm_password' => true,
	'token' => true,
    ];

    protected function _setPassword($password) {
       
        return (new DefaultPasswordHasher)->hash($password);
    }

    protected function _setConfirmPassword($password) {
       
        return (new DefaultPasswordHasher)->hash($password);
    }

}
