<?php
/**
 * Bonne correction ! Fonmctionnalité de l'appli 
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List of tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List of comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List of Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List of Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
    </ul>
</nav>



<div class="large-3 medium-4 columns" id="actions-sidebar">
    <h1><?= __(' 420-5b7 MO Applications internet.') ?></h1>
    <h1><?= __( 'Automne 2018, Collège Montmorency.') ?></h1>
    
    <h4><?= __(' Le site web permet la création de tâche pour sois-même ou ses collègues de travail. Il permet la structure des tâches à effectuer lors de la journée pour s\'assurer qu\'elle soit tous
    bien fait. L\'utilisation recommandé est la suivante : ') ?></h4>
    <ul><?= __(' Ce connecté à un compte [Section Login en haut à droite, dans le menu]') ?></ul>
    <ul><?= __(' à l\'aide des sous-menu à gauche, navigué pour sois crée une tâche ou visualisé eux en cours.') ?></ul>
    <ul><?= __(' Possibilité d\'ajouter un commentaire à la tâche pour informer ses collègues de l\'avancement de celui-ci. [View sur la task -> "ajout d\'un commentaire" ]') ?></ul>
    <ul><?= __(' Un coup la tâche terminé, possibilité de supprimer la tâche ou le commentaire pour officialiser qu\'elle est terminé.
     [Si sur suppression de commentaire : view sur la tâche -> Supprimer le commentaire shouaiter.Si la tâche, dans le sous menu de gauche -> list des tâches -> supprimer]') ?></ul>
    <ul><?= __(' Chacune des fonctionnalité mentionné si haut sont fonctionnel, donc le résultat attendu sera "true".') ?></ul>
    <a href="https://github.com/IVEmemory/tp1ApplicationInternet-jb.git"> Liens GitHub du projet </a> <br>

    <a href="http://www.databaseanswers.org/data_models/web_site_user_Plans/index.htm">Database Answers - Data Model for web site user Plans</a>
</div>

<?php
    echo $this->Html->image("diagrammeTp1.png");
?>


