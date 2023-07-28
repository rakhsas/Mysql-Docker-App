-- Create a new MySQL user
-- CREATE USER 'your_username'@'%' IDENTIFIED BY 'your_password';
CREATE USER 'rakhsas'@'%' IDENTIFIED BY 'root';

-- Grant privileges to the user on a specific database
GRANT ALL PRIVILEGES ON test1.* TO 'rakhsas'@'%';

-- Flush privileges to apply changes
FLUSH PRIVILEGES;
