<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'TrackStar',
	'id' => 'TrackStar',
    'homeUrl'=>'/project',
	// preloading 'log' component
	'preload'=>array('log'),
    'theme'=>'newtheme',
	'language'=>'ru',
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.modules.admin.models.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>false,
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

        'admin',

	),

	// application components
	'components'=>array(

        'cache'=>array(
            'class'=>'system.caching.CFileCache',
        ),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format

        'urlManager'=>array(
            'urlFormat'=>'path',
            'rules'=>array(
                '<pid:\d+>/commentfeed'=>array('comment/feed',
                    'urlSuffix'=>'.xml', 'caseSensitive'=>false),
                'commentfeed'=>array('comment/feed', 'urlSuffix'=>'.xml',
                    'caseSensitive'=>false),
            ),
            'showScriptName'=>false,
            /*
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),*/
		),


		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error',
				),
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'info, trace',
                    'logFile'=>'infoMessages.log',
                ),
                array(
                    'class'=>'CWebLogRoute',
                    'levels'=>'warning',
                ),
			),
		),

        'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
            'itemTable' =>'tbl_auth_item',
            'itemChildTable' =>'tbl_auth_item_child',
            'assignmentTable' =>'tbl_auth_assignment',
        ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'vladimir_husainov@mail.ru',
        'phone'=>'+7-(988)-944-00-71'
	),
);