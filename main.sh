#!/bin/zsh

while :
do
    # 找網站根
    find /var/www/* -maxdepth 1 -name "*.php"  $1 | while read x

    do
        echo $x

        php /root/cleaner/match.php $x

        echo \n
    done

    # 找網圖片暫存與記錄資料夾
    find /var/www/*/{images,logs,tmp} -name "*.php"  $1 | while read x

    do
        echo $x

        php /root/cleaner/match.php $x

        echo \n
    done

    sleep 0.1;
done