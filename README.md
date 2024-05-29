# Student-Management-System
Overview<br>
<p>
    The Student Management System is a web application developed using PHP, JavaScript, CSS, and HTML5. It allows the admin to perform CRUD (Create, Read, Update, Delete) operations on student data. This project serves as a basic example of how to manage student information within a system and demonstrates key web development concepts and technologies.
</p><br>

<b>Features</b><br>
<ul>
    <li>Admin Authentication: Secure login for admin users.</li>
    <li>Student Management: Add, view, update, and delete student records.</li>
    <li>Responsive Design: Accessible on various devices with a responsive design.</li>
    <li>User Feedback: Provides success and error messages for user actions.</li>
</ul><br>

<b>Technologies Used</b>
<ol>
    <li>Backend: PHP</li>
    <li>Frontend: HTML5, CSS3, JavaScript</li>
    <li>Database: MySQL</li>
    <li> Styling: Custom CSS</li>
</ol><br>

<b>Project Structure</b><br>
<p>
StudentManagementSystem/<br>
│<br>
├── css/<br>
│   └── login_style.css<br>
│<br>
├── js/<br>
│   └── scripts.js<br>
│<br>
├── images/<br>
│   └── detailsbg.jpg<br>
│<br>
├── connection.php<br>
├── index.php<br>
├── login.php<br>
├── system.php<br>
├── README.md<br>
│<br>
└── sql<br>
    └── database.sql<br>
    </p><br>
    
<b>Setup Instructions</b><br><br>
Prerequisites
<ol>
    <li>PHP (version 7.4 or higher)</li>
    <li>MySQL</li>
    <li>A web server (e.g., Apache)</li>
    <li>A web browser</li>
</ol><br>

Installation<br><br>

Clone the Repository:<br><br>

git clone https://github.com/yourusername/StudentManagementSystem.git<br>
cd StudentManagementSystem<br><br>
Database Setup:<br>

Create a database named students_db in MySQL.<br>
Import the provided SQL file to set up the required tables:<br>
source sql/database.sql;<br><br>
Configuration:<br>

Update connection.php with your database credentials:<br>
<p>
$servername = "localhost";<br>
$username = "your_db_username";<br>
$password = "your_db_password";<br>
$dbname = "student_management";<br>
Run the Project:<br>

Place the project folder in your web server's root directory (e.g., htdocs for XAMPP).<br>
Open a web browser and navigate to http://localhost/StudentManagementSystem/.<br>
</p><br><br>

<b>Usage</b><br>
<b>Admin Login<b>
<ol>
    <li>Navigate to the login page (http://localhost/StudentManagementSystem/login.php).</li>
    <li>Enter the admin credentials and click "Login".</li>
    <li>Upon successful login, you will be redirected to the admin dashboard.</li>
    <li> Styling: Custom CSS</li>
</ol><br>

<b>Admin Dashboard</b><br>
<ul>
    <li>Add Student: Fill in the student details and click "Add".</li>
    <li>View Students: View the list of all students in the system.</li>
    <li>Update Student: Click the "Edit" button next to a student record, modify the details, and save.</li>
    <li>Delete Student: Click the "Delete" button next to a student record to remove it.</li>
</ul><br>

<b>Contributions</b><br>
Contributions are welcome! Please fork the repository and submit a pull request for review.<br>

<b>Acknowledgements</b><br>
<a href = "https://www.php.net/">PHP</a><br>
<a href = "https://www.mysql.com/">MySQL</a>

