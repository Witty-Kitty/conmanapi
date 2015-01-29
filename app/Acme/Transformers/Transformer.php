<?php namespace Acme\Transformers;

   class Transformer{


	public function transform($contact){

//        return array_map(function($contact){
//
//        }, $contact->toArray());
		return [

					'id' => $contact['id'],
					'first_name' => $contact['first_name'],
					'last_name' => $contact['last_name'],
					'email_address' => $contact['email_address'],
					'twitter' => $contact['twitter'],
					'created_at' => $contact['created_at'],
					'last_updated_at' => $contact['last_updated_at'],
					'archived_at' => $contact['archived_at']

		];

}
}