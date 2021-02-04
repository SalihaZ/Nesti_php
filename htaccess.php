RewriteEngine on
RewriteRule ^recipe$                       index.php?loc=receip [L] 
RewriteRule ^(article|statistics)$         index.php?loc=$1 [L]  
RewriteRule ^([a-z]+)$                     index.php?loc=$1 [L]
RewriteRule ^recipe/edit                   index.php?loc=recipe&action=edit [L]
RewriteRule ^([a-z]+)/([a-z]+)$            index.php?loc=$1&action=$2 [L]
RewriteRule ^([a-z]+)/([a-z]+/([0-9]+)$    index.php?loc=$1&action=$2&id=$3 [L]