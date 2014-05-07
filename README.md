NORDAKADEMIE Noten Service
==========================
##Installation##
Uses CasperJS, so make sure you installed that correctly

##Usage##
1. Change your pass.js to your credentials.
2. Configure Pass.js with your email, and a URL pointing to a server with the mail.php on it
3. Set an secret API Key in the mail.php and your pass.js
3. Use `casperjs cis.js` to run


##Requirements##
- A server able to run CasperJS
- A server running PHP to send Mails
- A cronjob to the script repeatedly

##Cronjob##
For a cronjob you might want to adjust the pass.js include on line 7 depending on how you execute your cronjob.
You might also want to consider using the provided run.sh for that, since casperJs seems not to be so cron-friendly as of right now.
