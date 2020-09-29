<?php


namespace xn\finance;

use think\facade\Env;

/**
 * @file Cash
 * @synopsis 提现模块
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/21
 */
class Cash extends Client
{
    public function __construct($config = [])
    {
        parent::__construct($config);
        $this->config['url'] = Env::get('xn-finance.cashUrl');
        $this->init();
    }
}