## Read Me - Boilerplate PHP Docker environment

### To find the correct container, cd into the right directory in the terminal and enter the following command:

    docker ps

### The next step is to enter the container with the name of the identified container with a version of the following command:

    docker exec -it name_of_container /bin/sh
#
### E.g. if the name of the container is php-docker-app_php_1 then the following command would work:
    docker exec -it php-docker-app_php_1 /bin/sh

### It is now possible to view all files in the container, move into sub-directories and execute files.

docker-compose up // Gets the application up and running

Amend the first php file (index.php) or add additional php files in the same folder and navigate to the revised url to view.
