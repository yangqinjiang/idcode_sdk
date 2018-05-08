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
            ->setOne('code_pay_type',$code_pay_type)//证件类型
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

    //406注册/备案产品品类 IDcode 码接口
    //注册品类
    public static function idcodeinfoRegProduct($company_idcode,$codeuse_id,
                                                $industrycategory_id,$category_code,$model_number,
                                                $model_number_code,$code_pay_type,$gotourl,$sample_url)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/idcodeinfo/reg/product')
            ->setOne('company_idcode',$company_idcode)
            ->setOne('codeuse_id',$codeuse_id)
            ->setOne('industrycategory_id',$industrycategory_id)
            ->setOne('category_code',$category_code)
            ->setOne('model_number',$model_number)
            ->setOne('model_number_code',$model_number_code)
            ->setOne('code_pay_type',$code_pay_type)
            ->setOne('gotourl',$gotourl)
            ->setOne('sample_url',$sample_url)
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
    
    //407注册/备案 非产品 品类 IDcode 码接口

    public static function idcodeinfoRegOther($company_idcode,$codeuse_id,
                                              $industrycategory_id,$category_code,$model_number,
                                              $model_number_en,$introduction,$code_pay_type,
                                              $gotourl,$sample_url)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/idcodeinfo/reg/other')
            ->setOne('company_idcode',$company_idcode)
            ->setOne('codeuse_id',$codeuse_id)
            ->setOne('industrycategory_id',$industrycategory_id)
            ->setOne('category_code',$category_code)
            ->setOne('model_number',$model_number)
            ->setOne('model_number_en',$model_number_en)
            ->setOne('introduction',$introduction)
            ->setOne('code_pay_type',$code_pay_type) //申请码类型, 2,注册, 5备案
            ->setOne('gotourl',$gotourl)
            ->setOne('sample_url',$sample_url)
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

    //502 按品类查询上传的二维码接口
    //根据品类获取上传的二维码，返回多条
    public static function uploadCodeRecord($company_idcode,$idcode_of_category,$model_number_code)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/upload/coderecord')
            ->setOne('company_idcode',$company_idcode)//单位主码
            ->setOne('idcode_of_category',$idcode_of_category)//品类码
            ->setOne('model_number_code',$model_number_code)//型号码
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

    //503： 按上传批次 ID 查询上传的二维码接口
    //通过上传码批次 ID 获取 IDcode 上传码记录列表， 提供 HTTP JSON 数据返回。
    public static function uploadCodeInfo($company_idcode,$uploadcode_id)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/upload/codeinfo')
            ->setOne('company_idcode',$company_idcode)//单位主码
            ->setOne('uploadcode_id',$uploadcode_id)//上传码批次 id (必填， 可通过接口 502 获取)
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

    //504：获取一个 IDcode 码内容文件的下载地址
    //根据上传批次 ID 获取下载码内容地址， 提供 HTTP JSON 数据 返回
    public static function uploadCode($company_idcode,$uploadcode_id,$password)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/upload/codeinfo')
            ->setOne('company_idcode',$company_idcode)//单位主码
            ->setOne('uploadcode_id',$uploadcode_id)//上传码批次 id (必填， 可通过接口 502 获取)
            ->setOne('password',$password)//解压包解压密码（6~16 位字符，非必填）
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
    //601:单位登录验证接口
    //提供用 IDcode 注册用户登录验证。
    public static function loginverify($login_name,$login_pswd)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/loginverify')
            ->setOne('login_name',$login_name)
            ->setOne('login_pswd',$login_pswd)
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


    //602： 修改解析地址
    public static function categoryGotourl($company_idcode,$gotourl,$sample_url,$reg_id)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/category/gotourl')
            ->setOne('company_idcode',$company_idcode)
            ->setOne('gotourl',$gotourl)
            ->setOne('sample_url',$sample_url)
            ->setOne('reg_id',$reg_id)
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

    //603 生成码图接口
    public static function codepic($code,$pic_size,$code_type)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/codepic')
            ->setOne('code',$code)
            ->setOne('pic_size',$pic_size)
            ->setOne('code_type',$code_type)//码制, 1QR,2龙贝
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
    //604 生成带边框的码图
    public static function codepicWithMargin($code,$is_margin,$unit_icon,$qrcode_size,$color)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/codepic/withmargin')
            ->setOne('code',$code)//码内容（必填）
            ->setOne('is_margin',$is_margin)//是否带边框（必填）0：不带边框1：带边框
            ->setOne('unit_icon',$unit_icon)//单位 logo（将单位 logo 图片转换为 base64 字符串）
            ->setOne('qrcode_size',$qrcode_size)//像素大小(必填， 单位： px)(当 is_margin=1 时，qrcode_size 只能为 400、600、 800 中的一个值)
            ->setOne('color',$color)//码图颜色（必填）0：彩色1：黑色
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
    //605 生成质量认证二维码图
    public static function codepicAuthen($company_idcode,$code,$use_logo,$unit_icon,$margin_type,$category_id,$code_type,$code_size
    ,$code_color)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/codepic/authen')
            ->setOne('company_idcode',$company_idcode)//码内容（必填）
            ->setOne('code',$code)//码内容（必填）
            ->setOne('use_logo',$use_logo)
            ->setOne('unit_icon',$unit_icon)//单位 logo（将单位 logo 图片转换为 base64 字符串）
            ->setOne('margin_type',$margin_type)//边框样式（必填）0 无边框10 圆形边框20 方形边框
            ->setOne('category_id',$category_id)//品类 ID（当 margin_type 等于 10 时必填）1 产品追溯2 市场营销3 内控4 电子票证
            ->setOne('code_type',$code_type)//码制（必填）1 QR 码2 龙贝码3 DM 码4 汉信码5 GM 码
            ->setOne('code_size',$code_size)//码图尺寸(必填， 单位： cm，只能为 3、 5、 10 中的一个值)
            ->setOne('code_color',$code_color)//码图颜色值（如：黑色的颜色值为“#000000”，只需要传入“000000”即可； 该参数只对 QR 码有效，其他码制一律为黑色）
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
    //606： 申请 IDcode 解析地址白名单
    public static function categoryGotourlWhitelist($gotourl,$sample_url)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/category/gotourl/whitelist')
            ->setOne('gotourl',$gotourl)
            ->setOne('sample_url',$sample_url)
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
    //608： 查询审核状态接口
    //查询单位注册审核/解析地址审核的当前状态，提供 HTTP JSON数据返回
    public static function examinerecord($company_idcode,$category_reg_id,$type)
    {
        $data = new \yangqinjiang\idcode\data\IDcodeDataBase();
        //测试数据
        $hash = $data
            ->setTime(time()*1000)
            ->setPath('/sp/idcode/examinerecord')
            ->setOne('company_idcode',$company_idcode)
            ->setOne('category_reg_id',$category_reg_id)
            ->setOne('type',$type)
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

    //5011

    //5012


    //5013
}