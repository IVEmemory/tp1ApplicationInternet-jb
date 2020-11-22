<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ObecCity Entity
 *
 * @property int $id
 * @property int $produit_id
 * @property int $action_id
 * @property string $code
 * @property string $actionPro
 *
 * @property \App\Model\Entity\KrajRegion $produit
 * @property \App\Model\Entity\OkresCounty $action
 * @property \App\Model\Entity\Task[] $tasks
 */
class EmplacementProduit extends Entity
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
        'produit_id' => true,
        'action_id' => true,
        'code' => true,
        'actionPro' => true,
        'produit' => true,
        'action' => true,
        'tasks' => true,
    ];
}
