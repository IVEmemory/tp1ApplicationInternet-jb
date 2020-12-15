<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produit Entity
 *
 * @property int $id
 * @property string $code
 * @property string $actionPro
 *
 * @property \App\Model\Entity\ObecCity[] $emplacementProduits
 * @property \App\Model\Entity\OkresCounty[] $actions
 */
class Produit extends Entity
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
        'code' => true,
        'actionPro' => true,
        'emplacementProduits' => true,
        'actions' => true,
    ];
}
