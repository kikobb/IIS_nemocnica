function changeInfos(primaryValue) {
    let doctorNurseValues = ['meno', 'priezvisko', 'oddelenie'];
    let roomValues = ['cislo', 'typ','kapacita'];
    let medicineValues = ['nazov','latka'];
    let recipientValues = ['meno','priezvisko'];
    let departmentValues = ['nazov','poschodie'];
    let patientValues = ['meno', 'priezvisko', 'rodne_cislo'];
    let stayValues = ['datum_prichodu','datum_odchodu','oddelenie','pacient'];
    let examinationValues = ['typ','cas','oddelenie'];
    let arr = doctorNurseValues;
    switch (primaryValue) {
        case 'doktor':
        case 'sestra':
            arr = doctorNurseValues;
            break;
        case 'izba':
            arr = roomValues;
            break;
        case 'liek':
            arr = medicineValues;
            break;
        case 'prijemca':
            arr = recipientValues;
            break;
        case 'oddelenie':
            arr = departmentValues;
            break;
        case 'pacient':
            arr = patientValues;
            break;
        case 'pobyt':
            arr = stayValues;
            break;
        case 'vysetrenie':
            arr = examinationValues;
            break;


    }
    $('#secondary_selector option').each(function() {
        let val = $(this).val();
        if(val != "") {
            if($.inArray(val, arr) > -1) {
                $(this).css('display', 'block');
            } else {
                $(this).css('display', 'none');
            }
        }
    });
}

$(function() {
    changeInfos('doktor');

    $('#primary_selector').change(function() {
        let val = $(this).val();
        if(val != '') {
            changeInfos(val);
        }
    })


});

// Set timeout variables.
var timoutNow = 300; // Timeout in 15 mins would be 900000.
var logoutUrl = 'login.blade.php'; // URL to logout page.

var timeoutTimer;

// Start timers.
function StartTimers() {
    let idleTime = 0;
    $(document).ready(function () {
        //Increment the idle time counter every minute.
        let idleInterval = setInterval(timerIncrement, 6000); // 1 minute

        //Zero the idle timer on mouse movement.
        $(this).mousemove(function (e) {
            idleTime = 0;
        });
        $(this).keypress(function (e) {
            idleTime = 0;
        });
    });

    function timerIncrement() {
        idleTime = idleTime + 1;
        if (idleTime > 1) { // 20 minutes
            window.location.reload();
        }
    }
}
