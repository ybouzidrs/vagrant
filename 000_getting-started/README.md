# Getting started with Vagrant

## Vagrant First Lab

This is the first lab with Vagrant.
We will go through the following steps in order to get started with Vagrant

1. Downaload and install Vagrant from Hashicorp official sources: https://www.vagrantup.com/downloads
2. Downaload and install Virtualbox from Oracle VirtualBox website: https://www.virtualbox.org/wiki/Downloads
    * **Do not forget to disable secure boot!**
3. Carefully check the content of the Vagrantfile
4. Remove the Vagrantfile
    > rm -rf Vagrantfile
5. Create your first Vagrant environment, this will lead to creating a generic Vagrantfile
    > vagrant init
6. Start/Provision your first Vagrant environment
    > vagrant up

## Vagrant Commands
* vagrant init: Initializes the current directory to be a Vagrant environment by creating a Vagrantfile
* vagrant up: Creates and configures guest machines according to your Vagrantfile
* vagrant destroy: Stops the running and destroys all resources that were created
* vagrant validate: Validates your Vagrantfile
* vagrant provision: Runs any configured provisioners
* vagrant reload: Runs a halt followed by an up
* vagrant status: This will tell you the state of the machines
* vagrant ssh: SSH into a running Vagrant machine