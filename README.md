# Crash Course into Web Frameworks 2019 :pizza:

### Laravel PHP framework-based simple application

This is a repository with the code we write during my Crash Course into Web Frameworks 2019.

Each commit corresponds to the code we add during certain development stage.

##### As I'm using MAMP (on mac OS) to run a local server, here's my snippet from httpd.conf to set up an alias (to make the app run from http://localhost:8888/bookmarks-blog/).

MAMP for Windows and mac OS: https://www.mamp.info/en/

```
Alias /bookmarks-blog "/Applications/MAMP/htdocs/bookmarks-blog/public"

<Directory "/Applications/MAMP/htdocs/bookmarks-blog/public">
    #Options Indexes MultiViews
    Options All
    AllowOverride All
    Order allow,deny
    Allow from all
</Directory>
```

If you clone or download a completed application directly from this repo, then follow these installation instructions:

##### 1. Install dependencies

Run `composer install` command in the root folder of the project.

##### 2. Edit the configuration file

`.env.example` and change name to `.env`

`php artisan key:generate` to generate application key

##### 3. Import the database scheme

Run `php artisan migrate` to create database tables

Run `php artisan db:seed` to tables with sample data
