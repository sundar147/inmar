# Fruit Bucket

INTRODUCTION:

**This application is the platform for Retailers and buyers. Retailers can sell their fruits online and buyers can be able to buy them.**

PREREQUISITES or SOFTWARES
->Install XAMPP software to run your application using the link
   for eg; apachefriends.org/download.html
->Create database with name inmar
->Dump the database of retailers and buyers  to get the information using sql file named as "inmar(1).sql" .
->Create database regarding fruits information 
    for eg;foodadda.sql .

PROCEDURE
->Directories are dumped into xampp/htdocs with project folder for eg;sundar/inmar .
->Home page of the project is named as index.php
->Open browser and run the server using xampp by giving url as 
for eg;localhost/sundar/inmar/index.php
#index.php is the home page of the project.it will display the menu of the project.
->Menu containing fields like Home,Sign UP,Login & AboutUs.
->SignUp will direct you to the file "signup1.php" to continue registration either for retailer or buyer.
->Login will direct you to the file "login1.php" to continue registration either for retailer or buyer.
->AboutUs will give the details about the designer.

//RETAILER DETAILS
->Retailer signup into the system using link as below
for eg;"retailer_registration.php"
#retailer_registration gives the registration page of the seller.
->Retailer login into the system using link as login
for eg;"ret_login.php"
#retailer can login by giving credentials regarding email and password.
->After entering the details database checks email and password using file
for eg;"ret_login_check.php"
->Database connection of ret_login_check is using the file
foreg;"Ret-Register.php"
->Database connectivity is given in the file as
for eg;"retailer_dashboard.php"
->seller can see the dashboard by using link as below 
for eg;"jsontojquery.php"
->fruits are added by the seller using php file as
for eg;"add_fruit_information.php"
->fruits information is reteived from the server using php file as
for eg;"get_fruit_information.php"
->fruits are delted by the seller using file as
for eg;"delete_fruit_information.php"
->fruits are updated using php file as
for eg;"update_fruit_information.php"
->To get the money from wallet retailer use server connection using a file 
for eg;"get_wallet_monet_ret.php"
->To update the profile of retailers dashboard by using file  
for eg;"ret_updateprofile.php"
->Server connection to update the retailer dashboard using file
for eg;"ret_updateprofile_server.php"


//BUYER DETAILS
->Buyer signup into the system using link as customer
for eg;"buyer_register.php"
#buyer_registration gives the registration page of the customer.
->Buyer login into   the system using link as login
for eg;"buy_login.php"
#Buyer can login by giving credentials regarding email and password.
->Database connectivity is given in the file as
for eg;"buy_register.php"
->customer can see the dashboard by using link as
for eg;"buyerdashboard.php"
->To get the money from wallet buyer use server connection using a file 
for eg;"get_wallet_monet_buy.php"


//SUB-DIRECTORIES
->[css] - Styles for the project are given in css folder.
->[img] - images regarding webpages are given in img folder.
->[js]  - javascripts for validations and jqueries are given in js folder.



