USE jumoyo;

-- Add date_time column to jumoyo.posts
ALTER TABLE `posts` ADD IF NOT EXISTS `date_time` DATETIME NOT NULL AFTER `text`;

-- Add phone_number column to jumoyo.posts
ALTER TABLE `businesses` ADD  IF NOT EXISTS `phone_number` VARCHAR(255) NOT NULL AFTER `client`;