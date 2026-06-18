@extends('layouts.default')

@section('header')
@endsection

@section('main_content')
 <div>
    <div class='bg-amber-100 shadow-sm shadow-blue-400'>
        <h1>
            Booking a meeting room
        </h1>

        <p>
            This page is to book a meeting room for Dharmoni
        </p>

        <form>
            <div class='border border-amber-950'>
                <label for="date"> Please choose a date:
                    <input type="date" name='date'>
                </label>
                <br>
                <br>
                <label for="timeslot">
                    Please choose time slot:
                    <input type="time">
                </label>

                <br>
                <br>
                <label for="timeslot">
                    Please choose meeting room:
                    <select name="meetingroom" id="meetingroom">
                        <option value="room1"> Meeting Room 1</option>
                        <option value="room2"> Meeting Room 2</option>
                        <option value="room3"> Meeting Room 3</option>
                    </select>
                </label>
                
                <br>
                <br>
                <label for="duration">
                    Please choose duration:
                    <input type="number">
                </label>

                <br>
                <br>
                <label for="no_pax">
                    Please put number of pax:
                    <input type="number">
                </label>


            </div>
        </form>
    </div>
 </div>

 @endsection

