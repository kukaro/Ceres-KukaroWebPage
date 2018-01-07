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

#bower install to local directory
