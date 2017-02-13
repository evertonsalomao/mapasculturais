<?php
$action = preg_replace("#^(\w+/)#", "", $this->template);

$this->bodyProperties['ng-app'] = "entity.app";
$this->bodyProperties['ng-controller'] = "EntityController";

$this->jsObject['angularAppDependencies'][] = 'entity.module.opportunity';

$this->addEntityToJs($entity);

$this->addRegistrationToJs($entity);

$this->includeAngularEntityAssets($entity);


$_params = [
    'entity' => $entity,
    'action' => $action,
    'opportunity' => $entity->opportunity
];


?>
<?php $this->part('editable-entity', array('entity'=>$entity, 'action'=>$action));  ?>

<article class="main-content registration" ng-controller="OpportunityController">

    <?php $this->part('singles/registration--header', $_params); ?>
    
    <article>
        <?php $this->applyTemplateHook('form','begin'); ?>
        
        <?php $this->part('singles/registration-edit--header', $_params) ?>
        
        <?php $this->part('singles/registration-edit--categories', $_params) ?>
        
        <?php $this->part('singles/registration-edit--agents', $_params) ?>
        
        <?php $this->part('singles/registration-edit--seals', $_params) ?>
        
        <?php $this->part('singles/registration-edit--fields', $_params) ?>
        
        <?php $this->part('singles/registration-edit--send-button', $_params) ?>

        <?php $this->applyTemplateHook('form','end'); ?>
    </article>

</article>
<?php $this->part('singles/registration--sidebar--left', $_params) ?>
<?php $this->part('singles/registration--sidebar--right', $_params) ?>
