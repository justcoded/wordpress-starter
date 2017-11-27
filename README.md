<p align="center">
    <a href="https://wordpress.org" target="_blank">
        <img src="https://s.w.org/about/images/logos/wordpress-logo-notext-rgb.png" height="100px">
    </a>
    <h1 align="center">WordPress Project Template by JustCoded</h1>
    <br>
</p>

WordPress Project Template is a skeleton [WordPress](https://wordpress.org/) site best for
rapidly creating projects with modern development tools, easier configuration, and an improved folder structure.

## Features

* Dependency management with [Composer](http://getcomposer.org)
* Easy WordPress configuration with environment specific files
* Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
* Autoloader for mu-plugins (use regular plugins as mu-plugins)
* Enhanced security (smart .htaccess files, robots.txt etc.)

## Requirements

* PHP >= 7.0
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation

1. Create a new project in a new folder for your project:

  `composer create-project justcoded/wordpress-starter your-project-folder-name`

2. Update environment variables in `.env`  file:
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (http://example.com)

3. Run WordPress install as usual by accessing your site at `http://example.com/`

4. That's it!

## New composer commands

* `composer wp:theme` generate new theme based on our [Theme Boilerplate](https://github.com/justcoded/wordpress-theme-boilerplate)
* `composer wp:secure` generate new HTTP password for wp-admin folder
* `composer wp:dbPrefix` generate secure DB prefix inside .env/.env.example files. (executed automatically after installation)
* `composer wp:salts` generating new secure WordPress salts

## Security

### Salts

By default installer will generate WordPress salts automatically. To replace them you can change `.env` variables:

  * `AUTH_KEY`
  * `SECURE_AUTH_KEY`
  * `LOGGED_IN_KEY`
  * `NONCE_KEY`
  * `AUTH_SALT`
  * `SECURE_AUTH_SALT`
  * `LOGGED_IN_SALT`
  * `NONCE_SALT`

Salts can be generated with:

  * Custom composer command: `composer wp:salts`
  * WordPress generator: https://api.wordpress.org/secret-key/1.1/salt/
  
### WP Admin HTTP Authentication

We recommend to set one more level of security - add additional HTTP password protection. 
You can do this with our composer script:

`composer wp:secure -u "login" -p "password"` 

## Contributing

Contributions are welcome from everyone.
