<?php
/* @var $this GenreNamesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Genre Names',
);

$this->menu=array(
	array('label'=>'Create GenreNames', 'url'=>array('create')),
	array('label'=>'Manage GenreNames', 'url'=>array('admin')),
);
?>

<h1>Genre Names</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
