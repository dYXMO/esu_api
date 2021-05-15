# esu_api
版本:v0.2.0

随机恶俗词汇api

(可能是GitHub第一个开源的恶俗api！)

### 更新内容

1.新增iapp变量格式

2.新增var_name可自定义恶俗词汇输出变量

3.新增一些祖安🐎词汇参考

4.重构config变量名

### 说明

恶俗词汇在`/list.php`请自己添加

设置在`/config.php`

### api类型

`js` : ?type=js 输出js变量格式

`php` : ?type=php 输出php变量格式

`iapp` : ?type=iapp 输出iapp全局变量格式

`留空` : ?type= 输出text文字

### 恶俗词汇变量输出类型

`var_name` : ?var_name=nmsl 这样就可以输出定义nmsl为词汇变量

Tips : 如果你是text模式请无视

### 使用相关

请使用php7.2+(防止编码问题)