# Mock UTAR unitreg website
You have to use Apache and PHP to run this mock website.

Run the following code. (I assumed that you already start use apache service)
```
cd ~
git clone https://github.com/wongjiahau/mock-utar-unitreg-website.git cd /var/www/html
sudo ln -s ~/mock-utar-unitreg-website mock-unitreg
```

Then visit the site at: 
```
localhost/mock-unitreg/login.jsp
```