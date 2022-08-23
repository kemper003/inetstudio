<?php

class SomeObject {
    protected $name;

    public function __construct(string $name) { }

    public function getObjectName() { }
    
    public function getObjectHandler() {
    	return 'handle' . $this->getObjectName();
    }
}

class SomeObjectsHandler {
    public function __construct() { }

    public function handleObjects(array $objects): array {
        $handlers = [];
        foreach ($objects as $object) {
            $handlers[] = $object->getObjectHandler();
        }

        return $handlers;
    }
}

$objects = [
    new SomeObject('object_1'),
    new SomeObject('object_2')
];

$soh = new SomeObjectsHandler();
$soh->handleObjects($objects);