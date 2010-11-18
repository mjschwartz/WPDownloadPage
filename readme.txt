=== Plugin Name ===
Contributors: Matthhew Schwartz
Tags: Download, Downloads, Files
Requires at least: 2.9.0
Tested up to: 2.9.2
Stable tag: 1.0

Turn a post into an “auto downloading” page: all of the content of your post will be displayed, and after five seconds a file download will begin.

== Description ==

WP DownloadPage is a small, dead simple WordPress plugin that allows you to turn a post into an “auto downloading” page.  When a post becomes a “download page”, all of the content of your post will be displayed, and after five seconds a download from the URL that you specified will begin.

Project Home: [http://www.wordpresspluginfu.com/wp-downloadpage/](http://www.wordpresspluginfu.com/wp-downloadpage/)

Why would you want to do this? Several reasons:

* You want content to be displayed under the download to help the downloader.  Links to pages that describe functionality, places to ask for help, etc.
* You want to plug other content that the downloader might be interested in: other files to download, other sites of yours, etc.
* You want to use your existing analytics tools to track the downloads.  Using things like Google Analytics, you can track how visitors arrived at the download page, where they went from there, track downloads as "conversions", etc all within your existing analytics package of choice.
 
To add the auto download functionality to a page or post, place a shortcode in the post:

[wpdownloadpage url]

where “url” is a valid URL leading to the file you would like downloaded.

So:

[wpdownloadpage http://downloads.wordpress.org/plugin/wpgmappity.0.1.zip]

would display the post as normal and then trigger an automatic download after five seconds.


== Installation ==

Installation is simple:

* Upload the full directory into your wp-content/plugins directory.
* That’s it! The plugin is now ready for use.


== Changelog ==

= 1.0 =
Inital version.
