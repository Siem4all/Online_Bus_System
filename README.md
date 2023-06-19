# Download and Installation
To download and use this project, follow these steps:

1. Click on the green "Code" button at the top of the repository page. 

2. Click on the "Download ZIP" option to download the project as a compressed ZIP file.

3. If you have not installed Composer yet, download and install it by following the instructions in the "Prerequisites" section below.

4. Download and install either <a href="https://www.apachefriends.org/download.html">xampp</a> or <a href="https://sourceforge.net/projects/wampserver/">wamp</a> server if you don't have any of them.

5. Extract the contents of the ZIP file to your xampp/htdocs or wamp/www folder.

5. Create database with the name odaabus and import the database/odaabus.sql file into it

6. Open a terminal or command prompt and navigate to the project directory

7. Run the command php artisan serve to start the Laravel development server.

8. Open your web browser and navigate to http://localhost:8000 to view the project.

9. Login credentials
  
   Admin
   email: admin@gmail.com
   
   Banker
   email:banker@gmail.com
   
   User
   email:user@gmail.com
   
   Password:12345678

10. Stripe Demo payment
   
      Name on Card:test
   
      Card Number:4242 4242 4242 4242
   
      CVC:234
   
      Expiration Month:09
   
      Expiration Year:2027

    # Prerequisites
Before you can run this PHP project, you need to have Composer installed on your system. Composer is a dependency manager for PHP that allows you to easily install and manage project dependencies.

To install Composer, follow these steps:

Go to the Composer website at https://getcomposer.org/download/ and download the Composer setup file for Windows.

Run the Composer setup file and follow the installation instructions. During the installation process, you will be prompted to select a PHP executable file and set up the PATH environment variable.

Once the installation is complete, open a new Command Prompt window and run the command composer. If Composer is installed correctly, you should see the Composer version and a list of available commands.

After installing Composer, you can use it to manage the dependencies of this PHP project by running the command composer install from the project directory in a Command Prompt window. This will install all the required packages and their dependencies.
