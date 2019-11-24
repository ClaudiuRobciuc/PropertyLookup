# Address Lookup API

## Setup

### Prerequisites

In order to build this and work with it locally, you need to have Docker installed on your machine. Get it [here](https://www.docker.com/community-edition#/download).

Furthermore, you need to have the following file:

-   A file called `.env` outlining the local environment variables to send to the container.

### Getting started
1. Run `composer install`
2. Run `npm i`
3. Run `docker-compose up -d --build`
4. Go to http://localhost

### Building

-   Run `docker exec -ti app bash` and then run `php artisan migrate` in order to create all the tables from the migrations

### Running

Once the containers are up and running, you can test it out by accessing http://localhost.

### API Routes
1. GET `/listProperties`. This will display all the entries from the properties table, with the geolocation attached to it.
2. GET `/listProperty/{id}`. This will display a specific property, with the geolocation aattached to it.
3. POST `/addProperty`. This will add a property. There are 4 accepted fields these being:
    a. `addressLine1` (required *)
    b. `addressLine2`,
    c. `city`,
    d. `postCode` 
4. Have fun.



