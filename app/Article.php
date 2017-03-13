<?php
/**
 * Created by PhpStorm.
 * User: Anonymou_Chen
 * Date: 2017/3/13
 * Time: 20:01
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{
    protected $table = 'article';
    public  $timestamps = true ;
    protected $fillable = ['title','name','content','useid'];

    protected  function  getDateFormat()
    {
        return time(); // TODO: Change the autogenerated stub
    }

    protected  function asDateTime($var)
    {
        return $var; // TODO: Change the autogenerated stub
    }

}