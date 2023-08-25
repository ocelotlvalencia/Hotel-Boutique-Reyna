$(document).ready(function(){
    tablaHabitaciones = $("#tablaHabitaciones").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Persona");
    $("#modalCRUD").modal("show");
    id=null;
    opcion = 1; //alta
});
var fila; //capturar la fila para editar o borrar el registro

//botón EDITAR
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    num_habi = fila.find('td:eq(2)').text();
    personas = parseInt(fila.find('td:eq(3)').text());
    descripcion = fila.find('td:eq(4)').text();
    costo = parseInt(fila.find('td:eq(5)').text());
    estado = fila.find('td:eq(6)').text();

    console.log(estado)
    $("#id_hab").val(id)
    $("#tipo").val(nombre);
    $("#num_habitacion").val(num_habi);
    $("#max_personas").val(personas);
    $("#descripcion").val(descripcion);
    $("#costo_base").val(costo);
    $("#estado").val(estado);
    $("#opcion").val(2);
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Persona");
    $("#modalCRUD").modal("show");
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaHabitaciones.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();
    id = $("#id_hab").val();
    nombre = $("#tipo").val();
    num_habi = $("#num_habitacion").val();
    personas = $("#max_personas").val();
    descripcion = $("#descripcion").val();
    costo = $("#costo_base").val();
    estado = $("#estado").val();
    opcion = 2
    $.ajax({
        url: "bd/crud_reservaciones.php",
        type: "POST",
        dataType: "json",
        data: {id:id,nombre:nombre,num_habi:num_habi,personas:personas,descripcion:descripcion,costo:costo,estado:estado,opcion:opcion},
        success: function(data){
            console.log("AAAAAAAAAAAAAAAAAAAAAA")
            console.log(data);
            id_hab = data[0].id_hab;
            nombre = data[0].nombre;
            personas = data[0].personas;
            descripcion = data[0].descripcion;
            costo = data[0].costo;
            estado = data[0].estado;
            if(opcion == 1){tablaHabitaciones.row.add([id_hab,nombre,personas,descripcion,costo,estado]).draw();}
            else{tablaHabitaciones.row(fila).data([id_hab,nombre,personas,descripcion,costo,estado]).draw();}
        }
    });
    $("#modalCRUD").modal("hide");
});
});


//main.js clientes
$(document).ready(function(){
    tablaClientes = $("#tablaClientes").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
    "language": {
            "lengthMenu": "Mostrar MENU registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del START al END de un total de TOTAL registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de MAX registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Habitacion");
    $("#modalCRUD").modal("show");
    id=null;
    opcion = 1; //alta
});
var fila; //capturar la fila para editar o borrar el registro

//botón EDITAR
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id_cliente = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    apellidos = fila.find('td:eq(2)').text();
    telefono = parseInt(fila.find('td:eq(3)').text());
    email = fila.find('td:eq(4)').text();
    procedencia = fila.find('td:eq(5)').text();

    console.log(estado)
    $("#id_cliente").val(id_cliente)
    $("#nombre").val(nombre);
    $("#apellidos").val(apellidos);
    $("#telefono").val(telefono);
    $("#email").val(email);
    $("#procedencia").val(procedencia);
    $("#opcion").val(2);
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Cliente");
    $("#modalCRUD").modal("show");
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id_cliente = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id_cliente+"?");
    if(respuesta){
        $.ajax({
            url: "bd/clientes.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id_cliente:id_cliente},
            success: function(){
                tablaClientes.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formClientes").submit(function(e){
    e.preventDefault();
    id_cliente = $("#id_cliente").val();
    nombre = $("#nombre").val();
    apellidos = $("#apellidos").val();
    telefono = $("#telefono").val();
    email = $("#email").val();
    procedencia = $("#procedencia").val();
    opcion = 2
    $.ajax({
        url: "bd/crud_clientes.php",
        type: "POST",
        dataType: "json",
        data: {id_cliente:id_cliente,nombre:nombre,apellidos:apellidos,telefono:telefono,email:email,procedencia:procedencia,opcion:opcion},
        success: function(data){
            console.log("AAAAAAAAAAAAAAAAAAAAAA")
            console.log(data);
            id_cliente = data[0].id_cliente;
            nombre = data[0].nombre;
            apellidos = data[0].apellidos;
            telefono = data[0].telefono;
            email = data[0].email;
            procedencia = data[0].procedencia;
            if(opcion == 1){tablaHabitaciones.row.add([id_cliente,nombre,apellidos,telefono,email,procedencia]).draw();}
            else{tablaHabitaciones.row(fila).data([id_cliente,nombre,apellidos,telefono,email,procedencia]).draw();}
        }
    });
    $("#modalCRUD").modal("hide");
});
});