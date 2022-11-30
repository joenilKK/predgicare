<?php
    require('../../classes/serverProcessing.php');

    $args = array("uid", "uFirstName", "uFSN", "uAdded");
    $key = 'uid';
    $tb = 'user';
    $combined = array('uFirstName','uLstName');
    DataTableSSR($args,$key,$tb,$combined);