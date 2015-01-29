<?php
/**
 * Created by PhpStorm.
 * User: Kathleen
 * Date: 26/01/2015
 * Time: 19:08
 */
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Contact extends Eloquent{

    use SoftDeletingTrait;

    protected $fillable = array( 'owner_id', 'first_name', 'last_name', 'email_address', 'twitter');

    protected $dates = ['deleted_at'];

} 