<?php
namespace Snappy;

class Image
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
		
		$instance = new \Knp\Snappy\Image($options['binary']);
		$instance->setOptions($options['image']);
		return $instance;
	}

	public static function _init()
	{
		\Config::load('snappy', true);
		static::$_defaults = \Config::get('snappy.defaults');
	}

}