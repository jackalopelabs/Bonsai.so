#!/bin/bash

# Add First Paid Product
# Version 0.0.10
# Copyright (c) Mason Lawlor

# Update Bonsai Form: ID #1
# wp @development gf form update 1 --file='form-bonsai-product.json'
# wp @development gf form update 1 --file='./form-bonsai-sensei.json'

wp @development gf form create "Teacher: Basic Form"
wp @development gf form update 4 --file='./form-bonsai-sensei.json'
# Add User Notification Email
wp @development gf form notification create 1 --notification-json='{"name":"User Notification","event":"form_submission","to":"1","toType":"field","subject":"Welcome to Project Bonsai","message":"Hi, I am Mason.\r\n\r\nJust wanted to thank you for joining Project Bonsai. Your contribution will help us keep adding new additions each month.\r\n\r\nYou can find our two courses here:\r\n<ul>\r\n \t<li><a href=\"https:\/\/bonsai.jackalope.io\/course\/bonsai-masterclass\">Bonsai Masterclass<\/a><\/li>\r\n \t<li><a href=\"https:\/\/bonsai.jackalope.io\/course\/bonsai-speed-run\/\">Bonsai Speed Run<\/a><\/li>\r\n<\/ul>\r\nIf you`d like to make any recommendations for future courses, feel free to let me know how I can help.\r\n\r\nCheers,\r\n\r\nMason Lawlor\r\n\r\n<a href=\"https:\/\/jackalope.io\/\">Jackalope.io<\/a>\r\n\r\n<a href=\"https:\/\/instagram.com\/masoninthesis\">Follow me on Instagram<\/a>\r\n\r\n&nbsp;","from":"{admin_email}","fromName":"Project Bonsai","routing":null,"conditionalLogic":null,"disableAutoformat":false}'

# Create Enrollment Form: ID #
wp @development gf form import form-enrollment.json

# Create Pages for Rooms: ID  #19-23
wp @development post create --post_type=page --post_title="Bonsai" ./content/rooms/bonsai.html --post_status=publish
wp @development post create --post_type=page --post_title="Youtube" ./content/rooms/youtube.html --post_status=publish
wp @development post create --post_type=page --post_title="Instagram" ./content/rooms/instagram.html --post_status=publish
wp @development post create --post_type=page --post_title="Clubhouse" ./content/rooms/clubhouse.html --post_status=publish
wp @development post create --post_type=page --post_title="UE4" ./content/rooms/ue4.html --post_status=publish

# Create Pages for Groups: ID  #24-27
wp @development post create --post_type=page --post_title="Devs" ./content/groups/devs.html --post_status=publish
wp @development post create --post_type=page --post_title="3D" ./content/groups/3d.html --post_status=publish
wp @development post create --post_type=page --post_title="VR" ./content/groups/vr.html --post_status=publish
wp @development post create --post_type=page --post_title="Design" ./content/groups/design.html --post_status=publish


# Create Post Categories
wp @development term create category Bonsai --description="Posts related to the Bonsai room"
wp @development term create category Youtube --description="Posts related to the Youtube room"

# Create Lessons for Bonsai Speedrun: ID #28
wp @development post create --post_type=post --post_title="Start Here" ./content/rooms/bonsai.html --post_category=bonsai --post_status=publish
wp @development post create --post_type=post --post_title="Quick Setup" ./content/courses/speedrun/quick-setup.html --post_category=bonsai --post_status=publish
wp @development post create --post_type=post --post_title="Configuration" ./content/courses/speedrun/bonsai-config.html --post_category=bonsai --post_status=publish
wp @development post create --post_type=post --post_title="Create Local Environment" ./content/courses/speedrun/local.html --post_category=bonsai --post_status=publish
wp @development post create --post_type=post --post_title="Deploy Staging Environment" ./content/courses/speedrun/staging.html --post_category=bonsai --post_status=publish
wp @development post create --post_type=post --post_title="Deploy Production Environment" ./content/courses/speedrun/production.html --post_category=bonsai --post_status=publish

# Create Lessons for Bonsai Masterclass: ID #37-39
wp @development post create --post_type=post --post_title="Security" ./content/courses/masterclass/adv-config.html --post_category=bonsai --post_status=publish
wp @development post create --post_type=post --post_title="Create a Product" ./content/courses/masterclass/product.html --post_category=bonsai --post_status=publish
wp @development post create --post_type=post --post_title="Setup Sensei LMS" ./content/courses/masterclass/sensei.html --post_category=bonsai --post_status=publish


# Create Lessons for Bonsai: ID #
wp @development post create --post_type=post --post_title="Youtube: Start Here" ./content/rooms/youtube.html --post_category=youtube --post_status=publish
