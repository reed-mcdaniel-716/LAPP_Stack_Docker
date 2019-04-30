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
            ├── index.php
            ├── page_bottom.html
            └── page_top.html

6 directories, 8 files
```
#### File explanations (top to bottom):
  1. `docker-compose.yml`: YAML file to configure together the PHP-Apache container and a PostgreSQL container
  2. `db_setup.sql`: the files in the `docker-entrypoint-initdb.d` directory are those that are first run when the PostgreSQL database is initialized
  3. `Dockerfile`: this file contains the base image creation for the LAPP stack
  4. `php.ini`: this file contains the initialization for PHP
  5. `index.php`: this file is our main php script for querying the PostgreSQL database and displaying the contents of the associates `page_top.html` and `page_bottom.html` files
  6. `page_bottom.html`: this file contains the bottom part of the web page to display, after the Bootstrap 4 cards generated with data from a PostgreSQL query in the `index.php` script
  7. `page_top.html`: this file contains the top part of the web page to display, before the Bootstrap 4 cards generated with data from a PostgreSQL query in the `index.php` script

### To launch:
`sudo docker-compose up -d`

### To build only:
`sudo docker-compose build`

### To stop:
`sudo docker-compose stop`

### To bring everything down:
`sudo docker-compose down --volumes`
