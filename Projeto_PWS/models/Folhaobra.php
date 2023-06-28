<?php

use Carbon\Carbon;

class Folhaobra extends \ActiveRecord\Model
{
    static $has_many = array(
        array('Linhaobra')
    );
}