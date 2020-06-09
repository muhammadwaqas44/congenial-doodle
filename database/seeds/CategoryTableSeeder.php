<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Category::truncate();
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $categories = [
            [
                'id' => 1,
                'name' => 'Reservation',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 2,
                'name' => 'Airport Shuttle',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 3,
                'name' => 'Valet',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 4,
                'name' => 'Door Staff',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 5,
                'name' => 'Check In',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 6,
                'name' => 'Rooming Guest',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 7,
                'name' => 'Guest Room',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 8,
                'name' => 'Guest Bath',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 9,
                'name' => 'Guest Bath Linen',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 10,
                'name' => 'Guest Bath Shower',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 11,
                'name' => 'Private Bar',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 12,
                'name' => 'Green Initiatives',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 13,
                'name' => 'Tech Enhancements',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 14,
                'name' => 'Turndown Service',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 15,
                'name' => 'Room Re-Make',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 16,
                'name' => 'Transportation',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 17,
                'name' => 'GS General',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 18,
                'name' => 'Restaurant',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 19,
                'name' => 'Problem Resolution',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 20,
                'name' => 'Directions',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 21,
                'name' => 'Service App',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 22,
                'name' => 'Special Needs',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 23,
                'name' => 'Housekeeping',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 24,
                'name' => 'Laundry - Shoe Shine',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 25,
                'name' => 'Maintenance',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 26,
                'name' => 'PBX',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 27,
                'name' => 'Wake Up Call',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 28,
                'name' => 'Security Bell',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 29,
                'name' => 'Security Desk',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 30,
                'name' => 'Security Housekeeping',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 31,
                'name' => 'Security PBX',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 32,
                'name' => 'Security Valet',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 33,
                'name' => 'Security General',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 34,
                'name' => 'Executive Lounge',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 35,
                'name' => 'Executive Lounge Food',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 36,
                'name' => 'Building',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 37,
                'name' => 'Lobby',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 38,
                'name' => 'Restrooms',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 39,
                'name' => 'Fitness Center',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 40,
                'name' => 'Fitness Unmanned',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 41,
                'name' => 'Pool',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 42,
                'name' => 'Beach',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 43,
                'name' => 'Corridors',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 44,
                'name' => 'Elevators',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 45,
                'name' => 'Meeting Rooms',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 46,
                'name' => 'Business Services',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 47,
                'name' => 'Departure - Bell',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 48,
                'name' => 'Departure - Desk',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 49,
                'name' => 'Departure - Door',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 50,
                'name' => 'Departure - Valet',
                'type' => '1',
                'parent_id' => null,
            ],
            [
                'id' => 51,
                'name' => 'Breakfast Buffet',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 52,
                'name' => 'Lunch Buffet',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 53,
                'name' => 'Dining - Breakfast',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 54,
                'name' => 'Dining - Casual',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 55,
                'name' => 'Dining - Fine',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 56,
                'name' => 'Cafe - Deli',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 57,
                'name' => 'Lounge',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 58,
                'name' => 'Bar',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 59,
                'name' => 'Pool - Beach Bar',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 60,
                'name' => 'Retail',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 61,
                'name' => 'Room Service - Breakfast',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 62,
                'name' => 'Room Service - Dinner',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 63,
                'name' => 'Room Service - Graveyard',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 64,
                'name' => 'Golf',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 65,
                'name' => 'Spa',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 66,
                'name' => 'Sushi Bar',
                'type' => '2',
                'parent_id' => null,
            ], [
                'id' => 67,
                'name' => 'Greeting',
                'type' => '3',
                'parent_id' => 51,
            ], [
                'id' => 68,
                'name' => 'Atmosphere',
                'type' => '3',
                'parent_id' => 51,
            ],[
                'id' => 69,
                'name' => 'Initial Service',
                'type' => '3',
                'parent_id' => 51,
            ],[
                'id' => 70,
                'name' => 'Buffet Service',
                'type' => '3',
                'parent_id' => 51,
            ],[
                'id' => 71,
                'name' => 'Table Service',
                'type' => '3',
                'parent_id' => 51,
            ],[
                'id' => 72,
                'name' => 'À La Carte',
                'type' => '3',
                'parent_id' => 51,
            ],[
                'id' => 73,
                'name' => 'Facility',
                'type' => '3',
                'parent_id' => 51,
            ],[
                'id' => 74,
                'name' => 'Departure',
                'type' => '3',
                'parent_id' => 51,
            ],[
                'id' => 75,
                'name' => 'Greeting',
                'type' => '3',
                'parent_id' => 52,
            ],[
                'id' => 76,
                'name' => 'Atmosphere',
                'type' => '3',
                'parent_id' => 52,
            ],[
                'id' => 77,
                'name' => 'Initial Service',
                'type' => '3',
                'parent_id' => 52,
            ],[
                'id' => 78,
                'name' => 'Table Service',
                'type' => '3',
                'parent_id' => 52,
            ],[
                'id' => 79,
                'name' => 'Buffet Service',
                'type' => '3',
                'parent_id' => 52,
            ],[
                'id' => 80,
                'name' => 'À La Carte',
                'type' => '3',
                'parent_id' => 52,
            ],[
                'id' => 81,
                'name' => 'Facility',
                'type' => '3',
                'parent_id' => 52,
            ],[
                'id' => 82,
                'name' => 'Check',
                'type' => '3',
                'parent_id' => 52,
            ],[
                'id' => 83,
                'name' => 'Departure',
                'type' => '3',
                'parent_id' => 52,
            ],[
                'id' => 84,
                'name' => 'First Impression',
                'type' => '3',
                'parent_id' => 53,
            ],[
                'id' => 85,
                'name' => 'Greeting',
                'type' => '3',
                'parent_id' => 53,
            ],[
                'id' => 86,
                'name' => 'Order Taking',
                'type' => '3',
                'parent_id' => 53,
            ],[
                'id' => 87,
                'name' => 'Initial Service',
                'type' => '3',
                'parent_id' => 53,
            ],[
                'id' => 88,
                'name' => 'Ongoing Service',
                'type' => '3',
                'parent_id' => 53,
            ],[
                'id' => 89,
                'name' => 'Facilities',
                'type' => '3',
                'parent_id' => 53,
            ],[
                'id' => 90,
                'name' => 'Departure',
                'type' => '3',
                'parent_id' => 53,
            ],[
                'id' => 91,
                'name' => 'Greeting',
                'type' => '3',
                'parent_id' => 54,
            ],[
                'id' => 92,
                'name' => 'First Impression',
                'type' => '3',
                'parent_id' => 54,
            ],[
                'id' => 93,
                'name' => 'Initial Service',
                'type' => '3',
                'parent_id' => 54,
            ],[
                'id' => 94,
                'name' => 'Order Taking',
                'type' => '3',
                'parent_id' => 54,
            ],[
                'id' => 95,
                'name' => 'Meal Service',
                'type' => '3',
                'parent_id' => 54,
            ],[
                'id' => 96,
                'name' => 'Dessert Service',
                'type' => '3',
                'parent_id' => 54,
            ],[
                'id' => 97,
                'name' => 'Incidentals',
                'type' => '3',
                'parent_id' => 54,
            ],[
                'id' => 98,
                'name' => 'Departure',
                'type' => '3',
                'parent_id' => 54,
            ],[
                'id' => 99,
                'name' => 'Greeting',
                'type' => '3',
                'parent_id' => 55,
            ],[
                'id' => 100,
                'name' => 'First Impression',
                'type' => '3',
                'parent_id' => 55,
            ],[
                'id' => 101,
                'name' => 'Initial Service',
                'type' => '3',
                'parent_id' => 55,
            ],[
                'id' => 102,
                'name' => 'Wine Service',
                'type' => '3',
                'parent_id' => 55,
            ],[
                'id' => 103,
                'name' => 'Order Taking',
                'type' => '3',
                'parent_id' => 55,
            ],[
                'id' => 104,
                'name' => 'Meal Service',
                'type' => '3',
                'parent_id' => 55,
            ],[
                'id' => 105,
                'name' => 'Dessert Service',
                'type' => '3',
                'parent_id' => 55,
            ],[
                'id' => 106,
                'name' => 'Incidentals',
                'type' => '3',
                'parent_id' => 55,
            ],[
                'id' => 107,
                'name' => 'Departure',
                'type' => '3',
                'parent_id' => 55,
            ],[
                'id' => 108,
                'name' => 'Atmosphere',
                'type' => '3',
                'parent_id' => 56,
            ],[
                'id' => 109,
                'name' => 'Services',
                'type' => '3',
                'parent_id' => 56,
            ],[
                'id' => 110,
                'name' => 'Facility',
                'type' => '3',
                'parent_id' => 56,
            ],[
                'id' => 112,
                'name' => 'First Impression',
                'type' => '3',
                'parent_id' => 57,
            ],[
                'id' => 113,
                'name' => 'Initial Service',
                'type' => '3',
                'parent_id' => 57,
            ],[
                'id' => 114,
                'name' => 'Beverage Service',
                'type' => '3',
                'parent_id' => 57,
            ],[
                'id' => 115,
                'name' => 'Food Service',
                'type' => '3',
                'parent_id' => 57,
            ],[
                'id' => 116,
                'name' => 'Ongoing Service',
                'type' => '3',
                'parent_id' => 57,
            ],[
                'id' => 117,
                'name' => 'Product Cash Control',
                'type' => '3',
                'parent_id' => 57,
            ],[
                'id' => 118,
                'name' => 'Well Cost Control',
                'type' => '3',
                'parent_id' => 57,
            ],[
                'id' => 119,
                'name' => 'Lounge Service',
                'type' => '3',
                'parent_id' => 57,
            ],[
                'id' => 120,
                'name' => 'Security',
                'type' => '3',
                'parent_id' => 57,
            ],[
                'id' => 121,
                'name' => 'Service Overview',
                'type' => '3',
                'parent_id' => 58,
            ],[
                'id' => 122,
                'name' => 'Salesmanship',
                'type' => '3',
                'parent_id' => 58,
            ],[
                'id' => 123,
                'name' => 'Brand Standards',
                'type' => '3',
                'parent_id' => 58,
            ],[
                'id' => 124,
                'name' => 'Food Service',
                'type' => '3',
                'parent_id' => 58,
            ],[
                'id' => 125,
                'name' => 'Alcohol Liability',
                'type' => '3',
                'parent_id' => 58,
            ],[
                'id' => 126,
                'name' => 'Beverage Accountability',
                'type' => '3',
                'parent_id' => 58,
            ],[
                'id' => 127,
                'name' => 'Well Service',
                'type' => '3',
                'parent_id' => 58,
            ],[
                'id' => 128,
                'name' => 'Facility',
                'type' => '3',
                'parent_id' => 58,
            ],[
                'id' => 129,
                'name' => 'First Impression',
                'type' => '3',
                'parent_id' => 59,
            ],[
                'id' => 130,
                'name' => 'Initial Service',
                'type' => '3',
                'parent_id' => 59,
            ],[
                'id' => 131,
                'name' => 'Beverage Service',
                'type' => '3',
                'parent_id' => 59,
            ],[
                'id' => 132,
                'name' => 'Food Service',
                'type' => '3',
                'parent_id' => 59,
            ],[
                'id' => 133,
                'name' => 'Ongoing Service',
                'type' => '3',
                'parent_id' => 59,
            ],[
                'id' => 134,
                'name' => 'Product Cash Control',
                'type' => '3',
                'parent_id' => 59,
            ],[
                'id' => 135,
                'name' => 'Well Cost Control',
                'type' => '3',
                'parent_id' => 59,
            ],[
                'id' => 136,
                'name' => 'Security',
                'type' => '3',
                'parent_id' => 59,
            ],[
                'id' => 137,
                'name' => 'Check-In Service',
                'type' => '3',
                'parent_id' => 60,
            ],[
                'id' => 138,
                'name' => 'Facilities',
                'type' => '3',
                'parent_id' => 60,
            ],[
                'id' => 139,
                'name' => 'General Sales',
                'type' => '3',
                'parent_id' => 61,
            ],[
                'id' => 140,
                'name' => 'Telephone Sales',
                'type' => '3',
                'parent_id' => 61,
            ],[
                'id' => 141,
                'name' => 'In-Room Service',
                'type' => '3',
                'parent_id' => 61,
            ],[
                'id' => 142,
                'name' => 'Food',
                'type' => '3',
                'parent_id' => 61,
            ],[
                'id' => 143,
                'name' => 'Service Articles',
                'type' => '3',
                'parent_id' => 61,
            ],[
                'id' => 144,
                'name' => 'After Service',
                'type' => '3',
                'parent_id' => 61,
            ],[
                'id' => 145,
                'name' => 'General Sales',
                'type' => '3',
                'parent_id' => 62,
            ],[
                'id' => 146,
                'name' => 'Telephone Sales',
                'type' => '3',
                'parent_id' => 62,
            ],[
                'id' => 147,
                'name' => 'In-Room Service',
                'type' => '3',
                'parent_id' => 62,
            ],[
                'id' => 148,
                'name' => 'Food',
                'type' => '3',
                'parent_id' => 62,
            ],[
                'id' => 149,
                'name' => 'Service Articles',
                'type' => '3',
                'parent_id' => 62,
            ],[
                'id' => 150,
                'name' => 'After Service',
                'type' => '3',
                'parent_id' => 62,
            ],[
                'id' => 151,
                'name' => 'General Sales',
                'type' => '3',
                'parent_id' => 63,
            ],[
                'id' => 152,
                'name' => 'Telephone Sales',
                'type' => '3',
                'parent_id' => 63,
            ],[
                'id' => 153,
                'name' => 'In-Room Service',
                'type' => '3',
                'parent_id' => 63,
            ],[
                'id' => 154,
                'name' => 'Food',
                'type' => '3',
                'parent_id' => 63,
            ],[
                'id' => 155,
                'name' => 'Service Articles',
                'type' => '3',
                'parent_id' => 63,
            ],[
                'id' => 156,
                'name' => 'After Service',
                'type' => '3',
                'parent_id' => 63,
            ],[
                'id' => 157,
                'name' => 'Tee Time',
                'type' => '3',
                'parent_id' => 64,
            ],[
                'id' => 158,
                'name' => 'Facility',
                'type' => '3',
                'parent_id' => 64,
            ],[
                'id' => 159,
                'name' => 'Arrival',
                'type' => '3',
                'parent_id' => 64,
            ],[
                'id' => 160,
                'name' => 'Pro Shop',
                'type' => '3',
                'parent_id' => 64,
            ],[
                'id' => 161,
                'name' => 'Check-In',
                'type' => '3',
                'parent_id' => 64,
            ],[
                'id' => 162,
                'name' => 'Staging Area',
                'type' => '3',
                'parent_id' => 64,
            ],[
                'id' => 163,
                'name' => 'Practice Area',
                'type' => '3',
                'parent_id' => 64,
            ],[
                'id' => 164,
                'name' => 'Course Conditions',
                'type' => '3',
                'parent_id' => 64,
            ],[
                'id' => 165,
                'name' => 'Course Services',
                'type' => '3',
                'parent_id' => 64,
            ],[
                'id' => 166,
                'name' => 'Departure',
                'type' => '3',
                'parent_id' => 64,
            ],[
                'id' => 167,
                'name' => 'Reservation',
                'type' => '3',
                'parent_id' => 65,
            ],[
                'id' => 168,
                'name' => 'Reception',
                'type' => '3',
                'parent_id' => 65,
            ],[
                'id' => 169,
                'name' => 'Arrival',
                'type' => '3',
                'parent_id' => 65,
            ],[
                'id' => 170,
                'name' => 'Locker Attendant',
                'type' => '3',
                'parent_id' => 65,
            ],[
                'id' => 171,
                'name' => 'Locker Facilities',
                'type' => '3',
                'parent_id' => 65,
            ],[
                'id' => 172,
                'name' => 'Waiting Room',
                'type' => '3',
                'parent_id' => 65,
            ],[
                'id' => 173,
                'name' => 'Treatment',
                'type' => '3',
                'parent_id' => 65,
            ],[
                'id' => 174,
                'name' => 'Departure',
                'type' => '3',
                'parent_id' => 65,
            ],[
                'id' => 175,
                'name' => 'First Impression',
                'type' => '3',
                'parent_id' => 66,
            ],[
                'id' => 176,
                'name' => 'Initial Service',
                'type' => '3',
                'parent_id' => 66,
            ],[
                'id' => 177,
                'name' => 'Beverage Service',
                'type' => '3',
                'parent_id' => 66,
            ],[
                'id' => 178,
                'name' => 'Food Service',
                'type' => '3',
                'parent_id' => 66,
            ],[
                'id' => 179,
                'name' => 'Ongoing Service',
                'type' => '3',
                'parent_id' => 66,
            ],[
                'id' => 180,
                'name' => 'Product Cash Control',
                'type' => '3',
                'parent_id' => 66,
            ],[
                'id' => 181,
                'name' => 'Security',
                'type' => '3',
                'parent_id' => 66,
            ],
        ];

        foreach ($categories as $category) {
            \App\Category::create([
                'id' => $category['id'],
                'name' => $category['name'],
                'type' =>$category['type'],
                'parent_id' =>$category['parent_id'],
            ]);
        }
    }
}
