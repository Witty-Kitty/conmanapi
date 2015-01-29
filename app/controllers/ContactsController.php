<?php

use Dingo\Api\Routing\ControllerTrait;
use Acme\Transformers\Transformer;

class ContactsController extends \BaseController
{

    /**
     *	@var Acme\Transformers\Transformer
     */

    use ControllerTrait;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

       return Contact::all();

    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(Input::all(),
            array(
                'first_name' => 'required',
                'last_name' => 'required',
                'email_address' => 'required|email',
                'twitter' => 'required',
            ));

        if ($validator->fails()) {
            return Response::json([
                'data' => $validator->messages()
            ], 403);
        } else {

            $contact = Contact::create(Input::all());

            return $contact;

        }
    }

        /**
         * Display the specified resource.
         *
         * @param  int $id
         * @return Response
         */
        public
        function show($id)
        {

            return Contact::find($id);

        }


        /**
         * Update the specified resource in storage.
         *
         * @param  int $id
         * @return Response
         */
        public
        function update($id)
        {
            $contact = Contact::findOrFail($id);

            $input = array_filter(Input::only(['first_name', 'last_name', 'email_address', 'twitter']));


            foreach ($input as $attr => $value) {

                $contact->$attr = $value;
            }

            $contact->save();

            return $contact;

        }


        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         * @return Response
         */
        public
        function destroy($id)
        {

            $contact = Contact::findOrFail($id);

            $contact->forceDelete();

            return "Contact has been permanently deleted";

        }


        public
        function archive($id)
        {

            Contact::findOrFail($id)->delete();

            return "Contact has been SoftDeleted";

        }

        public
        function restore($id)
        {
            Contact::withTrashed()->where('id', $id)->restore();
        }

    }