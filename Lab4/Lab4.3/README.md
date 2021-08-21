To run this program, I need to have a web server(such as Apache and Nginx) on. I do this by downloading the MAMP software (Link for download: https://www.mamp.info/en/downloads/), then I set the Document root to this folder (Lab4), then click the "start" button on the top-right. (The default port for both Apache and Nginx are 8888, you can also change it in MAMP preferences setting )

Then I can open the index.html file using the link http://localhost:8888/lab4.3/index.html

The page look like this:

![htmlpage.png (1306×1376) (raw.githubusercontent.com)](https://raw.githubusercontent.com/Jiawei41/CISC3140-LargeScaleWeb/main/Lab4/Lab4.3/img/htmlpage.png)

In this page, you can search the data from only gender or only English as 2nd language or both. Once select at least one of them, click on "Diaplay" button,then the php file will respond to the submission. It will get the data that satisfy the condition from the database the data and display as json format.

Here is a sample respond:

![phpoutput.png (2116×550) (raw.githubusercontent.com)](https://raw.githubusercontent.com/Jiawei41/CISC3140-LargeScaleWeb/main/Lab4/Lab4.3/img/phpoutput.png)
