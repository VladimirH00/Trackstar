<?php
/* @var $this IssueController */
/* @var $model Issue */

$this->breadcrumbs=array(
    'Projects'=>array('project/index'),
    $model->project->name=>array('project/view','id'=>$model->project->id),
	'Create',
);

$this->menu=array(
array('label'=>'List Issue', 'url'=>array('project')),
	array('label'=>'Manage Issue', 'url'=>array('admin')),
);
?>

<h1>Create Issue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>