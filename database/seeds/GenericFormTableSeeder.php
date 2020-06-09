<?php

use Illuminate\Database\Seeder;

class GenericFormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////////////////Lodging
        $this->call(AirportShuttle::class);
        $this->call(Beach::class);
        $this->call(Building::class);
        $this->call(BusinessServices::class);
        $this->call(CheckIn::class);
        $this->call(Corridors::class);
        $this->call(DepartureBell::class);
        $this->call(DepartureDesk::class);
        $this->call(DepartureDoor::class);
        $this->call(DepartureValet::class);
        $this->call(Directions::class);
        $this->call(DoorStaff::class);
        $this->call(Elevators::class);
        $this->call(ExecutiveLounge::class);
        $this->call(ExecutiveLoungeFood::class);
        $this->call(FitnessCenter::class);
        $this->call(FitnessUnmanned::class);
        $this->call(GreenInitiatives::class);
        $this->call(GSGeneral::class);
        $this->call(GuestBath::class);
        $this->call(GuestBathLinen::class);
        $this->call(GuestBathShower::class);
        $this->call(GuestRoom::class);
        $this->call(Housekeeping::class);
        $this->call(LaundryShoeShine::class);
        $this->call(Lobby::class);
        $this->call(Maintenance::class);
        $this->call(MeetingRooms::class);
        $this->call(PBX::class);
        $this->call(Pool::class);
        $this->call(PrivateBar::class);
        $this->call(ProblemResolution::class);
        $this->call(Reservation::class);
        $this->call(Restaurant::class);
        $this->call(Restrooms::class);
        $this->call(RoomingGuest::class);
        $this->call(RoomReMake::class);
        $this->call(SecurityBell::class);
        $this->call(SecurityDesk::class);
        $this->call(SecurityGeneral::class);
        $this->call(SecurityHousekeeping::class);
        $this->call(SecurityPBX::class);
        $this->call(SecurityValet::class);
        $this->call(ServiceApp::class);
        $this->call(SpecialNeeds::class);
        $this->call(TechEnhancements::class);
        $this->call(Transportation::class);
        $this->call(TurndownService::class);
        $this->call(Valet::class);
        $this->call(WakeUpCall::class);

        /////////////////Outlets
        $this->call(Bar::class);
        $this->call(BreakfastBuffet::class);
        $this->call(CafeDeli::class);
        $this->call(DiningBreakfast::class);
        $this->call(DiningCasual::class);
        $this->call(DiningFine::class);
        $this->call(Golf::class);
        $this->call(Lounge::class);
        $this->call(LunchBuffet::class);
        $this->call(PoolBeachBar::class);
        $this->call(Retail::class);
        $this->call(RoomServiceBreakfast::class);
        $this->call(RoomServiceDinner::class);
        $this->call(RoomServiceGraveyard::class);
        $this->call(Spa::class);
        $this->call(SushiBar::class);
    }
}
