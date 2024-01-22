<?php

use MODX\Revolution\Rest\modRestController;

class restControllerItems extends modRestController {
    public $classKey = 'modResource';
    public $defaultSortField = 'id';
    public $defaultSortDirection = 'ASC';

    public function get()
    {
        $query = $this->modx->newQuery($this->classKey, array(
            'parent' => 1,
            'published' => 1,
            'deleted' => 0,
            'searchable' => 1,
        ));

        $this->object = $this->modx->getObject($this->classKey, $query);
        $query->sortby('publishedon', 'DESC');

        $query->limit(10);

        $resources = $this->modx->getIterator('modResource', $query);

        $resourceArray = array();
        foreach ($resources as $resource) {
            $resourceArray[] = array(
                'id' => $resource->get('id'),
                'publishedon' => $resource->get('publishedon')
            );
        }

        return $this->success('', $resourceArray);
    }

    public function post()
    {
        return $this -> failure( message: 'Метод не разрешен');
    }

    public function put()
    {
        return $this -> failure( message: 'Метод не разрешен');
    }

    public function delete()
    {
        return $this -> failure( message: 'Метод не разрешен');
    }
}