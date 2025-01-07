<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dsr Entity
 *
 * @property int $id
 * @property string $project_name
 * @property int $task_no
 * @property string $task_description
 * @property \Cake\I18n\Time $hour
 * @property string $status
 * @property \Cake\I18n\Date $date
 */
class Dsr extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'project_name' => true,
        'task_no' => true,
        'task_description' => true,
        'hour' => true,
        'status' => true,
        'date' => true,
    ];
}
