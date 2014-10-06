<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => array(),
        ),
        /**
        * Twitter
        */
        'Twitter' =>array(
        	'client_id' => '4YuDP7xPMrYPg3f8RWHBe7Mgc',
        	'client_secret' => 'q3DBkDQu0tkz0L8vmkqWMbbx8Uz0Tn5c6iV9Luinf69Jd7vcDf',
        	'scope' => array()
        ),		

	)

);