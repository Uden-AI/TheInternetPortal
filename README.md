<p align="center">
    <a href="https://theinternetportal.net/" target="_blank" rel="noopener noreferrer"><img src="https://raw.githubusercontent.com/Uden-Ai/TheInternetPortal/master/website/assets/images/logo-white.svg?sanitize=true"
        height="300"></a>
</p>

<p align="center">
    <a href="https://github.com/Uden-AI/TheInternetPortal/blob/master/LICENSE" alt="License">
        <img src="https://img.shields.io/github/license/Uden-AI/TheInternetPortal" /></a>
    <a href="https://github.com/Uden-AI/TheInternetPortal/graphs/contributors" alt="Contributors">
        <img src="https://img.shields.io/github/contributors/Uden-AI/TheInternetPortal" /></a>
    <a href="https://github.com/Uden-AI/TheInternetPortal/graphs/commit-activity" alt="Activity">
        <img src="https://img.shields.io/github/commit-activity/m/Uden-AI/TheInternetPortal" /></a>
    <br>
    <b>Your One Way Ticket to the Madness of the Internet</b>
</p>

## What is The Internet Portal?


<p>The Internet Portal is a website designed by <a href="https://sberman.me" target="_blank" rel="noopener noreferrer">Samuel Berman</a>, edited by <a href="https://erikuden.com/" target="_blank" rel="noopener noreferrer">Erik Uden</a> and currently maintained by <a href="https://uden.ai/" target="_blank" rel="noopener noreferrer">Uden AI</a>. With the press of a button, you will be transported to a random website out of over 219 million in our database. All websites are weighted equally, so unlike a search engine, The Internet Portal can show you what kind of websites the majority of the internet is made of. A live version can be found at <a href="https://theinternetportal.net" target="_blank" rel="noopener noreferrer">TheInternetPortal.net</a>.</p>

## How does it work?

<p>Each time you press the button, The Internet Portal links you to a random website from our database. These websites have been downloaded and compiled from the <abbr title="Domain Name System">DNS</abbr> using <abbr title="The Internet Corporation for Assigned Names and Numbers">ICANN</abbr>'s <a href="https://czds.icann.org/home" target="_blank" rel="noopener noreferrer">Centralized Zone Data Service</a>. Our usage of the CZDS is allowed under ICANN's <a href="https://czds.icann.org/zone-requests/terms/1.00" target="_blank" rel="noopener noreferrer">Terms and Conditions</a>.</p>

<br>

