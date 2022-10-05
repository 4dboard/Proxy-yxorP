sudo rm -r ../cache/
sudo mkdir -p ../cache/
sudo chown root: ../cache/
sudo chmod 777 ../cache/

sudo rm -r ../app/storage/cache/
sudo mkdir -p ../app/storage/cache/
sudo chown root: ../app/storage/cache/
sudo chmod 777 ../app/storage/cache/

sudo rm -r /var/log/pagespeed
sudo mkdir -p /var/log/pagespeed
sudo chown root: /var/log/pagespeed
sudo chmod 777 /var/log/pagespeed

sudo rm -r /var/cache/pagespeed/
sudo mkdir -p /var/cache/pagespeed/
sudo chown root: /var/cache/pagespeed/
sudo chmod 777 /var/cache/pagespeed/


sudo rm -r /var/cache/pagespeed_meta/
sudo mkdir -p /var/cache/pagespeed_meta/
sudo chown root: /var/cache/pagespeed_meta/
sudo chmod 777 /var/cache/pagespeed_meta/


sudo rm ../lib/data/cookie_jar.txt
sudo touch ../lib/data/cookie_jar.txt
sudo chown root: ../lib/data/cookie_jar.txt
sudo chmod 777 ../lib/data/cookie_jar.txt

sudo tail -f /var/log/apache2/error.log

