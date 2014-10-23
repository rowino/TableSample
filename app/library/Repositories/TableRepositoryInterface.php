<?php
namespace App\Repositories;


/**
 * Class TableRepository
 * @package App\Repositories\Constants
 */
interface TableRepositoryInterface
{
    /**
     * @return array
     */
    public function getData();

    /**
     * @param array $data
     * @return array
     */
    function getHeaders(Array $data);

    /**
     * @param $data
     * @return bool
     */
    function isMultilevel($data);
}