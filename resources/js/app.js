import './bootstrap';

const time_slots = [
    { name: 'time1', value: '8:30am' },
    { name: 'time2', value: '9:00am' },
    { name: 'time3', value: '9:30am' },
    { name: 'time4', value: '10:00am' },  
    { name: 'time5', value: '10:30am' },  
    { name: 'time6', value: '11:00am' },  
    { name: 'time7', value: '11:30am' },  
    { name: 'time8', value: '12:00pm' },  
    { name: 'time9', value: '12:30pm' }
];

const blockedTime = [];

window.checkEndTime = function (){
    const start_time_choosen = document.getElementById('start_time').value;
    const show_end_time = document.getElementById('end_time');

    show_end_time.innerHTML = '<option value="" selected disabled> Choose end time</option>';

    for (const time_slot of time_slots){
        if(start_time_choosen < time_slot.name){
            const end_time = document.createElement('option');
            end_time.value = time_slot.name;
            end_time.textContent = time_slot.value;
            show_end_time.appendChild(end_time);
        }
    }
    

};

window.blockedDuration = function(){
    const start_time_choosen = document.getElementById('start_time').value;
    const show_end_time = document.getElementById('end_time').value;
    const start_text = time_slots.find(slot => slot.name === start_time_choosen);
    const end_text = time_slots.find(slot => slot.name === show_end_time);

    for(const slot of time_slots){
        if(slot.name === start_time_choosen){
            console.log(slot.value);
            if(slot.name < show_end_time){
                console.log(slot.value);
            }
        }
    }
}

