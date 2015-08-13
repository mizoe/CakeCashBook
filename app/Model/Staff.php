<?php
App::uses('AppModel', 'Model');
/**
 * Staff Model
 *
 * @property Journal $Journal
 */
class Staff extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'staff_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'staff_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Journal' => array(
			'className' => 'Journal',
			'foreignKey' => 'staff_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
