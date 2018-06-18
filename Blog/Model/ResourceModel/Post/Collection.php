<?php

namespace Maxi032\Blog\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Maxi032\Blog\Model\Post', 'Maxi032\Blog\Model\ResourceModel\Post');
    }
}