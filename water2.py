import MySQLdb
import smtplib
from datetime import date
import datetime
import calendar
import smtplib
from email.mime.text import MIMEText
 
today=date.today();


db = MySQLdb.connect(host="localhost", user="root", passwd="root123", db="Apartment")    

cursor = db.cursor()
cursor.execute("Select Water_id,Min(Amount) from Water group by Water_id")
result_set1 = cursor.fetchall()

notify_to=[]
cursor.execute("Select Water.Water_id,Amount,Email from Water, House_details, Users_info where Water.Water_id=House_details.Water_id and House_details.Head_id=Users_info.User_id and Date='2017-10-31';")
result_set2 = cursor.fetchall()
for row in result_set1:
	for row2 in result_set2:
		if row[0]==row2[0]:
			if row[1]<row2[1]:
				notify_to.append(row2[2])

notify=[]
cursor.execute("select Min(Amount),Room_count from Water, House_details where Water.Water_id=House_details.Water_id group by Room_count")
result_set3 = cursor.fetchall()
cursor.execute("select Amount,Room_count,Email from Water, House_details,Users_info where Water.Water_id=House_details.Water_id and House_details.Head_id=Users_info.User_id and Date='2017-10-31';")
result_set4 = cursor.fetchall()
for row in result_set3:
	for row2 in result_set4:
		if row[1]==row2[1]:
			if row[0]<row2[0]:
				notify.append(row2[2])


print "Based on similar households:", notify
print "Based on past usage:", notify_to

gmail_user = 'sranmakhija@gmail.com'  
gmail_password = 'motorola@123'

sent_from = gmail_user  
to = notify

subject = 'Water'
body = 'Increased Water consumption compared to past few months. Kindly cut down usage and prevent wastage of resource for the same.'

email_text = """\  
From: %s  
To: %s  
Subject: %s

%s
""" % (sent_from, ", ".join(to), subject, body)

try:
	server=smtplib.SMTP_SSL('smtp.gmail.com', 465)
    	server.ehlo()
    	server.login(gmail_user, gmail_password)
	server.sendmail(sent_from, to, email_text)
    	server.close()

    	print 'Email sent!'
except:  
    	print 'Something went wrong...'
