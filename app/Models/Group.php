<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Class ProtocolLine
 *
 * @package App\Models
 * @property int $id
 * @property int $name
 * @property ProtocolLine[] $lines
 * @property-read int|null $lines_count
 * @method static Builder|Group find(mixed $id)
 * @method static Builder|Group newModelQuery()
 * @method static Builder|Group newQuery()
 * @method static Builder|Group query()
 * @method static Builder|Group where(...$value)
 * @method static Builder|Group whereId($value)
 * @method static Builder|Group whereName($value)
 */
class Group extends Model
{
    public const GROUPS = [
        'М10',
        'М12',
        'М14',
        'М16',
        'М18',
        'М20',
        'М21Е',
        'М21А',
        'М21Б',
        'М21C',
        'М21D',
        'М35',
        'М40',
        'М45',
        'М50',
        'М55',
        'М60',
        'М65',
        'М70',
        'М75',
        'М80',
        'Ж10',
        'Ж12',
        'Ж14',
        'Ж16',
        'Ж18',
        'Ж20',
        'Ж21Е',
        'Ж21А',
        'Ж21Б',
        'Ж21C',
        'Ж21D',
        'Ж35',
        'Ж40',
        'Ж45',
        'Ж50',
        'Ж55',
        'Ж60',
        'Ж65',
        'Ж70',
        'Ж75',
        'Ж80',
        'МЖ12',
        'МЖ14',
        'МЖ16',
        'МЖ18',
        'МЖ20',
        'МЖ21',
        'МЖ35',
        'МЖ40',
        'МЖ60',
    ];

    public const FIXING_MAP = [
        'Ж21' => 'Ж21Е',
        'ЖЕ' => 'Ж21Е',
        'Ж21A' => 'Ж21А',
        'ЖА' => 'Ж21А',
        'Женщины группа А' => 'Ж21А',
        'Ж21E' => 'Ж21Е',
        'Женщины группа Е' => 'Ж21Е',
        'Ж21B' => 'Ж21Б',
        'ЖВ' => 'Ж21Б',
        'М21A' => 'М21А',
        'МА' => 'М21А',
        'Мужчины группа А' => 'М21А',
        'М21E' => 'М21Е',
        'МЕ' => 'М21Е',
        'Мужчины группа Е' => 'М21Е',
        'М21' => 'М21Е',
        'М21Б' => 'М21Б',
        'МВ' => 'М21Б',
        'М21B' => 'М21Б',
        'M12' => 'М12',
        'M14' => 'М14',
        'M16' => 'М16',
        'M18' => 'М18',
        'M20' => 'М20',
        'M35' => 'М35',
        'M40' => 'М40',
        'M45' => 'М45',
        'M50' => 'М50',
        'M55' => 'М55',
        'M60' => 'М60',
        'M65' => 'М65',
        'M70' => 'М70',
        'M75' => 'М75',
        'Open 1' => 'OPEN1',
        'ОPEN' => 'OPEN1',
        'Оpen1' => 'OPEN1',
        'Open 2' => 'OPEN2',
        'Оpen2' => 'OPEN2',
    ];

    public $timestamps = false;
    protected $table = 'groups';

    public function lines()
    {
        return $this->hasMany(ProtocolLine::class);
    }
}
