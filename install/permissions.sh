sudo rm -r ../app/tmp/
sudo mkdir -p ../app/tmp/
sudo chown root: ../app/tmp/
sudo chmod 777 ../app/tmp/

sudo rm -r ../app/lib/cockpit/storage/tmp/
sudo mkdir -p ../app/lib/cockpit/storage/tmp/
sudo chown root: ../app/lib/cockpit/storage/tmp/
sudo chmod 777 ../app/lib/cockpit/storage/tmp/

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


sudo rm ../app/lib/data/cookie_jar.txt
sudo touch ../app/lib/data/cookie_jar.txt
sudo chown root: ../app/lib/data/cookie_jar.txt
sudo chmod 777 ../app/lib/data/cookie_jar.txt

sudo rm /var/log/apache2/error.log
sudo touch /var/log/apache2/error.log
sudo chown root: /var/log/apache2/error.log
sudo chmod 777 /var/log/apache2/error.log

sudo tail -f /var/log/apache2/error.log

