# finance-sdk
财务模块SDK

### 一、安装
#### 1.依赖
* composer
* php7.4
    * 支持yar

#### 2.安装方法
```
composer require xn/finance:{version}

说明：{version}指定的版本号
```
### 二、目录结构

```
lib-php                 跟目录
├─src                   src目录
│  ├─Cash.php           提现类文件 
│  ├─Client.php         公共连接类文件 
│  ├─Cost.php           成本类文件 
│  ├─Data.php           数据类文件 
│  ├─Flow.php           流水类文件 
│  ├─Index.php          表类文件 
│  ├─Invoice.php        发票类文件 
│  ├─Settlement.php     结算类文件 
│  └─Trade.php          交易类文件
│
├─composer.json         composer 定义文件
├─demo.php              测试文件
├─README.md             README 文件
```

### 三、使用方法

#### 1.输出接口调用方法
```
输出类静态调用方法

说明：$code状态码 $data数据 $message状态信息
```