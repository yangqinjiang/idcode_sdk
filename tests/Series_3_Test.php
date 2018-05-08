<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 2018-05-07
 * Time: 17:00
 */

class Series_3_Test extends \PHPUnit\Framework\TestCase
{
    public function testCompanyinfoReg(){
        //必填项
        $login_name = 'test';
        $login_password = 'test123456';
        $organunit_name = '这是单位名称';
        $code = '1003';
        $province_id = '440000';
        $city_id = '441900';
        $area_id = '441900';
        $linkphone = '15976543860';
        $sms_verify_code = '123456';
        $json =  \yangqinjiang\idcode\IDCodeApi::companyinfo_reg($login_name,$login_password,$organunit_name,$code,
            $province_id,$city_id,$area_id,$linkphone,$sms_verify_code);

        $this->assertNotEquals('1',$json['result_code']);
    }

    public function testVerifyCode()
    {
        $phone_code = '';//手机号为空
        $json = \yangqinjiang\idcode\IDCodeApi::verifycode($phone_code);

        $this->assertEquals('1',$json['result_code']);

        $json = \yangqinjiang\idcode\IDCodeApi::verifycodeSend($phone_code);

        $this->assertEquals('0',$json['result_code']);
    }

    public function testcompanyinfoVerify()
    {
        $company_idcode = '';
        $code_pay_type ='';
        $organization_code = '';
        $file1 = '';

        $json = \yangqinjiang\idcode\IDCodeApi::companyinfoVerify($company_idcode,$code_pay_type,$organization_code,$file1);


        $this->assertEquals('10000',$json['result_code']);
    }

    public function testcompanyinfoModify()
    {
        $company_idcode = '';
        $trade_id = '';
        $organunit_address = '';
        $linkphone = '';
        $linkman = '';

        $json = \yangqinjiang\idcode\IDCodeApi::companyinfoModify($company_idcode,$trade_id,$organunit_address,$linkphone,$linkman);

        $this->assertEquals('10000',$json['result_code']);
    }
    public function testcompanyinfoBase()
    {
        $company_idcode = '';
        $json = \yangqinjiang\idcode\IDCodeApi::companyinfoBase($company_idcode);

        //参数错误，单位主码不能为空

        $this->assertEquals('10000',$json['result_code']);
    }
    public function testcompanyinfoSearch()
    {
        $company_name = '测试';
        $search_type = 0;
        $json = \yangqinjiang\idcode\IDCodeApi::companyinfoSearch($company_name,$search_type);


        $this->assertArrayHasKey('organunit_list',$json);
    }

    public function testcompanyinfoStatus()
    {

         $company_idcode = 0;
        $json = \yangqinjiang\idcode\IDCodeApi::companyinfoStatus($company_idcode);
        var_dump($json);

        //参数错误，单位主码不能为空

        $this->assertEquals('10000',$json['result_code']);
    }
}