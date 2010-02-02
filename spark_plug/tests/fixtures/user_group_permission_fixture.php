<?php
class UserGroupPermissionFixture extends CakeTestFixture
{
	var $name = 'UserGroupPermission';
	var $import = array('model'=>'SparkPlug.UserGroupPermission','records'=>false);

	var $records = array(
		array(
			'id'=>1,
			'user_group_id'=>3,
			'controller'=>'Users',
			'action'=>'register',
			'allowed'=>1
		),
		array(
			'id'=>2,
			'user_group_id'=>3,
			'controller'=>'Users',
			'action'=>'login',
			'allowed'=>1
		),
		array(
			'id'=>3,
			'user_group_id'=>3,
			'controller'=>'Users',
			'action'=>'logout',
			'allowed'=>1
		),
		array(
			'id'=>4,
			'user_group_id'=>3,
			'controller'=>'Users',
			'action'=>'forgot_password',
			'allowed'=>1
		),
		array(
			'id'=>2,
			'user_group_id'=>2,
			'controller'=>'Websites',
			'action'=>'*',
			'allowed'=>1
		)
	);
}
?>