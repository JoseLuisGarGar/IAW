<IfModule alias_module>

# ...
# 2019-09-01. He añadido este Alias para los programas escritos en el curso de
PHP.
 Alias /clase "C:\Users\jose\Documents\IAW"
 <Directory "C:\Users\jose\Documents\IAW">
 Options Indexes FollowSymLinks Includes ExecCGI
 AllowOverride All
 Require all granted
 </Directory>
# 2019-09-01. He añadido este Alias para los programas escritos para el
trabajo.
 Alias /curro "C:\Users\jose\Documents\trabajos"
 <Directory "C:\Users\jose\Documents\trabajos">
 Options Indexes FollowSymLinks Includes ExecCGI
 AllowOverride All
 Require all granted
 </Directory>
# ...
</IfModule>