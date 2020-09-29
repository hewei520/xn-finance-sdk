<?php


namespace xn\finance;

use think\Exception;
use xn\output\StatusCode;

/**
 * @file Client
 * @synopsis
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/22
 */
class Client
{
    //----------------------------------------------常量区域 start-----------------------------------------------------//
    //类地址常量
    const DATA_URL = '/data';
    const CASH_URL = '/cash';
    const INDEX_URL = '/index';

    //输出格式常量
    const TYPE_ARRAY = 'array';
    const TYPE_JSON  = 'json';
    //----------------------------------------------常量区域 end-------------------------------------------------------//

    public $service = null;
    protected $config = ['host' => '', 'url' => ''];

    protected $where = [];//设置条件
    protected $page = 1;
    protected $pageNum = 10;

    public function __construct($config = [])
    {
        if(class_exists('think\facade\Env') && !empty(think\facade\Env::get('FINANCE_SERVICE.host'))){
            $this->config['host'] = think\facade\Env::get('FINANCE_SERVICE.host');
        }else{
            $this->config['host'] = getenv('FINANCE_SERVICE');
        }
        $this->config = array_merge($this->config, $config);
    }

    /**
     * @synopsis  获取配置
     * getConfig
     * @returns
     */
    protected function init(){
        $this->service = new \Yar_Client($this->config['host'] . $this->config['url']);
        $this->service->SetOpt(YAR_OPT_PACKAGER,'php');
    }

    /**
     * 数据解析
     */
    protected function dataAnalysis($data, $type = self::TYPE_ARRAY){
        if($type == self::TYPE_ARRAY) {
            $data = json_decode($data, true) ?? [];
        }
        return $data;
    }

    /**
     * 设置条件
     */
    public function where($where = []){
        $this->where = $where;
        return $this;
    }

    /**
     * 设置页码和返回条数
     */
    public function page($page, $pageNum = 10){
        $this->page = (int)$page;
        $this->pageNum = (int)$pageNum;
        return $this;
    }
}