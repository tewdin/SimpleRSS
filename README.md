# Simple XML RSS feed for ProcessWire CMS

ProcessWire is a free and open source content management system (CMS) written in the PHP programming language and it is distributed under the Mozilla Public License 2.0. I use it for all new projects if client do not have good reason to use something else. Its API is so easy and powerfull and make my job so much easier.

Here is an example of a very simple RSS feed for ProcessWire. It searches for the 10 most recent posts with a specific content type and print them as a item list. An image of the latest article is also retrieved as an image of the feed.

## Create a template for articles and RSS

The first step is to create content types for blog posts and RSS feeds. Check out the very comprehensive help on the ProcessWire website.
https://processwire.com/docs/start/structure/templates/

## Copy the code

Copy the contents of [rss.php](https://github.com/timoanttila/ProcessWire-SimpleRSS/blob/master/rss.php) or upload that file to the `/site/templates/` directory. Make sure the web server can read the file. You can change the copyright information in a file by editing it with your favorite editor.
