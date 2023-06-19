# Download and Installation
To download and use this project, follow these steps:

1. Click on the green "Code" button at the top of the repository page. 

2. Click on the "Download ZIP" option to download the project as a compressed ZIP file.

3. If you have not installed Composer yet, download and install it by following the instructions in the "Prerequisites" section below.

4. Download and install xampp or wamp server by following the instructions in the "Prerequisites" section below if you have not downloaded and installed either of them.

5. Extract the contents of the ZIP file to your xampp/htdocs or wamp/www folder.

6. Create database with the name "odaabus" and import the database/odaabus.sql file into the database you created.

7. Open a terminal or command prompt and navigate to the project directory.

8. Run the command "php artisan serve" to start the Laravel development server.

9. Open your web browser and navigate to http://localhost:8000 to view the project.

10. Login credentials
  
   Admin
   email: admin@gmail.com
   
   Banker
   email:banker@gmail.com
   
   User
   email:user@gmail.com
   
   Password:12345678

11. Stripe Demo payment
   
      Name on Card:test
   
      Card Number:4242 4242 4242 4242
   
      CVC:234
   
      Expiration Month:09
   
      Expiration Year:2027

   # Prerequisites
Before you can run this PHP project, you need to have XAMPP or WAMP and Composer installed on your system.

To install XAMPP or WAMP, follow these steps:

1. Download the <a href="https://www.apachefriends.org/download.html"> XAMPP</a> or <a href="https://sourceforge.net/projects/wampserver/">WAMP</a> installer.

2. Run the installer and follow the installation instructions.

3. Start the Apache and MySQL services in XAMPP or WAMP.

To install Composer, follow these steps:

1. Download <a href="https://getcomposer.org/Composer-Setup.exe">Composer setup</a> .
2. Run the Composer setup  and follow the installation instructions. During the installation process, you will be prompted to select a PHP executable file and set up the PATH environment variable.

3. Once the installation is complete, open a new Command Prompt window and run the command composer. If Composer is installed correctly, you should see the Composer version and a list of available commands.
