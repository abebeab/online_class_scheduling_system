
# Online Class Scheduling System

## Overview

The **Online Class Scheduling System** is a **web-based application** designed to automate the scheduling process for classes at Highland Injibara campus. The system allows administrators to easily schedule classes, assign instructors, and manage classrooms. The system ensures that no scheduling conflicts occur, and provides a user-friendly interface for students and faculty to view the schedules.

---

## Features

- **Automated Scheduling**: Allows admins to schedule courses, assign instructors, and allocate classrooms.
- **Conflict-Free Scheduling**: Ensures no overlapping classes for instructors and classrooms.
- **Easy Search**: Enables students and faculty to easily search and view class schedules.
- **Admin Interface**: Provides an intuitive admin panel to manage courses, instructors, rooms, and schedules.
- **Database Integration**: Stores all data related to courses, instructors, rooms, and schedules in a MySQL database.

---

## Technologies Used

- **Client-Side**: HTML, CSS, JavaScript
- **Server-Side**: PHP
- **Web Server**: Apache (via XAMPP or WAMP)
- **Database**: MySQL
- **Database Management**: phpMyAdmin or MySQL Command Line
- **Code Editor**: Visual Studio Code (VS Code)
- **Browsers**: Google Chrome

---

## Installation Guide

### Prerequisites

1. **XAMPP/WAMP** installed on your local machine to run Apache and MySQL.
2. **Visual Studio Code** (or any other code editor) to edit and manage the files.

### Steps to Set Up the Project

1. **Clone the Repository**:

   Clone the repository to your local machine using the following command:

   ```bash
   git clone https://github.com/abebeab/online_class_scheduling_system.git
   ```

2. **Set Up XAMPP/WAMP**:

   - If you're using **XAMPP**: Open the **XAMPP Control Panel** and start both **Apache** and **MySQL** services.
   - If you're using **WAMP**: Open the **WAMP** application and ensure both **Apache** and **MySQL** are running.

3. **Create the Database**:

   Open **phpMyAdmin** or use the **MySQL Command Line** tool, and create the database named `css`:

   ```sql
   CREATE DATABASE css;
   ```

4. **Import the Database File**:

   - Navigate to the **css.sql** file located at:

     ```
     C:\xampp\htdocs\online_class_scheduling_system\db\css.sql
     ```

   - Open **phpMyAdmin** and select the `css` database.
   - Click on the **Import** tab and upload the **css.sql** file.

     Alternatively, if you're using the **MySQL command line** tool, run the following command:

     ```bash
     mysql -u root -p css < C:\xampp\htdocs\online_class_scheduling_system\db\css.sql
     ```

   This will create the necessary tables and insert sample data into the `css` database.

5. **Configure Database Connection**:

   Open the **`dbcon.php`** file (located in the project directory) and set the correct database connection details:

   ```php
   $servername = "localhost"; // Default for local server
   $username = "root";        // Default MySQL username
   $password = "";            // Default MySQL password (empty for XAMPP)
   $dbname = "css";           // Name of the database
   ```

6. **Access the Application**:

   - Open your web browser and navigate to:

     ```
     http://localhost/online_class_scheduling_system
     ```

   You should now be able to see the **Online Class Scheduling System** running locally.

---

## Database Schema (css.sql)

The **css.sql** file contains SQL queries to set up the following tables:

- **courses**: Stores information about courses (course name, department).
- **instructors**: Stores instructor details (name, email).
- **rooms**: Stores information about rooms (room name, capacity).
- **schedules**: Stores the actual schedule data, linking courses, instructors, and rooms.

Example tables:

#### Courses Table:

```sql
CREATE TABLE IF NOT EXISTS courses (
    course_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL,
    department VARCHAR(255) NOT NULL
);
```

#### Instructors Table:

```sql
CREATE TABLE IF NOT EXISTS instructors (
    instructor_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE
);
```

#### Rooms Table:

```sql
CREATE TABLE IF NOT EXISTS rooms (
    room_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    room_name VARCHAR(255) NOT NULL,
    capacity INT(11) NOT NULL
);
```

#### Schedules Table:

```sql
CREATE TABLE IF NOT EXISTS schedules (
    schedule_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    course_id INT(11) NOT NULL,
    instructor_id INT(11) NOT NULL,
    room_id INT(11) NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    day_of_week VARCHAR(10) NOT NULL,
    semester VARCHAR(50) NOT NULL,
    year INT(4) NOT NULL,
    FOREIGN KEY (course_id) REFERENCES courses(course_id),
    FOREIGN KEY (instructor_id) REFERENCES instructors(instructor_id),
    FOREIGN KEY (room_id) REFERENCES rooms(room_id)
);
```

---

## Folder Structure

```
/online_class_scheduling_system
    /img                   # Images used in the system
    /admin                 # Admin panel for managing schedules and users
    /db                    # Database connection files
    index.php              # Main page of the system
    schedule.php           # Page for viewing class schedules
    help.php               # Help page for users
    preview.php            # Preview of class schedules
    footer.php             # Footer for the page
    header.php             # Header for the page
    dbcon.php              # Database connection file
    styles.css             # CSS file for styling the application
    db.sql                 # SQL file for creating the database and tables
    ...
```

---

## Usage

### Admin Panel:

The **admin panel** allows administrators to:

- Add courses and instructors.
- Assign rooms and schedules to courses.
- View, update, and remove schedules to prevent conflicts.

### Searching & Viewing Schedules:

Students and faculty can:

- Search for courses and view class schedules.
- Check for available rooms and instructors.
- View schedules based on the semester and year.

---

## Contributing

If you'd like to contribute to the project, follow these steps:

1. **Fork** the repository to your GitHub account.
2. **Create a new branch** for your feature or fix:

   ```bash
   git checkout -b feature-name
   ```

3. **Commit** your changes:

   ```bash
   git commit -am 'Add new feature'
   ```

4. **Push** your changes to your forked repository:

   ```bash
   git push origin feature-name
   ```

5. **Open a pull request** to the main repository.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Conclusion

This **README.md** file outlines the installation, database setup, and usage instructions for the **Online Class Scheduling System**. 

---

This version includes the correct path for the **css.sql** file and specific instructions for importing the database file. 
