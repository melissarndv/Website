<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model implements \Czim\Paperclip\Contracts\AttachableInterface
{
    protected $table = 'product';
    // protected $primaryKey = 'idproduct';
    
    
    use \Czim\Paperclip\Model\PaperclipTrait;
    
    public function __construct(array $attributes = [])
    {
        $this->hasAttachedFile('image', [
            'variants' => [
                'medium' => [
                    'auto-orient' => [],
                    'resize'      => ['dimensions' => '300x300'],
                ],
                'thumb' => '100x100',
            ],
            'attributes' => [
                'variants' => true,
            ],
        ]);

        parent::__construct($attributes);   
    }


   public function users()
    {
        return $this->belongsToMany('App\Model\User');
    }

    public function userstwo()
    {
        return $this->belongsToMany('App\Model\User');
    }

}