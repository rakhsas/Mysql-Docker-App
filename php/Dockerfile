# Use the official PHP image with your desired PHP version (e.g., PHP 8.0)
FROM php:8.0-fpm

# Set working directory inside the container
WORKDIR /var/www/html

# Install any additional PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy your PHP application files into the container
COPY ./euphoria/ /var/www/html/

# Expose the port used by PHP-FPM (not needed if you're using Docker Compose)
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]
