#CodeIgniter Template Library
This really easy to use library let's user create different themes and switch between them easily. One might need different layout for the frontend of an application while a completely different layout for the admin section. This library makes that very easy.

  - Use multiple layouts for different sections of application.
  - Change template based on session value.

##Version
2.1

##Usage
1. Copy the `application/libraries/Template.php` to your application.
2. Load the `Template` library through the `autoload.php` file. You can prefer to load the library inside your controller.
3. Add your theme/template inside the `views` folder.
4. Set the default template in the library file by changing the value of `define('DEFAULT_TEMPLATE', 'default')` or set at the start of controller using `$this->template->set('template_name')`.
5. From your controller load the view using `$this->template->view('view_name')`.

##Alerts
Set alerts for different events using
```php
$this->template->alert(
  'Message to set in the session.',
  'alert_type'
);
```
First parameter is the alert message and the second parameter is alert type (e.g. `info`, `warning` etc.) and these alerts will be available in the `alert` session variable as array under each alert type as key. You can access the alerts from controller or model using `$this->session->userdata('alert')` or in `$data['alerts']` from view files.

For more details visit http://ghumkumar.com/codeigniter-template-library/
