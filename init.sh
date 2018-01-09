#!/bin/sh
#띄어쓰기 하나하나 까지 다 지켜야함

#make directory
sudo mkdir -p file/user/admin
sudo mkdir -p code

#install package npm,bower
npmIxist=`which npm | wc -c`
bowerIxist=`which bower | wc -c`
if [ $npmIxist -gt 0 ];then
    echo "npm ixist"
else
    echo "npm not ixist"
fi
if [ $bowerIxist -gt 0 ];then
    echo "bower ixist"
else
    echo "bower not ixist"
    sudo npm install -g bower
fi

#bower install to ceres directory
sudo chmod 777 ./*
sudo chmod 777 .
sudo chmod 777 ./application/views/public
bower install
sudo mv ../Ceres-KukaroWebPage ../CI

#install mariadb
mariadbIxist=`which mysql | wc -c`
if [ $mariadbIxist -gt 0 ];then
    echo "mariadb ixist"
else
    echo "mariadb not ixist"
    sudo apt-get update
    sudo apt-get install mariadb-server mariadb-client
    sudo mysql_secure_installation
fi
echo "Make database in mariadb"
sudo mysql -uroot -p < application/docs/sql/createDb.sql
# my.cnf's character-set setting to utf-8
echo "Make table in mariadb"
sudo mysql -uroot -p < application/docs/sql/createTable.sql
