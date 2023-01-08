<?php

namespace Database\Seeders;

use App\Models\Inventory;
use App\Models\Outlet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(AddressSeeder::class);

        $this->call(RoleSeeder::class);

        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(RiderSeeder::class);

        $this->call(CampusSeeder::class);
        $this->call(OutletSeeder::class);

        $this->call(CategorySeeder::class);
        $this->call(PackageSeeder::class);

        $this->call(DeliveryOptionSeeder::class);
        $this->call(OrderSeeder::class);

        $this->call(PaymentMethodSeeder::class);
        $this->call(ReceiptSeeder::class);
        $this->call(DeliverySeeder::class);
        $this->call(ComplaintSeeder::class);
        $this->call(FeedbackSeeder::class);

        $this->call(InventorySeeder::class);
        $this->call(UserSeeder::class);

        // $outlets = Outlet::get();
        // $inventories = Inventory::get();

        // foreach ($inventories as $key => $inventory) {
        //     // Attach to outlet
        //     $inventory->outlets()->attach($outlets[$key]);
        // }
    }
}
