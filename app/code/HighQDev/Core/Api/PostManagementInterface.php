<?php
declare(strict_types=1);

namespace HighQDev\Core\Api;


interface PostManagementInterface
{
    /**
     * GET for Post api
     * @param string $param
     * @return string
     */

    public function getPost($param);
}
