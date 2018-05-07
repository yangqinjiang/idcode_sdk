<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 2018-05-07
 * Time: 17:00
 */

class Series_2_Test extends \PHPUnit\Framework\TestCase
{
    public function testCodeUse(){
        $json =  \yangqinjiang\idcode\IDCodeApi::codeuse();
        $this->assertArrayHasKey('codeuse_list',$json);
        $this->assertArrayNotHasKey('not_this_array',$json);
        $this->assertArrayNotHasKey('hello',$json);
        $this->assertEquals('1',$json['result_code']);
    }
    public function testIndustrycategory(){
        $json =  \yangqinjiang\idcode\IDCodeApi::industrycategory();
        $this->assertArrayHasKey('industrycategory_list',$json);
        $this->assertArrayNotHasKey('not_this_array',$json);
        $this->assertArrayNotHasKey('hello',$json);
        $this->assertEquals('1',$json['result_code']);
    }
}