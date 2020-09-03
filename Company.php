<?php
require_once(realpath(dirname(__FILE__)) . '/Department.php');

use Department;

/**
 * @access public
 * @author user
 */
class Company {
	/**
	 * @AttributeType string
	 */
	public $_name;
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
	public function getCompany() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aName
	 */
	public function setCompanyName($aName) {
		// Not yet implemented
	}
}
?>