# docker-compose-lamp
Docker compose for php development
* PHP 7 - Apache (also added Dockerfile56 for PHP 5.6)
* PHPUnit (included `test.php` to make a simple test)
* Memcache
* Composer
* Redis
* MySQL Server
* PHP Extensions:
    - mysqli
    - redis
    - memcached
# Build
```
docker-compose build
```
# Run
```
docker-compose up -d
```
# Access PHP
- Access `localhost` or `192.168.99.100` (if using Docker Toolbox).
# Update vendors via Composer
```
docker-compose run nx_composer update
```
