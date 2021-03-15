#!/bin/bash

composer install
npm install
npm run dev
./vendor/bin/jigsaw build
