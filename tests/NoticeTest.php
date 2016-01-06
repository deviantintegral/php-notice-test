<?php

class NoticeTest extends \PHPUnit_Framework_TestCase {

  /**
   * @expectedException PHPUnit_Framework_Error_Notice
   */
  public function testMetatags() {
    $var = array();
    $data = $var['value'];
  }
}
