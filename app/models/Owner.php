<?php
/**
 * Created by PhpStorm.
 * User: Kathleen
 * Date: 26/01/2015
 * Time: 19:38
 */

class Owner {

    public function contacts() {
        return $this->hasMany('Contact');
    }

} 