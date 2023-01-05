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

    axios.post('createUser', data)
    .then(function (response) {
        deleteFieldsUser();
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

// function validateCredentials() 
// {
//     let data = new FormData();
//     data.append('user',       $('#form2Example17').val());
//     data.append('password',   $('#form2Example27').val());

//     axios.post('validate', data)
//     .then(function (response) {
//         console.log(response);
//     })
//     .catch(function (error) {
//         console.log(error);
//     })
// }