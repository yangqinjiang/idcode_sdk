<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 2018-05-07
 * Time: 14:15
 */

namespace yangqinjiang\idcode;


class IDCodeApi
{
    //101:一次性返回所有级别行政信息
    public static function addresses()
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setUrl('http://apitest.idcode.org.cn')
            ->setAccessToken('J7X4LuOOfURXeAAEAAAAAABSK')//系统授权key
            ->setSysAuthCode('RORJOOfU4OJ44XUf4uuXU4JuRLeeRAX7')//系统授权码
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/addresses')
            ->SetHash()
            ->GetHash();
        $url = $data->rquest_url;

        $client = new \GuzzleHttp\Client();

        $res = $client->request('GET', $url);
        return json_decode($res->getBody(),true);
    }

    //102:按照父级 ID 返回子级信息
    public static function address_id_parent($id_parent,$level)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setUrl('http://apitest.idcode.org.cn')
            ->setAccessToken('J7X4LuOOfURXeAAEAAAAAABSK')//系统授权key
            ->setSysAuthCode('RORJOOfU4OJ44XUf4uuXU4JuRLeeRAX7')//系统授权码
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/addresses/parent/id')
            ->setOne('address_id_parent',$id_parent)
            ->setOne('level',$level)
            ->SetHash()
            ->GetHash();
        $url = $data->rquest_url;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return json_decode($res->getBody(),true);
    }

    //103:一次性返回所有级别行业信息
    public static function trades()
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setUrl('http://apitest.idcode.org.cn')
            ->setAccessToken('J7X4LuOOfURXeAAEAAAAAABSK')//系统授权key
            ->setSysAuthCode('RORJOOfU4OJ44XUf4uuXU4JuRLeeRAX7')//系统授权码
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/trades')
            ->SetHash()
            ->GetHash();
        $url = $data->rquest_url;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return json_decode($res->getBody(),true);
    }
    //104:一按照父级ID返回子级信息
    public static function trades_id_parent($trade_id_parent)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setUrl('http://apitest.idcode.org.cn')
            ->setAccessToken('J7X4LuOOfURXeAAEAAAAAABSK')//系统授权key
            ->setSysAuthCode('RORJOOfU4OJ44XUf4uuXU4JuRLeeRAX7')//系统授权码
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/trades/parent/id')
            ->setOne('trade_id_parent',$trade_id_parent)
            ->SetHash()
            ->GetHash();
        $url = $data->rquest_url;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return json_decode($res->getBody(),true);
    }
}