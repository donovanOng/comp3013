### Setup

#### Update Apache's `httpd.conf`


1. Uncomment the following line:
```
LoadModule rewrite_module modules/mod_rewrite.so
```

2. Update directory to public folder:
```
<Directory "/Applications/MAMP/htdocs/comp3013/public">

    Options Indexes FollowSymLinks MultiViews

    AllowOverride All

    Order allow,deny
    Allow from all

    XSendFilePath "/Applications/MAMP/htdocs"

</Directory>
```

#### Setup SQL 

Upload the 3 scripts found under the script folder with the following order:

1. create.sql
2. create_view.sql
3. insert.sql
