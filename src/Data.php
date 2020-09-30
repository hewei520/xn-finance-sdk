<?php


namespace xnjy\finance;

use think\response\Json;

/**
 * @file Data
 * @synopsis 数据模块
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/21
 */
class Data extends Client
{
    public function __construct($config = [])
    {
        $config['url'] = self::DATA_URL;
        parent::__construct($config);
        $this->init();
    }

    /**
     * @synopsis  获取用户账户信息
     * userAccountInfo
     * @param int $userId 用户ID
     * @returns Json
     */
    public function userAccountInfo($userId, $type = self::TYPE_ARRAY){

        return $this->dataAnalysis($this->service->userAccountInfo($userId), $type);
    }

    /**
     * @synopsis  获取用户账户列表
     * userAccountInfo
     * @param int $page 页码
     * @param int $pageNum 返回条数
     * @param array $where 设置条件
     * @returns Json
     */
    public function userAccountList($type = self::TYPE_ARRAY){

        return $this->dataAnalysis($this->service->userAccountList($this->page, $this->pageNum, $this->where), $type);
    }
}