<?php


class LinhaObra extends \ActiveRecord\Model
{
    static $table_name = 'linhaobras';// estava a mudar o nome da tabela para linha_obras assim força a ficar o nome correto

    static $belongs_to = array(
        array('folhaobra')
    );

    static $has_many = array(
        array('servicos')
    );
}