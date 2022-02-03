#!/bin/bash

# Activate theme and create starter content
# Version 0.0.10
# Copyright (c) Mason Lawlor

# Clean DB
wp @development db clean

# Composer install Wordpress and Plugins
cd ..
composer install
# composer update

# Vagrant Up
cd ../trellis
# vagrant up
cd ../site

# Install \ Theme
cd web/app/themes/bonsai
yarn

# Might not need yarn build and composer install
yarn build
yarn build:production
composer install
cd ../../../..

# Install WP CORE
wp @development core install --url=bonsai.so --title=Bonsai_App --admin_user=masoninthesis --admin_password=admin --admin_email=mason@jackalope.io
# Activate theme, create pages, and config reading settings
wp @development theme activate bonsai/resources
wp @development plugin activate --all

# Delete Posts
wp @development post delete 1 --force

# Create Pages
wp @development post update 2 --post_type=page --post_title=Home --post_status=publish --page_template='views/template-home.blade.php'
wp @development post create --post_type=page --post_title=App --post_status=publish --page_template='views/template-app.blade.php'
wp @development post create --post_type=page --post_title=Blog --post_status=publish --page_template='views/template-blog.blade.php'
wp @development post create --post_type=page --post_title=Checkout --post_status=publish --page_template='views/template-checkout.blade.php'
wp @development post create --post_type=page --post_title=Dashboard --post_status=publish --page_template='views/template-dashboard.blade.php'
wp @development post create --post_type=page --post_title=Docs --post_status=publish --page_template='views/template-docs.blade.php'
wp @development post create --post_type=page --post_title=Events ./content/events.html --post_status=publish
wp @development post create --post_type=page --post_title="Enrollment" ./content/enrollment.html --post_status=publish --page_template='views/template-enrollment.blade.php'
wp @development post create --post_type=page --post_title=TV --post_status=publish
wp @development post create --post_type=page --post_title="Pre-Seed" --post_status=publish --page_template='views/template-preseed.blade.php'


# Create Posts
wp @development post create --post_type=post --post_title="Read Me" ./content/readme.html --post_status=publish --post_author=1

# Wordpress Settings
wp @development option update blogname "Bonsai.so"
wp @development option update blogdescription "The Virtual Campus"
wp @development option update admin_email mason@jackalope.io
wp @development user update 1 --user_pass=admin
wp @development option update show_on_front "page"
wp @development option update page_on_front 2
wp @development option update page_for_posts 9
wp @development rewrite structure '/%postname%/'

# Gravity Forms
###############

# Install GF Plugins
wp @development gf install --key=8621321e72cf1753826be6794c56e0ae --activate
wp @development gf install gravityformsadvancedpostcreation --key=8621321e72cf1753826be6794c56e0ae --activate
wp @development gf install gravityformsmailchimp --key=8621321e72cf1753826be6794c56e0ae --activate
wp @development gf install gravityformssendgrid --key=8621321e72cf1753826be6794c56e0ae --activate
wp @development gf install gravityformsstripe --key=8621321e72cf1753826be6794c56e0ae --activate
wp @development gf install gravityformsuserregistration --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf license update 8621321e72cf1753826be6794c56e0ae

# Update GF Plugins
# wp @development gf update --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf update gravityformsadvancedpostcreation --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf update gravityformsmailchimp --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf update gravityformssendgrid --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf update gravityformsstripe --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf update gravityformsuserregistration --key=8621321e72cf1753826be6794c56e0ae --activate

# Create Bonsai Form: ID 1
# wp @development gf form create "Bonsai Form"
# Email Address
# wp @development gf field create 1 --field-json='{"type": "email", "label": "Email", "isRequired": true, "size": "medium", "placeholder": "Email address.."}'

# Create Question Form: ID 2
# wp @development gf form create "Question Form"
# Name
# wp @development gf field create 2 --field-json='{"type": "textarea", "label": "Question", "isRequired": true, "placeholder": "What is your question?", "size": "medium"}'
# Email Address
# wp @development gf field create 2 --field-json='{"type": "email", "label": "Email", "isRequired": true, "size": "medium", "placeholder": "Email address.."}'
