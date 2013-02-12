-- --------------------------------------------------------

--
-- Table structure for table `glogin_users`
--

CREATE TABLE `glogin_users` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
 `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
 `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`),
 UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
