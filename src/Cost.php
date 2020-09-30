<?php


namespace xnjy\finance;

use think\facade\Env;

/**
 * @file Cost
 * @synopsis 成本模块
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/21
 */
class Cost extends Client
{
    public function __construct($config = [])
    {
        parent::__construct($config);
        $this->config['url'] = Env::get('xn-finance.costUrl');
        $this->init();
    }
}