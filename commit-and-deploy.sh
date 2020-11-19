#!/bin/bash

while true
do
    git add .
    git commit -am "Wip"
    git push
    echo '----------'
    sleep 10
done
