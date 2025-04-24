<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CarType::factory()
            ->sequence(
                ["name" => "Sedan"],
                ["name" => "Hatchback"],
                ["name" => "SUV"],
                ["name" => "Jeep"],
                ["name" => "Coupe"],
                ["name" => "Convertible"],
                ["name" => "Pickup Truck"],
                ["name" => "Minivan"],
                ["name" => "Crossover"],
                ["name" => "Roadster"],
                ["name" => "Sports Car"],
                ["name" => "Van"]
            )
            ->count(12)
            ->create();
        FuelType::factory()
            ->sequence(
                ["name" => "Gasoline"],
                ["name" => "Hybrid"],
                ["name" => "Electric"],
                ["name" => "Diesel"],
                ["name" => "Gas"]
            )
            ->count(5)
            ->create();
            $states = [
                'Punjab' => [
                    'Lahore', 'Rawalpindi', 'Faisalabad', 'Multan', 'Sialkot', 'Gujranwala', 'Murree',
                    'Bahawalpur', 'Dera Ghazi Khan', 'Sargodha', 'Kasur', 'Jhelum', 'Rahim Yar Khan', 'Chiniot',
                    'Mianwali', 'Toba Tek Singh', 'Attock', 'Nankana Sahib', 'Hafizabad', 'Layyah', 'Okara',
                    'Khushab', 'Pakpattan', 'Jhang', 'Shiekhupura', 'Narowal', 'Bhakkar', 'Lodhran', 'Gojra', 'Wah Cantt',
                    'Chakwal', 'Burewala', 'Khanewal', 'Muridke', 'Haroonabad', 'Zahir Pir', 'Mailsi', 'Ferozewala', 
                    'Mian Channu', 'Fateh Jang', 'Wazirabad', 'Jaranwala', 'Alipur', 'Shahkot', 'Bhalwal', 'Bhowana'
                ],
                
                'Sindh' => [
                    'Karachi', 'Hyderabad', 'Sukkur', 'Mirpurkhas', 'Larkana', 'Nawabshah', 'Thatta', 'Badin',
                    'Jacobabad', 'Shikarpur', 'Dadu', 'Sanghar', 'Khairpur', 'Ghotki', 'Tando Adam', 'Mithi', 
                    'Umerkot', 'Tando Allahyar', 'Jamshoro', 'Matli', 'Mirpur Khas', 'Bhiria', 'Khairpur Nathan Shah',
                    'Sujawal', 'Tando Jam', 'Larkana', 'Mehar', 'Shahdadkot', 'Kandhkot', 'Bhan Syedabad', 
                    'Naushahro Feroze', 'Nawabshah', 'Hala', 'Sakhi Sarwar', 'Manjhand', 'Jati', 'Mithi', 'Rohri'
                ],
                
                'Khyber Pakhtunkhwa' => [
                    'Peshawar', 'Mardan', 'Abbottabad', 'Swat', 'Dera Ismail Khan', 'Kohat', 'Charsadda', 'Nowshera',
                    'Bannu', 'Hangu', 'Mingora', 'Kohat', 'Kalam', 'Shangla', 'Batkhela', 'Chitral', 'Mansehra',
                    'Karak', 'Torkham', 'Kohistan', 'Chakdara', 'Dargai', 'Wana', 'Hassan Khel', 'Tarbela', 'Khyber',
                    'Jamrud', 'Bazid Khel', 'Pabbi', 'Saidu Sharif', 'Tangi', 'Peshawar Cantt', 'Peshawar Saddar',
                    'Kharkai', 'Dera Ghazi Khan', 'Mardan Cantt', 'Mingora', 'Chitral'
                ],
                
                'Balochistan' => [
                    'Quetta', 'Gwadar', 'Zhob', 'Khuzdar', 'Loralai', 'Sibi', 'Turbat', 'Dera Murad Jamali', 
                    'Chaman', 'Nushki', 'Pishin', 'Mastung', 'Kalat', 'Jafarabad', 'Jhelum', 'Sanjavi', 'Kohlu',
                    'Nok Kundi', 'Dera Bugti', 'Panjgur', 'Awaran', 'Barkhan', 'Bela', 'Kohlu', 'Mekran', 
                    'Turbat', 'Gwadar Port', 'Rakhshan', 'Ziarat', 'Taspini', 'Mand', 'Killi Khudai', 'Rikhi'
                ],
                
                'Azad Jammu & Kashmir' => [
                    'Muzaffarabad', 'Mirpur', 'Bhimber', 'Rawalakot', 'Bagh', 'Kotli', 'Poonch', 'Abbaspur', 'Dadyal',
                    'Chakswari', 'Bani', 'Samahni', 'Rakhchikri', 'Tatrinote', 'Mandi', 'Chung', 'Khuiratta', 
                    'Mahal', 'Saidpur', 'Toli Pir', 'Kalar', 'Keenjra', 'Jarian', 'Taleeli', 'Banjosa', 'Khushab'
                ],
                
                'Gilgit-Baltistan' => [
                    'Gilgit', 'Skardu', 'Hunza', 'Khaplu', 'Dumyal', 'Ghanche', 'Shigar', 'Baltistan', 'Diamer', 
                    'Astore', 'Tariqabad', 'Jutal', 'Chilas', 'Chitral', 'Darel', 'Tangir', 'Shandur', 'Gulmit',
                    'Ghulkin', 'Nasirabad', 'Yasin', 'Kargil', 'Phandar', 'Bualtar', 'Polo', 'Karakoram', 'Brahui'
                ],
                
                'Islamabad Capital Territory' => [
                    'Islamabad', 'F-10', 'F-8', 'F-6', 'G-5', 'G-7', 'G-10', 'G-11', 'G-13', 'G-14', 'F-7', 'F-11', 
                    'G-12', 'G-9', 'I-8', 'I-10', 'I-11', 'Saddar', 'Blue Area', 'Centaurus', 'Bahria Town', 
                    'Rawat', 'D-12', 'Tarlai', 'Bara Kahu', 'Sangjani', 'Saidpur', 'Khanna', 'Shams Colony'
                ]
            ];
            foreach ($states as $state => $cities) {
                State::factory()
                ->state(["name"=> $state])
                ->has(
                    City::factory()
                        ->count(count($cities))
                        ->sequence(...array_map(fn($city)=>["name"=>$city],$cities))
                )
                ->create();
            }
            $carMakers = [
                'Toyota' => ['Corolla', 'Yaris', 'Camry', 'Fortuner', 'Prado', 'Hilux','Land Cruiser'],
                'Honda' => ['Civic', 'City', 'HR-V', 'BR-V', 'Accord'],
                'Suzuki' => ['Alto', 'Cultus', 'Swift', 'Wagon R', 'Vitara', 'Mehran'],
                'Kia' => ['Picanto', 'Sportage', 'Seltos', 'Stonic'],
                'Hyundai' => ['Elantra', 'Tucson', 'Sonata'],
                'Ford' => ['EcoSport', 'Mustang', 'F-150'],
                'Chevrolet' => ['Aveo', 'Cruze', 'Tracker'],
                'Nissan' => ['X-Trail', 'Juke', 'Altima'],
                'Mitsubishi' => ['Pajero', 'Outlander', 'Lancer'],
                'BMW' => ['3 Series', '5 Series', 'X5', 'X3'],
                'Mercedes-Benz' => ['C-Class', 'E-Class', 'S-Class', 'GLE', 'GLC'],
                'Audi' => ['A3', 'A4', 'Q5', 'Q7', 'A6'],
                'Volkswagen' => ['Polo', 'Golf', 'Tiguan'],
                'Mazda' => ['CX-5', 'Mazda 6'],
                'Peugeot' => ['3008', '5008'],
                'Changan' => ['Alsvin', 'Karvaan'],
                'Faw' => ['V2', 'Besturn'],
                'MG' => ['ZS', 'HS', 'MG 5'],
                'Porsche' => ['Macan', 'Cayenne', '911'],
                'Subaru' => ['Forester', 'Impreza'],
                'Renault' => ['Kwid', 'Triber'],
                'Isuzu' => ['D-Max', 'Mu-X']
            ];
            foreach ($carMakers as $maker => $models) {
                Maker::factory()
                ->state(['name' => $maker])
                ->has(
                    CarModel::factory()
                    ->count(count($models))
                    ->sequence(...array_map(fn($model)=>['name'=>$model],$models))
                )
                ->create();
            }
            User::factory()
            ->count(2)
            ->has(
        Car::factory()
                ->count(50)
                ->has(
                    CarImage::factory()
                    ->count(5)
                    ->sequence(
                        ['position'=>'1'],
                        ['position'=>'2'],
                        ['position'=>'3'],
                        ['position'=>'4'],
                        ['position'=>'5']
                    ),
                    'images'
                )
                ->hasFeatures(),            
                'favouriteCars',            
            )
            ->create();
    }
}
