[![Bonsai Screenshot](https://bonsai.so/app/uploads/2022/10/screenshot-1.png)](https://bonsai.so)
# Bonsai

[Bonsai](https://bonsai.so) is a secure and modern Wordpress stack.

**The goal:** To simplify the process of building a Roots Wordpress site with a streamlined configuration with a corresponding [tutorial videos](https://bonsai.so/bonsai-quick-setup/).

Bonsai is a custom configuration of [Wordpress](https://wordpress.org/), [Roots](https://roots.io/), [Trellis](https://roots.io/trellis), [Bedrock](https://roots.io/bedrock), [Sage](https://roots.io/sage), [Bootstrap](https://getbootstrap.com/) and other open source projects.

Use Bonsai to apply for billions of dollars of web3 grants. Find a list of the top 25 grants, and application templates [here](https://bonsai.so/resources).
Watch the video: [Steal My dApp, I Dare You - Get paid to learn web3](https://youtu.be/IQvjojf65dg)

### Tutorial
Official Tutorial: [Bonsai Quick Setup] (https://bonsai.so/bonsai-quick-setup/)

Trello board (Deprecated since v0.0.1): [Speed Run](https://trello.com/invite/b/gtpcYNvC/961d55ce28eeb7a573be8914df41c797/bonsai-speed-run)

For up to date docs, courses, and video tutorials on creating a Bonsai project from scratch, go to  the [official website](https://bonsai.so) or our [Youtube channel](https://www.youtube.com/user/JackalopeMedia/).

# Quick Setup

We're going to take a few minutes to setup all the requirements to ensure that deploying Project Bonsai goes smoothly:

Don't forget to move Bonsai from your downloads folder into your `~/Sites` directory.

> OR

To download with the command line, run:
 `cd ~/sites` and `git clone https://github.com/jackalopeio/Bonsai.so.git`

Removed the `.git` file:
Run: `cd Bonsai.so & rm -rf .git`

## Requirements

### Create SSH Keys

 - To use [OpenSSH](https://www.digitalocean.com/docs/droplets/how-to/add-ssh-keys/create-with-openssh/), open terminal and run: `ssh key-gen`
 - Add public SSH key [to Github](https://github.com/settings/ssh/new)
 - Add public SSH key [to DigitalOcean](https://cloud.digitalocean.com/account/security)

### Install Requirements
**Shell Script:** If you're going to run Bonsai/site/scripts/requirements.sh for installation, don't forget to set permissions by running:
`cd ~/sites/Bonsai.so/site/scripts && chmod -R 777 .`

 - [Install xcode dev tools](https://developer.apple.com/xcode/): `xcode-select --install`
 - [Update to PHP >=7.2](https://jasonmccreary.me/articles/upgrade-php-mac-os-x/)
 - [Homebrew](https://brew.sh/): `/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"`
 - [Node](https://nodejs.org/en/download/): `brew install nvm`
 - [Ansible](https://hvops.com/articles/ansible-mac-osx/): `brew install ansible`
 - [Composer](https://getcomposer.org/download/): `brew install composer`
 - [Yarn](https://classic.yarnpkg.com/en/docs/install#mac-stable): `brew install yarn`
 - [Virtualbox](https://www.virtualbox.org/wiki/Downloads): `brew cask install --appdir="/Applications" virtualbox`
 - [Vagrant](https://www.vagrantup.com/downloads.html): `brew cask install --appdir="/Applications" vagrant`
 - [Vagrant Manager](https://github.com/lanayotech/vagrant-manager/releases): `brew cask install --appdir="/Applications" vagrant-manager`

 Optional:
 - [Atom](https://atom.io/): `brew cask install --appdir="/Applications" atom`
 - [iTerm2](https://www.iterm2.com/): `brew cask install --appdir="/Applications" iterm2`
 - Github Desktop App: `brew cask install --appdir="/Applications" github-desktop`

>## First, Check
>If you're recreating a project, you may want to check these things just to be sure:
> - Remove unnecessary Virtualbox machines
> - Clear: `~/.ssh/known_hosts` file of any duplicates or old hosts
> - Clear: `~/../../etc/hosts` file of any duplicates or old hosts

# Servers

By default, we use DigitalOcean base Ubuntu servers for Project Bonsai.

### Nameservers:
First, you'll want to make sure that your Domain Registrant points towards [DigitalOcean](https://www.digitalocean.com/community/tutorials/how-to-point-to-digitalocean-nameservers-from-common-domain-registrars).

 - `ns1.digitalocean.com`
 - `ns2.digitalocean.com`
 - `ns3.digitalocean.com`

### Create Droplets:
Create two base Ubuntu DigitalOcean Droplets. Link them to your SSH key.
- Staging-Droplet
- Production-Droplet

### Setup DNS:

 - Go to DigitalOcean's Dashboard > Networking
 - Add new domain or click on existing one
 - A Record: www.subdomain.domain.com
 - A Record: subdomain.domain.com
 - CNAME: *.subdomain.domain.com

### Configure etc/hosts:
Add IP and domains to `etc/hosts`, run: `sudo vim ~/../../etc/hosts`
```
111.11.111.111 subdomain.example.com
555.55.555.555 example.com www.example.com
```
### Configure ~/.ssh/config:
Add IP and hostname to `~/.ssh/config`, run: `sudo vim ~/.ssh/config`
```
Host bonsai-staging
        HostName 111.11.111.11
        Port 22
        User root
        IdentityFile ~/.ssh/id_rsa

Host bonsai-production
        HostName 555.55.555.555
        Port 22
        User root
        IdentityFile ~/.ssh/id_rsa
```
### Test SSH Connection:
Make sure that your SSH connections are working by SSH'ing into the servers:

 - Staging, run: `ssh root@subdomain.example.com`
 - Production, run: `ssh root@example.com`

# Configure Bonsai
- Create Github Repository
- Configure Trellis/group_vars
- Configre Trellis/hosts
- Configure Security (See Bonsai masterclass for security instructions)
- Configure site/wp-cli.yml
- Configure site/scripts

Official Tutorial: [Bonsai Configuration] (https://bonsai.so/bonsai-config/)

# Create Local Environment
Set Permissions:
- Run: `cd ~/sites/Bonsai/site/scripts && chmod -R 777`

Deploy Local Environment:
Run: `cd ~/sites/Bonsai/site/scripts && ./development.sh`

Official Tutorial: [Deploy Local Environment] (https://bonsai.so/bonsai-create-local-environment/)

#Deploy Staging Environment
- Commit and Publish to Github
- Check and verify DNS has propagated
- Run: `cd ~/sites/bonsai/site/scripts && ./staging.sh`

If you have any permission errors running the script, you need to give your scripts permission. Run: `cd ~/sites/Bonsai/site/scripts && chmod -R 777`

Official Tutorial: [Deploy Staging Environment] (https://bonsai.so/bonsai-deploy-staging-environment/)

#Deploy Production Environment
- Run: `cd ~/sites/bonsai/site/scripts && ./production.sh`

If you have any permission errors running the script, you need to give your scripts permission. Run: `cd ~/sites/Bonsai/site/scripts && chmod -R 777`

Official Tutorial: [Deploy Staging Environment] (https://bonsai.so/bonsai-deploy-staging-environment/)

Additional Tutorials:

Trello board: [Speed Run](https://trello.com/invite/b/gtpcYNvC/961d55ce28eeb7a573be8914df41c797/bonsai-speed-run)

Roots Trellis Docs: [The Basics](https://docs.roots.io/trellis/master/wordpress-sites/)

For a video tutorial on creating a Bonsai project from scratch, go to  the [official website](https://bonsai.so) or our [Youtube channel](https://www.youtube.com/user/JackalopeMedia/).
