<?php

namespace ArneHendriksen\LaravelBreadcrumb;

class Breadcrumb
{
    protected $items = [];

    public function reset()
    {
        $this->items = [];
    }

    public function exists()
    {
        return count($this->items) > 0;
    }

    public function get()
    {
        return $this->items;
    }

    public function add($title, $href = null)
    {
        $this->items[] = [
            'title' => $title,
            'href' => $href
        ];
    }

    public function isLast($item)
    {
        $items = $this->items;
        return $item == end($items);
    }
}
