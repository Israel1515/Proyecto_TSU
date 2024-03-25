<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

        $ci = $_POST['cedula'];
        $fname = $_POST['primer_nombre'];
        $sname = $_POST['segundo_nombre'];
        $plastname = $_POST['primer_apellido'];
        $slastname = $_POST['segundo_apellido'];
        $birth = $_POST['fecha_nacimiento'];
        $sex = $_POST['genero'];
        $condicion = $_POST['condicion'];
        $munic = $_POST['municipio'];
        $parroq = $_POST['parroquia'];
        $av = $_POST['av_calle'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

       $insertar_student = mysqli_query($conexion, "INSERT INTO estudiante (cedula,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,
       fecha_nacimiento,genero,condicion,municipio,parroquia,av_calle,telefono,correo)
                               VALUES('$ci', '$fname', '$sname', '$plastname', '$slastname', 
                                '$birth', '$sex', '$condicion', '$munic', '$parroq', '$av', '$telefono', '$correo')"); //Se guarda en variable la inserción de la información a la base de datos
        


        $f_pago = $_POST['forma_pago'];
        $t_pago = $_POST['tipo_pago'];
        $m_pago = $_POST['monto_pago'];
        $c_pago = $_POST['concepto_pago'];

        $insertar_student_pay = mysqli_query($conexion, "INSERT INTO pago (monto,tipo,forma_pago,concepto)
                                VALUES('$m_pago', '$t_pago', '$f_pago', '$c_pago')"); //Se guarda en variable la inserción de la información a la base de datos



        $query = mysqli_query($conexion,"SELECT id_est, cedula
        FROM estudiante where cedula = '$ci';");

        $data = mysqli_fetch_array($query);
        $insert_id = $data['id_est'];

        $id_taller = $_POST['taller'];

        $insertar_course_student = mysqli_query($conexion, "INSERT INTO cursa (fecha_inscripcion,id_est,id_taller)
        VALUES(CURRENT_TIMESTAMP,'$insert_id', '$id_taller')"); //Se guarda en variable la inserción de la información a la base de datos 



        $sql_cursa = mysqli_query($conexion,"SELECT id_cursa 
        from cursa
        ORDER BY id_cursa desc;");

        $datec = mysqli_fetch_array($sql_cursa);
        $id_cursa = $datec['id_cursa'];

        $sql_pago = mysqli_query($conexion,"SELECT id_pago 
        from pago
        ORDER BY id_pago desc;");

        $datep = mysqli_fetch_array($sql_pago);
        $id_pago = $datep['id_pago'];

        

        if(!empty($_POST['cirepre'])) { // condición anidada por si el método post no esta vacio entonces

        $cirepre = $_POST['cirepre'];
        $fnamerepre = $_POST['primernombre_repre'];
        $snamerepre = $_POST['segundonombre_repre'];
        $plastnamerepre = $_POST['primerapellido_repre'];
        $slastnamerepre = $_POST['segundoapellido_repre'];
        $telefonorepre = $_POST['telefono_repre'];
        $correorepre = $_POST['correo_repre'];

        $insertar_representante = mysqli_query($conexion, "INSERT INTO representante (cedula,primer_nombre,segundo_nombre,
        primer_apellido,segundo_apellido,telefono,correo)
                                VALUES('$cirepre', '$fnamerepre', '$snamerepre', '$plastnamerepre', 
                                '$slastnamerepre', '$telefonorepre', '$correorepre')"); //Se guarda en variable la inserción de la información a la base de datos


        $sql = mysqli_query($conexion,"SELECT estudiante.id_est, estudiante.cedula, 
        representante.id_repre, representante.cedula
        FROM estudiante, representante 
        where estudiante.cedula = '$ci' and representante.cedula = '$cirepre';");

        $dato = mysqli_fetch_array($sql);

        $insert_idest = $dato['id_est'];
        $insert_idrepre = $dato['id_repre'];

        $insertar_representante_student = mysqli_query($conexion, "INSERT INTO representado (id_repre,id_est)
        VALUES('$insert_idrepre', '$insert_idest')"); //Se guarda en variable la inserción de la información a la base de datos 

        }


        require_once('../controllers/registro_student_controller.php');
        
?>
