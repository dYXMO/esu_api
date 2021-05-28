# esu_api
版本:v0.2.1

随机恶俗词汇api

(可能是GitHub第一个开源的恶俗api！)

### 更新内容

1.化简为繁 加了PHP框架(其实是为了以后更多功能做准备awa)

2.新增错误页面

### 说明

请求地址`/index.php/api`

恶俗词汇在`/list.php`请自己添加

设置在`/config.php`

### 参数说明

#### api类型:type

输出相应语言便利格式

支持`js` `php` `iapp`

#### 变量输出类型:var_name

这个随便输入 用于定义变量名

Tips : 如果你是text模式请无视

#### 栗子 

/index.php/api?type=js&var_name=nmsl

### 使用相关

请使用php7.2+(防止编码问题)