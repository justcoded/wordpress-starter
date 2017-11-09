Project setup instructions
---
To setup current WordPress project, you should do the following steps:

#### Navigate to project and clone git repo:

```bash
cd /path/to/your/project/empty/folder/
git clone http://repository-domain.com/your/project.git
```

#### Switch to latest branch 

* master - stable production copy, 
* develop - current development copy

```bash
git checkout <branch-name>
```

#### Download wp core with composer
```bash
php composer.phar update
```
 
#### Create new branch for your changes
```bash
git checkout -b {issue#}_{short descr}
```

#### Create your environment

1. Copy .env.example into .env
2. Copy .htaccess.example into .htaccess
3. Update environment variables in `.env`  file:
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (http://example.com)
  * `WP_SITEURL` - Full URL to WordPress including subdirectory (http://example.com/cms)

#### Database setup (Dev environment ONLY)

1. Download latest database dump from repository "Downloads" section (Bitbucket)
2. Import sql dump to your database
3. Update wp_options table 'siteurl' / 'home' to your new project url. (remember siteurl should have "cms" at the end)
	* Save old URL somewhere before replace
4. Upgrade URLs with any method you like the most: [WP Host update](https://github.com/justcoded/wp-host-update), [WP Migrate](https://wordpress.org/plugins/wp-migrate-db/), WP CLI
