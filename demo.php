<?php
//自动加载，一般写到入口文件即可
require __DIR__ . '/vendor/autoload.php';

$i = new \xn\finance\Index();

print_r($i->getTableList());
print_r($i->getTableFieldList('xn_finance_user_account'));
die;
$c = new \xn\finance\Data();

print_r($c->page(2)->userAccountList());
