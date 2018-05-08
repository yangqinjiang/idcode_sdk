<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 2018-05-07
 * Time: 17:00
 */

class Series_4_Test extends \PHPUnit\Framework\TestCase
{
    public function testIdcodeinfoRegProduct(){
        //必填项
        $company_idcode = '';
        $codeuse_id = 10;
        $industrycategory_id = '';
        $category_code = '';
        $model_number = '';
        $model_number_code = '';
        $code_pay_type = '';
        $gotourl = '';
        $sample_url = '';

        $json =  \yangqinjiang\idcode\IDCodeApi::idcodeinfoRegProduct($company_idcode,$codeuse_id,
            $industrycategory_id,$category_code,$model_number,
            $model_number_code,$code_pay_type,$gotourl,$sample_url);
        var_dump($json);

        $this->assertNotEquals('1',$json['result_code']);
    }
}