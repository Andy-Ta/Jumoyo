-- Add missing date_time column to jumoyo.posts
ALTER TABLE `posts` ADD `date_time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `text`;