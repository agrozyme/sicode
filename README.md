# Signup Code

This project is used in Drupal's module and based on [Signup][1] and
[Registration codes][2] modules.

## Summary

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

* [signup][1]
* [Registration code][2]
* [views][3]
* [Views Bulk Operations][4]

## Installation and Settings

TO successful completion of this installation.

First, you must to install above "Dependencies" module, and according to the
following steps:

1. Take the `sicode` folder to the modules folder in your installation.

2. Enable the module using Administer -> Site building -> Modules.
   `admin/build/modules`

3. Settinga and configure this module. `admin/user/sicode`

4. Configure Views (Use in Signup code owner):
   a. Edit regcode views `admin/build/views/edit/regcode#views-tab-page_admin`
   b. To add Sign code owner features, add Relationships
      `Signup Code Owner: user`
   c. Add `user name` fields and choose `Sicode owner` relationships

5. Configure Views Bulk Operations:
   a. Click `Style` configure button
   b. Add what you want operations
   b. Use `Delete Signup codes` instead of `Delete codes`

## License

Copyright (c) 2012 [Albert Liu][5]

Licensed under the [GNU GENERAL PUBLIC LICENSE Version 2][5], you may not use
this file except in compliance with the License.

Unless required by applicable law or agreed to in writing, software distributed
under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
CONDITIONS OF ANY KIND, either express or implied.  See the License for the
specific language governing permissions and limitations under the License.

## Author

[Albert Liu][6]

If you use this module, find it useful, and want to send the author
a thank or you note, feel free to contact me (service.albert@gmail.com).

The author can also be contacted for paid customizations of this and other
modules.

[1]: http://drupal.org/project/signup
[2]: http://drupal.org/project/regcode
[3]: http://drupal.org/project/views
[4]: http://drupal.org/project/views_bulk_operations
[5]: http://www.gnu.org/licenses/gpl-2.0.html
[6]: http://drupal.org/user/1374916
