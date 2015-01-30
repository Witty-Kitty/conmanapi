<?php
/**
 * Created by PhpStorm.
 * User: Kathleen
 * Date: 29/01/2015
 * Time: 16:31
 */

namespace Acme\Transformers;


class ContactTransformer extends Transformer{

    public function transform($contact){

        return [

            'id' => $contact['id'],
            'first_name' => $contact['first_name'],
            'last_name' => $contact['last_name'],
            'email_address' => $contact['email_address'],
            'twitter' => $contact['twitter'],
            'created_at' => $contact['created_at'],
            'last_updated_at' => $contact['updated_at'],
            'archived_at' => $contact['deleted_at']

        ];

    }

} 