<?php
/**
 * This file is part of the Toggl package
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @subpackage    Tinyrocket\Toggl\Adapter\AbstractAdapter
 * @version    	  1.0.0
 * @author     	  TinyRocket <michael@tinyrocket.co>
 * @license    	  BSD License (3-clause)
 * @copyright  	  Copyright 2014 TinyRocket
 * @link       	  http://tinyrocket.co/Toggl
 */
namespace Tinyrocket\Toggl\Adapter;

/**
 *	Tinyrocket\Toggl\Adapter\AbstractAdapter
 *
 *	Provides an abstract foundation for setting
 *	required variables used by the chosen HTTP 
 *	Adapter. This should be extended directly.
 */
abstract class AbstractAdapter {

	/**
	 *	Toggl Application Token
	 *
	 *	@var string
	 */
	protected $token;
	/**
	 *	Create a new instance of Tinyrocket\Toggl\Adapter
	 *	
	 *	@param string $token		Application token obtained from Toggl Developer Center
	 *
	 *	@return void
	 */
	public function __construct($token, $key)
	{
		$this->token = $token;
	}
}