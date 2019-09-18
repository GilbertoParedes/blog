<?php

namespace App\Cms\BaseRepository;

use \App;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class BaseRepository implements BaseRepositoryInterface
{
    /** @var string nombre de la clase */
    private $model;

    /** @param string $model nombre de la clase del modelo */
    function __construct($className)
    {
        $this->model = $className;
    }
    /** 
     * Método para redirigir todas las llamadas de métodos inexistentes al modelo
     * 
     * @param string    $name  Nombre del método ejecutado
     * @param array     $arguments Argumentos enviados al método
     * @return mixed        Respuesta del método solicitado
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array("{$this->model}::{$name}", $arguments);
    }


}