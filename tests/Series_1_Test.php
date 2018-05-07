<?php
require __DIR__ . '/../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 2018-05-07
 * Time: 14:09
 */


class Series_1_Test extends \PHPUnit\Framework\TestCase
{

    public function testAddresses()
    {
        $json =  \yangqinjiang\idcode\IDCodeApi::addresses();
        $this->assertArrayHasKey('address_list',$json);
        $this->assertArrayNotHasKey('not_this_array',$json);
        $this->assertEquals('1',$json['result_code']);
    }
    public function testAddressesIDParent()
    {
        //广东省,区域等级 1, 即返回广东省,一个数据
        $json =  \yangqinjiang\idcode\IDCodeApi::address_id_parent(440000,1);

        $this->assertArrayHasKey('address_list',$json);
        $this->assertEquals(1,count($json['address_list']));
        $this->assertEquals(440000,$json['address_list'][0]['address_code']);
        $this->assertArrayNotHasKey('not_this_array',$json);
        $this->assertEquals('1',$json['result_code']);

        //广东省,区域等级 2, 有20个地级市
        $json =  \yangqinjiang\idcode\IDCodeApi::address_id_parent(440000,2);
        $this->assertArrayHasKey('address_list',$json);
        $this->assertTrue(count($json['address_list']) > 19);
        $this->assertNotTrue(count($json['address_list']) > 100);
    }

    public function testTrades()
    {
        $json =  \yangqinjiang\idcode\IDCodeApi::trades();

        $this->assertArrayHasKey('trade_list',$json);
        $this->assertEquals(1,$json['result_code']);

    }

    public function testTradesIdParent()
    {
        //$trade_id_parent = 5000 景点
        $json =  \yangqinjiang\idcode\IDCodeApi::trades_id_parent(5000);

        $this->assertArrayHasKey('trade_list',$json);
        $this->assertEquals(1,$json['result_code']);
    }
    public function testUnittypes()
    {
        $json =  \yangqinjiang\idcode\IDCodeApi::unittypes();
        $this->assertArrayHasKey('unit_type_list',$json);
        $this->assertEquals(1,$json['result_code']);
    }
}
