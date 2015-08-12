<?php
/**
 * SlipFixture
 *
 */
class SlipFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'staff_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'year' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'month' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => '1:Jan, 12:Dec'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'staff_id' => 1,
			'year' => 1,
			'month' => 1,
			'created' => '2015-08-12 04:44:53',
			'modified' => '2015-08-12 04:44:53'
		),
	);

}
