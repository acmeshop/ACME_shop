# ACME SHOP - a web-based experimental manipulation of self-objectification in the workplaces, designed for research purposes
## Introduction
The ACME shop paradigm is a web-based experimental manipulation of self-objectification in the workplaces, designed for research purposes.
On these pages, you can find:
- Preview of the paradigm (online version)
- How to use the paradigm for experimental purposes
- How to download & customize the study
- How to install and run the downloaded versions on a personal computer or on a web server online
- How to link the paradigm to an online survey and to a Qualtrics survey


## Try it out
To try out the ACME shop paradigm follow this link:
[https://acmeshop.github.io/ACME_shop/](https://acmeshop.github.io/ACME_shop/)


## More about the paradigm
The ACME shop paradigm was created as an ad hoc simulation of a computer job activity by adapting a paradigm used in organizational work laboratory research (Häusser et al., 2014; Experiment 1). The ACME shop consists in a computer environment that simulates an online shop. When participants access the online shop, the web-based script randomly assigns them to one of three conditions (objectifying vs non-objectifying vs control) in which they are asked to perform tasks that, depending on the condition, varied on the basis of the objectifying level of the activity.

In the objectifying condition, the first five tasks are training tasks. Therefore, the first two tasks last 60 seconds, the third-fourth and fifth tasks last 45 seconds. Then each task lasts 30 seconds. The total expected time to complete the objectifying condition is about 20 minutes (including the reading of the instructions page). 

The control condition has 10 tasks of 2 minutes each one, therefore the total expected time to complete the control condition is about 20 minutes (including the reading of the instructions page). The non-objectifying condition has sixteen tasks that have not an imposed time. Depending on the ability of participants, the total expected time to complete all the tasks is about 20 minutes (including the reading of the instructions page). 

In order to keep the two experimental conditions as balanced as possible, we suggest stopping the non-objecting activity after about 20 minutes.
The ACME shop paradigm does not register any responses or personal data of participants. If you need to collect participants’ data, we recommend you to link the paradigm to an online survey.

At the end of each condition, you have the possibility to link directly the paradigm to an online survey (see paragraph 7), which can contain sociodemographic questions, manipulation checks, dependent measures, and/or connection to subsequent tasks, depending on your research questions.

## Files and folders structure
Acme shop is distributed in zip format. Before setting your environment, please unzip it. Once the original zip file has been decompressed, the files and subfolders composing the web paradigm are organized as follows:
- ACME_shop_intro_page html -> the file named “ACME_shop_intro_page.html” presents the direct links for running the three experimental conditions separately. It is usually used by the experimenter to choose a particular experimental condition.
- randomizer.php -> the file named “randomizer.php” performs a randomization on the three experimental conditions (33% chance for each condition). It is used for fully randomized experimental studies.
- control -> This folder contains the files for the control condition. The starting file for the task is the file named "acme_shop_baseline.html".
- not_obj_cond -> This folder contains the files for the non-objectifing condition. The starting file for the task is the file named " acme_shop_1.html". 
- obj_cond -> This folder contains the files for the objectifing condition. The starting file for the task is the file named " acme_shop_2.html". 
- other files and folders -> Other files and folders (i.e., css, img) are necessary folders needed by Acme shop to run properly.


## How to use the paradigm

Set it up on your own computer
Acme Shop can be used simply with a web browser, being built entirely with HTML, CSS and JS language. To start the experimental task in a browser just open the file named ACME_shop_intro_page.html from Chrome, Firefox Safari or any other web browser and starting from there, just select the experimental condition of interest.
![image1](https://raw.githubusercontent.com/acmeshop/ACME_shop/gh-pages/docs/1.jpg)
By default, an internet connection will still be necessary as not all Javascript libraries are included in the ZIP file.

## How to randomize conditions
You can automatically randomize the three experimental conditions, by simply launching the file named “randomizer.php”, located in the root folder of ACME shop.
To launch this file, you will need to set up a local web server. Doing this is quite simple and can easily be accomplished on Windows and Mac. There are many types of web servers available, but we suggest using MAMP web server that relay on the Apache, as it is the most common server around, very easy to set up, and compatible with all major operating systems.
MAMP is a free, local server environment that can be installed under macOS and Windows with just a few clicks. This software is a one-click-solution for setting up your personal web server. MAMP installs a local server environment in a matter of seconds on your computer.
- See [https://documentation.mamp.info/en/MAMP-Mac/](https://documentation.mamp.info/en/MAMP-Mac/) for setting up MAMP on OSX
- See [https://documentation.mamp.info/en/MAMP-Windows/](https://documentation.mamp.info/en/MAMP-Windows/) for setting up MAMP on windows.

After installing MAMP on your computer, just copy the entire ACME shop folder in the HTDOCS folder of MAMP


_On Windows: C:/MAMP/htdocs_

![image2](https://raw.githubusercontent.com/acmeshop/ACME_shop/gh-pages/docs/2.png)



_On Mac: Applications/MAMP/htdocs_

![image3](https://raw.githubusercontent.com/acmeshop/ACME_shop/gh-pages/docs/3.png)



### Launch MAMP web server

![image4](https://raw.githubusercontent.com/acmeshop/ACME_shop/gh-pages/docs/4.png)

Client-Server programs, such as MAMP, when addressed via the network or via localhost, need to be assigned to a certain network port. This way, multiple server programs may run on one server machine. Every service has a default port: The MAMP web server typically uses port 80, the MySQL database server utilises port 3306. By default, MAMP is set to work on port 80. If you are running applications that are using port 80 (such as Skype) you may have some problems in running MAMP on your local computer. Luckily, MAMP allow you to change the default ports both on windows and on mac. For further instruction on how to change the default port on MAMP, please reade here
On Windows -> [https://documentation.mamp.info/en/MAMP-PRO-Windows/Settings/Ports/](https://documentation.mamp.info/en/MAMP-PRO-Windows/Settings/Ports/)
On Mac -> [https://documentation.mamp.info/en/MAMP-Mac/Preferences/Ports/](https://documentation.mamp.info/en/MAMP-Mac/Preferences/Ports/)


Depending on your local configuration, browse one of the following link on your local server to launch the randomizer:
- http://localhost/ACME/randomizer.php 
- http://localhost:8888/ACME/randomizer.php 
- http://127.0.0.1/ACME/randomizer.php 
- http://127.0.0.1:8888/ACME /randomizer.php

## Set it up on a web server

The ACME shop task can be easily made available online, as it runs in a browser and has minimal server requirements. Any server that allows hosting of static webpages should work and offers at least 15 MB of disk space should do, meaning that it can potentially be hosted for free. The files from the computer are transferred to the remote server for example by means of a FTP program.

We recommend using Filezilla to transfer files to a webserver. 
For more information on how to use filezilla please visit [https://www.siteground.com/tutorials/ftp/filezilla/#How_to_upload_files_using_the_FileZilla_FTP_client](https://www.siteground.com/tutorials/ftp/filezilla/#How_to_upload_files_using_the_FileZilla_FTP_client)
 
## ACME shop customization
For more customization you can download the source code of the paradigm. Download the code as a ZIP file and extract the files to your computer. The ACME shop paradigm is written in standard HTML, CSS and JAVASCRIPT. You can you can customize the task presentation by editing the script files.

## Update data for presenting the task (not objectifying condition)

### Updating the appointments of the ACME calendar

![image5](https://raw.githubusercontent.com/acmeshop/ACME_shop/gh-pages/docs/5.png)

When running the ACME shop task, participants in the non-objective condition will be asked to solve some tasks such as checking the list of appointments or creating new appointments by editing a calendar. Appointments should be customized according to the current date and time participants perform the test.

To customize the calendar appointments, you should edit the file named “calendar.html” in the ACME shop folder “not_obj_cond” (ACME_shop/ not_obj_cond/calendar.html). 

To do so, simply open the with a text editor or some specific HTML editor and change the defaultDate parameter (line 22 of the original code) with the date in which you are running the test.
![image6](https://raw.githubusercontent.com/acmeshop/ACME_shop/gh-pages/docs/6.png)
You should also update the appointments already present in the calendar by editing or adding new appointments in the same file.
Each appointment is composed by a title, a start date and an end date, as follow:

> {
	title: 'Warehouse inventory',
	start: '2016-03-1',
	end: '2016-03-1'
		             }

![image7](https://raw.githubusercontent.com/acmeshop/ACME_shop/gh-pages/docs/7.png)               

### Change the currency

The Acme Shop task presents all monetary values in pounds. To change the value of the currency in accordance with the currency of your country, you will need to edit all the files of the paradigm. To do this, simply run a “find and replace” with a text editor by finding the "£" symbol and change it with the symbol of your current currency.

## Linking an online survey to the paradigm
At the end of the experimental task, the participant is usually redirected to a web survey. Any survey link can be specified. 

To insert the link to your web survey it is necessary to edit the file named “end_task.html” that is present in each folder (obj_cond, not_obj_cond, baseline), by changing the “#” with the url to your survey (i.e., [https://qualtrics.unimib.it/mysurvey](https://qualtrics.unimib.it/mysurvey)) and change the string value “Put the link for your survey here” with something more catchy, as “please answer some questions”.
![image8](https://raw.githubusercontent.com/acmeshop/ACME_shop/gh-pages/docs/8.png) 

### Linking Qualtrics survey with custom parameters

The script will extend the survey link by additional variables that can be read out by the survey, mainly to pass on the condition.
If you are using Qualtrics, you can pass information into a survey and save it as Embedded Data by using a query string. Doing so requires appending information to the end of the survey URL. Once information is successfully passed into a survey, you can use it in your logic and display it to participants.
![image9](https://raw.githubusercontent.com/acmeshop/ACME_shop/gh-pages/docs/9.png) 

You can use this EXP_CON information in your data to differentiate subjects into different experimental conditions.

For further information on how to pass parameters to Qualtrics please visit [https://www.qualtrics.com/support/survey-platform/survey-module/survey-flow/standard-elements/passing-information-through-query-strings/](https://www.qualtrics.com/support/survey-platform/survey-module/survey-flow/standard-elements/passing-information-through-query-strings/)

## How to change the study instructions
Similarly, to edit task instructions, open the file index.html present in each experimental condition folder on your computer with an editor and save your changes.
