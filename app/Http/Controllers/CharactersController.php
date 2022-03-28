<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // needed by Http::get()

// API doc: https://hp-api.herokuapp.com/

class CharactersController extends Controller {
    private const CHARACTERS_API = 'http://hp-api.herokuapp.com/api/characters';

    public function all(int $id = null) {
        return $this->fetch('all', $id);
    }

    public function students(int $id = null) {
        return $this->fetch('students', $id);
    }

    public function staff(int $id = null) {
        return $this->fetch('staff', $id);
    }

    public function house(string $house, int $id = null) {
        return $this->fetch('house', $id, $house);
    }

    public function houses() {
        return view('houses');
    }

    private function fetch(string $type, int $id = null, string $house = null) {
        $api = self::CHARACTERS_API;

        $type = strtolower($type);
        if($house) $house = strtolower($house);

        if($type === 'all') $type = '';
        if(in_array($type, ['', 'students', 'staff', 'house'])) {
            if($type !== 'house') {
                $api = $api.'/'.$type;
            } else {
                if(in_array($house, ['gryffindor', 'slytherin', 'ravenclaw', 'hufflepuff']))
                    $api = $api.'/'.$type.'/'.$house;
            }
        }
        
        $response = Http::get($api);
        $data = json_decode($response->body());

        if($id === null) {
            return view('characters', ['data' => $data]);
        } else {
            $char = $data[$id];

            return view('character', ['char' => $char]);
        }
    }
}