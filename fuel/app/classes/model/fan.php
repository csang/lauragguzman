<?php

class Model_Fan extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'total',
	);

	public static function get_by_id($id = 1)
	{
		return static::query()->where('id', $id)->get_one();
	}
}

?>