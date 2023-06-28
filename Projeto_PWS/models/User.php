<?php


class User  extends \ActiveRecord\Model
{

    static $validates_presence_of = array(
        array('username'),
        array('password', 'message' => 'It must be provided')
    );

    static $belongs_to = array(
        array('Folhaobra')
    );

}