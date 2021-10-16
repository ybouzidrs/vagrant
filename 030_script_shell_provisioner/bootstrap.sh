# Update packages
apt-get update
# Upgrade packages
apt-get upgrade

# Install Apache
apt-get install -y apache2

# Install docker
apt-get install -y docker.io

# Enable docker service
sudo systemctl enable docker.service
# Start docker service
sudo systemctl start docker.service
# Check docker status
sudo systemctl status docker.service

# Run apache container
sudo docker run -d -p 8080:80 --name httpd httpd