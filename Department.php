<?php
require_once(realpath(dirname(__FILE__)) . '/Company.php');
require_once(realpath(dirname(__FILE__)) . '/Employee.php');

use Company;
use Employee;

/**
 * @access public
 * @author user
 */
class Department {
	/**
	 * @AttributeType string
	 */
	public $_name;
	/**
	 * @AttributeType Company
	 * /**
	 *  * @AssociationType Company
	 *  * /
	 */
	public $_unnamed_Company_;
	/**
	 * @AttributeType Employee
	 * /**
	 *  * @AssociationType Employee
	 *  * /
	 */
	public $_unnamed_Employee_;

	/**
	 * @access public
	 */
	public function getDepartmentName() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aName
	 */
	public function setDepartmentName($aName) {
		// Not yet implemented
	}
}
?>