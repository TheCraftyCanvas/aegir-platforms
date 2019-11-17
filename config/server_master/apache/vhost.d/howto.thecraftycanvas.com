<VirtualHost *:80>

  DocumentRoot /var/aegir/hostmaster-7.x-3.2
  ServerName howto.thecraftycanvas.com
  SetEnv db_type  mysql
  SetEnv db_name  howtothecraftyca
  SetEnv db_user  howtothecraftyca
  SetEnv db_passwd  ScC66caqyo
  SetEnv db_host  localhost
  SetEnv db_port  3306


<IfModule mod_rewrite.c>
  RewriteEngine on
  RewriteRule ^/files/(.*)$ /sites/howto.thecraftycanvas.com/files/$1 [L]
  RewriteCond /var/aegir/hostmaster-7.x-3.2/sites/howto.thecraftycanvas.com/files/robots.txt -f
  RewriteRule ^/robots.txt /sites/howto.thecraftycanvas.com/files/robots.txt [L]
</IfModule>

# Extra configuration from modules:

    # Error handler for Drupal > 4.6.7
    <Directory ~ "sites/.*/files">
      <Files *>
        SetHandler This_is_a_Drupal_security_line_do_not_remove
      </Files>
      Options None
      Options +FollowSymLinks

      # If we know how to do it safely, disable the PHP engine entirely.
      <IfModule mod_php5.c>
        php_flag engine off
      </IfModule>
    </Directory>

    # Prevent direct reading of files in the private dir.
    # This is for Drupal7 compatibility, which would normally drop
    # a .htaccess in those directories, but we explicitly ignore those
    <Directory "/var/aegir/hostmaster-7.x-3.2/sites/howto.thecraftycanvas.com/private/" >
      <Files *>
        SetHandler This_is_a_Drupal_security_line_do_not_remove
      </Files>
      Deny from all
      Options None
      Options +FollowSymLinks

      # If we know how to do it safely, disable the PHP engine entirely.
      <IfModule mod_php5.c>
        php_flag engine off
      </IfModule>
    </Directory>


</VirtualHost>

