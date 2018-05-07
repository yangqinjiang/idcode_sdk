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

}
