<?php namespace App\Repositories\Constants;

use App\Repositories\TableRepositoryInterface;

/**
 * Class TableRepository
 * @package App\Repositories\Constants
 */
class TableRepository implements TableRepositoryInterface
{
    /**
     * @return array
     */
    public function getData()
    {
        $data = array(array('Name' => 'Trixie', 'Color' => 'Green', 'Element' => 'Earth', 'Likes' => 'Flowers'),
                      array('Name' => 'Tinkerbell', 'Element' => 'Air', 'Likes' => 'Singning', 'Color' => 'Blue'),
                      array('Element' => 'Water', 'Likes' => 'Dancing', 'Name' => 'Blum', 'Color' => 'Pink'),);
        return $data;
    }

    /**
     * @param array $data
     * @return array
     */
    function getHeaders(Array $data)
    {
        if ($this->isMultilevel($data))
        {
            return $this->getHeaders(head($data));
        }
        return array_keys($data);
    }

    /**
     * @param $data
     * @return bool
     */
    function isMultilevel($data)
    {
        return is_array(head($data));
    }
}