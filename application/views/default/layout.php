<!doctype html>
<html>
<head>
    <title><?php echo (isset($data['title'])? $data['title'] . $this->config->item('title_separator') . $this->config->item('site_name') : "My Website Title" ?></title>
</head>
<body>
    <div class="wrapper">
        <?php $this->load->view($view, $data); ?>
    </div>
</body>
</html>

