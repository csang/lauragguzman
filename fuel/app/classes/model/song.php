<?php

class Model_Song extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
	);

	public static function get_by_id($id)
	{
		return static::query()->where('id', $id)->get_one();
	}
}

?>