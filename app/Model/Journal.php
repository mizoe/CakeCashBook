<?php
App::uses('AppModel', 'Model');
/**
 * Journal Model
 *
 * @property Staff $Staff
 */
class Journal extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'subject';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'staff_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subject' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'amount' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * getRecent()
 *
 * @var array
 */
	public function getMonthly($year = null, $month = null, $staff_id = null) {
        $conditions = array();
		if($year != null){
			if($month == null){
				$conditions['date >= '] = $year . "-1-1";
				$conditions['date <= '] = $year . "-12-31";
			}else{
				$conditions['date >= '] = $year . "-" . $month . "-1";
				$conditions['date <= '] = $year . "-" . $month . "-31";
			}
		}
		if($staff_id != null){
			$conditions['staff_id'] = $staff_id;
		}

		$options = array(
            'fields' => array(
                'sum(amount) as sumAmount',
                'id','staff_id','date','subject','amount','note','created','modified',
                'Staff.id','Staff.staff_name','Staff.created','Staff.modified'
            ),
            'conditions' => $conditions
        );
        return $this->find('all', $options);
    }
}
