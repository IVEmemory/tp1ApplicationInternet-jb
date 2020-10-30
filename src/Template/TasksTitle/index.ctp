<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TasksTitle[]|\Cake\Collection\CollectionInterface $tasksTitle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tasks Title'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tasksTitle index large-9 medium-8 columns content">
    <h3><?= __('Tasks Title') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tasks_title_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kod') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasksTitle as $tasksTitle): ?>
            <tr>
                <td><?= $this->Number->format($tasksTitle->id) ?></td>
                <td><?= $tasksTitle->has('task') ? $this->Html->link($tasksTitle->task->id, ['controller' => 'Tasks', 'action' => 'view', $tasksTitle->task->id]) : '' ?></td>
                <td><?= h($tasksTitle->kod) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tasksTitle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tasksTitle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tasksTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tasksTitle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
