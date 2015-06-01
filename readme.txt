=== Adminer ===
Contributors: Bueltge, inpsyde
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6069955
Tags: adminer, debug, sql, analyse, tuning, performance, database, queries, query, phpMyAdmin, admin, database management
Requires at least: 2.7
Tested up to: 4.2.2
Stable tag: 1.4.0

Adminer is a full-featured MySQL management tool written in PHP. This plugin include this tool in WordPress.

== Description ==
Adminer (formerly phpMinAdmin) is a full-featured MySQL management tool written in PHP. Conversely to phpMyAdmin, it consist of a single file ready to deploy to the target server. This plugin include this tool in WordPress for a fast management of your database. [Adminer](http://www.adminer.org/ "Adminer") is also used without this plugin and WordPress.

This plugin supports Multisite Installs only as Network Admin; add an menu item on Settings and also an link to WP Admin Bar to the item Network Admin.

**Crafted by [Inpsyde](http://inpsyde.com) · Engineering the web since 2006.**

Yes, we also run that [marketplace for premium WordPress plugins and themes](http://marketpress.com).

== Installation ==
= Installation =
1. Unpack the download-package
1. Upload the file to your plugin-directory, default is `/wp-content/plugins/`
1. Activate the plugin through the 'Plugins' menu in WordPress or alternative Network Activation
1. Menu `Tools` -> `Adminer`
1. Klick button `Start Adminer` for view the database

If you use the plugins outside the wp-root or other one install, then you must define the absolute path to `wp-load.php` in the install root of WordPress in the `config.php` inside the plugin folder of Adminer.

	/**
	 * The path to wp-load.php,
	 * if you have the plugin folder not inside the default path
	 *
	 * Examples:
	 * Linux: `'/var/www/wpbeta'`
	 * Windows client with XAMPP: `$wp_siteurl = 'C:/xampp/htdocs/wpbeta';`
	 */
	$wp_siteurl = '';

== Screenshots ==
1. Page in Backend (WordPress 2.9-rare)
1. Adminer with a database (WordPress 2.9-rare)
1. Select a table (WordPress 2.9-rare)
1. See SQL-statement (WordPress 2.9-rare)

== Other Notes ==
= Acknowledgements =
* Thanks for german language file to [myself](http://bueltge.de/ "Frank B&uuml;ltge") ;)
* Thanks to [Jürgen Toth](http://www.relijoc.ro/ "Jürgen Toth") for romanian language file
* Thanks for italian language files to [Gianni Diurno](http://gidibao.net/)
* Thanks for belorussian language files to [Marcis G.](http://pc.de/)
* Thanks for ukrainian language files to [Förderkreis Saporoshje e.V](http://foerderkreis-saporoshje.de/)
* Thanks for czech language files to [Peter Kahoun](http://kahi.cz/wordpress/)
* Thanks for dutch translation to [Renè](http://wpwebshop.com/premium-wordpress-themes/ "WP webshop")
* Thanks for japanese translation to [KAZ]
* Thanks for the spanish language files to [Jose Manuel Aguado](http://www.anunciosgoogle.net/)
* Thanks to [Brian Flores](http://www.inmotionhosting.com/) for serbian translation
* Thanks to Iver Odin Kvello for norwegian translation

= Licence =
Good news, this plugin is free for everyone! Since it's released under the GPL, you can use it free of charge on your personal or commercial blog. But if you enjoy this plugin, you can thank me and leave a [small donation](http://bueltge.de/wunschliste/ "Wishliste and Donate") for the time I've spent writing and supporting this plugin. And I really don't want to know how many hours of my life this plugin has already eaten ;)

= Translations =
The plugin comes with various translations, please refer to the [WordPress Codex](http://codex.wordpress.org/Installing_WordPress_in_Your_Language "Installing WordPress in Your Language") for more information about activating the translation. If you want to help to translate the plugin to your language, please have a look at the .pot file which contains all defintions and may be used with a [gettext](http://www.gnu.org/software/gettext/) editor like [Poedit](http://www.poedit.net/) (Windows) or plugin for WordPress [Localization](http://wordpress.org/extend/plugins/codestyling-localization/).

== Changelog ==
= v1.4.0 (2015-06-01) =
* Update spanish language files
* Include the Adminer 4.2.1 release, see his [Changelog](https://github.com/vrana/adminer/blob/master/changes.txt)

= v1.3.2 (2014-12-07) =
* Bugfix wrong function name [issue 1435](https://wordpress.org/support/topic/fatal-error-1435?replies=1)

= v1.3.1 (2014-11-07) =
* Update to Adminer Core 4.1.0, 2014-04-18
* Enhance loader for crusome installs ;)
* Replace another function from Adminer to work with different plugins
* Hide password in clear text, only via Mouseover readable
* Update style for more WP feeling since 3.8 - like no radius
* Check, that the plugin is active for access Adminer

= v1.3.0 (2014-01-26) =
* Fix strict php notice for static method
* Fix different views via stylesheet
* Fix fatal error on `pagination()` function
* Update to Adminer Core 4.0.2
* Enhance to support Adminer Core plugins, see official [Adminer - Plugins](http://www.adminer.org/plugins/) page, use in different falls scripts outside the WordPress core.
* Allows select/deselect several checkboxes with single click, while pressing Shift key; use jQuery from Google CDN
* Format Dump File with the current date, via [issue](http://wordpress.org/support/topic/feature-request-file-name-formatting-on-export)
* See also the [changelog[(http://plugins.svn.wordpress.org/adminer/trunk/inc/adminer/readme.txt) of Adminer Core, lot of improvements was in the new version
* Add norwegian translation files

= v1.2.3 (01/08/2013) =
* Fix in stylesheets
* Security Fix
* Change function to load wp requirements

= v1.2.2 (11/09/2012) =
* Update Adminer Source to 3.6.2-dev
* Changes for WP Magic Quotes
* Small changes on loader
* Update on Stylesheet for UI of WP 3.5

= v1.2.1 (06/12/2012) =
* Filter magic quotes of WP on more vars

= v1.2.0 (11/12/2011) =
* Support for Multisite Network
* Add menu item to network, if networrk activate
* Add menu item to WP Admin Bar on Network Admin; only for Super Admins

= v1.1.1 (09/23/2011) =
* change function to load wp-load.php
* add database for see the database on admin
* add the database as value for open thickbox incl. the right database

= v1.1.0 (09/15/2011) =
* exclude the minified version of Adminer
* include open source files for dont use obfuscated code
* fix for use sql-strings with magic quotes, see [bug description in forum](http://wordpress.org/support/topic/plugin-adminer-sql-command-doesnt-work)
* add fucntion to search and include the wp-load.php
* Test in WP 3.3-aortic-dissection

= v1.0.5 (06/13/2011) =
* maintenance: include new Adminer version 3.2.2, see [changelog](http://adminer.git.sourceforge.net/git/gitweb.cgi?p=adminer/adminer;a=blob_plain;f=changes.txt;hb=HEAD) of Adminer
* maintenance: change is_afax-fct for use with eMember plugin

= v1.0.4 (03/24/2011) =
* maintenance: include new Adminer version 3.2.1, see [changelog](http://adminer.git.sourceforge.net/git/gitweb.cgi?p=adminer/adminer;a=blob_plain;f=changes.txt;hb=HEAD) of Adminer
* maintenance: change readme

= v1.0.3 (02/02/2011) =
* maintenance: change onlload on Adminer
* changes: checke check for rights
* changes: chaneg init of text-domain and styles now only on admin_init

= v1.0.2 (10/20/2010) =
* bugfix: adminer-js onload fixed
* maintenance: remove older versions of adminer in /inc/
* maintenance: change stable tag in readme.txt to trunk; all versions if this plugin is/was stable ;)

= v1.0.1 (10/18/2010) =
* maintenance: include Adminer version 3.0.1, see [changelog](http://adminer.git.sourceforge.net/git/gitweb.cgi?p=adminer/adminer;a=blob_plain;f=changes.txt;hb=HEAD) of Adminer
* maintenance: changes on stylesheet

= v1.0.0 (10/16/2010) =
* maintenance: include Adminer Version 3.0.0, see [changelog](http://adminer.git.sourceforge.net/git/gitweb.cgi?p=adminer/adminer;a=blob_plain;f=changes.txt;hb=HEAD) of Adminer
* maintenance: changes on stylesheet
* release stable release 1.0.0

= v0.2.7 (09/23/2010) =
* feature: icons on menu and settings page
* feature: view in new tab
* feature: help in contextual help
* bugfix: view in thickbox; iframe blocks in Adminer
* maintenance: language file updated

= v0.2.6 (07/20/2010) =
* change string to multilanguage
* small changes on source
* include now, when hook start to load plugins
* add chez language files

= v0.2.5 (04/23/2010) =
* New Adminer Version 2.3.2 include
* see [changelog](http://adminer.svn.sourceforge.net/viewvc/adminer/trunk/changes.txt "Adminer changelog") of Adminer for more informations about changes

= v0.2.4 (04/14/2010) =
* Bugfix for login users with rights smaller admin

= v0.2.3 (03/01/2010) =
* include new Adminer version 2.3.0
* Small changes on css-file
* see [changelog](http://adminer.svn.sourceforge.net/viewvc/adminer/trunk/changes.txt "Adminer changelog") of Adminer for more informations about changes

= v0.2 (21/09/2009) =
* Include new Adminer version 2.1.0

= v0.1 (21/08/2009) =
* Write a Plugin based on my ideas
