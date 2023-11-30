# DatabaseProject
PHP using XAMPP to run  mysql db and Apache webserver. The final project for class. Enter at login.php.

### **Message in discord for what you will be working on to avoid merge conflicts!**

## TODO MANDATORY
- [x] Make login work (make just an admin profile that we all log into maybe? And every other login fails?) (JOSH)
- [x] Once you log in it should take you to either a home page where you can choose to go to the book manager or user manager (or any other pages that we have) or it should just take you directly to the book manager page if no other pages have been made. (JOSH)
- [x] BookManager CRUD operations (JOSH)
## TODO OPTIONAL
- [ ] Create a user manager page and have CRUD operations for users as well. This should list all users and allow you to make changes to their usernames, passwords, and any other information
- [ ] Add sign up page to create user accounts
- [x] Make pages look good (add css)


### Files
- login.php: This should be the starting page that users are sent to. Once you log in it should take you to a home.php
- book_manager.php: This file has forms for every operation of CRUD and a place to display output.
- (CRUD OPERATION)Book.php: These files are the logic that makes the forms on book_manager.php work. Logic needs to be implemented
- home.php: This is where you go after login. Gives you menu options to go to the book manager or to go to a user manager maybe?
- authenticate.php: handles login. Makes sure the username and password return a user.