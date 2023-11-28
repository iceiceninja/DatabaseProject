# DatabaseProject
PHP using XAMPP to run  mysql db and Apache webserver. The final project for class. Enter at login.php.

### **Message in discord for what you will be working on to avoid merge conflicts!**

## TODO MANDATORY
- Make login work (make just an admin profile that we all log into maybe? And every other login fails?)
- Once you log in it should take you to either a home page where you can choose to go to the book manager or user manager (or any other pages that we have) or it should just take you directly to the book manager page if no other pages have been made.
- The book manager has forms for every CRUD operation and will allow users to perform database operations such as adding and deleting books. The functionality behind each form has been split up into individual operations (Create, read (search), update, delete) and separate files have been made to handle each operation. This should different people to work on different operations without merge conflict. This step can be shared amongst several people.

## TODO OPTIONAL
- Create a user manager page and have CRUD operations for users as well. This should list all users and allow you to make changes to their usernames, passwords, and any other information
- Add sign up page to create user accounts
- Make pages look good (add css)


### Files
- login.php: This should be the starting page that users are sent to. Once you log in it should take you to a home.php
- book_manager.php: This file has forms for every operation of CRUD and a place to display output.
- (CRUD OPERATION)Book.php: These files are the logic that makes the forms on book_manager.php work. Logic needs to be implemented
- getData: example of how to connect to mySQL database and perform database operation. THIS IS UNSAFE AS IT DOES NOT USE PREPARED STATEMENTS! Currently not used by the website, but only there as reference if you need.