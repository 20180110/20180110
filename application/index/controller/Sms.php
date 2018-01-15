<?php
namespace app\index\controller;
require_once VENDOR_PATH . '/aliyun/api_sdk/vendor/autoload.php';
use Aliyun\Core\Config;
use Aliyun\Core\Profile\DefaultProfile;
use Aliyun\Core\DefaultAcsClient;
use Aliyun\Api\Sms\Request\V20170525\SendSmsRequest;

// 加载区域结点配置
Config::load();
class Sms{

    static $acsClient = null;

    /**
     * 取得AcsClient
     *
     * @return DefaultAcsClient
     */
    public static function getAcsClient() {
        //产品名称:云通信流量服务API产品,开发者无需替换
        $product = "Dysmsapi";

        //产品域名,开发者无需替换
        $domain = "dysmsapi.aliyuncs.com";

        // TODO 此处需要替换成开发者自己的AK (https://ak-console.aliyun.com/)
        $accessKeyId = "LTAI3EKzNmFV83oW"; // AccessKeyId

        $accessKeySecret = "c1dXuQT0xFUel0dbSTGpRlF4e4644C"; // AccessKeySecret

        // 暂时不支持多Region
        $region = "cn-hangzhou";

        // 服务结点
        $endPointName = "cn-hangzhou";


        if(static::$acsClient == null) {

            //初始化acsClient,暂不支持region化
            $profile = DefaultProfile::getProfile($region, $accessKeyId, $accessKeySecret);

            // 增加服务结点
            DefaultProfile::addEndpoint($endPointName, $region, $product, $domain);

            // 初始化AcsClient用于发起请求
            static::$acsClient = new DefaultAcsClient($profile);
        }
        return static::$acsClient;
    }

    /**
     * 发送短信
     * @return stdClass
     */
    public static function sendSms($data) {

        // 初始化SendSmsRequest实例用于设置发送短信的参数
        $request = new SendSmsRequest();

        // 必填，设置短信接收号码
        $request->setPhoneNumbers($data['phone']);

        // 必填，设置签名名称，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
        $request->setSignName($data['sign_name']);

        // 必填，设置模板CODE，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
        $request->setTemplateCode($data['template_code']);

        // 可选，设置模板参数, 假如模板中存在变量需要替换则为必填项
        $request->setTemplateParam(json_encode(Array(  // 短信模板中字段的值
            "code"=>$data['code'],
            "product"=>$data['product']
        )));

        // 发起访问请求
        $acsResponse = static::getAcsClient()->getAcsResponse($request);

        return $acsResponse;

    }
    /**
     * 发送注册短信
     * */
    public function registerCode(){
        $code=$this->getRandCode();
        $phone=input('phone');
        if(!check_mobile($phone)){
            return updateResult(0,'手机格式不正确');
        }
        $data=['code'=>$code,'num'=>1,'create_time'=>request()->time(),'phone'=>$phone,'sign_name'=>'程猿星球','template_code'=>'SMS_115380932','product'=>'登陆手机验证'];
        $cache=cache('registerCode_'.$phone);
        if(!empty($cache)){
            $num=$cache['num']+1;
            if($cache['num']>5){
                return updateResult(0,'使用太频繁,请10分钟后再重试');
            }
            $data['num']=$num;
        }
        cache('registerCode_'.$phone,$data,10*60);
        $result=$this->sendSms($data);
        return updateResult($result);
    }

    /*忘记密码*/
    public function zhmmCode(){
        $code=$this->getRandCode();
        $phone=input('phone');
        if(!check_mobile($phone)){
            return updateResult(0,'手机格式不正确');
        }
        $data=['code'=>$code,'num'=>1,'create_time'=>request()->time(),'phone'=>$phone,'sign_name'=>'程猿星球','template_code'=>'SMS_115950554','product'=>'忘记密码手机验证'];
        $cache=cache('registerCode_'.$phone);
        if(!empty($cache)){
            $num=$cache['num']+1;
            if($cache['num']>5){
                return updateResult(0,'使用太频繁,请10分钟后再重试');
            }
            $data['num']=$num;
        }
        cache('forgetPwdCode_'.$phone,$data,10*60);
        $result=$this->sendSms($data);
        return updateResult($result);
    }
    protected function getRandCode(){
        $code=rand(100000, 999999);
        return $code;
    }
}
