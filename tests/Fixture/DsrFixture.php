<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DsrFixture
 */
class DsrFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'dsr';
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
                'project_name' => 'Lorem ipsum dolor sit amet',
                'task_no' => 1,
                'task_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'hour' => '07:25:52',
                'status' => 'Lorem ipsum dolor sit amet',
                'date' => '2025-01-04',
            ],
        ];
        parent::init();
    }
}
