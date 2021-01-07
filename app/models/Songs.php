<?php

namespace Linkfire\Assignment\Models;

use Phalcon\Mvc\Model;

class Songs extends Model
{
    /**
    * @var integer
    */
    public $id;

    /**
    * @var string
    */
    public $name;

    /**
    * @var integer
    */
    public $duration;

    /**
    * @var string
    */
    public $status;

    public function getId() {
        return $this->name;
    }

    public function setId($value) {
        $this->id = $value;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name = $value;
        return $this;
    }

    public function getDuration() {
        return $this->name;
    }

    public function setDuration($value) {
        $this->duration = $value;
        return $this;
    }

    public function getStatus() {
        return $this->name;
    }

    public function setStatus($value) {
        $this->status = $value;
        return $this;
    }
}
