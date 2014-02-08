<?php
namespace Chiara\PodioItem\Fields;
use Chiara\PodioItem\Field, Chiara\PodioItem\Values\Collection;
class App extends Field
{
    function getValue()
    {
        return new Collection($this, $this->info['values'], 'Chiara\\PodioItem\\Values\\App');
    }

    function getSaveValue()
    {
        $value = $this->getValue();
        $ret = array();
        foreach ($value as $v) {
            $ret[] = $v->id;
        }
        return $ret;
    }

    function __get($var)
    {
        if ($var == 'referenceable_types') return $this->info['config']['settings']['referenceable_types'];
        return parent::__get($var);
    }
}