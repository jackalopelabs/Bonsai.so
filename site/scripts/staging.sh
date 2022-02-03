#!/bin/bash

# Install Wordpress and Migrate DB
# Version 0.0.10
# Copyright (c) Mason Lawlor

# Clean DB
# wp @staging db clean

cd ../../trellis

# Add SSH Key
ssh-add -K

# Privision Staging Server
ansible-playbook server.yml -e env=staging

# Add SSH Key to ~/.ssh/know_hosts
ssh-keygen -R staging.bonsai.so

# Deploy to Staging Server
./bin/deploy.sh staging bonsai.so
cd ../site/scripts

# Install WP Core
wp @staging core install --url=bonsai.so --title=Bonsai_App --admin_user=masoninthesis --admin_password=admin --admin_email=mason@jackalope.io
wp @staging theme activate bonsai/resources
wp @staging plugin activate --all

# Install GF Plugins
wp @staging gf install --key=8621321e72cf1753826be6794c56e0ae --activate
wp @staging gf install gravityformsadvancedpostcreation --key=8621321e72cf1753826be6794c56e0ae --activate
wp @staging gf install gravityformsmailchimp --key=8621321e72cf1753826be6794c56e0ae --activate
wp @staging gf install gravityformssendgrid --key=8621321e72cf1753826be6794c56e0ae --activate
wp @staging gf install gravityformsstripe --key=8621321e72cf1753826be6794c56e0ae --activate
wp @staging gf install gravityformsuserregistration --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @staging gf license update 8621321e72cf1753826be6794c56e0ae

# DB
./sync.sh development staging
