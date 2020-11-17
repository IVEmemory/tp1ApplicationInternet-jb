<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<?php
$urlToObecCitiesAutocompletedemoJson = $this->Url->build([
    "controller" => "TasksTitle",
    "action" => "findtasksTitle",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToObecCitiesAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Tasks/add_edit/obecCityAutocomplete', ['block' => 'scriptBottom']);
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
            echo $this->Form->control('obec_city_id', ['label' => '(obec_city_id)', 'type' => 'hidden']);
            //echo $this->Form->control('tasks_id', ['label' => '(tasks_id)', 'type' => 'hidden']);
        ?>
        <div class="input text"> 
            <label for="autocomplete"><?= __("Task title"). ' (' . __ ('Autocomplete') . ')' ?></label>
            <input id="autocomplete" type="text">
        </div>
        <?php   
            echo $this->Form->control('information_task');
            //echo $this->Form->control('task_title_id', ['label' => __('TaskTitle') . ' (' . __('Autocomplete demo') . ')', 'type' => 'text', 'id' => 'autocomplete']);
            echo $this->Form->control('files._ids', ['options' => $files]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
