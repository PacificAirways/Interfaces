<?php namespace Pacificairways\Interfaces\Cms;

interface PageInterface
{
    /**
     * @return string
     */
    public function getContent();

    /**
     * @return array
     */
    public function getCustomFields();
}