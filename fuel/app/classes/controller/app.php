<?php

class Controller_App extends Controller_Template
{
	public function before()
	{
		parent::before();

		// $this->_init_user();
		$this->_init_template();
	}


	// protected function _init_user()
	// {
	// 	if($this->user)
	// 	{
	// 		$this->template->user_nav = View::forge('user/user');
	// 	}
	// 	else
	// 	{
	// 		$this->template->user_nav = View::forge('user/guest');
	// 	}
	// }

	protected function _init_template()
	{
		
	}
}