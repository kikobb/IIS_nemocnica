function changeInfos(primaryValue) {
    let doctorNurseValues = ['meno', 'priezvisko', 'oddelenie'];
    let roomValues = ['cislo', 'typ','kapacita'];
    let medicineValues = ['nazov','latka'];
    let recipientValues = ['meno','priezvisko'];
    let departmentValues = ['nazov','poschodie'];
    let patientValues = ['meno', 'priezvisko', 'rodne_cislo'];
    let stayValues = ['datum_prichodu','datum_odchodu','oddelenie','rodne_cislo'];
    let examinationValues = ['rodne_cislo','typ','cas'];
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
    //$('input[placeholder], textarea[placeholder]').placeholder();
    let val = $('#primary_selector').val();
    changeInfos(val);

    $('#primary_selector').change(function() {
        val = $(this).val();
        if(val != '') {
            changeInfos(val);
        }
        $('#secondary_selector').val("");
    })
});

let logoutUrl = '/logout';

$(function() {
    let time = new Date().getTime();
    $(document.body).bind("mousemove keypress", function(e) {
        time = new Date().getTime();
    });

    function refresh() {
        if(new Date().getTime() - time >= 60000*15)
            window.location = logoutUrl;
        else
            setTimeout(refresh, 10000);
    }

    setTimeout(refresh, 10000);
});

