![doom_logo](https://github.com/L16H7N1N65/Project_serval_PHP_POO/assets/79063770/477b01ad-e6bc-4ddb-9cf1-74002b47cd78)

# Project Serval (PHP – OOP)

## First-Person Perspective Application

### Technologies Used:
- HTML
- CSS
- PHP
- MySQL

### Overview:
This project is an application that simulates a first-person perspective in a virtual environment, allowing a user to navigate through a museum, house, or dungeon. The application is built with PHP in an Object-Oriented Programming (OOP) paradigm and employs MySQL for database management.

### Components:
- **FirstPersonView**: Manages the display of images based on the user's position and perspective.
- **FirstPersonText**: Controls text display on the screen according to the user's position.
- **FirstPersonAction**: Enables interaction with the environment (picking up items, using objects).
- **BaseClass**: Parent class for all specialized classes, handles movement and image/text display.

### Database:
- **Tables**: "images", "map", "text", "actions", "items"
- **Structure**: Contains image and text data corresponding to map positions, and actions/items for interaction.

### Development Methodology:
1. Designing the Conceptual Data Model (CDM) for the database.
2. Creating the "fpview" database and relevant tables.
3. Developing the **Database** class to manage database connection.
4. Implementing autoload functionality to load classes.
5. Developing the HTML/CSS layout and basic navigation functionality.
6. Developing specialized classes for image, text, and action handling.
7. Refactoring code to adhere to the DRY principle.
8. Expanding database and classes to handle interaction with the environment.

## Execution:
To run the application:
1. Set up a web server (e.g., Apache) with PHP and MySQL.
2. Import the SQL script into your database.
3. Modify the database.php file with your database connection parameters.
4. Place the files in your web directory.
5. Access the application via your web browser.
