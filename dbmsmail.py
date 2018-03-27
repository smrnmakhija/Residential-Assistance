import MySQLdb
import smtplib
import sys

db = MySQLdb.connect(host="localhost", user="root", passwd="root123", db="Apartment")    
cursor = db.cursor()
try:
    #mysql = MySQLdb.connect(host="localhost", user="root", passwd="root123", db="Apartment")
    #cursor = mysql.cursor()

    cursor.callproc( 'avg_fee' )
    results=cursor.fetchone()
    summ= results[0]
    #print results

    #cursor.close()
    #db.close()

except MySQLdb.Error, e:
    print "MySQL Error %d:  %s" % ( e.args[0], e.args[1] )
    sys.exit(1)
#print(summ)


cursor.execute("SELECT count(*) from House_details")
house_count = cursor.fetchall()
for row in house_count:
	num=row[0]

fac_fee=summ/num

print fac_fee
cursor.execute("SELECT Parking_lots, Room_count from House_details")
result_set = cursor.fetchall()

parking_fee=50
room_fee=100
fee=[]
for row in result_set:
  #print "%s, %s" % (row[0], row[1])
	fee.append(row[0]*parking_fee+row[1]*room_fee+fac_fee)
receiver_id=[]
cursor.execute("SELECT Email from Users_info U, House_details H where U.User_id=H.Head_id")
ids=cursor.fetchall()
for row in ids:
	receiver_id.append(row[0])

db.close()
for i in range(0,len(ids)):
	print "House", i+1
	print(receiver_id[i])
	print(fee[i])

gmail_user = 'sranmakhija@gmail.com'  
gmail_password = 'motorola@123'
sent_from = gmail_user  
for i in range(0,len(ids)):
	to = [receiver_id[i]] 

	subject = 'Fee'
	body = fee[i]

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

