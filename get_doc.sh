#!/bin/bash

echo ">>step1:安装apidoc，在composer.json中添加 \"yiisoft/yii2-apidoc\": \"~2.1.6\""

echo "再执行composer update更新即可"

echo ">>step1:安装apidoc操作完成！";
echo "--------------------------------------------";
echo -e '\n';


echo ">>step2:执行生成文档操作"

read -p "请输入本项目名称: " project

echo $project 



## 生成md文件目录
mkdir -p /var/www/html/$project.com/doc/$project-guide/cn-1.0/md

## 生成html文件目录
mkdir -p /var/www/html/$project.com/doc/$project-guide/cn-1.0/html


## 通过apidoc插件将md文件生成HTML
vendor/bin/apidoc guide /var/www/html/$project.com/doc/$project-guide/cn-1.0/md  /var/www/html/$project.com/doc/$project-guide/cn-1.0/html

echo ">>step2:执行生成文档操作完成！";
echo "--------------------------------------------";
echo -e '\n';