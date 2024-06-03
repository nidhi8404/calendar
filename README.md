# Event Calendar

## Overview
This project is a web-based event calendar application that allows users to register, log in, and manage their events. It features a user-friendly interface with FullCalendar for event management and PHP for backend functionality, including user authentication.

## Features
- User Registration and Login
- Add, Update, and Delete Events
- Interactive Calendar Interface
- Responsive Design with Bootstrap and Custom CSS

## Technologies Used
- HTML5
- CSS3
- JavaScript (jQuery, FullCalendar)
- PHP
- MySQL
- Bootstrap

## File Structure
- `index.php`: Main calendar interface
- `register.html`: Registration form
- `login.html`: Login form
- `register.php`: Processes registration
- `login.php`: Processes login
- `logout.php`: Handles logout
- `function.php`: Backend functions for event management
- `config.php`: Database connection settings
- `css/styles.css`: Custom styles

## Setup and Installation

### Prerequisites
- Web server (e.g., Apache)
- PHP 7.0 or higher
- MySQL
- Composer (for dependency management)

### Steps
1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/event-calendar.git
    cd event-calendar
    ```

2. **Set up the database**:
    - Create a MySQL database.
    - Run the following SQL script to create the necessary table:
      ```sql
      CREATE TABLE `users` (
        `user_id` int(11) NOT NULL AUTO_INCREMENT,
        `username` varchar(50) NOT NULL,
        `password` varchar(255) NOT NULL,
        PRIMARY KEY (`user_id`)
      );

      CREATE TABLE `events` (
        `event_id` int(11) NOT NULL AUTO_INCREMENT,
        `user_id` int(11) NOT NULL,
        `event_name` varchar(100) NOT NULL,
        `event_start_date` date NOT NULL,
        `event_end_date` date NOT NULL,
        PRIMARY KEY (`event_id`),
        FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`)
      );
      ```

3. **Configure the database connection**:
    - Open `config.php` and update the database credentials:
      ```php
      <?php
      $servername = "your_server_name";
      $username = "your_username";
      $password = "your_password";
      $dbname = "your_database_name";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      ?>
      ```

4. **Start the server**:
    - Make sure your web server is running (e.g., Apache or Nginx).
    - Place the project files in the web server's root directory (e.g., `htdocs` for XAMPP or `www` for WAMP).
    - Access the project via your browser: `http://localhost/event-calendar`

## Usage
1. **Register**:
    - Navigate to the registration page: `http://localhost/event-calendar/register.html`
    - Fill in the username and password, then submit.

2. **Login**:
    - Navigate to the login page: `http://localhost/event-calendar/login.html`
    - Enter your credentials and log in.

3. **Manage Events**:
    - Once logged in, you will be redirected to the calendar page.
    - Add, update, or delete events using the calendar interface.

