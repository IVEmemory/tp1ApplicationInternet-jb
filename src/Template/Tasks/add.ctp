<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<?php
$urlToTasksTitleAutocompletedemoJson = $this->Url->build([
    "controller" => "TasksTitle",
    "action" => "findtasksTitle",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToTasksTitleAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Tasks/add_edit/tasksTitleAutocomplete', ['block' => 'scriptBottom']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tasks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tasks form large-9 medium-8 columns content">
    <?= $this->Form->create($task) ?>
    <fieldset>
        <legend><?= __('Add Task') ?></legend>
        <?php
            echo $this->Form->control('start_date');
            echo $this->Form->control('end_date');
            echo $this->Form->control('information_task');
            echo $this->Form->control('task_title_id', ['label' => __('TaskTitle') . ' (' . __('Autocomplete demo') . ')', 'type' => 'text', 'id' => 'autocomplete']);
            echo $this->Form->control('files._ids', ['options' => $files]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
