CodeIgniter
===========

Simple Blog App with CodeIgniter

Requirement:
- Login
- Logout
- Register

Install XAMPP
=============

All readers were assumed to have install their *AMPP in OS of choices. If you sir do not know what is *AMPP, then please consult Google in cojunction with your OS. Google "How to install WAMPP" for Windows user, "How to install MAMP" for Mac user and and How To Install LAMPP" for Linux user and follow along the subsequent tutorials/hands on. Still don`t have a clue? Then you have a grave problem mister... 

A Brief about CodeIgniter
=========================

Its awesome. Nuff said.

Alright, more `eh; CodeIgniter is a MVC Framework to assist web base application development. It is built on top of PHP. So, PHP has been around for years and it is a growing pain to built and maintain a big web application structure on it. The pain grow much bigger when the team grow. CodeIgniter provide the much needed structure to PHP web application and thus make it a joy to build and maintain. 

How ever, CodeIgniter is 'you type what you need' framework unlike CakePHP. It doesn`t facilitate scaffolding (automatically) as a princip. 

CodeIgniter already provide the core libraries which can be extended at whim if you wish. Consult the documentation if you inclined so.

By the way, the [documentation is awesome](codeigniter.com/user_guide/database/index.html) too..!

ps: Read more about [MVC](http://codeigniter.com/user_guide/overview/mvc.html) if you never heard of it. Important!


How To install CodeIgniter: A Primer
------------------------------------

It is really easy to install CodeIgniter. Download the framework from [CodeIgniter main page](http://codeigniter.com) and extract it to your designated folder. Lets say you designated folder is "howframework", the folder structure will be like:

	-www
		|-howframework
			|-system
			|-application
			|-index.php

Thus the installation is done. Checkit by going to the page from your browser. It should display this friendly "welcome" page.


How to use this Repo
--------------------

This repo contains Codeigniter with some example files in it to simulate the requirement stated above. Click and view the file you interested with and try to understand it. Comments are generously sprinkled to assist. Brief explaination will be provided afterwards.

Now, the time to do the codes!

Nope, not yet. Firstly need to config some stuff in CI (yah, we love CodeIgniter so much we give it nickname. Heck, CI is better than Honey or worse, Bieber....). By default CI doesn`t connect to any database and will have the "welcome" app as default app. So, the first step is to make a mysql table and config CI to be able to talk/connect with it. Create table in MySQL in your favourite tools (PHPMyAdmin for you) with the name "howframework_ci" and table "users" with structure as below:

	- id (INT) *
	- username (STRING/UNIQUE)
	- password (STRING) **
	- email (STRING)
	- fullname (STRING)
 
 
