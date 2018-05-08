<?php
namespace yangqinjiang\idcode\data;
use yangqinjiang\idcode\Config;

/**
 * 
 * 数据对象基础类，该类中定义数据类最基本的行为，包括：
 * 计算/设置/获取签名、输出xml格式的参数、从xml读取数据对象等
 * @author widyhu
 *
 */
class IDcodeDataBase
{
    public $url = 'http://api.idcode.org.cn';
    public $path = '';
    public $rquest_url = '';
    public $access_token = '';
    public $sys_auth_code = '';
	protected $values = array();

	public function __construct()
    {
        $this->setUrl(Config::$URL)
        ->setAccessToken(Config::$KEY)//系统授权key
        ->setSysAuthCode(Config::$SYS_AUTH_CODE);//系统授权码
    }

    /**
	* 设置签名，详见签名生成算法
	* @param string $value 
	**/
	public function SetHash()
	{
		$this->values['hash'] = $this->MakeHash();
		return $this;
	}
	
	/**
	* 获取签名，详见签名生成算法的值
	* @return 值
	**/
	public function GetHash()
	{
		return $this->values['hash'];
	}
	
	/**
	* 判断签名，详见签名生成算法是否存在
	* @return true 或 false
	**/
	public function IsHashSet()
	{
		return array_key_exists('sign', $this->values);
	}


	/**
	 * 格式化参数格式化成url参数
	 */
	public function ToUrlParams()
	{
		$buff = "";
		foreach ($this->values as $k => $v)
		{
			if($k != "hash" && $v != "" && !is_array($v)){
				$buff .= $k . "=" . $v . "&";
			}
		}
		
		$buff = trim($buff, "&");
		return $buff;
	}
	
	/**
	 * 生成签名
	 * @return 签名，本函数不覆盖sign成员变量，如要设置签名需要调用SetSign方法赋值
	 */
	public function MakeHash()
	{
	    //第一步：假设当前时间为 2017 年 6 月 16 日 12 点 34 分 56 秒 789 毫秒，则当
        //前时间的毫秒数 1497587696789，增加 time 参数


		//第二步：将上述字符串中的参数按照参数名的 ASCII 进行升序排序

		ksort($this->values);
		$string = $this->ToUrlParams();
		$path_params = $this->path . '?' .$string;

        //第三步：将上图中的系统授权码不加连接符直接拼接到上一步得到的结果的尾
        //部进行 MD5（32 位大写）加密
        $_string = $path_params . $this->sys_auth_code;


		//签名步骤三：MD5加密
		$string = md5($_string);
		//签名步骤四：所有字符转为大写
		$result = strtoupper($string);
		//生成请求地址
		$this->rquest_url = $this->url.$path_params.'&hash='.$result;
		return $result;
	}
	
	/**
	 * 获取设置的值
	 */
	public function getValues()
	{
		return $this->values;
	}

    /**
     * @param array $values
     */
    public function setAccessToken($access_token)
    {
        $this->values['access_token'] = $access_token;
        return $this;
    }

    public function setSysAuthCode($code)
    {
        $this->sys_auth_code = $code;
        return $this;
    }
    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
    public function setTime($time)
    {
        $this->values['time'] = $time;
        return $this;
    }

    public function setOne($key,$value)
    {
        $this->values[$key] = $value;
        return $this;
    }
    public function setMore($array)
    {
        foreach ($array as $key=>$value){
            $this->values[$key] = $value;
        }
        return $this;
    }
}




















