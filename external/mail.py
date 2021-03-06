# !/usr/bin/env python
# title           :mail.py
# description     :This will create a header for a python script.
# author          :"Arun Verma"
# copyright       :"Copyright 2016, The Department Internal Online System(DIOS) Project"
# credits         :["Arun Verma",]
# date            :20/6/16
# license         :"Apache License Version 2.0"
# version         :0.1.0
# usage           :python mail.py
# notes           :
# python_version  :2.7.11
# maintainer      :"Arun Verma"
# email           :"v.arun@iitb.ac.in"
# status          :"D" ["Development(D) or Production(P)"]
# last_update     :20/6/16
# ==============================================================================

# Import the modules needed to run the script.
import smtplib

to = 'prashant.palkar@iitb.ac.in'
user = 'v.arun'
pwd = '*****'
smtpserver = smtplib.SMTP("smtp-auth.iitb.ac.in",25)
smtpserver.ehlo()
smtpserver.starttls()
smtpserver.ehlo()
smtpserver.esmtp_features['auth']='LOGIN DIGEST-MD5 PLAIN'

smtpserver.login(user, pwd)
header = 'To:' + to + '\n' + 'From: ' + user + '@iitb.ac.in\n' + 'Subject:Leave Application \n'
msg = header + '\n Student applied for leave. Please visit IEOR leave management portal to approve or disprove.\n\n'
smtpserver.sendmail(user, to, msg)
smtpserver.close()
