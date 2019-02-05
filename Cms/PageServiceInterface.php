<?php namespace Pacificairways\Interfaces\Cms;

use Pacificairways\Interfaces\Cms\Exception\ContentNotFoundException;

interface PageServiceInterface
{
    /**
     * @param string $slug
     *
     * @return PageInterface
     * @throws ContentNotFoundException
     */
    public function getBySlug($slug);

}