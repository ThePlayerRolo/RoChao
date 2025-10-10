<?php 
use Illuminate\Support\Facades\DB;

$users = DB::table('user_accesories')->get();

foreach ($users as $user) {
    echo $user->Hat3;
} ?>