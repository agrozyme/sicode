/**
 *  Signup Code
 *  Project started on 2012-08-03
 *  Update: 2012-08-07
 */


This module based on:
signup            : http://drupal.org/project/signup
Registration code : http://drupal.org/project/regcode


Summary
-------
This project integrate Signup and Registration code. Provide
Registration code into Signup form. The management UI is use same
as Registration code module, and add "Disable Registration codes"
and "Assigned Signup code owner" features.


Basic Functionality
-------------------
Here is feature list of this module:

* Add Registration code into Signup form
* Disable Registration codes
* Choose Signup code owner role
* Assigning Signup code owner
* Integrate views and VBO modules


Requirements and Dependencies
-----------------------------
 * signup                    --- http://drupal.org/project/signup
 * Registration code         --- http://drupal.org/project/regcode
 * views                     --- http://drupal.org/project/views
 * Views Bulk Operations     --- http://drupal.org/project/views_bulk_operations

 
Installation and Settings
-------------------------
TO successful completion of this installation. 

First, you must to install above "Dependencies" module, and according to the 
following steps:

1) Take the "sicode" folder to the modules folder in your installation.

2) Enable the module using Administer -> Site building -> Modules
   (/admin/build/modules).
   
3) Settinga and onfigure this module (admin/user/sicode).

4) Configure Views (Use in Signup code owner):
  a. Edit regcode views (admin/build/views/edit/regcode#views-tab-page_admin)
  b. To add Sign code owner features, add Relationships "Signup Code Owner: user"
  c. Add "user name" fields and choose "Sicode owner" relationships 

5) Configure Views Bulk Operations:
  a. Click "Style" configure button
  b. Add what you want operations
  b. Use "Delete Signup codes" instead of "Delete codes" (this is very important!)


Author
------
  Albert Liu (dreamerhyde@gmail.com, http://drupal.org/user/1374916, user name Albert.Liu)

  If you use this module, find it useful, and want to send the author
  a thank or you note, feel free to contact me.

  The author can also be contacted for paid customizations of this and other modules.