<?php

use MODX\Revolution\Rest\modRestController;

class restControllerNews extends modRestController {
    public $classKey = 'modResource';
    public $defaultSortField = 'id';
    public $defaultSortDirection = 'ASC';
    public $parent = '1';

    public function read($id)
    {
        if (empty($id)) {
            return $this->failure($this->modx->lexicon('rest.err_field_ns',array(
                'field' => $this->primaryKeyField,
            )));
        }

        $c = $this->getPrimaryKeyCriteria($id);
        $query = $this->modx->newQuery($this->classKey);
        $query->where($c);

        $this->object = $this->modx->getObject($this->classKey,$query);
        if (empty($this->object)) {
            return $this->failure($this->modx->lexicon('rest.err_obj_nf',array(
                'class_key' => $this->classKey,
            )));
        }
        $objectArray = $this->object->toArray();

        $afterRead = $this->afterRead($objectArray);
        if ($afterRead !== true && $afterRead !== null) {
            return $this->failure($afterRead === false ? $this->errorMessage : $afterRead);
        }

        return $this->success('',$objectArray);
    }

    public function post()
    {
        return $this->failure('Метод не разрешен');
    }

    public function put()
    {
        return $this->failure('Метод не разрешен');
    }

    public function delete()
    {
        return $this->failure('Метод не разрешен');
    }
}