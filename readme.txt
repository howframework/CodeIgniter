Howframework:CodeIgniter
=======================

Introduction -- what is Howframework:CodeIgniter?
-------------------------------------------------
Howframework aims to set some simple rules and then allow
the community to build the application based on their framework
of choice. Howframework has set the application is a barebone
blog application.

The objective is demonstrate how an application is built using
different frameworks. This would allow anybody to learn how to
code using a certain framework and how one framework is different
from another.

This is my effort to showcase Codeigniter for the Howframework.

Bare in mind, while there are more advanced settings and ways of
doing things with Codeigniter, my aim is to keep things simple and
make this as a learning base for those who would like to learn the
Codeigniter MVC framework.

Phase 1: Authentication
=======================

In Phase 1, the objective is simply to provide functions for:

- login - login form and handler
- logout - logout user
- register - register form and handler

I added a few more things to make the finished product more
workable.

- admin - after login landing page
- noaccess - default page when user has no access
- blog - the blog home page, will use route settings to
  set as homepage.

Database
--------
We are using MySQL with this example. Below is the database
structure that we are using.

CREATE TABLE IF NOT EXISTS 'users' (
  'id' int(10) NOT NULL AUTO_INCREMENT,
  'username' varchar(50) NOT NULL,
  'password' varchar(50) NOT NULL,
  'email' varchar(100) NOT NULL,
  'fullname' varchar(100) NOT NULL,
  PRIMARY KEY ('id'),
  UNIQUE KEY 'username' ('username'),
  UNIQUE KEY 'email' ('email')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

Models
------
This example creates one model called the M_user which handles
all works relating to database and session. Controller functions
will be calling functions in the M_user model to facilitate every
process.

Authentication Strategy
-----------------------
A simple demonstration of storing hashed password with salt key.
Not the best method but will provide a simple working sample of
how hash and salt key works in storing passwords.

Verifying users are logged in or not is done with session. When a
user logs in, login details is stored in session. CI has built-in
encrypted session library to keep data secure. Session data is
updated on every action inside the /admin area with a timestamp.
And everytime a new action is made, current timestamp is compared
with previous timestamp to make sure that user has not been idle
for too long.

If a user is not logged in and trying to access the /admin area,
the user will be redirected to /noaccess. If a user is idle for
too long, login details in session will be removed and the user
will also be redirected to /noaccess.

If a user logs out from the /admin area by accessing /logout, the
login details in session will also be removed.

Forms in Howframework:Codeigniter
---------------------------------
With Twitter Bootstrap 2.0, it has a lot of UI to facilitate
passing information back to the user about their form input.
There are notification, input field status, errors and others.

Some libraries that comes really handing when working with forms
in Codeigniter are Validation and Input. These helper libraries
are used in /login and /register.

Controllers & Routes
--------------------
In Codeigniter, when you create a controller and functions in
them, your URL will automatically map out to:

http://domain.com/index.php/controller/function/optional/extra/data

You can remove the "index.php" with some extra settings and
.htaccess manipulation. But this example will leave the default
setting from Codeigniter intact.

You can read about removing "index.php" in Codeigniter website.

There is also a routing configuration to remap certain URL
structure to specific controller and function. This is done by
editing the config/routes.php. We will be using this to comply
with this Phase I assignment of Howframework. 

Three main controllers is created.

- login
    index() - login form and handler
	logout() - logout
	register() - register form and handler
	noaccess() - error message when not logged in
- admin
    index() - default admin page
- blog
    index() - main home page

The following shows custom routing override settings
	
/logout   --> /login/logout
/register --> /login/register
/         --> /blog

No route settings is needed for /login as the index() will be the
default function for the login controller. The same goes for
/admin as the index() in /admin will also be called when no
funciton is specified.

Installation
============

Do read Codeigniter on how to set it up.

Installing Howframework:Codeigniter (my version) will require the
following steps.

1 - Copy the /application folder into your Codeigniter setup
2 - Create your database and tables (find sql_dump.sql)
3 - Update your /application/config/database.php with the right
    database access details

If you would like to remove the "index.php" from the URL, do read
Codeigniter User Guide on how you can do that. This script keeps
the application running at default settings as much as possible to
make sure that it is compatible with as many platforms as possible.

And because of that, you will that there's "index.php" in your URL.

Other Notes
===========

I will try to keep this application simple for many to learn but
at the same time, don't forget to read the User Guide that comes
with Codeigniter.






