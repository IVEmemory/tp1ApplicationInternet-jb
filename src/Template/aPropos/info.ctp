<?php
/**
 * Bonne correction ! 
 * *************************************************Plus jolie sans side-menu pour cette page **************************************************
 * 
 */
?>

<!--   
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List of tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List of comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List of Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List of Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Liste de tâche 2.0'), ['controller' => 'Produits', 'action' => 'index']) ?> </li>
    </ul>
</nav>

-->

<div id="actions-sidebar">
    <h4><?= __(' Jessy Bérubé') ?></h4>
    <h1><?= __(' 420-5b7 MO Applications internet.') ?></h1>
    <h1><?= __( 'Automne 2018, Collège Montmorency.') ?></h1><br>
    
    <h4><?= __(' Le site web permet la création de tâche pour sois-même ou ses collègues de travail. Il permet la structure des tâches à effectuer lors de la journée pour s\'assurer qu\'elle soit tous
    bien fait. L\'utilisation recommandé est la suivante : ') ?></h4>

    <h1><?= __(' Consigne pour le Travail pratique 1') ?></h1>
    <ul><?= __(' Ce connecté à un compte [Section Login en haut à droite, dans le menu]') ?></ul>
    <ul><?= __(' à l\'aide des sous-menu à gauche, navigué pour sois crée une tâche ou visualisé eux en cours.') ?></ul>
    <ul><?= __(' Possibilité d\'ajouter un commentaire à la tâche pour informer ses collègues de l\'avancement de celui-ci. [View sur la task -> "ajout d\'un commentaire" ]') ?></ul>
    <ul><?= __(' Un coup la tâche terminé, possibilité de supprimer la tâche ou le commentaire pour officialiser qu\'elle est terminé.
     [Si sur suppression de commentaire : view sur la tâche -> Supprimer le commentaire shouaiter.Si la tâche, dans le sous menu de gauche -> list des tâches -> supprimer]') ?></ul>
    <ul><?= __(' Chacune des fonctionnalité mentionné si haut sont fonctionnel, donc le résultat attendu sera "true".') ?></ul>

    <h1><?= __(' Consigne pour le Travail pratique 2') ?></h1>     <ul><a href="http://localhost/tp1ApplicationInternet-jb/produits">La page Monopage,  </a>     permet d'ajouter des tâches, principalement des aliments. Il est possible d'ajouter une tâche, de la modifier et de la supprimer. Des messages confirmant vos actions sont aussi affichés.</ul>

    <ul><a href="http://localhost/tp1ApplicationInternet-jb/tasks/add">La page Autocomplétion,</a>     à un champ de texte "Task title" qui permet l'autocomplétion pour aider à trouver une tâche. Essayer avec le mot "lait" ou "lai".</ul>

    <ul><a href="http://localhost/tp1ApplicationInternet-jb/emplacement-produits/add">La liste liée,</a>     permet d'adapter les deux boites de choix ensemble. Pour la section Produit, un coup votre choix fait, la section Action sera mis à jour. Produit : Parfum, l'action possible sera de seulement 3 choix.</ul>

    <ul> L'affichage du document PDF et /admin à été débuté, mais ne fonctionne pas bien.</ul>

    <ul> Problème avec BootStrap rendant l'installation compliquer, déjà communiquer avec vous à ce propos. Pas implanter.</ul>

    <h1><?= __(' Consigne pour le Travail pratique 3') ?></h1>
    <ul><a href="http://localhost/tp1ApplicationInternet-jb/emplacement-produits/add">La partie 7.1 </a>est aussi une amilioration d'une partie du TP2, elle est beaucoup plus claire pour l'utilisateur avec le boitier griser</ul>
    <ul><a href="http://localhost/tp1ApplicationInternet-jb/">La partie 7.2</a> permet d'afficher avec AngularJS une page semblable à l'autocomplétion du TP2.</ul>
    <ul>Jeton JWS mis en place en partie </ul>


    <h1><?= __(' Information utile') ?></h1>
    <a href="https://github.com/IVEmemory/tp1ApplicationInternet-jb.git"> Liens GitHub du projet sans le vendor </a> <br>
    <a href="http://www.databaseanswers.org/data_models/web_site_user_Plans/index.htm">Database Answers - Data Model for web site user Plans</a><br>
</div>
<?php
        echo $this->Html->image("diagrammeTp1.png");
    ?>



