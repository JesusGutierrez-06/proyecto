    CREATE TABLE area_capa (
    id int primary key NOT NULL,
    nombre varchar(100)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE tipo_usuario(
    id int primary key NOT NULL,
    nombre varchar(100)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    );
    CREATE TABLE admin (
    id int primary key NOT NULL,
    tipo_usuario_id int NOT NULL,
    strnombre varchar(100)  NOT NULL,
    stremail varchar(100)  NOT NULL,
    strpassword varchar(16)  NOT NULL,
    telefono int NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE area_laboral (
    id int primary key NOT NULL,
    nombre varchar(100)   NULL,
    estado int NOT NULL,
    created_at datetime  NOT NULL,
    updated_at datetime  NOT NULL
    ) ;
    CREATE TABLE carrera (
    id int primary key NOT NULL,
    nombre varchar(100)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE departamento (
    id int primary key NOT NULL,
    nombre varchar(70)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE provincia (
    id int primary key NOT NULL,
    dpto_id int NOT NULL,
    nombre varchar(50)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE estado_civil (
    id int primary key NOT NULL,
    nombre varchar(20)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE idioma (
    id int primary key NOT NULL,
    nombre varchar(50)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE tipo_capa (
    id int primary key NOT NULL,
    nombre varchar(100)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE tipo_sangre (
    id int primary key NOT NULL,
    nombre varchar(20)  NOT NULL,
    estado int  NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE genero(
    id int primary key NOT NULL,
    nombre varchar(20)  NOT NULL,
    estado int  NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL  
    );
    CREATE TABLE empresa (
    id int primary key NOT NULL,
    dpto_id int NOT NULL,
    admin_id int  NULL,
    nombre varchar(100)  NOT NULL,
    direccion varchar(250)  NOT NULL,
    url_pagina varchar(50)   NULL,
    descripcion varchar(500)  NOT NULL,
    celular int  NULL,
    telefono int  NULL,
    nit varchar(20)   NULL,
    logo varchar(255)   NULL,
    fechaalta date  NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE contacto(
    id int primary key not null,
    empresa_id int not null,
    nombre varchar(100)   NULL,
    celular int  NULL,
    telefono int  NULL,
    email varchar(100)  NOT NULL,
    strpassword varchar(16)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE estudiante (
    id int primary key NOT NULL,
    tipo_sangre_id int  NULL,
    estado_civil_id int NOT NULL,
    provincia_id int NOT NULL,
    admin_id int  NULL,
    genero_id int  NOT NULL,
    matricula int  NOT NULL,
    nombre varchar(50)  NOT NULL,
    apellidop varchar(30)   NULL,
    apellidom varchar(30)   NULL,
    fechanac date NOT NULL,
    telefono int  NULL,
    celular int  NULL,
    dni int NOT NULL,
    direccion varchar(100)  NOT NULL,
    foto varchar(255)   NULL,
    email varchar(100)  NOT NULL,
    strpassword varchar(16)  NOT NULL,
    fechaalta date  NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE estudios_idioma (
    id int primary key NOT NULL,
    idioma_id int NOT NULL,
    estudiante_id int NOT NULL,
    hablar varchar(30)  NOT NULL,
    escribir varchar(30)  NOT NULL,
    leer varchar(30)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE exp_laboral (
    id int primary key NOT NULL,
    area_laboral_id int NOT NULL,
    estudiante_id int NOT NULL,
    institucion varchar(100)  NOT NULL,
    puesto varchar(100)  NOT NULL,
    fechainicial date NOT NULL,
    fechafin date NOT NULL,
    descripcion varchar(100)  NOT NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE inf_vocacional (
    id int primary key NOT NULL,
    carrera_id int NOT NULL,
    estudiante_id int NOT NULL,
    semestre varchar(30)   NULL,
    institucion varchar(100)  NOT NULL,
    fechainicio date NOT NULL,
    fechafin date  NULL,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE contrato(
    id int primary key not null,
    nombre varchar(60) not null,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL  
    ) ;
    CREATE TABLE tipo_sueldo(
    id int primary key not null,
    nombre varchar(60) not null,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL  
    ) ;
    CREATE TABLE salario(
    id int primary key not null,
    nombre varchar(60) not null,
    estado int NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL  
    ) ;
    CREATE TABLE oferta_laboral (
    id int primary key NOT NULL,
    carrera_id int not NULL,
    empresa_id int not NULL,
    salario_id int not null,
    tipo_sueldo_id int not null,
    contrato_id int not null,
    titulo varchar(100)  NOT NULL,
    descripcion varchar(1000) NOT NULL,
    requisito varchar(1000)   NULL,
    publicado date  NULL,
    vencimiento date  NULL,
    telefono int  NULL,
    celular int  NULL,
    estado int  NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
    ) ;
    CREATE TABLE referencia (
    id int primary key NOT NULL,
    estudiante_id int NOT NULL,
    nombre varchar(100)  NOT NULL,
    apellidop varchar(70)   NULL,
    apellidom varchar(70)   NULL,
    telefono varchar(15)   NULL,
    email varchar(100)   NULL,
    estado int not null,
    created_at datetime  NOT NULL,
    updated_at datetime  NOT NULL
    ) ;
    CREATE TABLE postular_oferta (
    id int NOT NULL,
    estudiante_id int NOT NULL,
    oferta_laboral_id int NOT NULL,
    fecha_postulacion date NOT NULL,
    estado_preseleccion int  NULL,
    estado_final_contrato int  NULL,
    aspiracion_salarial int  NULL,
    estado int NOT NULL,
    created_at datetime  NOT NULL,
    updated_at datetime  NOT NULL
    ) ;
    CREATE TABLE capacitacion (
    id int NOT NULL,
    tipo_capa_id int NOT NULL,
    estudiante_id int NOT NULL,
    area_capa_id int NOT NULL,
    nombre varchar(100)  NOT NULL,
    institucion varchar(100)  NOT NULL,
    fechainicio date  NULL,
    fechafin date  NULL,
    created_at datetime  NOT NULL,
    updated_at datetime  NOT NULL
    ) ;

    ALTER TABLE postular_oferta
    ADD CONSTRAINT postular_oferta_estudiante_id FOREIGN KEY (estudiante_id) REFERENCES estudiante (id) ,
    ADD CONSTRAINT postular_oferta_oferta_laboral_id FOREIGN KEY (oferta_laboral_id) REFERENCES oferta_laboral (id);
    --
    -- Constraints for table capacitacion
    --
    ALTER TABLE capacitacion
    ADD CONSTRAINT capacitacion_estudiante_id FOREIGN KEY (estudiante_id) REFERENCES estudiante (id) ,
    ADD CONSTRAINT capacitacion_area_capa_id FOREIGN KEY (area_capa_id) REFERENCES area_capa (id) ,
    ADD CONSTRAINT capacitacion_tipo_capa_id FOREIGN KEY (tipo_capa_id) REFERENCES tipo_capa (id) ;
    --
    -- Constraints for table empresa
    --
    ALTER TABLE empresa
    ADD CONSTRAINT empresa_departamento_id FOREIGN KEY (dpto_id) REFERENCES departamento (id) ,
    ADD CONSTRAINT empresa_admin_id FOREIGN KEY (admin_id) REFERENCES admin (id) ;
    --
    -- Constraints for table estudiante
    --
    ALTER TABLE estudiante
    ADD CONSTRAINT estudiante_admin_id FOREIGN KEY (admin_id) REFERENCES admin (id) ,
    ADD CONSTRAINT estudiante_tipo_sangre_id FOREIGN KEY (tipo_sangre_id) REFERENCES tipo_sangre (id) ,
    ADD CONSTRAINT estudiante_estado_civil_id FOREIGN KEY (estado_civil_id) REFERENCES estado_civil (id) ,
    ADD CONSTRAINT estudiante_genero_id FOREIGN KEY (genero_id) REFERENCES genero (id) ,
    ADD CONSTRAINT estudiante_provincia_id FOREIGN KEY (provincia_id) REFERENCES provincia (id) ;
    --
    -- Constraints for table estudiosidioma
    --
    ALTER TABLE estudios_idioma
    ADD CONSTRAINT estudios_idioma_estudiante_id FOREIGN KEY (estudiante_id) REFERENCES estudiante (id) ,
    ADD CONSTRAINT estudios_idioma_idioma_id FOREIGN KEY (idioma_id) REFERENCES idioma (id) ;
    --
    -- Constraints for table explaboral
    --
    ALTER TABLE exp_laboral
    ADD CONSTRAINT exp_laboral_estudiante_id FOREIGN KEY (estudiante_id) REFERENCES estudiante (id) ,
    ADD CONSTRAINT exp_laboral_area_laboral_id FOREIGN KEY (area_laboral_id) REFERENCES area_laboral (id) ;
    --
    -- Constraints for table infvocacional
    --
    ALTER TABLE inf_vocacional
    ADD CONSTRAINT inf_vocacional_estudiante_id FOREIGN KEY (estudiante_id) REFERENCES estudiante (id) ,
    ADD CONSTRAINT inf_vocacional_carrera_id FOREIGN KEY (carrera_id) REFERENCES carrera (id) ;
    --
    -- Constraints for table ofertalaboral
    --
    ALTER TABLE oferta_laboral
    ADD CONSTRAINT oferta_laboral_carrera_id FOREIGN KEY (carrera_id) REFERENCES carrera (id) ,
    ADD CONSTRAINT oferta_laboral_salario_id FOREIGN KEY (salario_id) REFERENCES salario (id),
    ADD CONSTRAINT oferta_laboral_tipo_sueldo_id FOREIGN KEY (tipo_sueldo_id) REFERENCES tipo_sueldo (id), 
    ADD CONSTRAINT oferta_laboral_contrato_id FOREIGN KEY (contrato_id) REFERENCES contrato (id),
    ADD CONSTRAINT oferta_laboral_empresa_id FOREIGN KEY (empresa_id) REFERENCES empresa (id) ;
    --
    -- Constraints for table referencia
    --
    ALTER TABLE referencia
    ADD CONSTRAINT referencia_estudiante_id FOREIGN KEY (estudiante_id) REFERENCES estudiante (id) ;
    --
    -- Constraints for table provincia
    --
    ALTER TABLE provincia
    ADD CONSTRAINT provincia_departamento_id FOREIGN KEY (dpto_id) REFERENCES departamento (id) ;
    --
    -- Constraints for table contacto
    --
    ALTER TABLE contacto
    ADD CONSTRAINT contacto_empresa_id FOREIGN KEY (empresa_id) REFERENCES empresa (id) ;

    --
    -- Constraints for table admin
    --
    ALTER TABLE admin
    ADD CONSTRAINT contacto_tipo_usuario_id FOREIGN KEY (tipo_usuario_id) REFERENCES tipo_usuario (id) ;




