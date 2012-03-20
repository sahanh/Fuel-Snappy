<?php
namespace Snappy;

class Pdf
{
	protected static $_defaults;

	/**
	 * Forge
	 *
	 * @param	array			$config		extra config array
	 */
	public static function forge($config = array())
	{
		$options = array_merge(static::$_defaults, $config);
		
		$instance = new \Knp\Snappy\Pdf($options['binary']);
		$instance->setOptions($options['pdf']);
		return $instance;
	}

	public static function _init()
	{
		\Config::load('snappy', true);
		static::$_defaults = \Config::get('snappy.defaults');
	}

}