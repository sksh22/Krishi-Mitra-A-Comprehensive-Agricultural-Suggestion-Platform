## Krishi-Mitra-A-Comprehensive-Agricultural-Suggestion-Platform
### Project Overview
Krishi Mitra is a web-based application designed to provide agricultural suggestions to farmers. The platform allows users to add, search, update, and delete suggestions related to various farming activities, including crop choices, season-based advice, and area-specific recommendations. This project aims to support farmers by providing a centralized database of valuable farming tips and practices.
### Features
#### 1. Home Page:
- Welcoming interface with options to add a new suggestion or search for existing suggestions.
- Background image of a rural farmer using a laptop to create a relatable and engaging interface.
#### 2. Add Suggestion Page:
- Form to input new suggestions including name, pincode, area, season, crop, and detailed suggestion.
- Options to save, update, or delete suggestions.
- Backend PHP script to handle form submissions and perform database operations (insert, update, delete).
#### 3. Search Suggestions Page:
- Form to search suggestions based on pincode.
- Display results matching the entered pincode or show a message if no data is found.
- Backend PHP script to fetch and display data from the database based on the pincode input.

### Technology Stack
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL
- Web Server: Apache (typically as part of XAMPP or WAMP)

### Files and Structure
- main.php: The main landing page with navigation to other features.
- suggestion.php: Handles both the form submission for searching suggestions by pincode and displaying the results.
- example.php: Handles form submissions for adding, updating, or deleting suggestions.

### Detailed Description of Files
#### main.php
The main landing page of the application. It features two forms that direct users to different functionalities:

- Add Your Suggestion: Redirects to example.php to submit new suggestions.
- Search for Suggestions: Redirects to suggestion.php to search existing suggestions by pincode.
#### example.php
Handles form submissions for adding, updating, and deleting suggestions. It connects to the database, executes the appropriate query based on the form action, and provides feedback to the user.
#### suggestion.php
This page allows users to search for suggestions based on pincode. It displays the results if found, otherwise it shows a "no data found" message.

### How to Set Up and Run

#### 1. Clone the Repository:
git clone https://github.com/sksh22/Krishi-Mitra-A-Comprehensive-Agricultural-Suggestion-Platform.git

cd krishi-mitra

#### 2. Set Up the Database:
- Create a MySQL database named 'sakshi'.
- Create a table with the following structure:
  CREATE TABLE `table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `area` varchar(255) DEFAULT NULL,
  `season` varchar(255) DEFAULT NULL,
  `crop` varchar(255) DEFAULT NULL,
  `suggestion` text,
  PRIMARY KEY (`id`)
);

#### 3. Configure the Server:
- Ensure you have Apache and PHP installed (use XAMPP or WAMP for ease).
- Place the project files in the htdocs directory (or equivalent for your server setup).

#### 4. Run the Application:
- Open your web browser and navigate to 'http://localhost/krishi-mitra/main.php'.
