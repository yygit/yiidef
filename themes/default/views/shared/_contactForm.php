<!-- contact form -->
<?php echo CHtml::beginForm($this->createUrl(''), 'post', array('id' => 'form', 'class' => 'form-horizontal')); ?>

<?php echo CHtml::errorSummary($form); ?>

<div class="control-group">
    <?php echo CHtml::activeLabel($form, 'fromName', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo CHtml::activeTextField($form, 'fromName', array('style' => 'width: 220px;', 'autocomplete' => 'off')); ?>
    </div>
</div>
<div class="control-group">
    <?php echo CHtml::activeLabel($form, 'fromEmail', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo CHtml::activeTextField($form, 'fromEmail', array('style' => 'width: 220px;', 'autocomplete' => 'off')); ?>
    </div>
</div>
<div class="control-group">
    <?php echo CHtml::activeLabel($form, 'message', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo CHtml::activeTextArea($form, 'message', array('style' => 'width: 220px; height: 150px;')); ?>
    </div>
</div>

<?php if (CCaptcha::checkRequirements()): ?>
    <div class="control-group">
        <div class="controls">
            <?php $this->widget('CCaptcha'); ?>
        </div>
        <?php echo CHtml::activeLabel($form, 'verifyCode', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo CHtml::activeTextField($form, 'verifyCode', array('style' => 'width: 220px;', 'autocomplete' => 'off')); ?>
        </div>

    </div>
<?php endif; ?>


<div class="control-group">
    <div class="controls">
        <a href="<?php echo($this->createUrl('/home')); ?>" title="Home">Home</a>
    </div>
</div>
<div class="control-group">
    <div class="controls">
        <?php echo CHtml::submitButton('Send', array('class' => 'btn')); ?>
    </div>
</div>

<?php echo CHtml::endForm(); ?>
<!-- end: contact form -->
