<?php


namespace xnjy\finance;

use think\response\Json;

/**
 * @file Flow
 * @synopsis 流水模块
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/21
 */
class Index extends Client
{
    public function __construct($config = [])
    {
        $config['url'] = self::INDEX_URL;
        parent::__construct($config);
        $this->init();
    }

    /**
     * @synopsis  获取所有表
     * getTableList
     * @returns Json
     */
    public function getTableList($type = self::TYPE_ARRAY){

        return $this->dataAnalysis($this->service->getTableList(), $type);
    }

    /**
     * @synopsis  获取某表的所有字段
     * getTableList
     * @returns Json
     */
    public function getTableFieldList($strTable, $type = self::TYPE_ARRAY){

        return $this->dataAnalysis($this->service->getTableFieldList($strTable), $type);
    }
}