CREATE TABLE IF NOT EXISTS `fb_share_settings` (
	`idx` int(100) NOT NULL auto_increment,
	`seq` int(10) NOT NULL,
	`auto_display` int(1) NOT NULL,
	`style` varchar(250) NOT NULL,
	`link_lbl` varchar(250) NOT NULL,
	`position_css` varchar(250) NOT NULL,
	PRIMARY KEY  (`idx`)
);
		