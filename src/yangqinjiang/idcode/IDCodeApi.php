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

    //105： 获取单位性质分类接口
    //获取单位性质分类信息，用于注册项数据来源。
    public static function unittypes()
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/unittypes')
            ->SetHash()
            ->GetHash();
        $url = $data->rquest_url;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return json_decode($res->getBody(),true);
    }

    //201： 获取人、事、物所有用途接口
    public static function codeuse()
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/codeuse')
            ->SetHash()
            ->GetHash();
        $url = $data->rquest_url;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return json_decode($res->getBody(),true);
    }

    //202： 获取所有品类接口
    public static function industrycategory()
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/industrycategory')
            ->SetHash()
            ->GetHash();
        $url = $data->rquest_url;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return json_decode($res->getBody(),true);
    }
    //203： 获取某一级品类接口
    public static function industrycategory_id_parent($industrycategory_id_parent)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/industrycategory/parent/id')
            ->setOne('industrycategory_id_parent',$industrycategory_id_parent)
            ->SetHash()
            ->GetHash();
        $url = $data->rquest_url;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return json_decode($res->getBody(),true);
    }
    //204： 获取产品所有品类接口
    public static function industrycategory_product()
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/industrycategory/product')
            ->SetHash()
            ->GetHash();
        $url = $data->rquest_url;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return json_decode($res->getBody(),true);
    }

    //301： 单位注册信息提交接口 1
    //注册信息提交到 IDcode 平台库。
    public static function companyinfo_reg($login_name,$login_password,$organunit_name,$code,
                                           $province_id,$city_id,$area_id,$linkphone,$sms_verify_code)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/companyinfo/reg')
            ->setOne('login_name',$login_name)
            ->setOne('login_password',$login_password)
            ->setOne('email','')
            ->setOne('organunit_name',$organunit_name)
            ->setOne('organunit_name_en','')
            ->setOne('code',$code)
            ->setOne('province_id',$province_id)
            ->setOne('city_id',$city_id)
            ->setOne('area_id',$area_id)
            ->setOne('linkman','')
            ->setOne('linkman_en','')
            ->setOne('linkphone',$linkphone)
            ->setOne('sms_verify_code',$sms_verify_code)
            ->SetHash()
            ->GetHash();

        $client = new \GuzzleHttp\Client();

        try{

        $res = $client->request('GET',$data->rquest_url);
        }catch (\Exception $e){
            return false;
        }
        return json_decode($res->getBody(),true);
    }

    //302： 获取激活验证码接口(SP 平台发短信）
    public static function verifycode($phone_code)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/verifycode')
            ->setOne('phone_code',$phone_code)
            ->SetHash()
            ->GetHash();

        $client = new \GuzzleHttp\Client();

        try{

            $res = $client->request('GET',$data->rquest_url);
        }catch (\Exception $e){
            return false;
        }
        return json_decode($res->getBody(),true);
    }
    //303： 发送激活验证码接口(IDcode 平台发短信）
    public static function verifycodeSend($phone_code)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/verifycode/send')
            ->setOne('phone_code',$phone_code)
            ->SetHash()
            ->GetHash();

        $client = new \GuzzleHttp\Client();

        try{

            $res = $client->request('GET',$data->rquest_url);
        }catch (\Exception $e){
            return false;
        }
        return json_decode($res->getBody(),true);
    }
}