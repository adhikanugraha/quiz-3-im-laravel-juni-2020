<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;

class UserModel{
    public static function get_all(){
        $users = DB::table('users')->get();
        return $users;
    }
    public static function save($data){
        $new_user = DB::table('users')->insert($data);
        return $new_user;
    }
}