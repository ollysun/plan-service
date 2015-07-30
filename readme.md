## NOTE: This will change
## vhost setting

<VirtualHost *:80>
	DocumentRoot "/Applications/MAMP/htdocs/plans-service/public/"
	ServerName plans.local
	ServerAlias www.plans.local

	#ErrorLog /Applications/MAMP/htdocs/Lumen/lumen/log/apache_error.log
	#CustomLog /Applications/MAMP/htdocs/Lumen/lumen/log/access.log combined
	#hp_value error_log /Applications/MAMP/htdocs/Lumen/lumen/log/php_error.log

 	SetEnv ENVIRONMENT development
</VirtualHost>

## host file
127.0.0.1 plans.local

## Add/update below env file
APP_ENV=local
APP_DEBUG=true
APP_KEY=cEt1RnAJ2FCiqvocN6atOEnqYsXI0k6D

DB_HOST=localhost
DB_DATABASE=plans
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
