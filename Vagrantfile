MAIN_IMAGE = "ubuntu/xenial64"

Vagrant.configure("2") do |config|
  config.vm.define "node1_main" do |subconfig|
    subconfig.vm.box = MAIN_IMAGE;
    #subconfig.vm.network :forwarded_port, guest: 80, host: 8080, id: "nginx"
    subconfig.vm.hostname = "main"
    subconfig.vm.network :private_network, ip: "10.0.0.10"
    subconfig.vm.provision :shell, :path => ".provision/bootstrap.sh"
  end

  config.vm.define "node2_mysql" do |subconfig|
    subconfig.vm.box = MAIN_IMAGE;
    subconfig.vm.hostname = "mysql"
    subconfig.vm.network :private_network, ip: "10.0.0.20"
  end

  config.vm.define "node3_noidea" do |subconfig|
    subconfig.vm.box = MAIN_IMAGE;
    subconfig.vm.hostname = "noidea"
    subconfig.vm.network :private_network, ip: "10.0.0.30"
  end
  
  # installing provisions on all machines
  config.vm.provision "shell", inline: <<-SHELL
    sudo apt_get -y update
    sudo apt-get install -y avahi-daemon libnss-mdns
  SHELL
end