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
//        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }
    public function testuploadCodeList(){
        //必填项
        $company_idcode = 1;//单位主码
        $category_reg_id = 1;//上传码批次 id (必填， 可通过接口 502 获取)
        $code_list_str = '1,2,3';

        $json =  \yangqinjiang\idcode\IDCodeApi::uploadCodeList($company_idcode,$category_reg_id,$code_list_str);
//        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }
    public function testuploadCodePrefix(){
        //必填项
        $company_idcode = 1;//单位主码
        $category_reg_id = 1;//上传码批次 id (必填， 可通过接口 502 获取)
        $prefix_str = 'prefix';
        $start_num =1;
        $end_num = 100;

        $json =  \yangqinjiang\idcode\IDCodeApi::uploadCodePrefix($company_idcode,$category_reg_id,$prefix_str,$start_num,$end_num);
        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }
}