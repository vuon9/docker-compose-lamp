# docker-php-app
Docker compose for php development
* PHP 7 - Apache (Also added Dockerfile for PHP 5.6)
* PHPUnit (included `test.php` to make a simple test)
* Memcache
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
# Run PHP app
Access `localhost` or `192.168.99.100` (if using Docker Toolbox).
