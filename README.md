<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>




SOFTWARE DEVELOPMENT 


PREPARED FOR:
Ahmed Ben Zayed
PREPARED BY
Omar El Hendawy


EXECUTIVE SUMMARY
Web application is a great base for providing different services because of it’s accessibility and ease of use.
Web applications developed the humanity life style now you can order almost every thing online, and you can manage millions of orders automatically or manually.


	

	1. Project Overview
Delivery of medicine to health insurance clients that’s the main goal, because most of health insurance clients elders with chronic diseases they suffer from the crowded health insurance centers and long waiting lines from this critical problems an solution popped up why don’t provide them with easy way and manageable solution so any one of them can order his/her medicine online from chat bots integrated with most used web application.
Just imagine if you are elder man with chronic disease and you live alone and you can’t move freely above all of that you have to suffer more and move for long distances in order to get your medicine,after you arrive to your destination you find that there is more than 30 similar case waiting in line to get there medicine just like you.
What if i told you that you don’t have to move even one step from where you are and there won’t be any waiting line you will order your medicine in less than 5 minutes and it will come to your door step.
It’s not a dream it’s achievable solution  with volunteering efforts.
2. Advantages
1. Zero install.
2. Reduce costs - less time spent talking to clients over the phone, eliminate printed materials; allow users to update their own details.
3. Centralised data is secure and easy to backup.
4. Quick and easy updates. 
5. Reach anybody, anywhere in the world. 
6. Available 24 hours a day, 7 days a week. 
7. Low spec PCs or smart phones can be used. 
8. Direct access to latest information - for Employees where every they are located.
9. Always up-to-date. 


3. Obstacles
1.  Internet not always 100% available.
2. Have to support different browsers, and different versions.
3. Un educated clients.
4. Health insurance database access not available.
5. How orders will be shipped and delivery time not defined yet.
6. Operations workflow not defined.
7. Continuous development is a must.


4. Technical Obstacles
1. Web server can ease the continuous growth.
2. Super admin access not available in shared hosting.
3. Must implements caching service like Redis to reduce the DB requests.
4. All developers are volunteered so any one of them can quit at any time which can put the project to an end.






Technology Stack


1. Web server with linux based OS.
  

-Because PHP programming language built in linux environment and the low cost of rent linux servers.














2. PHP Framework (Laravel Recommended).
Why PHP ?   
Cost –  PHP is free of cost, and as you know ASP.Net is a Microsoft product and hence comes with certain charges.
Fast Load Time – PHP results in faster site loading speeds. PHP codes runs much faster than ASP because it runs in its own memory space while ASP uses an overhead server and a COM based architecture.
Database Flexibility – PHP is flexible for database connectivity. It can connect to several databases the most commonly used is the MySQL.  MySQL can be used for free. If ASP is used, MS-SQL, a Microsoft product must be purchased.












3. Front-End Framework (Foundation of zurb Recommended).
Why foundation of zurb not Bootstrap?  
RTL Support – Bootstrap doesn’t support RTL designs which leads to external resources and libraries full of bugs.






















4. Mysql Database (Recommended).
Why Mysql ?  
1. Secure.
2. On-Demand Scalability.
3. High Availability.
4. Rock-Solid Reliability.
5. FREE.






















5. Redis caching Server (Recommended).
Why Redis ? 
  

1. Free.
2. An ideal caching solution for every application.






















WORK FLOW


  







Account Manager Dashboard:
Account manager dashboard shows important information about requests submitted from end users (Clients) ,enables them to either validate the request or decline it with straight forward actions,and create/read/update/delete  (CRUD) functionality. 


Orders Functions: 
1. Add Order.
2. Edit Order.
3. Delete Order.
4. View Order.


Dashboard Statistics: 
1. Orders Per Day Graph.
2. Orders Per Month Graph.
3. Number of completed orders.
4. Number of declined orders.
5. Number of under process orders




















Admin Dashboard:
Admin dashboard will have the ability to manage account managers with straight forward actions (create/read/update/delete)  (CRUD) functionality. 


Manage account manager users role Functions: 
1. Add users.
2. Edit users.
3. Delete users.
4. View users.