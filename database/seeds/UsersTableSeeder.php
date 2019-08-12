<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'dni_type' => 'DNI',
            'dni' => '123',
            'mobile_phone' => '123123123123',
            'email' => 'admin@dev.com',
            'password' => bcrypt('123123'), 
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'student',
            'first_name' => 'Manuel Eduardo',
            'last_name' => 'Camacho Chacon',
            'dni_type' => 'DNI',
            'dni' => '17369964',
            'mobile_phone' => '04248402081',
            'email' => 'maedca@gmail.com',
            'password' => bcrypt('123123'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'AMERICAN UNIVERSITY',
            'last_name' => 'Kogod School of Business',
            'country' => 'USA',
            'city' => 'Washington DC',
            'email' => 'jgarner@american.edu',
            'representative_email' => 'jgarner@american.edu',
            'password' => bcrypt('KOGOD2019'), 
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'CORNELL UNIVERSITY',
            'last_name' => 'Johnson Graduate School of Management',
            'country' => 'USA',
            'city' => 'Ithaca, NY',
            'email' => 'caf244@cornell.edu',
            'representative_email' => 'caf244@cornell.edu',
            'password' => bcrypt('JOHNSON2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'TUCK AT DARTMOUTH',
            'last_name' => 'Tuck School of Business',
            'country' => 'USA',
            'city' => 'Hanover, NH',
            'email' => 'kristine.H.Laca@tuck.dartmouth.edu',
            'representative_email' => 'kristine.H.Laca@tuck.dartmouth.edu',
            'password' => bcrypt('TUCK2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'DUKE UNIVERSITY',
            'last_name' => 'The Fuqua School of Business',
            'country' => 'USA',
            'city' => 'Durham, NC',
            'email' => 'stacey.tate@duke.edu',
            'representative_email' => 'allison.jamison@duke.edu',
            'password' => bcrypt('FUQUA2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'EMORY UNIVERSITY',
            'last_name' => 'Goizueta Business School',
            'country' => 'USA',
            'city' => 'Atlanta, GA',
            'email' => 'naya.j.martin@emory.edu',
            'representative_email' => 'kate.piasecki@emory.edu',
            'password' => bcrypt('GOIZUETA2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'GEORGETOWN UNIVERSITY',
            'last_name' => 'McDonough School of Business',
            'country' => 'USA',
            'city' => 'Washington DC',
            'email' => 'iolani.lightbourne@georgetown.edu',
            'representative_email' => 'il108@georgetown.edu',
            'password' => bcrypt('MCDONOUGH2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'INDIANA UNIVERSITY',
            'last_name' => 'Kelley School of Business',
            'country' => 'USA',
            'city' => 'Bloomington, IN',
            'email' => 'regnlee@indiana.edu',
            'representative_email' => 'regnlee@indiana.edu',
            'password' => bcrypt('KELLEY2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'THE UNIVERSITY OF MANCHESTER',
            'last_name' => 'Alliance Manchester Business School',
            'country' => 'UK',
            'city' => 'Manchester',
            'email' => 'helen.dowd@manchester.ac.uk',
            'representative_email' => 'helen.dowd@manchester.ac.uk',
            'password' => bcrypt('ALLIANCE2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'THE UNIVERSITY OF TEXAS AT AUSTIN',
            'last_name' => 'McCombs School of Business',
            'country' => 'USA',
            'city' => 'Austin, TX',
            'email' => 'stephen.sweeney@mccombs.utexas.edu',
            'representative_email' => 'rodrigo.malta@mccombs.utexas.edu',
            'password' => bcrypt('MCCOMBS2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'UNIVERSITY OF BATH',
            'last_name' => 'School of Management',
            'country' => 'UK',
            'city' => 'Bath',
            'email' => 'z.whittle@bath.ac.uk',
            'representative_email' => 'z.whittle@bath.ac.uk',
            'password' => bcrypt('BATH2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'UNIVERSITY OF CALIFORNIA,  BERKELEY',
            'last_name' => 'Haas School of Business',
            'country' => 'USA',
            'city' => 'Berkeley, CA',
            'email' => 'hzambrano@haas.berkeley.edu',
            'representative_email' => 'hazambrano@berkeley.edu',
            'password' => bcrypt('HAAS2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'UNIVERSITY OF MARYLAND',
            'last_name' => 'Robert H. Smith School of Business',
            'country' => 'USA',
            'city' => 'College Park, MD',
            'email' => 'llance@rhsmith.umd.edu',
            'representative_email' => 'llance@rhsmith.umd.edu',
            'password' => bcrypt('SMITH2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'UNIVERSITY OF MICHIGAN',
            'last_name' => 'Ross School of Business',
            'country' => 'USA',
            'city' => 'Ann Arbor, MI',
            'email' => 'tsapp@umich.edu',
            'representative_email' => 'hjill@umich.edu',
            'password' => bcrypt('ROSS2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'UNIVERSITY OF NAVARRA',
            'last_name' => 'IESE Business School',
            'country' => 'ESPAÑA',
            'city' => 'Barcelona',
            'email' => 'pamorim@iese.edu',
            'representative_email' => 'pamorim@iese.edu',
            'password' => bcrypt('IESE2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'UNIVERSITY OF TORONTO',
            'last_name' => 'Rotman School of Management',
            'country' => 'CANADA',
            'city' => 'Toronto, ON',
            'email' => 'imran.Kanga@Rotman.Utoronto.Ca',
            'representative_email' => 'imran.Kanga@Rotman.Utoronto.Ca',
            'password' => bcrypt('ROTMAN2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'UNIVERSITY OF VIRGINIA',
            'last_name' => 'Darden School of Business',
            'country' => 'USA',
            'city' => 'Charlottesville, VA',
            'email' => 'yeildingC@darden.virginia.edu',
            'representative_email' => 'kestnerw@darden.virginia.edu',
            'password' => bcrypt('DARDEN2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'VANDERBILT UNIVERSITY',
            'last_name' => 'Owen Graduate School of Management',
            'country' => 'USA',
            'city' => 'Nashville, TN',
            'email' => 'kim.killingsworth@owen.vanderbilt.edu',
            'representative_email' => 'kim.killingsworth@owen.vanderbilt.edu',
            'password' => bcrypt('OWEN2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'WESTERN ONTARIO UNIVERSITY',
            'last_name' => 'Ivey Business School',
            'country' => 'CANADA',
            'city' => 'London, ON',
            'email' => 'jdclarke@ivey.ca',
            'password' => bcrypt('IVEY2019'),
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'role' => 'university',
            'status' => '1',
            'first_name' => 'YALE UNIVERSITY',
            'last_name' => 'Yale School of Management',
            'country' => 'USA',
            'city' => 'New Haven, CT',
            'email' => 'amy.voth@yale.edu',
            'contact_email' => 'diana.sellers@yale.edu',
            'password' => bcrypt('YALE2019'),
            'remember_token' => str_random(10),
        ]);
//        factory(App\User::class, 225)->create();
    }
}
