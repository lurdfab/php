<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public $pets = ['dogs', 'cats', 'snakes', 'rabbits', 'gold fish'];

    public function getAllPets()
    {
        $pets  = $this->pets;
        return $pets;
    }
    public function getSinglePet($id)
    {
        //check if index exists
        $count = count($this->pets);
        if ($id > $count) {
            return response(['error' => 'this pet does not exist on our database'], 403);  //'this pet does not exist on our database';
        }
        //return item
        return $this->pets[$id];
    }

    public function addPet($id)
    {
        array_push($this->pets, $id);
        return $this->pets;
    }

    public function removePet($id)
    {
    }
}
