<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photo Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $title
 * @property string $filename
 * @property string $owner
 * @property int $task_id
 *
 * @property \App\Model\Entity\Task $task
 */
class Photo extends Entity
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
        'date' => true,
        'title' => true,
        'filename' => true,
        'owner' => true,
        'task_id' => true,
        'task' => true,
    ];
}
