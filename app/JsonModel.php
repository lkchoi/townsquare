<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

abstract class JsonModel
{
    protected $fields = [];
    protected $attributes = [];

    /**
     * __construct
     */
    public function __construct(array $attributes = [])
    {
        $this->id = $this->id ?: $this->getNextId();
        foreach ($this->fields as $key)
        {
            $this->$key = !empty($attributes[$key]) ? $attributes[$key] : null;
        }
    }

    /**
     * __get
     */
    public function __get($key)
    {
        return !empty($this->attributes[$key]) ? $this->attributes[$key] : null;
    }

    /**
     * __set
     */
    public function __set($key, $value)
    {
        return $this->attributes[$key] = $value;
    }

    /**
     * getNextId
     */
    protected static function getNextId()
    {
        return static::get()->max('id')+1;
    }

    /**
     * getFile
     */
    protected static function getFile()
    {
        return storage_path(static::$file);
    }

    /**
     * count
     */
    public static function count()
    {
        return static::all()->count();
    }

    /**
     * read
     */
    public static function read()
    {
        return json_decode(File::get(static::getFile()));
    }

    /**
     * all
     */
    public static function all()
    {
        return Collection::make(static::read())->keyBy('id');
    }

    /**
     * get
     */
    public static function get()
    {
        return static::all();
    }

    /**
     * find
     */
    public static function find($id)
    {
        return static::get()->get($id);
    }

    /**
     * save
     */
    public function save()
    {
        $data = static::all();

        // set id
        $this->id = $this->id ?: $this->getNextId();

        // set timestamp
        $this->created_at = $this->created_at ?: $this->freshTimestamp();

        $data[] = $this->toArray();

        File::put(static::getFile(), $data->toJson());

        return $this;
    }

    /**
     * create
     */
    public static function create(array $attributes = [])
    {
        $instance = new static($attributes);
        return $instance->save();
    }

    /**
     * toArray
     */
    public function toArray()
    {
        $array = [];
        foreach ($this->fields as $key)
        {
            $array[$key] = $this->$key;
        }
        return $array;
    }

    /**
     * freshTimestamp
     */
    public function freshTimestamp()
    {
        return (new Carbon)->toDateTimeString();
    }
}