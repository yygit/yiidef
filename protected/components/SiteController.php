<?php

class SiteController extends CController
{

	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
                'transparent' => true,
                'maxLength' => 3,
                'minLength' => 3,
                'foreColor' => 0x666666,
                'offset' => 2,
			),
		);
	}

}
