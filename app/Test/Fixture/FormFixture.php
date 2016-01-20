<?php
/**
 * FormFixture
 *
 */
class FormFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'text' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'image_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'created' => '2016-01-20 12:12:51',
			'modified' => '2016-01-20 12:12:51',
			'text' => 'Lorem ipsum dolor sit amet',
			'image_id' => 1
		),
	);

}
