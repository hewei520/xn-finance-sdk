<?php


namespace xn\finance;

use think\facade\Env;

/**
 * @file Flow
 * @synopsis 流水模块
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/21
 */
class Flow extends Client
{
    public function __construct($config = [])
    {
        parent::__construct($config);
        $this->config['url'] = Env::get('xn-finance.flowUrl');
        $this->init();
    }
}