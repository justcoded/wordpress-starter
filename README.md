<p align="center">
    <a href="https://wordpress.org" target="_blank">
        <img src="https://s.w.org/about/images/logos/wordpress-logo-notext-rgb.png" height="100px">
    </a>
    <h1 align="center">WordPress Project Template by JustCoded</h1>
    <br>
</p>

WordPress Project Template is a skeleton [WordPress](https://wordpress.org/) site with modern 
development tools, easier configuration, improved folder structure and latest security best practices.

## Better project structure

The organization of skeleton is similar to putting WordPress core files in its own subdirectory, 
`wp-content` stays the same. 

![File structure](https://github.com/justcoded/wordpress-starter/wiki/assets/20171201-wp-starter-structure1.png)

## Dependency management with Composer

Manage your WordPress install and plugins with [Composer](http://getcomposer.org), 
a PHP dependency manager. Composer will make development more reliable, help with team collaboration, 
and it helps maintain a better Git repository.

## Easy WordPress configuration

Environment specific configuration files and environment variables with Dotenv.

## Enhanced security

* Deny access to non-web files with server directives (with `.htaccess` files).
* Deny PHP scripts execution inside `wp-content/uploads` folder.
* Deny browsing the directory files list.
* Production & Staging environments have a restriction to update files from admin panel (only Media is allowed).
* Command-line scripts for generating wp-admin HTTP Authorization files.  

**[<< READ MORE >>](https://github.com/justcoded/wordpress-starter/wiki)**

**************************

# Quick start

## Requirements

* PHP >= 7.0
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) | [Download](https://getcomposer.org/download/)

## Installation

1. Create a new project in a new folder for your site:

  `composer create-project justcoded/wordpress-starter your-project-folder-name`

2. Set important environment variables in `.env`  file:
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `WP_HOME` - Full URL to WordPress home (http://example.com)

3. Run WordPress install as usual by accessing your site at `http://example.com/`

4. Enjoy!

## Composer helpers

* `composer wp:theme` generate new theme based on our [Theme Boilerplate](https://github.com/justcoded/wordpress-theme-boilerplate)
* `composer wp:secure` generate new HTTP password for wp-admin folder

## Contributing

Contributions are welcome from everyone.
