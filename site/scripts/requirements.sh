#!/bin/bash

# Install Bonsai Requirements
# Version 0.0.10
# Copyright (c) Mason Lawlor

# Install Xcode Developer Tools
xcode-select --install

# Install PHP 7.2
# https://jasonmccreary.me/articles/upgrade-php-mac-os-x/

# Install Homebrew
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"

# Install Python
brew install python

# Install Telnet
brew install telnet

#Install Node 10
brew install node@10
# brew unlink node
brew link node@10 --force
# brew link --overwrite node@10

# Install WP-CLI
brew install wp-cli

# Install Ansible
# brew install ansible@2.9
sudo pip3 install 'ansible==2.9.7'

#Install Passlib
pip3 install passlib
# pip install passlib

# Install Composer
brew install composer

# Install Yarn
brew install yarn

# Install Virtualbox
brew install --appdir="/Applications" virtualbox@5.2

# Install Vagrant
brew install --appdir="/Applications" vagrant@2.2.9

# Install Vagrant Manager
# brew install --appdir="/Applications" vagrant-manager

# Repair Vagrant Plugins (to avoid incompatible versions)
vagrant plugin expunge --reinstall

# Install Atom
brew install --appdir="/Applications" atom

# Install iTerm2
brew install --appdir="/Applications" iterm2

# Install Github Desktop App
brew install --appdir="/Applications" github

# Install SVGO
npm install -g svgo
