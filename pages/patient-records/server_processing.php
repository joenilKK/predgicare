<?php
    require('../../classes/serverProcessing.php');
    
    $args = array("uid", "uFirstName", "uArea", "uContact");
    $key = 'uid';
    $tb = 'user';
    $combined = array('uFirstName','uLstName');
    DataTableSSR($args,$key,$tb,$combined);