<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CharacteristicsUsersFixture
 */
class CharacteristicsUsersFixture extends TestFixture
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
                'characteristic_id' => 1,
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
