CodeIgniter Template Library
===================

This really easy to use library let's user create different themes and switch between them easily. One might need different layout for the frontend of an application while a completely different layout for the admin section. This library makes that very easy.

  - Use multiple layouts for different sections of application.
  - Change template based on session value.

Version
----

2.0

Usage
-----
1. Copy the `application/libraries/Template.php` to your application.
2. Load the `Template` library through the `autoload.php` file. You can prefer to load the library inside your controller.
3. Add your theme/template inside the `views` folder.
4. From your controller load the view using `$this->template->view('view_name')`.
 
For more details visit http://ghumkumar.com/codeigniter-template-library/
