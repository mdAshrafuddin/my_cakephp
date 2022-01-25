<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticlesFixture
 */
class ArticlesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'slug' => 'Lorem ipsum dolor sit amet',
                'body' => 'Lorem ipsum dolor sit amet',
                'published' => 1,
                'created' => '2022-01-15 16:42:29',
                'modified' => '2022-01-15 16:42:29',
            ],
        ];
        parent::init();
    }
}
