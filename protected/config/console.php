<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
    'modules'=>array(
        'user'=>array(
            'class' => 'application.vendor.mishamx.yii-user.UserModule',
        ),
    ),
	'aliases' => array(
        'vendor' => 'application.vendor',
    ),
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(

		// database settings are configured in database.php
		'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=blog',
	        'emulatePrepare' => true,
	        'username' => 'arbesko',
	        'password' => '4820072',
	        'charset' => 'utf8',
	        'tablePrefix' => 'tbl_',
        ),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),

	),
	'params' => array(
        'composer.callbacks' => array(
            'yiisoft/yii-install' => array('yiic', 'webapp', dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'),
            'post-update' => array('yiic', 'migrate'),
            'post-install' => array('yiic', 'migrate'),
        ),
    ),
    'commandMap' => array(
        'migrate' => array(
            'modulePaths' => array(
                'user' => 'application.vendor.mishamx.yii-user.migrations',
            ),
        )
    ),
);
