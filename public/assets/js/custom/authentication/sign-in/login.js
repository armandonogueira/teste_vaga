// $("#kt_sign_in_submit").click(function() {

//     $.post("demo_test.asp",
//         function(data, status) {
//             alert("Data: " + data + "\nStatus: " + status);
//         });

// });

// $("#kt_sign_in_submit").click(function() {

$.ajax({
    url: 'verification',
    // dataType : 'html',
    type: 'POST',
    data: $("#kt_sign_in_formt").serialize(),
    beforeSend: function() {
        console.log('Carregando...');
    },
    success: function(retorno) {
        alert(retorno);
    },
    error: function(a, b, c) {
        alert('Erro: ' + a['status'] + ' ' + c);
    }
});
// });