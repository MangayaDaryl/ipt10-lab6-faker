<?php

require_once 'vendor/autoload.php';  

use Faker\Factory;

class Random
{
    public static function generatePerson()
    {
        $faker = Factory::create('en_PH');  

        return [
            'UUID' => $faker->uuid,
            'Title' => $faker->title,
            'First Name' => $faker->firstName,
            'Last Name' => $faker->lastName,
            'Street Address' => $faker->streetAddress,
            'Barangay' => $faker->streetName,
            'Municipality' => $faker->city,
            'Province' => $faker->state,
            'Country' => $faker->country,
            'Phone Number' => $faker->phoneNumber,
            'Mobile Number' => $faker->phoneNumber,
            'Company Name' => $faker->company,
            'Company Website' => $faker->domainName,
            'Job Title' => $faker->jobTitle,
            'Favorite Color' => $faker->safeColorName,
            'Birthdate' => $faker->date,
            'Email Address' => $faker->email,
            'Password' => $faker->password,
        ];
    }

    public static function generatePeople($count = 300)
    {
        $people = [];
        for ($i = 0; $i < $count; $i++) {
            $people[] = self::generatePerson();
        }
        return $people;
    }
}
?>
