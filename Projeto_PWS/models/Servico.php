<?php


class Servico extends \ActiveRecord\Model
{
    static $has_many = array(
        array('ivas')
    );
}