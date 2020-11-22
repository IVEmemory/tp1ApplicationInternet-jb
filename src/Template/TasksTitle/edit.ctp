<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TasksTitle $tasksTitle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tasksTitle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tasksTitle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tasks Title'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tasks Title'), ['controller' => 'TasksTitle', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tasks Title'), ['controller' => 'TasksTitle', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tasksTitle form large-9 medium-8 columns content">
    <?= $this->Form->create($tasksTitle) ?>
    <fieldset>
        <legend><?= __('Edit Tasks Title') ?></legend>
        <?php
            echo $this->Form->control('tasks_title_id', ['options' => $tasks]);
            echo $this->Form->control('code');
            echo $this->Form->control('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
