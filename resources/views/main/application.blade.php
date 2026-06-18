@extends('layouts.default')

@section('header')
@endsection

@section('main_content')
@vite('resources/js/app.js')
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
                <label for="date_book"> Please choose a date:
                    <input type="date" name='date_book' id="date_book">
                </label>
                <br>
                <br>
                <label for="start_time">
                    Please choose start time:
                    <select for="start_time" name="start_time" id="start_time" onchange="checkEndTime()">
                        <option value="" selected disabled>Choose start time</option>
                        <option value="time1"> 8:30am </option>
                        <option value="time2"> 9:00am</option>
                        <option value="time3"> 9:30am</option>
                        <option value="time4"> 10:00am</option>
                        <option value="time5"> 10:30am</option>
                        <option value="time6"> 11:00am</option>
                        <option value="time7"> 11:30am</option>
                        <option value="time8"> 12:00pm</option>
                        <option value="time9"> 12:30pm</option>
                    </select>
                </label>
                <br>
                <br>
                <label for="end_time">
                    Please choose end time:
                    <select for="end_time" name="end_time" id="end_time" onchange="blockedDuration()">
                        <option value="" selected disabled> Choose end time</option>
                        <!-- <option value="time1"> 8:30am </option>
                        <option value="time2"> 9:00am</option>
                        <option value="time3"> 9:30am</option>
                        <option value="time4"> 10:00am</option>
                        <option value="time5"> 10:30am</option>
                        <option value="time6"> 11:00am</option>
                        <option value="time7"> 11:30am</option>
                        <option value="time8"> 12:00pm</option>
                        <option value="time9"> 12:30pm</option> -->
                    </select>
                </label>

                <br>
                <br>
                <label for="meetingroom">
                    Please choose meeting room:
                    <select for="meetingroom" name="meetingroom" id="meetingroom">
                        <option value="" selected disabled>Choose meeting room</option>
                        <option value="room1"> Meeting Room 1</option>
                        <option value="room2"> Meeting Room 2</option>
                        <option value="room3"> Meeting Room 3</option>
                    </select>
                </label>
                
                <br>
                <br>
                <!-- <label for="duration">
                    Please choose duration:
                    <input type="number" name="duration" id="duration">
                </label>

                <br>
                <br> -->
                <label for="no_pax">
                    Please put number of pax:
                    <input type="number" name="no_pax" id="no_pax" placeholder="Please put no of pax">
                </label>


            </div>
        </form>
    </div>
 </div>

 @endsection

