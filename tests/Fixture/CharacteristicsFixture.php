<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CharacteristicsFixture
 */
class CharacteristicsFixture extends TestFixture
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
                'characteristic' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-10-21 16:59:55',
                'modified' => '2023-10-21 16:59:55',
            ],
        ];
        parent::init();
    }
}
