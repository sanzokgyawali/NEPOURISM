To run a NEPOURISM in XAMPP with a MySQL database import, follow these steps:

1. **Install XAMPP:**
   - Download and install XAMPP from the official website: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
   - Follow the installation instructions for your operating system.

2. **Start XAMPP:**
   - Start the XAMPP control panel and ensure that Apache and MySQL services are running.

3. **Create a Database:**
   - Open phpMyAdmin by going to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
   - Create a new database, if it doesn't already exist, by selecting the "Database" tab and entering a name for the new database.

4. **Import MySQL Database:**
   - Select the database you just created.
   - Choose the "Import" tab.
   - Click on "Choose File" to select the SQL file that contains your database structure and data.
   - Click "Go" to import the database.

5. **Place PHP File:**
   - Place your PHP file in the "htdocs" folder inside the XAMPP installation directory. This is the root folder for your local server.

6. **Access the PHP File:**
   - Open a web browser and go to [http://localhost/yourfilename.php](http://localhost/yourfilename.php) (replace "yourfilename.php" with the actual name of your PHP file).

7. **Update the Connection value in libs/model.php and admin/libs/model.php as well as adminsuper/libs/model.php:**
   - In your PHP file, ensure that the database connection details (host, username, password, and database name) are correctly configured. Here's a basic example:
class common{

	function __construct(){
		$this->con=new mysqli('localhost','root','','ggnepal');
		if ($this->con->connect_error) {
			die("Database Connection Error");
		}
	}
..........................
...........................

   

8. **Run the PHP File:**
   - Open a web browser and navigate to [https://localhost/nepourism] to run the client view.
   - For admin view navigate to [https://localhost/nepourism/admin] email as apple@gmail.com(Apple is our vendor who access his backend site) and password as zok
   - For SuperAdmin view navigate to [https://localhost/nepourism/adminsuper] to see the superadmin access whose credentials are 
	email sanzokgyawali123@gmail.com and password is zok. 

Ensure that you have replaced "your_database_name" with the actual name of your database. If there are any issues, check the error messages and update your PHP file or database configuration accordingly.