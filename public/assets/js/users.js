$(document).ready(function() {

    // Cuando el dom esta listo se cargara la tabla de usuarios con los datos que vienen de la peticion desde el controller
    axios.post('users')
    .then(function (response) {

        let newUsers = '';
        response.data.forEach(element => {
        newUsers += `<tr id="father${element.id}">   
                        <td id="id${element.id}">${element.id}</td>
                        <td id="name${element.id}">${element.nombre}</td>
                        <td id="cedula${element.id}">${element.cedula}</td>
                        <td id="mail${element.id}">${element.email}</td>
                        <td id="rol${element.id}">${element.roles_u_sers[0].nombre_en_pantalla}</td>
                        <td>
                            <i class="fa-solid fa-pen-to-square" onclick="editUser(${element.id});" style="cursor: pointer;"></i>
                            <i class="fa-solid fa-trash" onclick="deleteUser(${element.id});" style="cursor: pointer;"></i>
                        </td>
                     </tr>`;

                    });
        $('#tableUSers').append(newUsers);

    })
    .catch(function (error) {
        console.log(error);
    })
})


/* Start Users */
function processData() {

    let id = JSON.parse(localStorage.getItem('id'));
    let url = id != null ? `edit/${id}` : 'created'; 
    let data = new FormData();

    if (id != null) {
        data.append('id', id);
    }

    data.append('names',    document.getElementById('nombresLabel').value);
    data.append('cedula',   document.getElementById('cedulaLabel').value);
    data.append('email',    document.getElementById('emailLabel').value);
    data.append('password', document.getElementById('passwordLabel').value);
    data.append('roles',    document.getElementById('roles').value);

    axios.post(`${url}`, data)
    .then(function (response) {

        if (response.data.code == '2') {

            axios.post('users')
            .then(function (response) {

                let newUsers;
                $('#tableUSers').empty();

                response.data.forEach(element => {
    
                newUsers += `<tr id="father${element.id}">   
                    <td id="id${element.id}">${element.id}</td>
                    <td id="name${element.id}">${element.nombre}</td>
                    <td id="cedula${element.id}">${element.cedula}</td>
                    <td id="mail${element.id}">${element.email}</td>
                    <td id="rol${element.id}">${element.roles_u_sers[0].nombre_en_pantalla}</td>
                    <td>
                        <i class="fa-solid fa-pen-to-square" onclick="editUser(${element.id});" style="cursor: pointer;"></i>
                        <i class="fa-solid fa-trash" onclick="deleteUser(${element.id});" style="cursor: pointer;"></i>
                    </td>
                </tr>`;
                
                });
                
                $('#tableUSers').append(newUsers);

            })
            .catch(function (error) {
                console.log(error);
            })

        } else {

            axios.post(`showOne/${id}`)
            .then(function (response) {
    
                $(`#name${id}`).text(`${response.data.nombre}`);
                $(`#cedula${id}`).text(response.data.cedula);
                $(`#mail${id}`).text(response.data.email);
                $(`#rol${id}`).text(response.data.roles_u_sers[0].nombre_en_pantalla);
    
            })
            .catch(function (error) {
                console.log(error);
            })

        }

        Swal.fire(`${response.data.resp}`);
        $('#exampleModal').modal('toggle');

     })
    .catch(function (error) {
        console.log(error);
    })

}


function editUser(id) {

    openModal(2, id);
    
    axios.post(`showOne/${id}`)
    .then(function (response) {

        $('#nombresLabel').val(response.data.nombre);
        $('#cedulaLabel').val(response.data.cedula);
        $('#emailLabel').val(response.data.email);
        $('#passwordLabel').val(response.data.password);
        $('#roles').val(response.data.roles_id);

    })
    .catch(function (error) {
        console.log(error);
    })

}


function deleteUser(id) {
     
    Swal.fire({
        title: `En verdad quiere eliminar el registro actual?`,
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Eliminar',
        denyButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            let data = new FormData();
            data.append('id', id);
        
            axios.post(`delete/${id}`)
            .then(function (response) {
                
                Swal.fire(response.data, '', 'success');
                
                axios.post('users')
                .then(function (response) {
                    $(`#father${id}`).remove();
                })
                .catch(function (error) {
                      Swal.fire(error, '', 'info')
                })

            })
            .catch(function (error) {
                console.log(error);
            })
        
        } else if (result.isDenied) {
        }
    })

    
}

function getIdByUser(id) {
    localStorage.setItem('id', JSON.stringify(id));
}


function openModal(tipo, id=0) {
    let button;

    switch (tipo) {
        case 1:
            localStorage.clear();
            document.getElementById('titleUser').innerHTML = "Crear Usuarios";
            $('#exampleModal').modal('toggle');
        
            $('#nombresLabel').val('');
            $('#cedulaLabel').val('');
            $('#emailLabel').val('');
            $('#passwordLabel').val('');
            $('#roles').val('');
            break;
    
        case 2:
            getIdByUser(id);
            document.getElementById('titleUser').innerHTML = "Editar Usuarios";
            $('#exampleModal').modal('toggle');
            break;
    }

}

function deleteFields() {

    $('#nombresLabel').val('');
    $('#cedulaLabel').val('');
    $('#emailLabel').val('');
    $('#passwordLabel').val('');
    $('#roles').val('');

    $('#exampleModal').modal('toggle');

}