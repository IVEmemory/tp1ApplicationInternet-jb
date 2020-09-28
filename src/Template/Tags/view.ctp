<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Task') ?></th>
            <td><?= h($tag->task) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tag->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tag->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tasks') ?></h4>
        <?php if (!empty($tag->tasks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('End Date') ?></th>
                <th scope="col"><?= __('Information Task') ?></th>
                <th scope="col"><?= __('ForUser') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->tasks as $tasks): ?>
            <tr>
                <td><?= h($tasks->id) ?></td>
                <td><?= h($tasks->start_date) ?></td>
                <td><?= h($tasks->end_date) ?></td>
                <td><?= h($tasks->information_task) ?></td>
                <td><?= h($tasks->forUser) ?></td>
                <td><?= h($tasks->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tasks', 'action' => 'view', $tasks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tasks', 'action' => 'edit', $tasks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tasks', 'action' => 'delete', $tasks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tasks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
