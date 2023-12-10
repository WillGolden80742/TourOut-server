# Tourist Guide App Server for Visually Impaired

This repository contains the PHP server code responsible for providing data for the "Tourist Guide for Visually Impaired" mobile application.

## About the Server

The server is developed in PHP and provides a REST API for the mobile application to communicate and obtain necessary data about tourist attractions.

It interfaces with a MySQL database that stores information such as:

- Name and ID of tourist attractions
- Geographical coordinates (latitude and longitude)
- Text and audio descriptions

## Features

The main provided functionalities include:

- Textual search for tourist attractions by name
- Retrieval of description and audio by tourist attraction ID
- Customized error messages or permission requests

## Technologies Used

- PHP language with object-oriented programming
- MySQL
- MVC pattern with Models, Views, and Controllers
- JSON for serialization and response returns

## Configuration

- Import the provided MySQL database
- Configure connection parameters in the ConnectionFactory file
- Ensure that the referenced audio folder exists

## Usage

The API can be consumed through HTTP GET requests with the necessary parameters.

Examples:

```
// Search text by name
http://server/monuments.php?name=museum

// Search description by ID
http://server/audioDescription.php?idDocument=35

// Search audio description by ID
http://server/audioDescriptionName.php?idDocument=35
```

## License

[MIT](https://choosealicense.com/licenses/mit/)
