<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($user->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Creation') ?></th>
            <td><?= h($user->date_creation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Modified') ?></th>
            <td><?= h($user->date_modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('First Name') ?></h4>
        <?= $this->Text->autoParagraph(h($user->first_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Last Name') ?></h4>
        <?= $this->Text->autoParagraph(h($user->last_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email') ?></h4>
        <?= $this->Text->autoParagraph(h($user->email)); ?>
    </div>
    <div class="row">
        <h4><?= __('Other Information') ?></h4>
        <?= $this->Text->autoParagraph(h($user->other_information)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tasks') ?></h4>
        <?php if (!empty($user->tasks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('End Date') ?></th>
                <th scope="col"><?= __('Information Task') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->tasks as $tasks): ?>
            <tr>
                <td><?= h($tasks->id) ?></td>
                <td><?= h($tasks->start_date) ?></td>
                <td><?= h($tasks->end_date) ?></td>
                <td><?= h($tasks->information_task) ?></td>
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
