<?php


class LinhaObra extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('Folhaobra')
    );

}