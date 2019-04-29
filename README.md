## Linux-Apache-PostgreSQL-PHP (LAPP) Stack
## Taken from English translation of https://www.key-p.com/blog/staff/archives/106755

### File directory:
```
.
├── docker-compose.yml
├── docker-entrypoint-initdb.d
│   └── db_setup.sql
├── docker-file
│   └── web
│       ├── Dockerfile
│       └── php.ini
├── README.md
└── volumes
    └── web
        └── html
            ├── index.html
            └── index.php

6 directories, 7 files
```
#### File explanations (top to bottom):
  1. `docker-compose.yml`: YAML file to configure together the PHP-Apache container and a PostgreSQL container
  2. `db_setup.sql`: the files in the `docker-entrypoint-initdb.d` directory are those that are first run when the PostgreSQL database is initialized
  3. `Dockerfile`: this file contains the base image creation for the LAPP stack
  4. `php.ini`: this file contains the initialization for PHP
  5. `index.html`: this file is our main web page template with the embedded `index.php` script which returns data from the PostgreSQL database initialized earlier
  6. `index.php`: this file is our main php script for querying the PostgreSQL database and providing the query results to the `index.html` file to be displayed
