# A Vagrantfile to set up three VMs, two webservers, and a database server.
Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/xenial64"
  config.vm.define "webserver1" do |webserver1|
    webserver1.vm.hostname = "webserver1"
    webserver1.vm.network :forwarded_port, guest: 80, host: 8080, host_ip: "127.0.0.1", id: "webserver1"
    webserver1.vm.network :private_network, ip: "192.168.2.11"
    webserver1.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    webserver1.vm.provision :shell, :path => ".provision/bootstrap_webserver_1.sh"
  end
  config.vm.define "dbserver" do |dbserver|
    dbserver.vm.hostname = "dbserver"
    dbserver.vm.network :private_network, ip: "192.168.2.12"
    dbserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    dbserver.vm.provision :shell, :path => ".provision/bootstrap_dbserver.sh"
  end
  config.vm.define "webserver2" do |webserver2|
    webserver2.vm.hostname = "webserver2" 
    webserver2.vm.network :forwarded_port, guest: 80, host: 8081, host_ip: "127.0.0.2", id: "webserver2"
    webserver2.vm.network :private_network, ip: "192.168.2.13"
    webserver2.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    webserver2.vm.provision :shell, :path => ".provision/bootstrap_webserver_2.sh"
  end
end