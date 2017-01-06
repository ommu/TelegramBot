<?php
/**
 * Telegrambot Commands (telegrambot-commands)
 * @var $this CommandController
 * @var $model TelegrambotCommands
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 7 January 2017, 02:15 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Telegrambot Commands'=>array('manage'),
		$model->command_id=>array('view','id'=>$model->command_id),
		'Update',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
