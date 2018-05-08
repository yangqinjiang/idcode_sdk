<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 2018-05-07
 * Time: 17:00
 */

class Series_5_Test extends \PHPUnit\Framework\TestCase
{
    public function testuploadCodeRecord(){
        //必填项
        $company_idcode = '';//单位主码
        $idcode_of_category = '';//品类申请ID
        $model_number_code =1;//审核类型

        $json =  \yangqinjiang\idcode\IDCodeApi::uploadCodeRecord($company_idcode,$idcode_of_category,$model_number_code);
//        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }
    public function testuploadCodeInfo(){
        //必填项
        $company_idcode = 1;//单位主码
        $uploadcode_id = 1;//上传码批次 id (必填， 可通过接口 502 获取)

        $json =  \yangqinjiang\idcode\IDCodeApi::uploadCodeInfo($company_idcode,$uploadcode_id);
        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }
    public function testuploadCode(){
        //必填项
        $company_idcode = 1;//单位主码
        $uploadcode_id = 1;//上传码批次 id (必填， 可通过接口 502 获取)
        $password = '123456';

        $json =  \yangqinjiang\idcode\IDCodeApi::uploadCode($company_idcode,$uploadcode_id,$password);
        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }
}