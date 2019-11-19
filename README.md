# Simple php_login sample
This sample is made by two templates.

At first, `AdminLTE 3`.  
`AdminLTE` is a fully responsive administration template. Based on Bootstrap 4 framework.   
Highly customizable and easy to use. Fits many screen resolutions from small mobile devices to large desktops.


The second, `Login Form 1 by Colorlib`.  
`Login Form 1 by Colorlib` is simple, creative and vibrant login form with a gradient background.   
You can use this one for all sorts of intentions, like web, mobile or desktop applications. But do get creative with it if you like.

If you want to use this sample code, you have to make a database.

## Rule of database
```sql
+-------+--------------+------+-----+---------+----------------+
| Field | Type         | Null | Key | Default | Extra          |
+-------+--------------+------+-----+---------+----------------+
| id    | int(10)      | NO   | PRI |         | auto_increment |
| name  | varchar(15)  | NO   |     |         |                |
| pass  | varchar(30)  | NO   |     |         |                |
+-------+--------------+------+-----+---------+----------------+
```
If you want to add other colums, you should do.

## Function
This login sample has simple functions.  
It is important for the login function to make this safe.
- session
- session destroy (when the user logout)
- redirect
- validation
