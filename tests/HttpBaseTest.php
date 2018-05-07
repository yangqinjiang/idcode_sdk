<?php
require __DIR__ . '/../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 2018-05-07
 * Time: 14:09
 */


class HttpBaseTest extends \PHPUnit\Framework\TestCase
{
    public function testBase1(){
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setUrl('http://apitest.idcode.org.cn')
            ->setPath('/abc/def')
            ->setAccessToken('J7X4LuOOfURXeAAEAAAAAABSK')//系统授权key
            ->setSysAuthCode('RORJOOfU4OJ44XUf4uuXU4JuRLeeRAX7')//系统授权码
            ->setOne('name','zhangsan')
            ->setTime('1497587696789')
            ->setOne('id','123')
            ->SetHash()
            ->GetHash();

        $url = $data->rquest_url;

        $this->assertEquals('4E5B67B75447486AFC147BE5DEBF7758', $hash);
        $this->assertEquals('http://apitest.idcode.org.cn/abc/def?access_token=J7X4LuOOfURXeAAEAAAAAABSK&id=123&name=zhangsan&time=1497587696789&hash=4E5B67B75447486AFC147BE5DEBF7758', $url);
    }

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

        //$trade_id_parent = 5000 景点
        $json =  \yangqinjiang\idcode\IDCodeApi::trades_id_parent(5000);

        $this->assertArrayHasKey('trade_list',$json);
        $this->assertEquals(1,$json['result_code']);

    }
}
