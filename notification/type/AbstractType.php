<?php
namespace notification\type;

use notification\type\NotificationType;

abstract class AbstractType implements NotificationType{
    public $config;
    public $message;

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}