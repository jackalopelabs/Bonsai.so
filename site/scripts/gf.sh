#!/bin/bash

# Activate theme and create starter content
# Version 0.0.10
# Copyright (c) Mason Lawlor

# Gravity Forms
###############

# Install GF Plugins
# wp @development gf install --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf install gravityformsadvancedpostcreation --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf install gravityformsmailchimp --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf install gravityformssendgrid --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf install gravityformsstripe --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf install gravityformsuserregistration --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @development gf license update 8621321e72cf1753826be6794c56e0ae

# Update GF Plugins
# wp @development gf update --key=8621321e72cf1753826be6794c56e0ae
# wp @development gf update gravityformsmailchimp --key=8621321e72cf1753826be6794c56e0ae
# wp @development gf update gravityformsslack --key=8621321e72cf1753826be6794c56e0ae
# wp @development gf update gravityformsstripe --key=8621321e72cf1753826be6794c56e0ae
# wp @development gf update gravityformsuserregistration --key=8621321e72cf1753826be6794c56e0ae
# wp @development gf update gravityformssendgrid --key=8621321e72cf1753826be6794c56e0ae

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

# Staging
#########

# Install GF Plugins
wp @staging gf install --key=8621321e72cf1753826be6794c56e0ae --activate
wp @staging gf install gravityformsadvancedpostcreation --key=8621321e72cf1753826be6794c56e0ae --activate
wp @staging gf install gravityformsmailchimp --key=8621321e72cf1753826be6794c56e0ae --activate
wp @staging gf install gravityformssendgrid --key=8621321e72cf1753826be6794c56e0ae --activate
wp @staging gf install gravityformsstripe --key=8621321e72cf1753826be6794c56e0ae --activate
wp @staging gf install gravityformsuserregistration --key=8621321e72cf1753826be6794c56e0ae --activate
# wp @staging gf license update 8621321e72cf1753826be6794c56e0ae

# Update GF Plugins
# wp @staging gf update --key=8621321e72cf1753826be6794c56e0ae
# wp @staging gf update gravityformsmailchimp --key=8621321e72cf1753826be6794c56e0ae
# wp @staging gf update gravityformsslack --key=8621321e72cf1753826be6794c56e0ae
# wp @staging gf update gravityformsstripe --key=8621321e72cf1753826be6794c56e0ae
# wp @staging gf update gravityformsuserregistration --key=8621321e72cf1753826be6794c56e0ae
# wp @staging gf update gravityformssendgrid --key=8621321e72cf1753826be6794c56e0ae
