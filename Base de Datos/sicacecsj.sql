PGDMP         &                 x         	   sicacecsj    9.5.2    9.5.2 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           1262    20994 	   sicacecsj    DATABASE     �   CREATE DATABASE sicacecsj WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_El Salvador.1252' LC_CTYPE = 'Spanish_El Salvador.1252';
    DROP DATABASE sicacecsj;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    7            �           0    0    public    ACL     �   REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
                  postgres    false    7                        3079    12355    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    20995    alumnos    TABLE     �  CREATE TABLE alumnos (
    idalum integer NOT NULL,
    nombrea character varying(150) NOT NULL,
    apellidoa character varying(150) NOT NULL,
    nacionalidada character varying(100) DEFAULT 'NULL'::character varying,
    deptonaca character varying(150) DEFAULT 'NULL'::character varying,
    munnaca character varying(150) DEFAULT 'NULL'::character varying,
    direcciona character varying(250) DEFAULT 'NULL'::character varying,
    email character varying(150) DEFAULT 'NULL'::character varying,
    generoa character varying(25) DEFAULT 'NULL'::character varying,
    fnacimientoa date,
    telefonoa character varying(10) DEFAULT 'NULL'::character varying,
    lugarnacimientoa character varying(150) DEFAULT 'NULL'::character varying,
    estadoa integer,
    estadocivila character varying(30) DEFAULT 'NULL'::character varying,
    tipocallea character varying(20) DEFAULT 'NULL'::character varying,
    zonaa character varying(10) DEFAULT 'NULL'::character varying,
    mediotransa character varying(10) DEFAULT 'NULL'::character varying,
    distanciaa character varying(150) DEFAULT 'NULL'::character varying,
    factorriesgoa character varying(100) DEFAULT 'NULL'::character varying,
    trabajaa character varying(10) DEFAULT 'NULL'::character varying,
    dependenciaecoa character varying(50) DEFAULT 'NULL'::character varying,
    tarjetavacunasa character varying(10) DEFAULT 'NULL'::character varying,
    esquemavacunasa character varying(10) DEFAULT 'NULL'::character varying,
    enfdisa character varying(150) DEFAULT 'NULL'::character varying,
    premeda character varying(250) DEFAULT 'NULL'::character varying,
    nombresp character varying(150) DEFAULT 'NULL'::character varying,
    apellidosp character varying(150) DEFAULT 'NULL'::character varying,
    nacionalidadp character varying(150) DEFAULT 'NULL'::character varying,
    deptonacp character varying(150) DEFAULT 'NULL'::character varying,
    lugarnacimientop character varying(350) DEFAULT 'NULL'::character varying,
    generop character varying(10) DEFAULT 'NULL'::character varying,
    estadofamiliarp character varying(20) DEFAULT 'NULL'::character varying,
    graestp character varying(150) DEFAULT 'NULL'::character varying,
    profp character varying(250) DEFAULT 'NULL'::character varying,
    direccionp character varying(350) DEFAULT 'NULL'::character varying,
    telefonop character varying(10) DEFAULT 'NULL'::character varying,
    emailp character varying(250) DEFAULT 'NULL'::character varying,
    lugartrap character varying(250) DEFAULT 'NULL'::character varying,
    fnacimientop date,
    duip character varying(20) DEFAULT 'NULL'::character varying,
    nitp character varying(20) DEFAULT 'NULL'::character varying,
    zonap character varying(10) DEFAULT 'NULL'::character varying,
    duim character varying(20) DEFAULT 'NULL'::character varying,
    nitm character varying(20) DEFAULT 'NULL'::character varying,
    nombresm character varying(150) DEFAULT 'NULL'::character varying,
    apellidosm character varying(150) DEFAULT 'NULL'::character varying,
    fnacimientom date,
    nacionalidadm character varying(150) DEFAULT 'NULL'::character varying,
    lugarnacimientom character varying(250) DEFAULT 'NULL'::character varying,
    deptonacm character varying(150) DEFAULT 'NULL'::character varying,
    zonam character varying(10) DEFAULT 'NULL'::character varying,
    generom character varying(10) DEFAULT 'NULL'::character varying,
    estadofamiliarm character varying(20) DEFAULT 'NULL'::character varying,
    graestm character varying(150) DEFAULT 'NULL'::character varying,
    profm character varying(150) DEFAULT 'NULL'::character varying,
    direccionm character varying(250) DEFAULT 'NULL'::character varying,
    telefonom character varying(10) DEFAULT 'NULL'::character varying,
    emailm character varying(250) DEFAULT 'NULL'::character varying,
    lugartram character varying(255) DEFAULT 'NULL'::character varying,
    carnet character varying(50) NOT NULL
);
    DROP TABLE public.alumnos;
       public         postgres    false    7            �           0    0    TABLE alumnos    COMMENT     %   COMMENT ON TABLE alumnos IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.idalum    COMMENT     -   COMMENT ON COLUMN alumnos.idalum IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.nombrea    COMMENT     .   COMMENT ON COLUMN alumnos.nombrea IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.apellidoa    COMMENT     0   COMMENT ON COLUMN alumnos.apellidoa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.nacionalidada    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidada IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.deptonaca    COMMENT     0   COMMENT ON COLUMN alumnos.deptonaca IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.munnaca    COMMENT     .   COMMENT ON COLUMN alumnos.munnaca IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.direcciona    COMMENT     1   COMMENT ON COLUMN alumnos.direcciona IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.email    COMMENT     ,   COMMENT ON COLUMN alumnos.email IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.generoa    COMMENT     .   COMMENT ON COLUMN alumnos.generoa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.fnacimientoa    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientoa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.telefonoa    COMMENT     0   COMMENT ON COLUMN alumnos.telefonoa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.lugarnacimientoa    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientoa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.estadoa    COMMENT     .   COMMENT ON COLUMN alumnos.estadoa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.estadocivila    COMMENT     3   COMMENT ON COLUMN alumnos.estadocivila IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.tipocallea    COMMENT     1   COMMENT ON COLUMN alumnos.tipocallea IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.zonaa    COMMENT     ,   COMMENT ON COLUMN alumnos.zonaa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.mediotransa    COMMENT     2   COMMENT ON COLUMN alumnos.mediotransa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.distanciaa    COMMENT     1   COMMENT ON COLUMN alumnos.distanciaa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.factorriesgoa    COMMENT     4   COMMENT ON COLUMN alumnos.factorriesgoa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.trabajaa    COMMENT     /   COMMENT ON COLUMN alumnos.trabajaa IS 'TRIAL';
            public       postgres    false    181            �           0    0    COLUMN alumnos.dependenciaecoa    COMMENT     6   COMMENT ON COLUMN alumnos.dependenciaecoa IS 'TRIAL';
            public       postgres    false    181             	           0    0    COLUMN alumnos.tarjetavacunasa    COMMENT     6   COMMENT ON COLUMN alumnos.tarjetavacunasa IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.esquemavacunasa    COMMENT     6   COMMENT ON COLUMN alumnos.esquemavacunasa IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.enfdisa    COMMENT     .   COMMENT ON COLUMN alumnos.enfdisa IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.premeda    COMMENT     .   COMMENT ON COLUMN alumnos.premeda IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.nombresp    COMMENT     /   COMMENT ON COLUMN alumnos.nombresp IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.apellidosp    COMMENT     1   COMMENT ON COLUMN alumnos.apellidosp IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.nacionalidadp    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidadp IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.deptonacp    COMMENT     0   COMMENT ON COLUMN alumnos.deptonacp IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.lugarnacimientop    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientop IS 'TRIAL';
            public       postgres    false    181            		           0    0    COLUMN alumnos.generop    COMMENT     .   COMMENT ON COLUMN alumnos.generop IS 'TRIAL';
            public       postgres    false    181            
	           0    0    COLUMN alumnos.estadofamiliarp    COMMENT     6   COMMENT ON COLUMN alumnos.estadofamiliarp IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.graestp    COMMENT     .   COMMENT ON COLUMN alumnos.graestp IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.profp    COMMENT     ,   COMMENT ON COLUMN alumnos.profp IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.direccionp    COMMENT     1   COMMENT ON COLUMN alumnos.direccionp IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.telefonop    COMMENT     0   COMMENT ON COLUMN alumnos.telefonop IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.emailp    COMMENT     -   COMMENT ON COLUMN alumnos.emailp IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.lugartrap    COMMENT     0   COMMENT ON COLUMN alumnos.lugartrap IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.fnacimientop    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientop IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.duip    COMMENT     +   COMMENT ON COLUMN alumnos.duip IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.nitp    COMMENT     +   COMMENT ON COLUMN alumnos.nitp IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.zonap    COMMENT     ,   COMMENT ON COLUMN alumnos.zonap IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.duim    COMMENT     +   COMMENT ON COLUMN alumnos.duim IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.nitm    COMMENT     +   COMMENT ON COLUMN alumnos.nitm IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.nombresm    COMMENT     /   COMMENT ON COLUMN alumnos.nombresm IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.apellidosm    COMMENT     1   COMMENT ON COLUMN alumnos.apellidosm IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.fnacimientom    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientom IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.nacionalidadm    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidadm IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.lugarnacimientom    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientom IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.deptonacm    COMMENT     0   COMMENT ON COLUMN alumnos.deptonacm IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.zonam    COMMENT     ,   COMMENT ON COLUMN alumnos.zonam IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.generom    COMMENT     .   COMMENT ON COLUMN alumnos.generom IS 'TRIAL';
            public       postgres    false    181            	           0    0    COLUMN alumnos.estadofamiliarm    COMMENT     6   COMMENT ON COLUMN alumnos.estadofamiliarm IS 'TRIAL';
            public       postgres    false    181             	           0    0    COLUMN alumnos.graestm    COMMENT     .   COMMENT ON COLUMN alumnos.graestm IS 'TRIAL';
            public       postgres    false    181            !	           0    0    COLUMN alumnos.profm    COMMENT     ,   COMMENT ON COLUMN alumnos.profm IS 'TRIAL';
            public       postgres    false    181            "	           0    0    COLUMN alumnos.direccionm    COMMENT     1   COMMENT ON COLUMN alumnos.direccionm IS 'TRIAL';
            public       postgres    false    181            #	           0    0    COLUMN alumnos.telefonom    COMMENT     0   COMMENT ON COLUMN alumnos.telefonom IS 'TRIAL';
            public       postgres    false    181            $	           0    0    COLUMN alumnos.emailm    COMMENT     -   COMMENT ON COLUMN alumnos.emailm IS 'TRIAL';
            public       postgres    false    181            %	           0    0    COLUMN alumnos.lugartram    COMMENT     0   COMMENT ON COLUMN alumnos.lugartram IS 'TRIAL';
            public       postgres    false    181            &	           0    0    COLUMN alumnos.carnet    COMMENT     -   COMMENT ON COLUMN alumnos.carnet IS 'TRIAL';
            public       postgres    false    181            �            1259    21053    alumnos_idalum_seq    SEQUENCE     t   CREATE SEQUENCE alumnos_idalum_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.alumnos_idalum_seq;
       public       postgres    false    7    181            '	           0    0    alumnos_idalum_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE alumnos_idalum_seq OWNED BY alumnos.idalum;
            public       postgres    false    182            �            1259    21055 
   asignacion    TABLE     |   CREATE TABLE asignacion (
    idasign integer NOT NULL,
    idalum integer,
    idmateria integer,
    iddocente integer
);
    DROP TABLE public.asignacion;
       public         postgres    false    7            (	           0    0    TABLE asignacion    COMMENT     (   COMMENT ON TABLE asignacion IS 'TRIAL';
            public       postgres    false    183            )	           0    0    COLUMN asignacion.idasign    COMMENT     1   COMMENT ON COLUMN asignacion.idasign IS 'TRIAL';
            public       postgres    false    183            *	           0    0    COLUMN asignacion.idalum    COMMENT     0   COMMENT ON COLUMN asignacion.idalum IS 'TRIAL';
            public       postgres    false    183            +	           0    0    COLUMN asignacion.idmateria    COMMENT     3   COMMENT ON COLUMN asignacion.idmateria IS 'TRIAL';
            public       postgres    false    183            ,	           0    0    COLUMN asignacion.iddocente    COMMENT     3   COMMENT ON COLUMN asignacion.iddocente IS 'TRIAL';
            public       postgres    false    183            �            1259    21058    asignacion_idasign_seq    SEQUENCE     x   CREATE SEQUENCE asignacion_idasign_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.asignacion_idasign_seq;
       public       postgres    false    7    183            -	           0    0    asignacion_idasign_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE asignacion_idasign_seq OWNED BY asignacion.idasign;
            public       postgres    false    184            �            1259    21060    departamento    TABLE     c   CREATE TABLE departamento (
    iddep integer NOT NULL,
    departamento character varying(255)
);
     DROP TABLE public.departamento;
       public         postgres    false    7            �            1259    21063    docente    TABLE     H  CREATE TABLE docente (
    iddocente integer NOT NULL,
    nombresd character varying(45) NOT NULL,
    apellidosd character varying(45) NOT NULL,
    fechanac date NOT NULL,
    generod character varying(45) NOT NULL,
    especialidad character varying(45) NOT NULL,
    nacionalidad character varying(45) NOT NULL,
    depdocente character varying(45) NOT NULL,
    municipiodocente character varying(45) NOT NULL,
    telefono character varying(45) NOT NULL,
    correo character varying(100) NOT NULL,
    direccion character varying(200) NOT NULL,
    estado integer NOT NULL
);
    DROP TABLE public.docente;
       public         postgres    false    7            .	           0    0    TABLE docente    COMMENT     %   COMMENT ON TABLE docente IS 'TRIAL';
            public       postgres    false    186            /	           0    0    COLUMN docente.iddocente    COMMENT     0   COMMENT ON COLUMN docente.iddocente IS 'TRIAL';
            public       postgres    false    186            0	           0    0    COLUMN docente.nombresd    COMMENT     /   COMMENT ON COLUMN docente.nombresd IS 'TRIAL';
            public       postgres    false    186            1	           0    0    COLUMN docente.apellidosd    COMMENT     1   COMMENT ON COLUMN docente.apellidosd IS 'TRIAL';
            public       postgres    false    186            2	           0    0    COLUMN docente.fechanac    COMMENT     /   COMMENT ON COLUMN docente.fechanac IS 'TRIAL';
            public       postgres    false    186            3	           0    0    COLUMN docente.generod    COMMENT     .   COMMENT ON COLUMN docente.generod IS 'TRIAL';
            public       postgres    false    186            4	           0    0    COLUMN docente.especialidad    COMMENT     3   COMMENT ON COLUMN docente.especialidad IS 'TRIAL';
            public       postgres    false    186            5	           0    0    COLUMN docente.nacionalidad    COMMENT     3   COMMENT ON COLUMN docente.nacionalidad IS 'TRIAL';
            public       postgres    false    186            6	           0    0    COLUMN docente.depdocente    COMMENT     1   COMMENT ON COLUMN docente.depdocente IS 'TRIAL';
            public       postgres    false    186            7	           0    0    COLUMN docente.municipiodocente    COMMENT     7   COMMENT ON COLUMN docente.municipiodocente IS 'TRIAL';
            public       postgres    false    186            8	           0    0    COLUMN docente.telefono    COMMENT     /   COMMENT ON COLUMN docente.telefono IS 'TRIAL';
            public       postgres    false    186            9	           0    0    COLUMN docente.correo    COMMENT     -   COMMENT ON COLUMN docente.correo IS 'TRIAL';
            public       postgres    false    186            :	           0    0    COLUMN docente.direccion    COMMENT     0   COMMENT ON COLUMN docente.direccion IS 'TRIAL';
            public       postgres    false    186            ;	           0    0    COLUMN docente.estado    COMMENT     -   COMMENT ON COLUMN docente.estado IS 'TRIAL';
            public       postgres    false    186            �            1259    21069    docente_iddocente_seq    SEQUENCE     w   CREATE SEQUENCE docente_iddocente_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.docente_iddocente_seq;
       public       postgres    false    186    7            <	           0    0    docente_iddocente_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE docente_iddocente_seq OWNED BY docente.iddocente;
            public       postgres    false    187            �            1259    21071    horarios    TABLE     �   CREATE TABLE horarios (
    id integer NOT NULL,
    nombre character varying(30),
    grado character varying(30),
    seccion character varying(30),
    descripcion character varying(255),
    horario text,
    fecha date
);
    DROP TABLE public.horarios;
       public         postgres    false    7            �            1259    21077    horarios_id_seq    SEQUENCE     q   CREATE SEQUENCE horarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.horarios_id_seq;
       public       postgres    false    7    188            =	           0    0    horarios_id_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE horarios_id_seq OWNED BY horarios.id;
            public       postgres    false    189            �            1259    21079    inscripcion    TABLE     ^  CREATE TABLE inscripcion (
    idinscripcion integer NOT NULL,
    fechaingreso date NOT NULL,
    codinfra integer NOT NULL,
    ciclo character varying(10) NOT NULL,
    anioelectivo date NOT NULL,
    grado integer NOT NULL,
    seccion character varying(10) NOT NULL,
    turno character varying(20) NOT NULL,
    duir character varying(15) NOT NULL,
    nitr character varying(20) NOT NULL,
    nombresr character varying(250) NOT NULL,
    apellidosr character varying(250) NOT NULL,
    telefonor character varying(10) NOT NULL,
    direccionr character varying(255) NOT NULL,
    idalum integer
);
    DROP TABLE public.inscripcion;
       public         postgres    false    7            >	           0    0    TABLE inscripcion    COMMENT     )   COMMENT ON TABLE inscripcion IS 'TRIAL';
            public       postgres    false    190            ?	           0    0     COLUMN inscripcion.idinscripcion    COMMENT     8   COMMENT ON COLUMN inscripcion.idinscripcion IS 'TRIAL';
            public       postgres    false    190            @	           0    0    COLUMN inscripcion.fechaingreso    COMMENT     7   COMMENT ON COLUMN inscripcion.fechaingreso IS 'TRIAL';
            public       postgres    false    190            A	           0    0    COLUMN inscripcion.codinfra    COMMENT     3   COMMENT ON COLUMN inscripcion.codinfra IS 'TRIAL';
            public       postgres    false    190            B	           0    0    COLUMN inscripcion.ciclo    COMMENT     0   COMMENT ON COLUMN inscripcion.ciclo IS 'TRIAL';
            public       postgres    false    190            C	           0    0    COLUMN inscripcion.anioelectivo    COMMENT     7   COMMENT ON COLUMN inscripcion.anioelectivo IS 'TRIAL';
            public       postgres    false    190            D	           0    0    COLUMN inscripcion.grado    COMMENT     0   COMMENT ON COLUMN inscripcion.grado IS 'TRIAL';
            public       postgres    false    190            E	           0    0    COLUMN inscripcion.seccion    COMMENT     2   COMMENT ON COLUMN inscripcion.seccion IS 'TRIAL';
            public       postgres    false    190            F	           0    0    COLUMN inscripcion.turno    COMMENT     0   COMMENT ON COLUMN inscripcion.turno IS 'TRIAL';
            public       postgres    false    190            G	           0    0    COLUMN inscripcion.duir    COMMENT     /   COMMENT ON COLUMN inscripcion.duir IS 'TRIAL';
            public       postgres    false    190            H	           0    0    COLUMN inscripcion.nitr    COMMENT     /   COMMENT ON COLUMN inscripcion.nitr IS 'TRIAL';
            public       postgres    false    190            I	           0    0    COLUMN inscripcion.nombresr    COMMENT     3   COMMENT ON COLUMN inscripcion.nombresr IS 'TRIAL';
            public       postgres    false    190            J	           0    0    COLUMN inscripcion.apellidosr    COMMENT     5   COMMENT ON COLUMN inscripcion.apellidosr IS 'TRIAL';
            public       postgres    false    190            K	           0    0    COLUMN inscripcion.telefonor    COMMENT     4   COMMENT ON COLUMN inscripcion.telefonor IS 'TRIAL';
            public       postgres    false    190            L	           0    0    COLUMN inscripcion.direccionr    COMMENT     5   COMMENT ON COLUMN inscripcion.direccionr IS 'TRIAL';
            public       postgres    false    190            M	           0    0    COLUMN inscripcion.idalum    COMMENT     1   COMMENT ON COLUMN inscripcion.idalum IS 'TRIAL';
            public       postgres    false    190            �            1259    21085    inscripcion_idinscripcion_seq    SEQUENCE        CREATE SEQUENCE inscripcion_idinscripcion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.inscripcion_idinscripcion_seq;
       public       postgres    false    190    7            N	           0    0    inscripcion_idinscripcion_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE inscripcion_idinscripcion_seq OWNED BY inscripcion.idinscripcion;
            public       postgres    false    191            �            1259    21087    materia    TABLE     �   CREATE TABLE materia (
    idmateria integer NOT NULL,
    materia character varying(50) NOT NULL,
    idnota integer,
    abreviatura character varying(255)
);
    DROP TABLE public.materia;
       public         postgres    false    7            O	           0    0    TABLE materia    COMMENT     %   COMMENT ON TABLE materia IS 'TRIAL';
            public       postgres    false    192            P	           0    0    COLUMN materia.idmateria    COMMENT     0   COMMENT ON COLUMN materia.idmateria IS 'TRIAL';
            public       postgres    false    192            Q	           0    0    COLUMN materia.materia    COMMENT     .   COMMENT ON COLUMN materia.materia IS 'TRIAL';
            public       postgres    false    192            R	           0    0    COLUMN materia.idnota    COMMENT     -   COMMENT ON COLUMN materia.idnota IS 'TRIAL';
            public       postgres    false    192            �            1259    21090    materia_idmateria_seq    SEQUENCE     w   CREATE SEQUENCE materia_idmateria_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.materia_idmateria_seq;
       public       postgres    false    7    192            S	           0    0    materia_idmateria_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE materia_idmateria_seq OWNED BY materia.idmateria;
            public       postgres    false    193            �            1259    21092 	   municipio    TABLE     v   CREATE TABLE municipio (
    idmunicipio integer NOT NULL,
    municipio character varying(255),
    iddep integer
);
    DROP TABLE public.municipio;
       public         postgres    false    7            �            1259    21095    nota    TABLE     W   CREATE TABLE nota (
    idnota integer NOT NULL,
    nota double precision NOT NULL
);
    DROP TABLE public.nota;
       public         postgres    false    7            T	           0    0 
   TABLE nota    COMMENT     "   COMMENT ON TABLE nota IS 'TRIAL';
            public       postgres    false    195            U	           0    0    COLUMN nota.idnota    COMMENT     *   COMMENT ON COLUMN nota.idnota IS 'TRIAL';
            public       postgres    false    195            V	           0    0    COLUMN nota.nota    COMMENT     (   COMMENT ON COLUMN nota.nota IS 'TRIAL';
            public       postgres    false    195            �            1259    21098    nota_idnota_seq    SEQUENCE     q   CREATE SEQUENCE nota_idnota_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.nota_idnota_seq;
       public       postgres    false    195    7            W	           0    0    nota_idnota_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE nota_idnota_seq OWNED BY nota.idnota;
            public       postgres    false    196            �            1259    21100    registro    TABLE     d   CREATE TABLE registro (
    idregistro integer NOT NULL,
    idalum integer,
    idasign integer
);
    DROP TABLE public.registro;
       public         postgres    false    7            X	           0    0    TABLE registro    COMMENT     &   COMMENT ON TABLE registro IS 'TRIAL';
            public       postgres    false    197            Y	           0    0    COLUMN registro.idregistro    COMMENT     2   COMMENT ON COLUMN registro.idregistro IS 'TRIAL';
            public       postgres    false    197            Z	           0    0    COLUMN registro.idalum    COMMENT     .   COMMENT ON COLUMN registro.idalum IS 'TRIAL';
            public       postgres    false    197            [	           0    0    COLUMN registro.idasign    COMMENT     /   COMMENT ON COLUMN registro.idasign IS 'TRIAL';
            public       postgres    false    197            �            1259    21103    registro_idregistro_seq    SEQUENCE     y   CREATE SEQUENCE registro_idregistro_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.registro_idregistro_seq;
       public       postgres    false    7    197            \	           0    0    registro_idregistro_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE registro_idregistro_seq OWNED BY registro.idregistro;
            public       postgres    false    198            �            1259    21105    usuario    TABLE     �  CREATE TABLE usuario (
    idusuario integer NOT NULL,
    nombre character varying(45) DEFAULT 'NULL'::character varying,
    clave character varying(45) DEFAULT 'NULL'::character varying,
    email character varying(45) DEFAULT 'NULL'::character varying,
    nivel integer,
    apellido character varying(45) DEFAULT 'NULL'::character varying,
    sexo character varying(45) DEFAULT 'NULL'::character varying,
    fechan date,
    direccion character varying(255)
);
    DROP TABLE public.usuario;
       public         postgres    false    7            ]	           0    0    TABLE usuario    COMMENT     %   COMMENT ON TABLE usuario IS 'TRIAL';
            public       postgres    false    199            ^	           0    0    COLUMN usuario.idusuario    COMMENT     0   COMMENT ON COLUMN usuario.idusuario IS 'TRIAL';
            public       postgres    false    199            _	           0    0    COLUMN usuario.nombre    COMMENT     -   COMMENT ON COLUMN usuario.nombre IS 'TRIAL';
            public       postgres    false    199            `	           0    0    COLUMN usuario.clave    COMMENT     ,   COMMENT ON COLUMN usuario.clave IS 'TRIAL';
            public       postgres    false    199            a	           0    0    COLUMN usuario.email    COMMENT     ,   COMMENT ON COLUMN usuario.email IS 'TRIAL';
            public       postgres    false    199            b	           0    0    COLUMN usuario.nivel    COMMENT     ,   COMMENT ON COLUMN usuario.nivel IS 'TRIAL';
            public       postgres    false    199            c	           0    0    COLUMN usuario.apellido    COMMENT     /   COMMENT ON COLUMN usuario.apellido IS 'TRIAL';
            public       postgres    false    199            d	           0    0    COLUMN usuario.sexo    COMMENT     +   COMMENT ON COLUMN usuario.sexo IS 'TRIAL';
            public       postgres    false    199            �            1259    21113    usuario_idusuario_seq    SEQUENCE     w   CREATE SEQUENCE usuario_idusuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.usuario_idusuario_seq;
       public       postgres    false    199    7            e	           0    0    usuario_idusuario_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE usuario_idusuario_seq OWNED BY usuario.idusuario;
            public       postgres    false    200            -           2604    21115    idalum    DEFAULT     b   ALTER TABLE ONLY alumnos ALTER COLUMN idalum SET DEFAULT nextval('alumnos_idalum_seq'::regclass);
 =   ALTER TABLE public.alumnos ALTER COLUMN idalum DROP DEFAULT;
       public       postgres    false    182    181            .           2604    21116    idasign    DEFAULT     j   ALTER TABLE ONLY asignacion ALTER COLUMN idasign SET DEFAULT nextval('asignacion_idasign_seq'::regclass);
 A   ALTER TABLE public.asignacion ALTER COLUMN idasign DROP DEFAULT;
       public       postgres    false    184    183            /           2604    21117 	   iddocente    DEFAULT     h   ALTER TABLE ONLY docente ALTER COLUMN iddocente SET DEFAULT nextval('docente_iddocente_seq'::regclass);
 @   ALTER TABLE public.docente ALTER COLUMN iddocente DROP DEFAULT;
       public       postgres    false    187    186            0           2604    21118    id    DEFAULT     \   ALTER TABLE ONLY horarios ALTER COLUMN id SET DEFAULT nextval('horarios_id_seq'::regclass);
 :   ALTER TABLE public.horarios ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    189    188            1           2604    21119    idinscripcion    DEFAULT     x   ALTER TABLE ONLY inscripcion ALTER COLUMN idinscripcion SET DEFAULT nextval('inscripcion_idinscripcion_seq'::regclass);
 H   ALTER TABLE public.inscripcion ALTER COLUMN idinscripcion DROP DEFAULT;
       public       postgres    false    191    190            2           2604    21120 	   idmateria    DEFAULT     h   ALTER TABLE ONLY materia ALTER COLUMN idmateria SET DEFAULT nextval('materia_idmateria_seq'::regclass);
 @   ALTER TABLE public.materia ALTER COLUMN idmateria DROP DEFAULT;
       public       postgres    false    193    192            3           2604    21121    idnota    DEFAULT     \   ALTER TABLE ONLY nota ALTER COLUMN idnota SET DEFAULT nextval('nota_idnota_seq'::regclass);
 :   ALTER TABLE public.nota ALTER COLUMN idnota DROP DEFAULT;
       public       postgres    false    196    195            4           2604    21122 
   idregistro    DEFAULT     l   ALTER TABLE ONLY registro ALTER COLUMN idregistro SET DEFAULT nextval('registro_idregistro_seq'::regclass);
 B   ALTER TABLE public.registro ALTER COLUMN idregistro DROP DEFAULT;
       public       postgres    false    198    197            :           2604    21123 	   idusuario    DEFAULT     h   ALTER TABLE ONLY usuario ALTER COLUMN idusuario SET DEFAULT nextval('usuario_idusuario_seq'::regclass);
 @   ALTER TABLE public.usuario ALTER COLUMN idusuario DROP DEFAULT;
       public       postgres    false    200    199            �          0    20995    alumnos 
   TABLE DATA               �  COPY alumnos (idalum, nombrea, apellidoa, nacionalidada, deptonaca, munnaca, direcciona, email, generoa, fnacimientoa, telefonoa, lugarnacimientoa, estadoa, estadocivila, tipocallea, zonaa, mediotransa, distanciaa, factorriesgoa, trabajaa, dependenciaecoa, tarjetavacunasa, esquemavacunasa, enfdisa, premeda, nombresp, apellidosp, nacionalidadp, deptonacp, lugarnacimientop, generop, estadofamiliarp, graestp, profp, direccionp, telefonop, emailp, lugartrap, fnacimientop, duip, nitp, zonap, duim, nitm, nombresm, apellidosm, fnacimientom, nacionalidadm, lugarnacimientom, deptonacm, zonam, generom, estadofamiliarm, graestm, profm, direccionm, telefonom, emailm, lugartram, carnet) FROM stdin;
    public       postgres    false    181   ��       f	           0    0    alumnos_idalum_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('alumnos_idalum_seq', 207, true);
            public       postgres    false    182            �          0    21055 
   asignacion 
   TABLE DATA               D   COPY asignacion (idasign, idalum, idmateria, iddocente) FROM stdin;
    public       postgres    false    183   ��       g	           0    0    asignacion_idasign_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('asignacion_idasign_seq', 1, false);
            public       postgres    false    184            �          0    21060    departamento 
   TABLE DATA               4   COPY departamento (iddep, departamento) FROM stdin;
    public       postgres    false    185   ��       �          0    21063    docente 
   TABLE DATA               �   COPY docente (iddocente, nombresd, apellidosd, fechanac, generod, especialidad, nacionalidad, depdocente, municipiodocente, telefono, correo, direccion, estado) FROM stdin;
    public       postgres    false    186   ��       h	           0    0    docente_iddocente_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('docente_iddocente_seq', 24, true);
            public       postgres    false    187            �          0    21071    horarios 
   TABLE DATA               T   COPY horarios (id, nombre, grado, seccion, descripcion, horario, fecha) FROM stdin;
    public       postgres    false    188   �       i	           0    0    horarios_id_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('horarios_id_seq', 26, true);
            public       postgres    false    189            �          0    21079    inscripcion 
   TABLE DATA               �   COPY inscripcion (idinscripcion, fechaingreso, codinfra, ciclo, anioelectivo, grado, seccion, turno, duir, nitr, nombresr, apellidosr, telefonor, direccionr, idalum) FROM stdin;
    public       postgres    false    190   ;�       j	           0    0    inscripcion_idinscripcion_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('inscripcion_idinscripcion_seq', 43, true);
            public       postgres    false    191            �          0    21087    materia 
   TABLE DATA               C   COPY materia (idmateria, materia, idnota, abreviatura) FROM stdin;
    public       postgres    false    192   ��       k	           0    0    materia_idmateria_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('materia_idmateria_seq', 4, true);
            public       postgres    false    193            �          0    21092 	   municipio 
   TABLE DATA               ;   COPY municipio (idmunicipio, municipio, iddep) FROM stdin;
    public       postgres    false    194   k�       �          0    21095    nota 
   TABLE DATA               %   COPY nota (idnota, nota) FROM stdin;
    public       postgres    false    195   ��       l	           0    0    nota_idnota_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('nota_idnota_seq', 1, false);
            public       postgres    false    196            �          0    21100    registro 
   TABLE DATA               8   COPY registro (idregistro, idalum, idasign) FROM stdin;
    public       postgres    false    197   ��       m	           0    0    registro_idregistro_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('registro_idregistro_seq', 1, false);
            public       postgres    false    198            �          0    21105    usuario 
   TABLE DATA               e   COPY usuario (idusuario, nombre, clave, email, nivel, apellido, sexo, fechan, direccion) FROM stdin;
    public       postgres    false    199   ��       n	           0    0    usuario_idusuario_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('usuario_idusuario_seq', 15, true);
            public       postgres    false    200            C           2606    21125    departamento_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY departamento
    ADD CONSTRAINT departamento_pkey PRIMARY KEY (iddep);
 H   ALTER TABLE ONLY public.departamento DROP CONSTRAINT departamento_pkey;
       public         postgres    false    185    185            M           2606    21127    municipio_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY municipio
    ADD CONSTRAINT municipio_pkey PRIMARY KEY (idmunicipio);
 B   ALTER TABLE ONLY public.municipio DROP CONSTRAINT municipio_pkey;
       public         postgres    false    194    194            <           2606    21129 
   pk_alumnos 
   CONSTRAINT     M   ALTER TABLE ONLY alumnos
    ADD CONSTRAINT pk_alumnos PRIMARY KEY (idalum);
 <   ALTER TABLE ONLY public.alumnos DROP CONSTRAINT pk_alumnos;
       public         postgres    false    181    181            A           2606    21131    pk_asignacion 
   CONSTRAINT     T   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT pk_asignacion PRIMARY KEY (idasign);
 B   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT pk_asignacion;
       public         postgres    false    183    183            E           2606    21133 
   pk_docente 
   CONSTRAINT     P   ALTER TABLE ONLY docente
    ADD CONSTRAINT pk_docente PRIMARY KEY (iddocente);
 <   ALTER TABLE ONLY public.docente DROP CONSTRAINT pk_docente;
       public         postgres    false    186    186            H           2606    21135    pk_inscripcion 
   CONSTRAINT     \   ALTER TABLE ONLY inscripcion
    ADD CONSTRAINT pk_inscripcion PRIMARY KEY (idinscripcion);
 D   ALTER TABLE ONLY public.inscripcion DROP CONSTRAINT pk_inscripcion;
       public         postgres    false    190    190            K           2606    21137 
   pk_materia 
   CONSTRAINT     P   ALTER TABLE ONLY materia
    ADD CONSTRAINT pk_materia PRIMARY KEY (idmateria);
 <   ALTER TABLE ONLY public.materia DROP CONSTRAINT pk_materia;
       public         postgres    false    192    192            O           2606    21139    pk_nota 
   CONSTRAINT     G   ALTER TABLE ONLY nota
    ADD CONSTRAINT pk_nota PRIMARY KEY (idnota);
 6   ALTER TABLE ONLY public.nota DROP CONSTRAINT pk_nota;
       public         postgres    false    195    195            Q           2606    21141    pk_registro 
   CONSTRAINT     S   ALTER TABLE ONLY registro
    ADD CONSTRAINT pk_registro PRIMARY KEY (idregistro);
 >   ALTER TABLE ONLY public.registro DROP CONSTRAINT pk_registro;
       public         postgres    false    197    197            S           2606    21143 
   pk_usuario 
   CONSTRAINT     P   ALTER TABLE ONLY usuario
    ADD CONSTRAINT pk_usuario PRIMARY KEY (idusuario);
 <   ALTER TABLE ONLY public.usuario DROP CONSTRAINT pk_usuario;
       public         postgres    false    199    199            F           1259    21144    idalumno    INDEX     ;   CREATE INDEX idalumno ON inscripcion USING btree (idalum);
    DROP INDEX public.idalumno;
       public         postgres    false    190            =           1259    21145 
   idx_idalum    INDEX     <   CREATE INDEX idx_idalum ON asignacion USING btree (idalum);
    DROP INDEX public.idx_idalum;
       public         postgres    false    183            >           1259    21146    idx_iddocente    INDEX     B   CREATE INDEX idx_iddocente ON asignacion USING btree (iddocente);
 !   DROP INDEX public.idx_iddocente;
       public         postgres    false    183            ?           1259    21147    idx_idmateria    INDEX     B   CREATE INDEX idx_idmateria ON asignacion USING btree (idmateria);
 !   DROP INDEX public.idx_idmateria;
       public         postgres    false    183            I           1259    21148 
   idx_idnota    INDEX     9   CREATE INDEX idx_idnota ON materia USING btree (idnota);
    DROP INDEX public.idx_idnota;
       public         postgres    false    192            T           2606    21149    asignacion_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_1 FOREIGN KEY (idalum) REFERENCES alumnos(idalum) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_1;
       public       postgres    false    181    183    2108            U           2606    21154    asignacion_ibfk_2    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_2 FOREIGN KEY (idmateria) REFERENCES materia(idmateria) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_2;
       public       postgres    false    192    183    2123            V           2606    21159    asignacion_ibfk_3    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_3 FOREIGN KEY (iddocente) REFERENCES docente(iddocente) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_3;
       public       postgres    false    2117    186    183            W           2606    21164    inscripcion_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY inscripcion
    ADD CONSTRAINT inscripcion_ibfk_1 FOREIGN KEY (idalum) REFERENCES alumnos(idalum) ON UPDATE RESTRICT ON DELETE RESTRICT;
 H   ALTER TABLE ONLY public.inscripcion DROP CONSTRAINT inscripcion_ibfk_1;
       public       postgres    false    2108    190    181            X           2606    21169    materia_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY materia
    ADD CONSTRAINT materia_ibfk_1 FOREIGN KEY (idnota) REFERENCES nota(idnota) ON UPDATE RESTRICT ON DELETE RESTRICT;
 @   ALTER TABLE ONLY public.materia DROP CONSTRAINT materia_ibfk_1;
       public       postgres    false    195    192    2127            Y           2606    21174    municipio_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY municipio
    ADD CONSTRAINT municipio_ibfk_1 FOREIGN KEY (iddep) REFERENCES departamento(iddep) ON UPDATE RESTRICT ON DELETE RESTRICT;
 D   ALTER TABLE ONLY public.municipio DROP CONSTRAINT municipio_ibfk_1;
       public       postgres    false    2115    185    194            Z           2606    21179    registro_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_1 FOREIGN KEY (idalum) REFERENCES alumnos(idalum) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_1;
       public       postgres    false    2108    181    197            [           2606    21184    registro_ibfk_2    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_2 FOREIGN KEY (idasign) REFERENCES asignacion(idasign) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_2;
       public       postgres    false    2113    183    197            �      x��[�r�H�]���6���k7��n�%[-�=1�(��7p B3���rwq����?6'o$!ML�Ԧ�`UV֩�'��Nಛ��֕.�Qg��UQm5���^�E��5s&�{��o�Km�M�"YiK.�XeUX��d�Q�d�_�$}�k�6^�Y��Lp؎cs�|W���\Sd��$��m�v��۸�٩.��4����̪��]U2��c�>z]n����k�*b�;�ǿ�6���I���?�a���ΚU]�E�����W�����=�%b':���),��<��'��Rٮr%���74�p�8�Y�[''�s���dB:���]�p�C�����ZH��o�G�0�_rX���"�bVo�u�3��7^���N;C�U��C���+���+V�k+��	Y!d8X3��n<p��	<8�H��:�Ɋ�b�}\���Һ��Z��`����u���ؽ6c�s�4h�p��|i���	m���/�����i��k;��{r�����f�����Ѷ�-[�ZM�E��#%]��� `<�[��[� �f  N"��T���L���G�o�?p=�s퀹`�$N����Gn|�hO��$˒T4�CHw��p=�����U���c�X�c�����`��>�Eyj���ͶGl�.��MpZ�Til]癙�'F�u}0��g[[�}��A#/�P�eB"� gG�6��+�I��s����fY�L�&�KB;>zM�he�5������):�ت��g��������gx�W���t��˥�]v[�@��8�sP�O`�5�|�� [����+]��8M8 ��#��R@h����a�bL���+.hq���b��n������x���x Xb���ٿ��쀝i�Z��6�a�J���ϱ�G��n3��(�Z�q�q� [�z����S�������v��K0-�`�	�^�!�a���v�Lg��v�Ӽ��-��w���ܣ��'��ua����>��gs��h"�h"�����C�� qբ���x�C;$ʊ)p~�����\ 7��f������$�~��U���+��_���<��2L��3�|C>��?��W�����lCZh�ƮfF�Oa�	1
Y���+�9�#و����z��'b|�ȆS.�PsE�G�P��\���UڬR(�=ϐ0m�d������~i��P�� �l�*�IZ��Ry�$�\�Kzб��ꤢ�U��=�m��|=0�lN�����!=�t��׍&y�I����b�<Z�,��� �p2n��'��%�׈h�DUbc:��m�5��1�z~�R���5�B�Ł�	�A|���w<3�A�!
R5�Z�d̓]"�@vsZ�۪0-6�m���	Jp#��*U�'Q�
��|�p�P�>IV�yO� ��V �ј-'�n�����3�:R =`g9��^��)���|-b?�N �:�Ϛ@b-V8b	{[�@�9k�dʩm�@��ɒ���s�^���fd��|�e
�P_�z6|��j[
��r�M��Sq~��P������sI�w���'�e(�<�2�|�/c�:rLñH��\9�RK����Q����!0�;>H�~D*�(�'�F)f��_+�D����XII�K(�2�(�wUj8�J��>}�:mߝ�,(r� �K� ���z( !�Ĵ����[�f���N6���s*r|K�z�D�]�y�n���pީ��� �<�"m�y����vߜ
�
��}|����#I�ul�B�>imp��d��I����8�5K�⺯�_9���qd����C׿e�C\�T`�E�%.���k|�	�5�yp
�+�����^|�]|��s4@P:L�** =|](\�F�k����8��d�{\�8'�'<�P���P�v�ƹKeŽ8��9&=���H�⡁����W�:�����:+�X�u�C�����8�@q��fs�(c�G�uBB��LD�_ �'*��a�-e^gt[3����!�y��B\���f�iY���!�Ԇ6iƘA�[��7�t� d�3Py^���s��]M�j[��̗o�")^�S���od��Q\Y-�J���������[`�jo��MU]����!��[O��T��=�N$x��}"I�x�8DcI�`�1�����5��Q!c�Qm���Z��!�Fy��A��k���3D{�~U�sQ����V$d��7O��'Ha�z�%��F"�Ʃ�V���G���71�Zivu�v��?����M~pf���y���CvG��Q~h�H��0D0�w���:&}�0��b���e-^�~�0钼 !7���� ���ґ�A\�4�p�#I�\ :�u_%3��wz}���α�n=�44]�桥��	�W�C��<ŋ�$����ս����q�~��BH�o��wwH`�ǾQ2�1$'�4g�d�n$]v�9*�#�)zՇ!��'?������&�A#���`�\�髆�5��g�C^DI��8��Ya�>�%	V�@���_W�0�kK�u���>s	�B@�c��2�x�	`vX�i��`p@��Mx�����)�׻k�=]S^a&��~J�O��h�ѡi�Y!}.�کg�`$u!a�u�͍P����g��z���n�K��eߛ��H�C�u"$� [36]I����j#CJ�z�~�I��qJL�g�^�����Ua��<:�j�黂�ӗ1��b�w뼩��āR�S���&.VI��og8�W؎�ȝ���]@�v����v�1���)�5���������9���2 �0i��Oh����Ts\��!vJ������|�!��dkȝ2�� �>6�ت�:��ߧ�����DX86>�G���mh�}�ׂ�<�#%o���25'���B}+�.������Ea}�̮{`�G�@P���Z6LZ��sNN?~�xZY��z�2�#��@��8�!�:ܧ�V[Y�x�|k�s�H�jfvX�ok���]�s4(	�{�����q�݋��3J���S�$ֻ
I�C'���)"���,1����>i�0��^
���K�U�r���\b%����:Fo�x�,�,��Y5�\x�{�,n�����Qz|�[i=n��^=%VE}�Uw$ ĠW��^��@rC���.�ͅ�]A���t�0`[������z��	~��v
�s�{X�����S������k��[B5)[$
�{�5-t,5�ύ8�-�}�Q�ڌ�L�����G/�$����ѫ1�i�k��ӯ�����Wo.ק)Mh��!�)�A81'�N��,n�&@
l��]�J!�ۊN��� A�Sx�WLڀЄMF����NW��|>�C7g1��>w�b��q�W`�������B�WN�K青A`/N��[�v&�z1MO�S���	��)�K 6�-0�ʷ͍���l���T�tZY��Rφ���	��.��_{'�A���$R[R�����j) �wB�tk����J��$%NW��V���S2�!3��;�|�%�\rSj4-qw�`?�8����\�� �j����] J�ڧF����ySC͙nǃ�r��A0t��!M�h0ƼD�h��4Y�Áz����2���NX��9�1��Ƞ�[Y�.�F��.jId]Aֺ))��o`�����-BI��� X]A�:�iww��Lf�/U�/��rX��3�������Ǒܾ|G�u�\a.���ǄY�l'zV�֊������\�bw�mp��������v�|��� ��$�]��(�L��ϼ�����ڧK{P��r�����Ioow�x�Op&Ay>��v	��I%ht��eS	��EM6�����fY�t/��{m:��3���eK�T��^��ƺK���)vuC�S��dM�ޥ�C�X�wS�M�k�g}j/��v ���Y7AʮX ٧�נ�r�Ir\�_�xef����ř�}:r����UE۞
&�a����,	�p{q��}�t&z8!�b�5��:_!�KҾe
鵯����J
j��W��/��.�JA��L��c�5�8 �  $�F���(,��2���p�F(�%�2��t�S�$	�A�K�:_'�wˬ��T�J[7I>��EL�pk��-�9�i$!���ݺ��(Q7��������L�$si�ϱ)��0�n�32b{)y�#>52��Z���H��>�I���Ee�z:y$�x3h������GLT�2=�uZ}����:�KӉ�iC_*�6�xCT>k���d�R�&�o�+
��>Ձ��*~��|UP��nQ�p(w��P{{�&hQQw6%XR�A�!��D�.����_о�.�Ʒ:]���u���nZ��������K[� ��u�Z&w��\G4�&A�q����!��Neh�t��r�u�����zM����������w��ȱ�@�H��`��� �������h�Eu��*��݄zҪ6��y�{�Q�Gh�������p��^���:E-�bS���=�)��ѓ���z� i��o9YL� ^�bЁ
=)��ene�S�c��ӎN��æ/c�q�l�Uw�u�缬wy��X�7}������Q�R��5�O>�������Q��۶oj�]�S75�RN}K��\%m��7��wdLSu���TU�:��a�P�o�s�5�a�9�<o�apKs�>���n���"�/g�[� �7�pZ��0Љ ��*�CWv�Y�'��Me�6�nY�li�z�̟�����v��A"a�7/w[�/N�Ky��տ���/      �      x������ � �      �   �   x��M
�0��{���Q���
��nF*��b�.�M�Pz/V�n>fE��Oxm�Jtؾp�Q9��k���s*���M���BR͝^<>Gݱ�%�V��'|��.X��F$��1h�긫�yc�+��1�Z�f�Fz$��UF�g�ɩu�/�f��<�      �   �  x�m�Mn�0�ףS� ��?�֮���)����,Pđ�B"Җ�ܦ�.s_�#%@�����7o���1�h1�(ѽhi�Am]JU*�4Q��n���a��>&�< (��
����VHl)�~{�p7]����>{��=��%�cL���KL��xG)`�t�i�+\>����#��+Ьr�Ve]�zv�0�2���s�{:���y�y=}7/Y$쾧!cO	n�9Q8��x�<p-U�)J���ܝ�%�V���'I�5��c�[}�k�u�q� m�3�1��1_�<��N�{��܁)e}���W�,-�����*���M������W��5�y~
�F���
���[<�t�}:|9����ڕ�7�j�]}�����O鍸�ON_|�E����      �      x������ � �      �   �  x����n�6ů�� ��2�_��tܵH��Y;X��f��V���{�R����I`�����9#�\8&��8'�'�t~=��@8��/b��7��VMK���i"��L��,�y��@���D���m���	�jc�.MI�m}Io}S�]�T�/���TD8SHy��?���۰�3�u���a��Ri&�R�0c-+�:6t�U ú��٪���i�f�h3`�ׁ�C]�fS`��0R�ӵdj�Gd���"��
��7m�T�i�3�Տ�K�"�N�q����m2�+
@<t�Wuh�^����z�O)��3˔Rh�0��M��5Ģobׄ`W}��ª��c�ʤ8Sz-�ӻ��o�"z7RWH3Q��Y�R�r�lf�3U2C�
�3��m�0��̖ORK?�j����s�H�s;_�2��#���]Ny����!��L��1�N+:{u�!�[��b��P�S߽���/�'��<S��D�{+,;8鴷LP��"ցD�׾j���j$�yǬH�޷]��~�v|Y�FQ�m##7�̨�������X��ikXɵ��M��b8�`��D|�0Z�� T�HRҰ+�E�%:�_�"l㢭�E �,�?�&���@d8�n�Gzy�v�Hg��j�`����H/^�Hb�xOT��Ms�u�}�]xϯ�9{�C�xU(~��I�O	�a�n,<�P�;�^�z������-r��Ͻ#e�<s���ǽ.����+Jŝ<4�.'>u!y��`�]Ǡ���	�m�W���wVs0�q�1۸�	z�S{S(��u"��,�r��<�5�.
CV-%�P��(kȲEb�T2�3�'~�z�g8�y6���1��,��D��'����j$�H���:4�{Ĺ	O���;Ÿמ�cپ���!b�@aZ<f;7��B�I�SP�@���ľ���x�������բ"�uKo���l��,��
w�m��kw|�]�a�+����>YuhD���5ʹ���k`��e=��)�)��O�=���9����$�>ˆP�I>ִDR0�TӒ�kM�D�6`Â["����#6I�:z�^��c��=��P��ȩ`
Ƴj��i�8�MB���.G.�����О�u���U��
�&�h����p	��|��Y���Ķ�wXq�WJ���t��o����"0d��$y�/l4�o׿����9,�o]\�cW�A���&o�f��)��\%�m�e0k��D��z��`�G��r��BnB���j��J�
X��T�����g��s�.����S�R�Z>����������`�U��{��M�g8'����)���p��t^`y��DGJ����D��(i�c��x.�;����,=m�����z���T�,�-��ˡΰ�B���CL�{�O�bXR�hKIn�?.���v`��      �   d   x�3��M,I�=��$39�3Ə�7��؈ˈ�935/93�X�/���(1'�$��gh`�e�����;��r�p���&'&g��)�eCMsu3 ���qqq �w      �   G	  x�mX=s9��_�p7���3�d�W*��Y���u	4�)��3P��o:��ʙS��{���C�FR�0��|`"�^6�r��֊d���V����?��mԶ���t���^6v
�\,z���;�Fsqe��W�֬.�{/�6�][H���/�7�T�x���7'�Fw�kq����v�v� ��[�T�#}�0�T+Ǉ'�X���q�\<��?!�����{$����^9��IR�w��̎��ll��^3P�kc�dG׃X��^�-�M�Eםf �"�v���V����Q�#d.>릷NK�2�X{�7��0M����B,\#{iY*�b�I��+q�,��UK���h���_YW#@(���W��c)9�!���W;iF��w�4j��n��� �I�0�Q\/�s�a�#��N�����y!n��V�}��$/���"��Q[C즟�2=��f�W�rzfl�D���V����h���?�sq�b;����,K��V7le�s-A�"}.�߱�8Q�⤏H�g/C�*� ��igI<�U���>��Y'w�,R�1�֭l4�'�̺�ON��cMʚ���#m#��|>Ґ3�iUJ�k�Gn�§������ +רU���Q~�����{���@��H�̎2=�I��������{��;K�Ζ{Ve��I��I��_Hףn7��R9�T�܄>}�t��<Qz,G��$E5�!�A����/iEGx9��&ZT&�+�7�V4���W�c՝�v�V��o��,.D��Bn4��l����U��SaC.���瓲��Co0l,��@�^�퀠?pG���(F�+6:�T3n�亀���Ѷ�?�XN��ā�47��bƵ���� ��*�5Ҽr��.��#�e/��S�J��-�&��+��4h�o������Y#[6�T���d���	���O�N�����f�iu�H�XH̨��#6vdE] ت����omw�$�ݿy������>���l&n�kZ��6 �8T\{�4M.R�����#���C�Eu�w�pjvҮ�\L�>�B�\m�z�-#�YGB��r�6�B���;M�JuT<�aDh=B�UuǪanS�9nH�#���Z�wQ9w���Qɞ\2�G����Nv�v����nhjq��w��D;�������j��VbHa)������DP�����?`y	 ��W�0��4����O�@��C����)�7qG)�a��74�	����� LYݙ�ؐA���!��j�j�W��6� ������� �=7��4�%��*��b!����ĳJ����U��@�H�%�l���* )�"@]�D�et�e�����[��W�ɕrqO~R�@@FNn0"�Gn�pT��Ƣ*-�DB�7��E�pT�K�E0Gl�:^�>A���[��ٳ1KG�a ���FD���;A�F��U�g$����ߣ��N(-!���f�"�<�\�6a�?�F+&c$���Z�H��/h�<pI���s*!D{�����\�݂	W��mhO��AaR��x)�h��7cB��<���&,=�>|�d^��xՀ(���۸,���jE�|5�1�.h�����g\Ӏ�Â������P�֭��Q'L5�g�%��Hz���B�WEs#H��d�ܡ����{�e�̀���t	��y�=Z�@d���$R��b��\�U�1����������
h'��`X�ݵ���0���R���,����#GoB�D;�.�X!��&jkݰ����5�Ӫ깚��?����8�_�"��]T*��D �<^&��-��!��Q���܉�mLs<����	��(�lW�)�ޢpO7��^}�e=�A��X�f��ږ^m���gv���!]���9��lH-��?�9���nbrJ�7L��L���P9��!�s��lzq�gp�I� ���z�s�a��	�.���U��E)v�dȹ>>8}-.�L���G�ݻ��y�@4m�4��Ð~yx�[mB��>��?]�)��C����g�9���A�~e�\#$�gx��xo�rq��UDb!����?�J���xIŐ��%�L�^�	0��C�C�$rH��;�4��(D��G�u'�p�uG����,�����E8)�[y0� dǕ t;��ᇏ$P��b�H��7����g'��B����*�[�Y�M��[���jV�;4s9���#r�3;@9"���'�rv���wŧ���wXY, %�����20� p��EFE��.�ȹ�xʢ�z�����F�;=��������<�ʨv8e���/Q�'5r��_'��~	�ŧ���O���?��L&���q      �      x������ � �      �      x������ � �      �   �   x����J�@���)�6aw�
Ɛ(Š����eجe��	�Ih�F>�/f���uf>~�2���Do���9N��N�y���yq{0�t"����3ٌ�e�Z�e�<�1�1͠t:!U��I+ɓwD`�+�E�C�e���vۣFS������'�.��W|�� F��J� ВƩ��`��z����mvz�%���!��� �\qB����a��vӛ��{�v@Rii�<�����N�rq)�h�&Q}��m�     