<!doctype html>
<html>
<head>
    <title><?php echo (isset($data['title'])? $data['title'] : "My Website Title") ?></title>
</head>
<body>
    <div class="wrapper">
        <?php
            /* Lets show the alerts first */
            if(isset($data['alerts']) && is_array($data['alerts'])) {
                foreach($data['alerts'] as $type => $alerts) {
            ?>
                    <div class="alert alert-<?php echo $type; ?>">
                        <?php if(is_array($alerts)) { ?>
                            <?php echo '<p>' . implode('</p><p>', $alerts) . '</p>'; ?>
                        <?php } else { ?>
                            <?php echo '<p>' . $alerts . '</p>'; ?>
                        <?php } ?>
                    </div>
        <?php
                }
            }
        ?>
        <?php $this->load->view($view, $data); ?>
    </div>
</body>
</html>

