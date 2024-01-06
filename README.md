# Raketech Code Challenge

## Overview
This repository contains a web application developed for the Raketech Code Challenge. It displays a list of countries along with their flags, using a Laravel backend to fetch data and a React frontend for the user interface. Authentication is implemented with Auth0.

## Prerequisites
Before running the application, ensure you have the following installed:
- Docker

## Running the Applications with Docker

### Laravel Backend

#### Building the Docker Image
In the Laravel project directory, build the Docker image:

```bash
docker build -t laravel-app .
```

Running the Docker Container
Run the Laravel application:

```bash
docker run -d -p 8000:8000 laravel-app
```

The backend is accessible at http://127.0.0.1:8000.

### React Frontend
Building the Docker Image
In the React project directory, build the Docker image:

```bash
docker build -t react-app .
```

### Running the Docker Container

Run the React application:

```bash
docker run -d -p 3000:80 react-app
```

The frontend is accessible at http://127.0.0.1:3000.
