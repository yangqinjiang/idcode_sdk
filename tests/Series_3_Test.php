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

}