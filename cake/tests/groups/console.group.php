<?php
/* SVN FILE: $Id$ */
/**
 * ConsoleGroupTest file
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.groups
 * @since         CakePHP(tm) v 1.2.0.4206
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * ConsoleGroupTest class
 *
 * This test group will run all console tests
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class ConsoleGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'All core cache engines'
 * @access public
 */
	var $label = 'ShellDispatcher, Shell and all Tasks';
/**
 * ConsoleGroupTest method
 *
 * @access public
 * @return void
 */
	function ConsoleGroupTest() {
		TestManager::addTestCasesFromDirectory($this, CORE_TEST_CASES . DS . 'console');
	}
}
?>