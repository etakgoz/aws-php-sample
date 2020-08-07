CREATE DATABASE aws_sample_db;

CREATE TABLE IF NOT EXISTS links
(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	title VARCHAR(100) NOT NULL,
	url VARCHAR(255) NOT NULL,
	PRIMARY KEY(id)
) ENGINE = InnoDB;

INSERT INTO links (id, title, url) VALUES
(NULL, "Google", "https://www.google.com"),
(NULL, "Microsoft", "https://www.microsoft.com"),
(NULL, "Facebook", "https://www.facebook.com"),
(NULL, "Netflix", "https://www.netflix.com");

