<?php
/**
 * Telegrambot Settings (telegrambot-settings)
 * @var $this SettingController
 * @var $model TelegrambotSettings
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 7 January 2017, 02:15 WIB
 * @link https://github.com/ommu/mod-telegram-bot
 *
 */
?>

<?php $form=$this->beginWidget('application.libraries.yii-traits.system.OActiveForm', array(
	'id'=>'telegrambot-settings-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
	),
)); ?>

<?php //begin.Messages ?>
<div id="ajax-message">
	<?php
	if(Yii::app()->user->hasFlash('error'))
		echo $this->flashMessage(Yii::app()->user->getFlash('error'), 'error');
	if(Yii::app()->user->hasFlash('success'))
		echo $this->flashMessage(Yii::app()->user->getFlash('success'), 'success');
	?>
	<?php echo $form->errorSummary($model); ?>
</div>
<?php //begin.Messages ?>

<fieldset>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'bot_username', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->textField($model,'bot_username', array('maxlength'=>32, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'bot_username'); ?>
			<div class="small-px silent"><?php echo Yii::t('phrase', 'Now let\'s choose a username for your bot. It must end in `bot`. Like this, for example: TetrisBot or tetris_bot.');?></div>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'bot_token', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->textField($model,'bot_token', array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'bot_token'); ?>
			<?php /*<div class="small-px silent"><?php echo Yii::t('phrase', 'Create');?></div>*/?>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'bot_name', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->textField($model,'bot_name', array('maxlength'=>32, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'bot_name'); ?>
			<div class="small-px silent"><?php echo Yii::t('phrase', 'How are we going to call it? Please choose a name for your bot.');?></div>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'bot_description', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->textArea($model,'bot_description', array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'bot_description'); ?>
			<div class="small-px silent"><?php echo Yii::t('phrase', 'People will see this description when they open a chat with your bot, in a block titled \'What can this bot do?\'.');?></div>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'bot_about_text', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->textArea($model,'bot_about_text', array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'bot_about_text'); ?>
			<div class="small-px silent"><?php echo Yii::t('phrase', 'People will see this text on the bot\'s profile page and it will be sent together with a link to your bot when they share it with someone.');?></div>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'bot_userpic', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->fileField($model,'bot_userpic', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'bot_userpic'); ?>
			<div class="small-px silent"><?php echo Yii::t('phrase', 'Upload the new profile photo for the bot.');?></div>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'webhook_url', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->textArea($model,'webhook_url', array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'webhook_url'); ?>
			<div class="small-px silent"><?php echo Yii::t('phrase', 'HTTPS url to send updates to. Use an empty string to remove webhook integration');?></div>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'webhook_certificate', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->textArea($model,'webhook_certificate', array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'webhook_certificate'); ?>
			<div class="small-px silent"><?php echo Yii::t('phrase', 'Upload your public key certificate so that the root certificate in use can be checked. See our $guide for details.', array('$guide'=>CHtml::link('self-signed guide', 'https://core.telegram.org/bots/self-signed')));?></div>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'webhook_max_connections', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php if($model->isNewRecord && !$model->getErrors())
				$model->webhook_max_connections = 40;
			echo $form->textField($model,'webhook_max_connections', array('maxlength'=>3, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'webhook_max_connections'); ?>
			<div class="small-px silent"><?php echo Yii::t('phrase', 'Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to 40. Use lower values to limit the load on your bot‘s server, and higher values to increase your bot’s throughput.');?></div>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-form-label col-lg-3 col-md-3 col-sm-12">
			<?php echo $model->getAttributeLabel('webhook_allowed_updates');?><br/>
			<span><?php echo Yii::t('phrase', 'List the types of updates you want your bot to receive. For example, specify [“message”, “edited_channel_post”, “callback_query”] to only receive updates of these types. See $update for a complete list of available update types. Specify an empty list to receive all updates regardless of type (default). If not specified, the previous setting will be used.<br/><br/>Please note that this parameter doesn\'t affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.', array('$update'=>CHtml::link('Update', 'https://core.telegram.org/bots/api#update')));?></span>
		</label>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->textArea($model,'webhook_allowed_updates', array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'webhook_allowed_updates'); ?>
		</div>
	</div>

	<div class="form-group row publish">
		<?php echo $form->labelEx($model,'default', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->checkBox($model,'default', array('class'=>'form-control')); ?>
			<?php echo $form->labelEx($model,'default'); ?>
			<?php echo $form->error($model,'default'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="form-group row publish">
		<?php echo $form->labelEx($model,'publish', array('class'=>'col-form-label col-lg-3 col-md-3 col-sm-12')); ?>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo $form->checkBox($model,'publish', array('class'=>'form-control')); ?>
			<?php echo $form->labelEx($model,'publish'); ?>
			<?php echo $form->error($model,'publish'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="form-group row submit">
		<label class="col-form-label col-lg-3 col-md-3 col-sm-12">&nbsp;</label>
		<div class="col-lg-6 col-md-9 col-sm-12">
			<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save'), array('onclick' => 'setEnableSave()')); ?>
		</div>
	</div>

</fieldset>
<?php $this->endWidget(); ?>


