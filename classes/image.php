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
		$instance = new \Knp\Snappy\Image();
		$instance->setOptions(array_merge(static::$_defaults['image'], $config));
		return $instance;
	}

	public static function _init()
	{
		\Config::load('snappy', true);
		static::$_defaults = \Config::get('snappy.defaults');
	}

}