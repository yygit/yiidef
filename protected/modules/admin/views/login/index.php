<?php echo CHtml::errorSummary($form); ?>

<div class="signin">
	<div class="signin-box">
		<h2>Login <strong></strong></h2>
		
		<?php echo(CHtml::beginForm()); ?>
	  
			<label>
				<strong class="email-label"><?php echo Yii::t('general','login.username'); ?></strong>
				<?php echo(CHtml::activeTextField($form, 'username', array('autocomplete' => 'off'))); ?>
			</label>
			<label>
				<strong class="passwd-label"><?php echo Yii::t('general','login.password'); ?></strong>
				<?php echo(CHtml::activePasswordField($form, 'password', array('autocomplete' => 'off'))); ?>
			</label>
			<input type="submit" class="g-button g-button-submit" name="signIn" id="signIn" value="Login">
			
		<?php echo(CHtml::endForm()); ?>
		<!--	
		<ul>
			<li>
				<a id="link-forgot-passwd" href="https://www.google.com/accounts/recovery?continue=https%3A%2F%2Fwww.google.com%2Fhistory%2F%3Fctz%3D180" target="_top">
				Não consegue acessar sua conta?
				</a>
			</li>
		</ul>
		-->
	</div>
</div>
