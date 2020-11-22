<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TasksTitle $tasksTitle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tasks Title'), ['action' => 'edit', $tasksTitle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tasks Title'), ['action' => 'delete', $tasksTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tasksTitle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tasks Title'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tasks Title'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tasks Title'), ['controller' => 'TasksTitle', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tasks Title'), ['controller' => 'TasksTitle', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tasksTitle view large-9 medium-8 columns content">
    <h3><?= h($tasksTitle->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Task') ?></th>
            <td><?= $tasksTitle->has('task') ? $this->Html->link($tasksTitle->task->id, ['controller' => 'Tasks', 'action' => 'view', $tasksTitle->task->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($tasksTitle->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tasksTitle->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Title') ?></h4>
        <?= $this->Text->autoParagraph(h($tasksTitle->title)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tasks Title') ?></h4>
        <?php if (!empty($tasksTitle->tasks_title)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tasks Title Id') ?></th>
                <th scope="col"><?= __('Comments Task Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tasksTitle->tasks_title as $tasksTitle): ?>
            <tr>
                <td><?= h($tasksTitle->id) ?></td>
                <td><?= h($tasksTitle->tasks_title_id) ?></td>
                <td><?= h($tasksTitle->code) ?></td>
                <td><?= h($tasksTitle->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TasksTitle', 'action' => 'view', $tasksTitle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TasksTitle', 'action' => 'edit', $tasksTitle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TasksTitle', 'action' => 'delete', $tasksTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tasksTitle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
