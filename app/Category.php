<?php namespace App;

use Kalnoy\Nestedset\NodeTrait;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Category
 *
 * @param string $title
 *
 * @package App
 */
class Category extends Model {
    
    use NodeTrait;

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'parent_id',
    ];

}
