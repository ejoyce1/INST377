Developers’ Manual (docs/developer_manual.md): The audience of this document is future developers who will take over the system. 

Libraries used:
The HTML and CSS uses Bootstrap classes for visual appearances.
Jquery is used for subtle but dynamic feedback from the website. 
Fil structure 
fpR2 zip Contains all and the only files needed for this application to run
All visual files viewable by the the browser are inside fpR2
All files used for processing and handling data are in the fpR2/includes folder
The SQL database for this file is in the general fpR2 folder and needs to be downloaded then imported into whatever server based database the developer is using (i.e. PhpMyAdmin, etc.)
Database structure
2 tables: Users (for groups) and When2Meet (for actual schedules)

//HOW TO USE IT ON YOUR MACHINE: 

DOWNLOAD AND FILE MANAGEMENT:
--Download the latest version of the fpR2.zip file.
--Upon downloading the file you will have to extract all the files to a location on your hard drive where you can access them. 
TIP: if you are using a local server (localhost or virtual machine [VM]), you may want to extract the files to the appropriate location for your server to access and run the files on a browser. 
In XAMPP it is the windows C:/xampp/htdocs folder. if you’re using a VM, it will likely be a www/root/ html folder. If you are using Amazon ec2 it will be the intetpub/root/www folder.
--When the file contents have been extracted, it is recommended to make a second copy of the untouched and untampered file contents to a separate backup location so that you 
do not have to redownload and unpack the zip every time you feel that you made a mistake and want to start from scratch.
--After making the second copy, return to the main copy you will be using

CONFIGURATION:
--When the files are downloaded and placed in your desired location you need to return to the main fpR2 directory where you will find a list of files and an includes folder.
--To ensure the web app can communicate with the database via your server you will need to go into the fpR2/includes folder and open the dbh.inc file. In this file you will find 
that it has variable where you must enter your localhost and database credentials. You must change some of these to suit your needs. In the You must change your $servername to 
whatever your servers name is, $DB_USER to whatever your database username is, and $DB_PASS to whatever your database password is.
SETTING UP DATABASE IN PhpMyAdmin:
--In the main fpR2 folder directory a file named collab_fpr2.sql; 
--Import this file into your PhpMyAdmin to create the database needed for data to be posted to the database and the login system to work. 
--Once this is done you should be able to access the database via the login system. There are preloaded rows of test data in the users table. 

DIRECTIONS TO USING THE APP:
--Group leaders sign up and create an account for the group
--All group members then use the above created login credentials to sign into the group account
--When group members are logged in they create a username so the group can identify them
--Group members must enter the correct group name for the app to work. They will receive an error message and be redirected if they do not type in the correct group. 
