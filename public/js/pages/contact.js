// map
function initMap() {
    var zingpower = { lat: 34.33203885, lng: 109.01300758 };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: zingpower,
        map: map
    });

    var marker = new google.maps.Marker({
        position: zingpower,
        map: map,
        title: 'Zing Power'
    });
}
// form sublime
function ajaxseed() {
    var name = $('#form-name').val();
    var email = $('#form-email').val();
    var phone = $('#form-phone').val();
    var question = $('#form-question').val();
    if (name) {
        
    } else {
        swal('Oops...', 'Your name?', 'warning');
    };
    if (email) {
        
    } else {
        swal('Oops...', 'Your email?', 'warning');
    };
    if (phone) {
        
    } else {
        swal('Oops...', 'Your phone?', 'warning');
    };
    if (question) {
        
    } else {
        swal('Oops...', 'Your question?', 'warning');
    }
    $.ajax({
        type: "POST",
        url: "contact/save",
        data: { "name": name, "email": email, "phone": phone, "question": question },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function(){
            swal('success', 'We received your advise', 'success');
            $('#form-name').val('');
            $('#form-email').val('');
            $('#form-phone').val('');
            $('#form-question').val('');
        }
    });
};