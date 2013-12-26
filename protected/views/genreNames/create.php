<?php
/* @var $this GenreNamesController */
/* @var $model GenreNames */

$this->breadcrumbs=array(
	'Genre Names'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GenreNames', 'url'=>array('index')),
	array('label'=>'Manage GenreNames', 'url'=>array('admin')),
);
?>

<h1>Create GenreNames</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>