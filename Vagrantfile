VM_VERSION = "ubuntu/xenial64"

Vagrant.configure("2") do |config|

  config.vm.box = VM_VERSION;
  
  config.vm.define "webserver1" do |webserver1|
    webserver1.vm.network :forwarded_port, guest: 80, host: 8080, host_ip: "127.0.0.1", id: "webserver1"
    webserver1.vm.hostname = "webserver1.local" 
    webserver1.vm.network :private_network, ip: "10.0.0.10"
    webserver1.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    webserver1.vm.provision :shell, :path => ".provision/bootstrap_webserver_1.sh"
  end

  config.vm.define "dbserver" do |dbserver|
    dbserver.vm.network :forwarded_port, guest: 3306, host: 3306, id: "dbserver"
    dbserver.vm.hostname = "dbserver.local"
    dbserver.vm.network :private_network, ip: "10.0.0.20"
    dbserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    dbserver.vm.provision :shell, :path => ".provision/bootstrap_dbserver.sh"
  end

  config.vm.define "webserver2" do |webserver2|
    webserver2.vm.network :forwarded_port, guest: 80, host: 8081, host_ip: "127.0.0.2", id: "webserver2"
    webserver2.vm.hostname = "webserver2.local" 
    webserver2.vm.network :private_network, ip: "10.0.0.30"
    webserver2.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    webserver2.vm.provision :shell, :path => ".provision/bootstrap_webserver_2.sh"
  end
  
end