<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Sentinel;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $roles= array(
            array("slug" => "superadmin", "name" => "Super Admin", 'description' => 'Can Create other users, perform CREATE, UPDATE, READ and DELETE on the system.'),
            array("slug" => "admin", "name" => "Admin", 'description' => 'Can Create other users but not super admin, perform CREATE, UPDATE, READ and DELETE on the system.'),
            array("slug" => "contractor", "name" => "Contractor", 'description' => 'Can only publish news'),
        );

        foreach($roles as $role) {
            // $rol = new Role();
            $rol = Sentinel::getRoleRepository()->createModel();
            $rol->slug = $role['slug'];
            $rol->name = $role['name'];
            $rol->description = $role['description'];
            // $rol->permissions = [
            //     'user.update' => true,
            //     'user.view' => true,
            // ];
            $rol->save();
        }
      
    }
}
