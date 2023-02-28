#!/bin/bash

######################################################
# 前提条件：
# 先在前台注册用户账号
#
#
# 用途： 
# 获取项目数据库名称，并生成auto_create_adminuser.sh脚本
# 该脚本在每个项目根目录，执行后产生adminuser表
######################################################

# 获取本项目数据库名
dbname=''
add_table=''

## step1: 执行php yii migrate生成用户登录表
echo -e "> 执行php yii migrate生成用户登录表: "
php yii migrate


## step2: 判断是否在前台注册了用户名，并复制为后台登录表
echo -e "\n\n判断是否在前台注册了用户名，并复制为后台登录表: "

read -p "是否在前台注册了用户名？(y|n): " add_table


if [ "$add_table" = "y" ];
then
	echo -e "\n\n已经注册了用户名，执行复制操作！"

	read -p "> 请输入本项目数据库名: " dbname
	read -p "> 输入MySQL登录用户名(root): " username
	read -p "> 输入MySQL登录密码: " password

	# 复制user表为adminuser
	mysql -h 127.0.0.1 -u$username -p$password -e \
	"USE $dbname; \
	DROP TABLE IF EXISTS adminuser; \
	CREATE TABLE adminuser LIKE user; \
	INSERT INTO adminuser SELECT * FROM user;"

	echo -e "\n\n====== 复制user表完成！ ====== \n\n"
else
	echo -e "还没有在前台注册用户账号，先注册后再执行本文件！！！\n"
fi



