<?php

$ticket = [
' Einfache Fahrt',
'Hin und Zurück',
'Mehrfahrtenkarte'
];

?>

<?php
            $ticket = $data['ticket'];
           foreach ($ticket as $key => $value) :
               echo '<option value="' . $key . '">' . $value . '</option>';
           endforeach;
?>