# Parallel Testing of Front-end and Database (with Food Ordering Web App)

# "A" feladat:   

Végezzünk felfedező tesztelést (exploratory testing) és találjunk minél több hibát, amelyeket dokumentáljunk. 
A front-enden kapott adatokat vessük össze az adatbázisban található értékekkel. 
Írjuk meg a megfelelő SQL lekérdezéseket, amelyek alátámasztják a talált hibákat.

# "B" feladat:  

Írjunk lekérdezést, amellyel ki tudjuk mutatni, hogy: <br>
melyik a legnagyobb összegű megrendelés az order_details táblából vett rendelési mennyiségek és egységárat összege alapján?<br>
az order_details táblából vett rendelési mennyiségek és egységárat összege alapján melyik a legnagyobb összegű megrendelés, amelynek státusa az order táblában "Yet to be delivered"? <br>
melyik vevő rendelte a legnagyobb értékű rendelést?  <br>
milyen értékben rendeltek a vevők összesen?  <br>


#  "C" feladat:   

Írjunk (dokumentáljunk) pozitív és negatív teszteseteket (script based testing) is a fenti user story-ra és találjunk minél több hibát. (Legalább ötöt.)

# "D" feladat:   

Írjunk tesztesetet a kedvezménysávok ekvivalencia partícióira és határértékelemzésére.
<br>
<br><br>
<br>

# Kövessük az alábbi angol nyelvű leírást a feladatok előkészítéséhez, majd a lépések alatt találunk egy User Story-t, melyet fel kell dolgozunk a feladatok megoldásához.

1. Download ZIP file from https://github.com/gluckgabor/food_ordering_app_FE_vs_Database_testing_task by clicking green dropdown button, then  menu item 'Download ZIP'.
2. Download and install XAMPP https://www.apachefriends.org/download.html or https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe/download
3. Download and install DBeaver https://dbeaver.io/download/
4. In xampp console (lower right corner in Windows, on taskbar) start Apache, start Mysql.
5. Navigate to C:\xampp\htdocs and create a www folder and copy the cloned repo (similar path like C:\Users\YOURNAME\FE_SQL_Testing\Online-Food-Ordering-Web-App or where you cloned repo) to there
6. Navigate in browser: http://localhost/phpmyadmin/ and there create a new database named 'food' by clicking New on the upper left corner.
7. Click on 'Import' option in the top menu and browse
8. Open your web browser and check if you got the website running on your localhost (http://localhost/www/ or http://localhost:8080/www/)

9. Launch DBeaver on your machine.

    Create a New Connection:

    Click on "Database" in the top menu.
    Choose "New Database Connection."
    Select MySQL:

    In the "Select a driver" window, choose "MySQL" from the list.
    Click "Next."
    Configure Connection Settings:

    Fill in the connection details:
    Host: The server where your MySQL database is running. It could be something like localhost or an IP address.
    Port: The port number on which MySQL is running (usually 3306 by default).
    Database: The name of the MySQL database you want to connect to.
    User and Password: Your MySQL database username and password.
    Click "Next, then click "Test Connection" to ensure that the connection details are correct.
    If the test is successful, click "Finish."

10. Open your web browser and check if you got the website running on your localhost (http://localhost:8080/www/)
<br>
<br>
***
<br>

# User Story title: Food order process

Agile sentence: As a User, I would like to be able to order food, So as to have a wonderful customer experience

Current userstory is to describe some of the requirements regarding the order and order details pages in order to implement the full food order process.
<br>

# Acceptance Criterias (ACs)
Azaz követelmények, elfogadási feltételek az order és place-order oldalhoz, ezeket (is) "kapta\kapja" meg a fejlesztő is. Jó esetben mind maradéktalanul teljesülnek :)

1. Az order képernyő jobb felső sarokban jelenjen meg a wallet-detail tábla megfelelő rekordjából a felhasználó egyenlege a balance field-ből.
2. A rendelni kívánt mennyiség lehetséges felvehető értéktartománya 0-10. Amennyiben a felhasználó rossz értéket ad meg, emberi nyelven értelmes, kultúrált validációs üzenetet jelenítsen meg az oldal. (Error, hibasorszám, exception és '_', azaz alulvonás nem lehet a validációs üzenetben, mert az azt jelenti, hogy nem végfelhasználónak szánt validációs üzenet jelent meg.)
3. Az order oldalon az 'Item Price/Piece' oszlopban az item-ek ára az items tábla price oszlopából kell, h jöjjön, azonos értéknek kell megjelenni darabárként itt a felületen.

A rendelhető ételek és áraik az alábbiak legyenek:  
| Étel | Ár (USD) |
|----------|----------|
| Baked Potato Jackets | 10    |
|Mexican Taco |30   |
|Quesadillas Acapulco|39   |
|Tex Mex Chicken|25   |
|Thai Chicken Chilly|39   |

4. A place order oldalon a Total mezőben az egyes rendelt tételek darabár * mennyiség eredményének (részösszegek) összege kell megjelenjen.
5. 10%-os kedvezmény jár 50 usd feletti megrendelés esetén. 100 usd feletti megrendelés esetén 20% kezdvezmény jár.
<br>
<br>
<br>
<br>
<br>
<br>
Original readme:
<br><br>

# Online-Food-Ordering-Web-App
Online Food Ordering System Website using basic PHP, SQL, HTML & CSS. You can use any one of XAMPP, WAMP or LAMP server to run the Web App on your local machine. It has a food ordering module for a customer. It also provides menu, orders and user management module for admin.

Admin Login & Password (You can change this in phpmyadmin):<br/>
Login: admin <br>
Password: admin<br>

# Screenshots
<img src="https://github.com/kaushikjadhav01/Online-Food-Ordering-Web-App/blob/master/screenshots/99-banner.png">
Find how the project looks in <b>screenshots folder</b> Or <a href="https://github.com/kaushikjadhav01/Online-Food-Ordering-Web-App/tree/master/screenshots">click here</a>

# Technologies Used
<ul>
<a href="https://www.mysql.com/"><li>MySQL</a></li>
<a href="https://www.php.net/"><li>PHP</a></li>
<a href="https://www.w3.org/Style/CSS/Overview.en.html"><li>CSS</a></li>
<a href="https://www.w3.org/TR/html52/"><li>HTML</a></li>
<a href="https://www.javascript.com/"><li>Javascript</a></li>
</ul>

# Tools Used
<ul>
  <a href="https://www.apachefriends.org/"><li>XAMPP</a></li>
</ul>

# How to Install and Use
<ol>
<li>Download and install XAMPP/WAMP/LAMP server and download the files of this project</li>
<li>Copy the folder of this project in your xampp/htdocs/www folder</li>
<li>Start XAMMP. Start Apache and SQL server. Go to phpmyadmin and create a new database named 'food'</li>
<li>Go to the food database created and click on 'Import' option in the top menu</li>
<li>Upload the food.sql file and import it</li>
<li>Open your web browser and check if you got the website running on your localhost (http://localhost:8080/www/)</li>
</ol>

# Authors
## Kaushik Jadhav
<ul>
<li>Github:https://github.com/kaushikjadhav01</li>
<li>Medium:https://medium.com/@kaushikjadhav01</li>
<li>LinkedIn:https://www.linkedin.com/in/kaushikjadhav01/</li>
<li>Portfolio:http://kaushikjadhav01.github.io/</li>
</ul>
