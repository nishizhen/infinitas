<?php
App::uses('AllTestsBase', 'Test/Lib');

class AllFeedTestsTest extends AllTestsBase {

/**
 * Suite define the tests for this suite
 *
 * @return void
 */
	public static function suite() {
		$suite = new CakeTestSuite('All Feed test');

		$path = CakePlugin::path('Feed') . 'Test' . DS . 'Case' . DS;
		$suite->addTestDirectoryRecursive($path);

		return $suite;
	}
}
