$(document).ready(function() {

    // Cuando el dom esta listo se cargara la tabla de usuarios con los datos que vienen de la peticion desde el controller
    axios.post('showRoles')
    .then(function (response) {

        let newRoles = '';
        response.data.forEach(element => {
            newRoles += `<tr id="fatherRol${element.id}">   
                            <td id="id${element.id}">${element.id}</td>
                            <td id="name${element.id}">${element.nombre}</td>
                            <td id="nameScreen${element.id}">${element.nombre_en_pantalla}</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square" onclick="openModalRoles(2, ${element.id});" style="cursor: pointer;"></i>
                                <i class="fa-solid fa-trash" onclick="deleteRole(${element.id});" style="cursor: pointer;"></i>
                            </td>
                        </tr>`;
                    });
        $('#rolTable').append(newRoles);

    })
    .catch(function (error) {
        console.log(error);
    })
})




function openModalRoles(tipo, id=0) {
    let button;

    switch (tipo) {
        case 1:
            localStorage.clear();
            document.getElementById('roleModalLabel').innerHTML = "Crear Roles";
            $('#roleModal').modal('toggle');
        
            $('#nombreInput').val('');
            $('#nombrePantallaInput').val('');
            break;
    
        case 2:
            editRole(id);
            document.getElementById('roleModalLabel').innerHTML = "Editar Roles";
            $('#roleModal').modal('toggle');
            break;
    }

}


function editRole(id) {

    localStorage.setItem('roleId', JSON.stringify(id));

    axios.post(`editRole/${id}`)
    .then(function (response) {
        $('#nombreInput').val(response.data.nombre);
        $('#nombrePantallaInput').val(response.data.nombre_en_pantalla);
    })
    .catch(function (error) {
        console.log(error);
    })

}

function processDataRoles() {

    let role = JSON.parse(localStorage.getItem('roleId'));
    let urlRole = role != null ? `updateRole/${role}` : 'storeRole'; 
    let data = new FormData();
    
    if (role != null) {
        data.append('id', role);
    }
    
    data.append('name',         document.getElementById('nombreInput').value);
    data.append('nameScreen',   document.getElementById('nombrePantallaInput').value);

    axios.post(`${urlRole}`, data)
    .then(function (response) {
        console.log(response);

        $('#roleModal').modal('toggle');
        Swal.fire(`${response.data.resp}`);

        if (response.data.cod == 1) {

            axios.post(`editRole/${role}`)
            .then(function (response) {
                console.log(response);
    
                $(`#name${role}`).text(`${response.data.nombre}`);
                $(`#nameScreen${role}`).text(`${response.data.nombre_en_pantalla}`);
    
            })
            .catch(function (error) {
                console.log(error);
            })
            
        } else {

            axios.post('showRoles')
            .then(function (response) {

                let newRoles1 = '';
                $('#rolTable').empty();

                response.data.forEach(element => {
                    newRoles1 += `<tr id="fatherRol${element.id}">   
                                    <td id="id${element.id}">${element.id}</td>
                                    <td id="name${element.id}">${element.nombre}</td>
                                    <td id="nameScreen${element.id}">${element.nombre_en_pantalla}</td>
                                    <td>
                                        <i class="fa-solid fa-pen-to-square" onclick="openModalRoles(2, ${element.id});" style="cursor: pointer;"></i>
                                        <i class="fa-solid fa-trash" onclick="deleteRole(${element.id});" style="cursor: pointer;"></i>
                                    </td>
                                </tr>`;
                            });
                $('#rolTable').append(newRoles1);

            })
            .catch(function (error) {
                console.log(error);
            })
            
        }
     })
    .catch(function (error) {
        console.log(error);
    })

}



function deleteRole(id) {
     
    Swal.fire({
        title: `¿Quiere eliminar el registro actual?`,
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Eliminar',
        denyButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            let data = new FormData();
            data.append('id', id);
        
            axios.post(`deleteRol/${id}`)
            .then(function (response) {
                
                Swal.fire(response.data, '', 'success');
                
                axios.post('users')
                .then(function (response) {
                    $(`#fatherRol${id}`).remove();
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


function deleteFieldsRoles() {

    $('#nombreInput').val('');
    $('#nombrePantallaInput').val('');

    $('#exampleModal').modal('toggle');

}

