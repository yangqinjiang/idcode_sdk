<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 2018-05-07
 * Time: 17:00
 */

class Series_6_Test extends \PHPUnit\Framework\TestCase
{
    public function testloginverify(){
        //必填项
        $login_name =$login_pswd = '';
        $json =  \yangqinjiang\idcode\IDCodeApi::loginverify($login_name,$login_pswd);
//        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }

    public function testExaminerecord(){
        //必填项
        $company_idcode = '';//单位主码
        $category_reg_id = '';//品类申请ID
        $type =1;//审核类型
        $json =  \yangqinjiang\idcode\IDCodeApi::examinerecord($company_idcode,$category_reg_id,$type);
//        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }

    public function testcategoryGotourl()
    {
        $company_idcode ='';
        $gotourl ='http://gotourl.com';
        $sample_url ='http://gotourl2.com';
        $reg_id = 0;
        $json = \yangqinjiang\idcode\IDCodeApi::categoryGotourl($company_idcode,$gotourl,$sample_url,$reg_id);
//        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }
    public function testcodepic()
    {
        $code = '';
        $pic_size ='';
        $code_type = '';
        $json = \yangqinjiang\idcode\IDCodeApi::codepic($code,$pic_size,$code_type);
//        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);


    }

    public function testcodepicWithMargin()
    {
        $code = '';
        $is_margin = 1;
        $unit_icon ='';
        $qrcode_size = '';
        $color = 0;
        $json = \yangqinjiang\idcode\IDCodeApi::codepicWithMargin($code,$is_margin,$unit_icon,$qrcode_size,$color);
//        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }
    public function testcodepicAuthen()
    {
        $company_idcode = $code = $use_logo = $unit_icon = $margin_type = $category_id = $code_type = $code_size = $code_color = 1;

        $json = \yangqinjiang\idcode\IDCodeApi::codepicAuthen($company_idcode,$code,$use_logo,$unit_icon,$margin_type,$category_id,$code_type,$code_size
            ,$code_color);
//        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }
    public function testcategoryGotourlWhitelist()
    {
        $gotourl = $sample_url = 'http://www.baidu.com';
        $json = \yangqinjiang\idcode\IDCodeApi::categoryGotourlWhitelist($gotourl,$sample_url);
//        var_dump($json);

        $this->assertEquals('1',$json['result_code']);
    }
}