// components/SweetAlert.php
<?php

// namespace components;

use yii\base\Component;

class SweetAlert extends Component
{
    public static function alert($title, $message, $type = 'success')
    {
        $script = "
            Swal.fire({
                title: '{$title}',
                text: '{$message}',
                icon: '{$type}',
                confirmButtonText: 'OK'
            });
        ";

        \Yii::$app->view->registerJs($script);
    }
}
?>