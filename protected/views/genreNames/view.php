<?php
/* @var $this GenreNamesController */
/* @var $model GenreNames */

$this->breadcrumbs=array(
	'Genre Names'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GenreNames', 'url'=>array('index')),
	array('label'=>'Create GenreNames', 'url'=>array('create')),
	array('label'=>'Update GenreNames', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GenreNames', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GenreNames', 'url'=>array('admin')),
);
?>

<h1>View GenreNames #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'heb_name',
		'en_name',
		'heb_des',
		'en_des',
	),
)); ?>
