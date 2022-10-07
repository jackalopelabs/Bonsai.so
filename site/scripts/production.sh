#!/bin/bash

# Install Wordpress and Migrate DB
# Version 0.0.10
# Copyright (c) Mason Lawlor

# Clean DB
# wp @production db clean

cd ../../trellis

# Add SSH Key
ssh-add -K

# Privision Production Server
# ansible-playbook server.yml -e env=production

# Add SSH Key to ~/.ssh/know_hosts
ssh-keygen -R bonsai.so

# Deploy to production Server
./bin/deploy.sh production bonsai.so
cd ../site/scripts

# Install WP Core
wp @production core install --url=bonsai.so --title=Bonsai_App --admin_user=masoninthesis --admin_password=admin --admin_email=mason@jackalope.io
wp @production theme activate bonsai/resources
wp @production plugin activate --all

# Install GF Plugins
wp @production gf install --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsadvancedpostcreation --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsmailchimp --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsslack --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformssendgrid --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsstripe --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformstrello --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsuserregistration --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @staging gf license update xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

# DB
# ./sync.sh development production
