<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pet Entity
 *
 * @property int $id_pet
 * @property string $name
 * @property string $weight
 * @property string $age
 * @property int $id_client
 * @property int $id_genre
 */
class Pet extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'weight' => true,
        'age' => true,
        'id_client' => true,
        'id_genre' => true,
    ];
}
