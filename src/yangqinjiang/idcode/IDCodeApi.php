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

    //304： 单位认证接口
    public static function companyinfoVerify($company_idcode,$code_pay_type,$organization_code,$file1)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/companyinfo/verify')
            ->setOne('company_idcode',$company_idcode)
            ->setOne('code_pay_type',$code_pay_type)
            ->setOne('organization_code',$organization_code)
            ->setOne('file1',$file1)
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
    //305： 单位资料完善相关接口
    public static function companyinfoModify($company_idcode,$trade_id,$organunit_address,$linkphone,$linkman)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/companyinfo/modify')
            ->setOne('company_idcode',$company_idcode)
            ->setOne('trade_id',$trade_id)
            ->setOne('organunit_address',$organunit_address)
            ->setOne('linkphone',$linkphone)
            ->setOne('linkman',$linkman)
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
    //306：获取单位基本信息接口
    //单位查询企业单位的基本信息接口
    public static function companyinfoBase($company_idcode)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/companyinfo/base')
            ->setOne('company_idcode',$company_idcode)
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
    //307： 根据单位名称获取单位基本信息接口
    //根据单位组织名称获取单位信息， 同时用于验证单位名称是
    //否注册已经在中国二维码注册认证中心注册。
    public static function companyinfoSearch($company_name,$search_type)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/companyinfo/search')
            ->setOne('company_name',$company_name)
            ->setOne('search_type',$search_type)//查询方式（0、模糊 1、精确）
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

    //308： 获取单位状态接口
    //根据单位主码查询该单位的状态。
    public static function companyinfoStatus($company_idcode)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/organunit/status')
            ->setOne('company_idcode',$company_idcode)
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