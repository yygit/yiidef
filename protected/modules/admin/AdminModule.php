<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		$this->setImport(array(
			'application.models.*',
            'application.modules.admin.models.*',
            'application.modules.admin.models.forms.*',
            'application.modules.admin.components.*',
			'application.modules.admin.controllers.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			return true;
		}
		else
			return false;
	}
}
