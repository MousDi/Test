## Prerequisite
Install:

- Vagrant
- Virtualbox
- Composer

## Install Homestead into the project

In command:

1 enter 'cd my-project-name'<br/>
2 enter 'composer require laravel/homestead'<br/>
3 Add Sanctum library by entering 'composer require laravel/sanctum'<br/>
4 Generate Homestead.yaml. To do so :<br/>
  - on Windows, enter 'vendor\\bin\\homestead make'
  - on Linux/Mac, enter 'php vendor/bin/homestead make'

## Generate a private key

In command enter 'touch ~/.ssh/id_rsa' (It may ask you a password .Remember it as you may need it to run the project)


## Add a hosts entry to your machine
1 Open the hosts file located :
- On windows :  'C:/Windows/System32/drivers/etc/hosts'
- On Linux/Mac : '/etc/hosts'<br/>
2 Add a new entry at the bottom of the file , which is : 
  'my-ip homestead.test' (Change 'my-ip' with the ip adress present on the first line of the Homestead.yalm of the project)


## Run the project :
With the command , in your project enter :
1 'vagrant up'<br/>
2 'vagrant ssh' (If asked, enter the password you have indicated when generating the private key)

# Configure database

1 Go into the hosted project by entering 'cd code'<br/>
2 Create the tables by entering 'php artisan migrate'<br/>
3 Fill the tables with the seeds by entering 'php artisan db:seed'

# Open the project on browser 
To open the project in the browser URL enter : 'http://homestead.test/' OR 'my-ip' (Change 'my-ip' with the ip adress present on the first line of the Homestead.yalm of the project)