<?php

namespace Maxi032\Blog\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class UpgradeData
 *
 * @package Maxi032\Blog\Setup
 */
class UpgradeData implements UpgradeDataInterface
{

    /**
     * Creates sample blog posts
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if(version_compare($context->getVersion(), '1.1.1', '<')) {
            $tableName = $setup->getTable('maxi032_blog_post');

            $data = [
                [
                    'title' => 'Post 5 Title',
                    'content' => 'Content of the 5th post.',
                ],
                [
                    'title' => 'Post 6 Title',
                    'content' => 'Content of the 6th post.',
                ],
                [
                    'title' => 'Post 7 Title',
                    'content' => 'Content of the 7th post.',
                ],
            ];

            $setup->getConnection()->insertMultiple($tableName, $data);
        }

        $setup->endSetup();
    }
}