<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'Email Address' => 'user1@example.com',
            'First Name' => 'User',
            'Last Name' => 'One',
        ),
        'user2:user2pass' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'Email Address' => 'user2@example.com',
            'First Name' => 'User',
            'Last Name' => 'Two',
        ),  
        'user3:user3pass' => array(
            'uid' => array('3'),
            'eduPersonAffiliation' => array('group3'),
            'Email Address' => 'user3@example.com',
            'First Name' => 'User',
            'Last Name' => 'Three',
        ),
    ),

);
