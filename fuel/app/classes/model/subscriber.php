<?php

class Model_Subscriber extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'total',
	);

	public static function get_by_id($id)
	{
		return static::query()->where('id', $id)->get_one();
	}
}

?>