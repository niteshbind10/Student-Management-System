# Student-Management-System
Overview
The Student Management System is a web application developed using PHP, JavaScript, CSS, and HTML5. It allows the admin to perform CRUD (Create, Read, Update, Delete) operations on student data. This project serves as a basic example of how to manage student information within a system and demonstrates key web development concepts and technologies.

**Features**
--> Admin Authentication: Secure login for admin users.
--> Student Management: Add, view, update, and delete student records.
--> Responsive Design: Accessible on various devices with a responsive design.
--> User Feedback: Provides success and error messages for user actions.

**Technologies Used**
--> Backend: PHP
--> Frontend: HTML5, CSS3, JavaScript
--> Database: MySQL
--> Styling: Custom CSS

**Project Structure**

StudentManagementSystem/
│
├── css/
│   └── login_style.css
│
├── js/
│   └── scripts.js
│
├── images/
│   └── detailsbg.jpg
│
├── connection.php
├── index.php
├── login.php
├── system.php
├── README.md
│
└── sql/
    └── database.sql
    
**Setup Instructions**
Prerequisites
--> PHP (version 7.4 or higher)
--> MySQL
--> A web server (e.g., Apache)
--> A web browser

Installation

Clone the Repository:

git clone https://github.com/yourusername/StudentManagementSystem.git
cd StudentManagementSystem
Database Setup:

Create a database named students_db in MySQL.
Import the provided SQL file to set up the required tables:
source sql/database.sql;
Configuration:

Update connection.php with your database credentials:
php
Copy code
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "student_management";
Run the Project:

Place the project folder in your web server's root directory (e.g., htdocs for XAMPP).
Open a web browser and navigate to http://localhost/StudentManagementSystem/.
Usage
Admin Login
1.Navigate to the login page (http://localhost/StudentManagementSystem/login.php).
2.Enter the admin credentials and click "Login".
3.Upon successful login, you will be redirected to the admin dashboard.
**Admin Dashboard**
--> Add Student: Fill in the student details and click "Add".
--> View Students: View the list of all students in the system.
--> Update Student: Click the "Edit" button next to a student record, modify the details, and save.
--> Delete Student: Click the "Delete" button next to a student record to remove it.

**Contributions**
Contributions are welcome! Please fork the repository and submit a pull request for review.

**License**
This project is licensed under the MIT License - see the LICENSE file for details.

Acknowledgements
<a href = "https://www.php.net/">PHP</a>
<a href = "https://www.mysql.com/">MySQL</a>

