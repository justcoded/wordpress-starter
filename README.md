<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">WordPress JustCoded Project Template</h1>
    <br>
</p>

WordPress JustCoded Project Template is a skeleton [WordPress](https://wordpress.org/) site best for
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
  * `WP_SITEURL` - Full URL to WordPress including subdirectory (http://example.com/cms)
  * `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`

  If you want to automatically generate the security keys (assuming you have wp-cli installed locally) you can use the very handy [wp-cli-dotenv-command][wp-cli-dotenv]:

      wp package install aaemnnosttv/wp-cli-dotenv-command

      wp dotenv salts regenerate

  Or, we will add standalone solution in future releases.

3. Add theme(s) in `wp-content/themes` as you would for a normal WordPress site.

4. Access WP admin at `http://example.com/cms/wp-admin`

## Contributing

Contributions are welcome from everyone.

## WORKING WITH EXISTING PROJECT

To deploy already existed site please read [Deployment instructions](https://github.com/justcoded/wordpress-starter/blob/master/DEPLOYMENT.md).
We recommend to replace project README.md with DEPLOYMENT.md after project start.