# Signup Code

This project is used in Drupal's module and based on [Signup] and
[Registration codes] modules.

## Overview

This project integrate **Signup** and **Registration codes** and provide
Registration codes into Signup form. The management UI is use same as
Registration codes module, and add **Disable Registration codes** and
**Assigned Signup code owner** features.

## Basic Functionality

Here is feature list of this module:

* Add Registration code into Signup form
* Disable Registration codes
* Choose Signup code owner role
* Assigning Signup code owner
* Integrate **Views** and **VBO** modules

## Requirements and Dependencies

* [Signup]
* [Registration codes]
* [Views]
* [Views Bulk Operations]

## Installation and Settings

TO successful completion of this installation.

First, you must to install above "Dependencies" module, and according to the
following steps:

1. Decompress and rename the folder to **sicode**

2. Place **sicode** folder into the **modules** in your installation

3. Enable this module *(admin/build/modules)*

4. Setting and configure this module *(admin/user/sicode)*

5. Configure Views (For **Signup code owner**):
   * Edit regcode views *(admin/build/views/edit/regcode#views-tab-page_admin)*
   * To add Sign code owner features, add Relationships
     `Signup Code Owner: user`
   * Add `User: name` fields and choose `Sicode owner` relationships

6. Configure Views Bulk Operations:
   * Click **Style** configure button
   * Add what you want operations
   * Use `Delete Signup codes` instead of `Delete codes`

## License

Copyright (c) 2012 [Albert Liu]

Licensed under the [GNU GENERAL PUBLIC LICENSE Version 2], you may not use
this file except in compliance with the License.

Unless required by applicable law or agreed to in writing, software distributed
under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
CONDITIONS OF ANY KIND, either express or implied.  See the License for the
specific language governing permissions and limitations under the License.

## Author

[Albert Liu]

If you use this module, find it useful, and want to send the author
a thank or you note, feel free to contact me (service.albert@gmail.com).

The author can also be contacted for paid customizations of this and other
modules.

[Signup]: http://drupal.org/project/signup
[Registration codes]: http://drupal.org/project/regcode
[Views]: http://drupal.org/project/views
[Views Bulk Operations]: http://drupal.org/project/views_bulk_operations
[GNU GENERAL PUBLIC LICENSE Version 2]: http://www.gnu.org/licenses/gpl-2.0.html
[Albert Liu]: http://drupal.org/user/1374916
