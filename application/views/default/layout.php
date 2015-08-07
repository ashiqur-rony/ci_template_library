<!doctype html>
<html>
<head>
    <title><?php echo (isset($data['title'])? $data['title'] : "My Website Title") ?></title>
</head>
<body>
    <div class="wrapper">
        <?php $this->load->view($view, $data); ?>
    </div>
</body>
</html>

