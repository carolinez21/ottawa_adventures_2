# ottawa_adventures_2

# **About**
Ottawa Adventures 2 is the updated version of a website built for the Prepr labs Full Stack Developer Challenge. It's a simple website that identifies things to do in Ottawa allowing users to build their own adventures. It also includes a sign up and login page built using PHP and blog post pages built with Node.js and MongoDB.

## **Setup**

Install MongoDB (https://www.mongodb.com/docs/manual/installation/):

`wget -qO - https://www.mongodb.org/static/pgp/server-5.0.asc | sudo apt-key add -`

`echo "deb [ arch=amd64,arm64 ] https://repo.mongodb.org/apt/ubuntu focal/mongodb-org/5.0 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-5.0.list`

`sudo apt-get update`

`sudo apt-get install -y mongodb-org`

Install a local server using xampp: https://www.apachefriends.org/index.html

Open xampp: 

`sudo /opt/lampp/manager-linux-x64.run`

Start the Apache and MySQL servers

Install Node.js (https://nodejs.org/en/download/):

`sudo apt install nodejs`

Install npm:

`sudo apt install npm`

Install project dependencies (this should be run within the ottawa_adventures_2 directory):

`npm install`

Start MongoDB:

`sudo systemctl start mongod`

Start the node server:

`npm run devStart`

That's it! Navigate to `http://localhost/ottawa_adventures_2/` to run the site!