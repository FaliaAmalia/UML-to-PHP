<?php
require_once(realpath(dirname(__FILE__)) . '/Department.php');

use Department;

/**
 * @access public
 * @author user
 */
class Employee {
	/**
	 * @AttributeType string
	 */
	public $_name;
	/**
	 * @AttributeType string
	 */
	public $_title;
	/**
	 * @AttributeType integer
	 */
	public $_salary;
	/**
	 * @AttributeType Department
	 * /**
	 *  * @AssociationType Department
	 *  * /
	 */
	public $_unnamed_Department_;

	/**
	 * @access public
	 */
	public function getEmployeeProfile() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aName
	 */
	public function setEmployeeName($aName) {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function getEmployeeTitle() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function getEmployeeMonthlySalary() {
		// Not yet implemented
	}
}
?>