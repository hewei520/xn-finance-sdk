<?php

namespace xnjy\finance;

use think\facade\Env;

/**
 * @file Trade
 * @synopsis 交易模块
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/21
 */
class Trade extends Client
{
    public function __construct($config = [])
    {
        parent::__construct($config);
        $this->config['url'] = Env::get('xn-finance.tradeUrl');
        $this->init();
    }
}