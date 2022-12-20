function disabledButton() {

    let names = document.getElementById('names').value;
    let cedula = document.getElementById('cedula').value;
    let passwordUser = document.getElementById('passwordUser').value;
    let emailAddress = document.getElementById('emailAddress').value;
    let rolUser = document.getElementById('rolUser').value;

    // if (names == '' && cedula == '' && passwordUser == '' && emailAddress == '' && rolUser == '0') {
    //     $('#saveUser').attr('disabled', 'disabled');
    // } else if (condition) {
        
    // } {
    //     $('#saveUser').removeAttr('disabled', 'disabled');
    // }
    
}


function storeUsers() {

    let data = new FormData();
    data.append('names',    $('#names').val());
    data.append('cedula',   $('#cedula').val());
    data.append('password', $('#passwordUser').val());
    data.append('email',    $('#emailAddress').val());
    data.append('rol',      $('#rolUser').val());

    localStorage.setItem('email',    JSON.stringify($('#emailAddress').val()));
    localStorage.setItem('password', JSON.stringify($('#passwordUser').val()));
   

    axios.post('createUser', data)
    .then(function (response) {
        
        deleteFieldsUser();
        $('#form2Example17').val(JSON.parse(localStorage.getItem('email')));
        $('#form2Example27').val(JSON.parse(localStorage.getItem('password')));
        Swal.fire(response.data);

        window.location.href = '/';
    })
    .catch(function (error) {
        console.log(error);
    })

}   

function deleteFieldsUser() {

    $('#names').val('');
    $('#cedula').val('');
    $('#passwordUser').val('');
    $('#emailAddress').val('');
    $('#rolUser').val('');

}