NOTE: **The Internet Portal** currently only hosts domains accessible via the *Centralized Zone Data Service* (CZDS) by *ICANN*, which is only *1169* out of the *1589* available top level domains. TLDs such as .tk are not part of the CZDS and are hence missing from our database. We are planning on expanding the service, as well as our documentation, to include domains from those TLDs as well, or at least making them an option, same with [*eepsites*](https://en.wikipedia.org/wiki/I2P#Terminology) and [*onion sites*](https://en.wikipedia.org/wiki/.onion)! If you hold databases of TLDs not accessible of the CZDS, they can still easily be added by following our guide in the documentation too. Refer to [Step 1.4](#step-1.4-turn-all-zone-files-into-one-csv-file) to learn how to compile all zone files into one CSV file and possibly add your own zone files to the database. 


To Do:
- Implement count down timer on loading page (to tell people that the website timed out and ain't loading)
- Put loading domain on the loading page
- Put re-do button in case load fails
- Add non-CZDS


## This repo hosts:

- The Internet Portal [Frontend and Server Code](https://github.com/Uden-AI/TheInternetPortal/tree/main/website)
- Step by Step Explanation on how to Self-Host The Internet Portal:
  - [Step 1:](#step-1-download-all-domains-via-icanns-czds) Download All Domains via ICANN's CZDS
  - [Step 2:](#step-2-setup) Setup
    - [Setup With Docker](#setup-with-docker)
    - [Setup With Any PHP-Webhost](#setup-with-any-php-webhost)
  - [Step 3:](#step-3-import-database-containing-all-domains) Import Database Containing All Domains

**In Collaboration With [Fediverse-Share](https://github.com/Uden-AI/fediverse-share), Made for The Internet Portal!**

<br>
<br>
<br>

## Step by Step Explanation on how to Self-Host The Internet Portal

### Step 1: Download All Domains via ICANN's CZDS and Turn them into One CSV File
ICANN, or the Internet Corporation for Assigned Names and Numbers, allows all people or companies for various reasons (including this one) to **download the zone files** from *generic Top Level Domains* (gTLDs) via the *Centralized Zone Data Service* (CZDS). A top level domain is something like ".com" or ".sexy". The zone files are, among other things, a complete record of every domain registered in that top level domain. Meaning, for example, there is a server that has the authority over all .com domains and has an entry (zone files) for every .com domain, meaning erikuden.com, iteroni.com, etc. are all stored on that server. Through the CZDS we can completely legitimately request 1169 of the 1589 TLD zone files, giving us a complete record of every domain ever registered for that top level domain. Repeat that process for all 1169 top level domains and you have a complete record of almost every domain on the entire internet. That full record will become the basis for The Internet Portal Database needed later. 

However, since that request and download process from the CZDS can take a long time, it is recommended to begin with it first.

#### Step 1.1: Create an Account on CZDS.ICANN.ORG
If you need guidance going through the account creation process, use this guide. Any uncommonly known terms or questionable info required for the CZDS account creation process is explained here.
NOTE: To create an account at CZDS ICANN you will require to give the following personal info:
- E-Mail
- Phone number
- Country of residence
- Exact address
- (IP, Browser-info, anything collected by cookies, etc.)

If you are not willing / incapable of giving such personal information then that is a problem, as ICANN's CZDS data cannot (legally) be acquired any other way. We have to remind you that someone else requesting the data for you and sharing the raw data with you is not permitted by ICANN's terms of service. 



1.1.00 Go to https://czds.icann.org/ then click on "Create a New Account"
1.1.01 Enter Your E-Mail
1.1.02 Enter A Username (same as E-Mail)
1.1.03 Enter Your Legal First Name
1.1.04 Enter Your Legal Last Name
1.1.05 Agree to ICANN's [Terms of Service](https://www.icann.org/privacy/tos)
1.1.06 Confirm that You are Not a Robot
1.1.07 Submit your Account Registration

Now an account activation E-Mail will be sent to your mail address, you need to click on it to continue the account registration process.

1.1.08 Enter a Password that fits the Requirements Requested.
NOTE: An example of a secure password that ICANN accepts is "aHR0cHM6Ly93d3cuaWFuYS5vcmcvcmVwb3J0cw=="
NOTE: Be sure to absolutely remember your E-Mail and Password as they are crucial in requesting the zone files from the CZDS API later. Write it down on a piece of paper or use a [password manager](https://keepass.info/) of your choice.

1.1.09 Specify a Preferred Name
1.1.10 Specify the Country You Currently Reside in (Or Will Download the Root Files from)
NOTE: As I understand it, this isn't specifically your country of residence as later on, you will be asked to provide exact address, city, state and country, zip, and country details. 

1.1.11 Specify "Unaffiliated" as you are (most likely) not affiliated with any ICANN Supported Organization or Advisory Committee
1.1.12 Depending on your previous "Country or Territory" selection, you may have to specify a "Regional or Constituency Group".
1.1.13 Click "Activate Account"

You will now be forwarded to the default ICANN login page: https://account.icann.org/login

1.1.14 Enter your E-Mail
1.1.15 Enter your Password

You will now be forwarded to the CZDS ICANN Registration Page: https://czds.icann.org/user/register
You should receive a confirmation E-Mail for your successful login from ICANN.

1.1.16 Enter the name of the organization that you are applying on behalf of, or if you are applying as an individual tick the box "I am applying as an indivdiual"
1.1.17 Enter your address
1.1.18 Enter your second address (optional)
1.1.19 Enter the name of your City, Province, your address' zip code, and your country's two letter ISO 3166-1 alpha-2 code. 
NOTE: If you are unsure what your country's two letter code is, check here: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2

1.1.20 Enter a legitimate working phone number you are able to acces and could be reached with in case ICANN or any of the 1169 top level domain operators have questions about your request.
NOTE: This is highly unlikely and has only happened to me once with a specific chinese top level domain where they contacted me via E-Mail, so do not worry about it, still, I suggest leaving a legitimate phone number.

1.1.21 Tick "I do not have a Fax Number" as you most likely don't.
1.1.22 Leave the section about SFTP IP Addresses blank.
NOTE: For the sake of this documentation, and to recreate The Internet Portal, no SFTP access is needed. We will utilize ICANN's API to download all zone files using a python script provided by ICANN themselves later on, hence entering your IP address to access these files via SFTP is only necessary if you have any other plans. Keep in mind that you may not have a static IP address, hence anything you enter may become invalid sooner than later anyway. If you plan on using SFTP for any reason to transfer zone files, make sure your ISP provides a static IP address.

1.1.23 Agree to ICANN's [Privacy Policy](https://www.icann.org/privacy/policy) and [Terms of Service](https://www.icann.org/privacy/tos)
1.1.24 Click on "Next to Terms of Use"
1.1.25 Read the Terms of Use and Accept them
1.1.26 Click "Submit"

You will now see the [CZDS Dashboard](https://czds.icann.org/zone-requests/all) in front of you, here you can see all results of your domain requests, or merely all *Pending*, *Approved*, *Denied*, *Revoked*, *Expired*, or *Canceled* requests. This dashboard will later list the 1169 Top Level Domain zone file requests and categorize them into the previously mentioned states. In the following I will explain what settings are optimal to request, what to write in your request to truthfully convey what you are planning on doing with the data, and afterwards we will discuss how to download and process the zone files into one hundreds of millions of domains long database.

#### Step 1.2: Request the Zone Files from the Centralized Zone Data Service (CZDS)

##### Step 1.2.0 Turn off E-Mail Notifications (Optional)
1.2.00.0 Go to the [CZDS Dashboard](https://czds.icann.org/zone-requests/all and click on the settings icon in the top right
1.2.00.1 Click on "Account Information"
1.2.00.2 Verify whether all information entered under "Account & Profile Information" is accurate, then scroll to the bottom of the page to the "Notifications" settings.
1.2.00.3 Press "Edit" then untick "receive email notifications" to turn it off.
Note: You are about to request 1169 top level domain zone files, if you do not turn this off, you will receive 1169 E-Mails for submitting a request, 1169 E-Mails for that request being accepted or denied, and then in days, months, weeks, or years, 1169 E-Mails for that request expiring. I urge you to turn it off, especially if you use some privately hosted or limited E-Mail. 

##### Step 1.2.1 Request the Zone Files
1.2.1 Go to the [CZDS Dashboard](https://czds.icann.org/zone-requests/all)
1.2.2 Click on "Create New Request"
1.2.3 Tick the box "All Available TLDs (1169)" inside of the scrolling-field where any TLDs can be selected.
Note: You will now see "All Available TLDs (1169)" inside of the "Request access to:" box.
Note: If any specific TLD request ever expires, or some specific TLD rejects your request, 

1.2.4  In the "Reason for requesting access" Box, you are asked to write 1-2 sentences (*300 characters max.*) about why you wish to access this data. If you are only using the zone files for hosting The Internet Portal, write the following:
> I am planning to use this data to host a website through which any user could randomly visit any of the domains registered with your TLD. They press a button and are arbitrarily sent to any domain registered with your (and 1168 others) TLDs.  More info: https://github.com/Uden-AI/TheInternetPortal

1.2.5 Press "Next"
1.2.6 Read the Terms and Conditions, then check "I agree to these Terms and Conditions"
1.2.7 Finally, click "Request Zone Files"
The following text should appear:
> You have requested zone files for ALL TLDs.

> Your request has been successfully completed. You will be notified via email when the Registry has taken action on your request. Please allow one week for Registries to respond to your request. You may check the status of your requests on your dashboard. If you have any trouble, please direct any questions or feedback to globalsupport@icann.org. 

You, following these instructions, will obviously not be notified by E-Mail, so simply check back on the main [CZDS Dashboard](https://czds.icann.org/zone-requests/all). You can see all pending, approved, denied, revoked, etc. requests here, so I see no reason to activate E-Mail notifications.

Usually, some TLDs, such as .com, etc. should already approve your request within seconds. I tried this, and over 900 TLDs have accepted my request within 3 minutes. Most often, however, every TLD accepting your request takes weeks, the vast majority will have accepted within one day, but there is always one TLD that likes taking their time. If any specific TLD denies your request, you can select them again after creating a new request and maybe reword the request or ask why they rejected. 

#### Step 1.3 Download All Zone Files

#### Step 1.4 Turn All Zone Files Into One CSV File

remember to mention how to import non-czds tlds

A sugar powdered, sprinkled, torus-shaped pastry as a reward for the hard effort required to complete this step!

            _..------.._ mmmh, how much
          .'   .-""-.   '. I love to treat 
          |\   '----'   /|  myself with some 
          \ `'--------'` / sugar powdered,
           '._        _.' sprinkled, 
              `""""""` torus-shaped pastry!
          Now onto Step 2...



### Step 2: Setup






#### Setup With Docker




Now that you're done with the docker version of step two, take some 
time off by going to the large body of water where the land ends!
					___
          __	 __/_  `.  .-"""-.
 \ ______/ V`-,	 \_,` | \-'  /   )`-')
  }20210602/~~	  "") `"`    \  ((`"`
 /_)^ --,r'		 ___Y 20210609.'7 /| 
|b      |b		(_,___/...-` (_/_/  
There sure are many of these animals here!
		What a Memorial!




Claim both sides of the dot!

#### Setup With Any PHP-Webhost





Now that you're done with the web-host version of step two, take some
time off by going to the small body of water surrounded by land!
⠀⡠⡤⢤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⢿⡢⣁⢄⢫⡲⢤⡀⠀⠀⠀⠀⢀⠄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠘⣧⡁⢔⢑⢄⠙⣬⠳⢄⠀⠀⣾⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠘⢎⣤⠑⣤⠛⢄⠝⠃⡙⢦⣸⣧⡀⠀⢠⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠈⢧⡿⣀⠷⣁⠱⢎⠉⣦⡛⢿⣷⣤⣯⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠈⠉⠛⠻⢶⣵⣎⣢⡜⠣⣠⠛⢄⣜⣳⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠈⠻⢿⣿⣾⣿⣾⣿⣿⣿⣿⣿⣿⣷⣄⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⣿⠟⠛⠛⠛⢿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠋⠀⠀⠀⠀⠀⠙⠿⣿⣿⣿⣿⣿⣿⣿⠂⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⠿⠋⠁⠀⠀⠀⠀
       Why is this here?
		   Charity!






### Step 3: Import Database Containing All Domains


Good root / user password: L2luL2FrcmFtLWF0YWxsYWgv




Finally having completed the entirety of setting up The Internet Portal,
I want you to take a break by looking at the sky deep in the night.
                     .--------------.
                 .---'  o        .    `---.
              .-'    .    O  .         .   `-.
           .-'     @@@@@@       .             `-.
         .'@@   @@@@@@@@@@@       @@@@@@@   .    `.
       .'@@@  @@@@@@@@@@@@@@     @@@@@@@@@         `.
      /@@@  o @@@@@@@@@@@@@@     @@@@@@@@@     O     \
     /        @@@@@@@@@@@@@@  @   @@@@@@@@@ @@     .  \
    /@  o      @@@@@@@@@@@   .  @@  @@@@@@@@@@@     @@ \
   /@@@      .   @@@@@@ o       @  @@@@@@@@@@@@@ o @@@@ \
  /@@@@@                  @ .      @@@@@@@@@@@@@@  @@@@@ \
  |@@@@@    O    `.-./  .        .  @@@@@@@@@@@@@   @@@  |
 / @@@@@        --`-'       o        @@@@@@@@@@@ @@@    . \  
 |@ @@@@ .  @  @    `    @            @@      . @@@@@@    |   
 |   @@                         o    @@   .     @@@@@@    |   
						 20180323
 |  .     @   @ @       o              @@   o   @@@@@@.   |     
 \     @    @       @       .-.       @@@@       @@@      /
  |  @    @  @              `-'     . @@@@     .    .    |
  \ .  o       @  @@@@  .              @@  .           . /
   \      @@@    @@@@@@       .                   o     /
    \    @@@@@   @@\@@    /        O          .        /
     \ o  @@@       \ \  /  __        .   .     .--.  /
      \      .     . \.-.---                   `--'  /
       `.             `-'      .                   .'
         `.    o     / | `           O     .     .'
           `-.      /  |        o             .-'
              `-.          .         .     .-'
                 `---.        .       .---'
                      `--------------'
			Is this what you see? If only you could 
			 turn it into a stuffed plush and sleep 
			         with it every night. 
						 Such Style!
					 


Thank you for setting up The Internet Portal! If you have any questions, contact us at info@theinternetportal.net and we will be happy to help!


aHR0cHM6Ly93d3cuaWNhbm4ub3JnL3Jlc291cmNlcy9wYWdlcy9saXN0aW5nLTIwMTItMDItMjUtZW4=




mysql> USE theintal_domains
Database changed


mysql> CREATE TABLE domains (
    -> id INT NOT NULL AUTO_INCREMENT,
    -> column_1 VARCHAR(255) NOT NULL
    -> PRIMARY KEY (id)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(id)
)' at line 4
mysql> CREATE TABLE domains ( id INT NOT NULL AUTO_INCREMENT, column_1 VARCHAR(255) NOT NULL, PRIMARY KEY (id) );
Query OK, 0 rows affected (0.66 sec)

mysql> LOAD DATA INFILE '/var/lib/mysql-files/domains.csv'
    -> INTO TABLE domains
    -> FIELDS TERMINATED BY ','
    -> LINES TERMINATED BY '\n'
    -> (domain);
Query OK, 219905499 rows affected (7 hours 57 min 46.13 sec)
Records: 219905499  Deleted: 0  Skipped: 0  Warnings: 0

mysql>
