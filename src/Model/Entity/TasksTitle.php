<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TasksTitle Entity
 *
 * @property int $id
 * @property int $tasks_title_id
 * @property string $comments_task_id
 * @property string $kod
 * @property string $title
 *
 * @property \App\Model\Entity\Task $task
 * @property \App\Model\Entity\CommentsTask $comments_task
 * @property \App\Model\Entity\TasksTitle[] $tasks_title
 */
class TasksTitle extends Entity
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
        'tasks_title_id' => true,
        'comments_task_id' => true,
        'kod' => true,
        'title' => true,
        'task' => true,
        'comments_task' => true,
        'tasks_title' => true,
    ];
}
