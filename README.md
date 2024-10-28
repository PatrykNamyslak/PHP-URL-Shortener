<p align="center"><img src="https://socialify.git.ci/PatrykNamyslak/PHP-URL-Shortener/image?description=1&descriptionEditable=PHP%20%2B%20MYSQL%20Based%20Application&font=Raleway&language=1&logo=https%3A%2F%2FPatrykNamyslak.pl%2Fassets%2Fimages%2Flogo_white.svg&name=1&owner=1&pattern=Circuit%20Board&theme=Dark" alt="project-image"></p>

<p id="description">This is a PHP + MYSQL Based Application that requires no extra storage than what is required for the script to run as everything is stored in the database and it is queried anytime a user wants to go view a url</p>

<h2>🚀 Demo</h2>

[https://patl.ink/](https://patl.ink/)

  
  
<h2>🧐 Features</h2>

Here're some of the project's best features:

*   Versatile
*   Easy To Setup
*   Purely PHP Based
*   Database Functionality

<h2>🛠️ Installation Steps:</h2>

<p>1. Download the latest release</p>

<p>2. Initialize your Web Server and the database of your choice</p>

```
sudo service apache2 start && service mysql-server start
```

<p>3. configure the db_connection details found in the functions.php file</p>

```
$db_connection = db_connection(host:{YOUR_DATABASE_IP} database:{YOUR_DATABASE} username:{USERNAME_FOR_DATABASE} password{PASSWORD_FOR_DATABASE});
```

<p>4. Do not forget to change what table the script is querying when fetching and sending data! This can be found in the index.php file of the demo site and also in the create-url index.php file</p>

<p>5. And Voila! It should function!</p>

<h2>🍰 Contribution Guidelines:</h2>

All Contributions are welcome,I plan on making the following changes in the near future:
*  Adding the functionality to fetch existing links already shortened rather than throwing an error.
*  Allowing custom links for registered users (When it releases the demo service site will most likely only allow me to do that as you know... get your own domain ;) )
  
  
<h2>💻 Built with</h2>

Technologies used in the project:

*   PHP
*   MYSQL
*   Apache Web Server
*   HTMX
*   HTML
*   CSS
*   Linux
*   Ubuntu

<h2>💖Like my work?</h2>

Please make sure to give this repo a star! and if you have the time please consider sending some <a href="https://patl.ink/feedback/" target="_blank">feedback</a>.
