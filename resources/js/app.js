import './bootstrap';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    if (calendarEl) {
        var calendar = new Calendar(calendarEl, {
            plugins: [ dayGridPlugin, interactionPlugin ],
            selectable: true,
            dateClick: function(info) {
                alert('Clicked on: ' + info.dateStr);
            }
        });

        calendar.render();
    } else {
        console.error('Calendar element not found');
    }
});
