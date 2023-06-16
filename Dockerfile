FROM php:8.1-cli
COPY . /usr/src/exercise1
WORKDIR /usr/src/exercise1
CMD [ "php", "./exercise1.php" ]