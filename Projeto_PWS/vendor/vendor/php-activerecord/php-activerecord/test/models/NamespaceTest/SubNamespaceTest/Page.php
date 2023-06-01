<?php

namespace NamespaceTest\SubNamespaceTest;

class Page extends \ActiveRecord\Model
{
    public static $belong_to = [
        ['user', 'class_name' => '\NamespaceTest\Book'],
    ];
}
