<?php namespace Pacificairways\Interfaces\Cms;

interface PageServiceInterface
{
    /**
     * @param string $slug
     *
     * @return PageInterface
     */
    public function getBySlug($slug);

}