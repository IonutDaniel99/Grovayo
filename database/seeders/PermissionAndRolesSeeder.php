<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionAndRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        /// Support Team
        Permission::create(['name' => 'View Reports']);
        Permission::create(['name' => 'Solve Reports']);
        Permission::create(['name' => 'Delete Reports']);
        /// Moderator
        Permission::create(['name' => 'Delete User']);
        Permission::create(['name' => 'Update User']);
        Permission::create(['name' => 'Edit User']);
        Permission::create(['name' => 'Delete Post']);
        Permission::create(['name' => 'Edit Post']);
        /// Admin
        Permission::create(['name' => 'Modify Roles']);
        Permission::create(['name' => 'Edit Roles']);
        Permission::create(['name' => 'Create Roles']);

        // create roles and assign existing permissions

        Role::create(['name' => 'User']);

        // Support Team
        $SupportTeam = Role::create(['name' => 'Support']);
        $SupportTeam->givePermissionTo('View Reports');
        $SupportTeam->givePermissionTo('Solve Reports');
        $SupportTeam->givePermissionTo('Delete Reports');
        $SupportTeam->givePermissionTo('Delete Post');

        $Moderator = Role::create(['name' => 'Moderator']);
        $Moderator->givePermissionTo('Delete User');
        $Moderator->givePermissionTo('Update User');
        $Moderator->givePermissionTo('Edit User');

        $Moderator->givePermissionTo('View Reports');
        $Moderator->givePermissionTo('Delete Reports');

        $Moderator->givePermissionTo('Delete Post');
        $Moderator->givePermissionTo('Edit Post');

        $Admin = Role::create(['name' => 'Administrator']);
        $Admin->givePermissionTo([
            'Delete User',
            'Update User',
            'Edit User',
            'Delete Post',
            'Edit Post',
            'Modify Roles',
            'Edit Roles'
        ]);


        $Owner = Role::create(['name' => 'Owner']);
        $Owner->givePermissionTo(Permission::all());
    }
}
