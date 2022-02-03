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
wp @production gf install --key=8621321e72cf1753826be6794c56e0ae --activate
wp @production gf install gravityformsadvancedpostcreation --key=8621321e72cf1753826be6794c56e0ae --activate
wp @production gf install gravityformsmailchimp --key=8621321e72cf1753826be6794c56e0ae --activate
wp @production gf install gravityformssendgrid --key=8621321e72cf1753826be6794c56e0ae --activate
wp @production gf install gravityformsstripe --key=8621321e72cf1753826be6794c56e0ae --activate
wp @production gf install gravityformsuserregistration --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @staging gf license update 8621321e72cf1753826be6794c56e0ae

# DB
./sync.sh development production
