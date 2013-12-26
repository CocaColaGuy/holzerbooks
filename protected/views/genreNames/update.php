<?php
/* @var $this GenreNamesController */
/* @var $model GenreNames */

$this->breadcrumbs=array(
	'Genre Names'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GenreNames', 'url'=>array('index')),
	array('label'=>'Create GenreNames', 'url'=>array('create')),
	array('label'=>'View GenreNames', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GenreNames', 'url'=>array('admin')),
);
?>

<h1>Update GenreNames <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>