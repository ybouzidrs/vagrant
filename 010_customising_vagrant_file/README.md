# Vagrant Second Lab

## Customising a Vagrantfile

1. Box Settings
    > config.vm.box = "ubuntu/focal64"
2. Provider Settings
    ```
    config.vm.provider "virtualbox" do |vb|
        vb.gui = true
        vb.name = "serguy.box"
        vb.memory = 1024
        vb.cpus = 2
    end
3. Network Settings
    ```
    config.vm.network "forwarded_port", guest: 80, host: 8888
    config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
    config.vm.network "private_network", ip: "172.17.2.10"
