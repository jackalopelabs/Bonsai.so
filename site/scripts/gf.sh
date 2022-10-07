#!/bin/bash

# Activate theme and create starter content
# Version 0.0.10
# Copyright (c) Mason Lawlor

# Gravity Forms
###############

# Install GF Plugins
# wp @development gf install --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @development gf install gravityformsadvancedpostcreation --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @development gf install gravityformsmailchimp --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @development gf install gravityformssendgrid --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @development gf install gravityformsstripe --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @development gf install gravityformsuserregistration --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @development gf license update xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

# Update GF Plugins
wp @development gf update --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
wp @development gf update gravityformsmailchimp --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
wp @development gf update gravityformsstripe --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
wp @development gf update gravityformsuserregistration --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
wp @development gf update gravityformssendgrid --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

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
# wp @staging gf install --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @staging gf install gravityformsadvancedpostcreation --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @staging gf install gravityformsmailchimp --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @staging gf install gravityformssendgrid --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @staging gf install gravityformsstripe --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @staging gf install gravityformsuserregistration --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @staging gf license update xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

# Update GF Plugins
# wp @staging gf update --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
# wp @staging gf install gravityformsadvancedpostcreation --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @staging gf update gravityformsmailchimp --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
# wp @staging gf update gravityformsslack --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
# wp @staging gf update gravityformsstripe --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
# wp @staging gf update gravityformsuserregistration --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
# wp @staging gf update gravityformssendgrid --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
