<?php
App::uses('AppModel', 'Model');
/**
 * Slip Model
 *
 * @property Staff $Staff
 * @property Journal $Journal
 */
class Slip extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'slip_name';

/**
 * Validation rules
 *
 * @var array
 */
	
	public $validate = array(
		'year' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			)
		),
		'month' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			)
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Staff' => array(
			'className' => 'Staff',
			'foreignKey' => 'staff_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Journal' => array(
			'className' => 'Journal',
			'foreignKey' => 'slip_id',
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
