PGDMP     
        	        
    w         	   sicacecsj    9.5.2    9.5.2    )	           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            *	           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            +	           1262    19964 	   sicacecsj    DATABASE     �   CREATE DATABASE sicacecsj WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_El Salvador.1252' LC_CTYPE = 'Spanish_El Salvador.1252';
    DROP DATABASE sicacecsj;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            ,	           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    7            -	           0    0    public    ACL     �   REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
                  postgres    false    7                        3079    12355    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            .	           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    19965    administrador    TABLE     �   CREATE TABLE administrador (
    idadmin integer NOT NULL,
    idregistro integer NOT NULL,
    trial434 character(1) DEFAULT 'N'::bpchar,
    trial689 character(1) DEFAULT 'N'::bpchar,
    trial617 character(1)
);
 !   DROP TABLE public.administrador;
       public         postgres    false    7            /	           0    0    TABLE administrador    COMMENT     +   COMMENT ON TABLE administrador IS 'TRIAL';
            public       postgres    false    181            0	           0    0    COLUMN administrador.idadmin    COMMENT     4   COMMENT ON COLUMN administrador.idadmin IS 'TRIAL';
            public       postgres    false    181            1	           0    0    COLUMN administrador.idregistro    COMMENT     7   COMMENT ON COLUMN administrador.idregistro IS 'TRIAL';
            public       postgres    false    181            2	           0    0    COLUMN administrador.trial434    COMMENT     5   COMMENT ON COLUMN administrador.trial434 IS 'TRIAL';
            public       postgres    false    181            3	           0    0    COLUMN administrador.trial689    COMMENT     5   COMMENT ON COLUMN administrador.trial689 IS 'TRIAL';
            public       postgres    false    181            4	           0    0    COLUMN administrador.trial617    COMMENT     5   COMMENT ON COLUMN administrador.trial617 IS 'TRIAL';
            public       postgres    false    181            �            1259    19970    alumno    TABLE     1  CREATE TABLE alumno (
    idalumno integer NOT NULL,
    idresponsable integer NOT NULL,
    nombrea character varying(45) DEFAULT 'NULL'::character varying,
    apellidoa character varying(45) DEFAULT 'NULL'::character varying,
    trial699 character(1) DEFAULT 'N'::bpchar,
    trial630 character(1)
);
    DROP TABLE public.alumno;
       public         postgres    false    7            5	           0    0    TABLE alumno    COMMENT     $   COMMENT ON TABLE alumno IS 'TRIAL';
            public       postgres    false    182            6	           0    0    COLUMN alumno.idalumno    COMMENT     .   COMMENT ON COLUMN alumno.idalumno IS 'TRIAL';
            public       postgres    false    182            7	           0    0    COLUMN alumno.idresponsable    COMMENT     3   COMMENT ON COLUMN alumno.idresponsable IS 'TRIAL';
            public       postgres    false    182            8	           0    0    COLUMN alumno.nombrea    COMMENT     -   COMMENT ON COLUMN alumno.nombrea IS 'TRIAL';
            public       postgres    false    182            9	           0    0    COLUMN alumno.apellidoa    COMMENT     /   COMMENT ON COLUMN alumno.apellidoa IS 'TRIAL';
            public       postgres    false    182            :	           0    0    COLUMN alumno.trial699    COMMENT     .   COMMENT ON COLUMN alumno.trial699 IS 'TRIAL';
            public       postgres    false    182            ;	           0    0    COLUMN alumno.trial630    COMMENT     .   COMMENT ON COLUMN alumno.trial630 IS 'TRIAL';
            public       postgres    false    182            �            1259    19976    alumnos    TABLE     T  CREATE TABLE alumnos (
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
    coloniaa character varying(250) DEFAULT 'NULL'::character varying,
    cantona character varying(250) DEFAULT 'NULL'::character varying,
    caserioa character varying(250) DEFAULT 'NULL'::character varying,
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
    lugartram character varying(255) DEFAULT 'NULL'::character varying
);
    DROP TABLE public.alumnos;
       public         postgres    false    7            <	           0    0    TABLE alumnos    COMMENT     %   COMMENT ON TABLE alumnos IS 'TRIAL';
            public       postgres    false    183            =	           0    0    COLUMN alumnos.idalum    COMMENT     -   COMMENT ON COLUMN alumnos.idalum IS 'TRIAL';
            public       postgres    false    183            >	           0    0    COLUMN alumnos.nombrea    COMMENT     .   COMMENT ON COLUMN alumnos.nombrea IS 'TRIAL';
            public       postgres    false    183            ?	           0    0    COLUMN alumnos.apellidoa    COMMENT     0   COMMENT ON COLUMN alumnos.apellidoa IS 'TRIAL';
            public       postgres    false    183            @	           0    0    COLUMN alumnos.nacionalidada    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidada IS 'TRIAL';
            public       postgres    false    183            A	           0    0    COLUMN alumnos.deptonaca    COMMENT     0   COMMENT ON COLUMN alumnos.deptonaca IS 'TRIAL';
            public       postgres    false    183            B	           0    0    COLUMN alumnos.munnaca    COMMENT     .   COMMENT ON COLUMN alumnos.munnaca IS 'TRIAL';
            public       postgres    false    183            C	           0    0    COLUMN alumnos.direcciona    COMMENT     1   COMMENT ON COLUMN alumnos.direcciona IS 'TRIAL';
            public       postgres    false    183            D	           0    0    COLUMN alumnos.email    COMMENT     ,   COMMENT ON COLUMN alumnos.email IS 'TRIAL';
            public       postgres    false    183            E	           0    0    COLUMN alumnos.generoa    COMMENT     .   COMMENT ON COLUMN alumnos.generoa IS 'TRIAL';
            public       postgres    false    183            F	           0    0    COLUMN alumnos.fnacimientoa    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientoa IS 'TRIAL';
            public       postgres    false    183            G	           0    0    COLUMN alumnos.telefonoa    COMMENT     0   COMMENT ON COLUMN alumnos.telefonoa IS 'TRIAL';
            public       postgres    false    183            H	           0    0    COLUMN alumnos.lugarnacimientoa    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientoa IS 'TRIAL';
            public       postgres    false    183            I	           0    0    COLUMN alumnos.coloniaa    COMMENT     /   COMMENT ON COLUMN alumnos.coloniaa IS 'TRIAL';
            public       postgres    false    183            J	           0    0    COLUMN alumnos.cantona    COMMENT     .   COMMENT ON COLUMN alumnos.cantona IS 'TRIAL';
            public       postgres    false    183            K	           0    0    COLUMN alumnos.caserioa    COMMENT     /   COMMENT ON COLUMN alumnos.caserioa IS 'TRIAL';
            public       postgres    false    183            L	           0    0    COLUMN alumnos.estadoa    COMMENT     .   COMMENT ON COLUMN alumnos.estadoa IS 'TRIAL';
            public       postgres    false    183            M	           0    0    COLUMN alumnos.estadocivila    COMMENT     3   COMMENT ON COLUMN alumnos.estadocivila IS 'TRIAL';
            public       postgres    false    183            N	           0    0    COLUMN alumnos.tipocallea    COMMENT     1   COMMENT ON COLUMN alumnos.tipocallea IS 'TRIAL';
            public       postgres    false    183            O	           0    0    COLUMN alumnos.zonaa    COMMENT     ,   COMMENT ON COLUMN alumnos.zonaa IS 'TRIAL';
            public       postgres    false    183            P	           0    0    COLUMN alumnos.mediotransa    COMMENT     2   COMMENT ON COLUMN alumnos.mediotransa IS 'TRIAL';
            public       postgres    false    183            Q	           0    0    COLUMN alumnos.distanciaa    COMMENT     1   COMMENT ON COLUMN alumnos.distanciaa IS 'TRIAL';
            public       postgres    false    183            R	           0    0    COLUMN alumnos.factorriesgoa    COMMENT     4   COMMENT ON COLUMN alumnos.factorriesgoa IS 'TRIAL';
            public       postgres    false    183            S	           0    0    COLUMN alumnos.trabajaa    COMMENT     /   COMMENT ON COLUMN alumnos.trabajaa IS 'TRIAL';
            public       postgres    false    183            T	           0    0    COLUMN alumnos.dependenciaecoa    COMMENT     6   COMMENT ON COLUMN alumnos.dependenciaecoa IS 'TRIAL';
            public       postgres    false    183            U	           0    0    COLUMN alumnos.tarjetavacunasa    COMMENT     6   COMMENT ON COLUMN alumnos.tarjetavacunasa IS 'TRIAL';
            public       postgres    false    183            V	           0    0    COLUMN alumnos.esquemavacunasa    COMMENT     6   COMMENT ON COLUMN alumnos.esquemavacunasa IS 'TRIAL';
            public       postgres    false    183            W	           0    0    COLUMN alumnos.enfdisa    COMMENT     .   COMMENT ON COLUMN alumnos.enfdisa IS 'TRIAL';
            public       postgres    false    183            X	           0    0    COLUMN alumnos.premeda    COMMENT     .   COMMENT ON COLUMN alumnos.premeda IS 'TRIAL';
            public       postgres    false    183            Y	           0    0    COLUMN alumnos.nombresp    COMMENT     /   COMMENT ON COLUMN alumnos.nombresp IS 'TRIAL';
            public       postgres    false    183            Z	           0    0    COLUMN alumnos.apellidosp    COMMENT     1   COMMENT ON COLUMN alumnos.apellidosp IS 'TRIAL';
            public       postgres    false    183            [	           0    0    COLUMN alumnos.nacionalidadp    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidadp IS 'TRIAL';
            public       postgres    false    183            \	           0    0    COLUMN alumnos.deptonacp    COMMENT     0   COMMENT ON COLUMN alumnos.deptonacp IS 'TRIAL';
            public       postgres    false    183            ]	           0    0    COLUMN alumnos.lugarnacimientop    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientop IS 'TRIAL';
            public       postgres    false    183            ^	           0    0    COLUMN alumnos.generop    COMMENT     .   COMMENT ON COLUMN alumnos.generop IS 'TRIAL';
            public       postgres    false    183            _	           0    0    COLUMN alumnos.estadofamiliarp    COMMENT     6   COMMENT ON COLUMN alumnos.estadofamiliarp IS 'TRIAL';
            public       postgres    false    183            `	           0    0    COLUMN alumnos.graestp    COMMENT     .   COMMENT ON COLUMN alumnos.graestp IS 'TRIAL';
            public       postgres    false    183            a	           0    0    COLUMN alumnos.profp    COMMENT     ,   COMMENT ON COLUMN alumnos.profp IS 'TRIAL';
            public       postgres    false    183            b	           0    0    COLUMN alumnos.direccionp    COMMENT     1   COMMENT ON COLUMN alumnos.direccionp IS 'TRIAL';
            public       postgres    false    183            c	           0    0    COLUMN alumnos.telefonop    COMMENT     0   COMMENT ON COLUMN alumnos.telefonop IS 'TRIAL';
            public       postgres    false    183            d	           0    0    COLUMN alumnos.emailp    COMMENT     -   COMMENT ON COLUMN alumnos.emailp IS 'TRIAL';
            public       postgres    false    183            e	           0    0    COLUMN alumnos.lugartrap    COMMENT     0   COMMENT ON COLUMN alumnos.lugartrap IS 'TRIAL';
            public       postgres    false    183            f	           0    0    COLUMN alumnos.fnacimientop    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientop IS 'TRIAL';
            public       postgres    false    183            g	           0    0    COLUMN alumnos.duip    COMMENT     +   COMMENT ON COLUMN alumnos.duip IS 'TRIAL';
            public       postgres    false    183            h	           0    0    COLUMN alumnos.nitp    COMMENT     +   COMMENT ON COLUMN alumnos.nitp IS 'TRIAL';
            public       postgres    false    183            i	           0    0    COLUMN alumnos.zonap    COMMENT     ,   COMMENT ON COLUMN alumnos.zonap IS 'TRIAL';
            public       postgres    false    183            j	           0    0    COLUMN alumnos.duim    COMMENT     +   COMMENT ON COLUMN alumnos.duim IS 'TRIAL';
            public       postgres    false    183            k	           0    0    COLUMN alumnos.nitm    COMMENT     +   COMMENT ON COLUMN alumnos.nitm IS 'TRIAL';
            public       postgres    false    183            l	           0    0    COLUMN alumnos.nombresm    COMMENT     /   COMMENT ON COLUMN alumnos.nombresm IS 'TRIAL';
            public       postgres    false    183            m	           0    0    COLUMN alumnos.apellidosm    COMMENT     1   COMMENT ON COLUMN alumnos.apellidosm IS 'TRIAL';
            public       postgres    false    183            n	           0    0    COLUMN alumnos.fnacimientom    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientom IS 'TRIAL';
            public       postgres    false    183            o	           0    0    COLUMN alumnos.nacionalidadm    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidadm IS 'TRIAL';
            public       postgres    false    183            p	           0    0    COLUMN alumnos.lugarnacimientom    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientom IS 'TRIAL';
            public       postgres    false    183            q	           0    0    COLUMN alumnos.deptonacm    COMMENT     0   COMMENT ON COLUMN alumnos.deptonacm IS 'TRIAL';
            public       postgres    false    183            r	           0    0    COLUMN alumnos.zonam    COMMENT     ,   COMMENT ON COLUMN alumnos.zonam IS 'TRIAL';
            public       postgres    false    183            s	           0    0    COLUMN alumnos.generom    COMMENT     .   COMMENT ON COLUMN alumnos.generom IS 'TRIAL';
            public       postgres    false    183            t	           0    0    COLUMN alumnos.estadofamiliarm    COMMENT     6   COMMENT ON COLUMN alumnos.estadofamiliarm IS 'TRIAL';
            public       postgres    false    183            u	           0    0    COLUMN alumnos.graestm    COMMENT     .   COMMENT ON COLUMN alumnos.graestm IS 'TRIAL';
            public       postgres    false    183            v	           0    0    COLUMN alumnos.profm    COMMENT     ,   COMMENT ON COLUMN alumnos.profm IS 'TRIAL';
            public       postgres    false    183            w	           0    0    COLUMN alumnos.direccionm    COMMENT     1   COMMENT ON COLUMN alumnos.direccionm IS 'TRIAL';
            public       postgres    false    183            x	           0    0    COLUMN alumnos.telefonom    COMMENT     0   COMMENT ON COLUMN alumnos.telefonom IS 'TRIAL';
            public       postgres    false    183            y	           0    0    COLUMN alumnos.emailm    COMMENT     -   COMMENT ON COLUMN alumnos.emailm IS 'TRIAL';
            public       postgres    false    183            z	           0    0    COLUMN alumnos.lugartram    COMMENT     0   COMMENT ON COLUMN alumnos.lugartram IS 'TRIAL';
            public       postgres    false    183            �            1259    20037    alumnos_idalum_seq    SEQUENCE     t   CREATE SEQUENCE alumnos_idalum_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.alumnos_idalum_seq;
       public       postgres    false    183    7            {	           0    0    alumnos_idalum_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE alumnos_idalum_seq OWNED BY alumnos.idalum;
            public       postgres    false    184            �            1259    20039 
   asignacion    TABLE       CREATE TABLE asignacion (
    idasignacion integer NOT NULL,
    idmateria integer NOT NULL,
    idalumno integer NOT NULL,
    iddocente integer NOT NULL,
    trial444 character(1) DEFAULT 'N'::bpchar,
    trial718 character(1) DEFAULT 'N'::bpchar,
    trial633 character(1)
);
    DROP TABLE public.asignacion;
       public         postgres    false    7            |	           0    0    TABLE asignacion    COMMENT     (   COMMENT ON TABLE asignacion IS 'TRIAL';
            public       postgres    false    185            }	           0    0    COLUMN asignacion.idasignacion    COMMENT     6   COMMENT ON COLUMN asignacion.idasignacion IS 'TRIAL';
            public       postgres    false    185            ~	           0    0    COLUMN asignacion.idmateria    COMMENT     3   COMMENT ON COLUMN asignacion.idmateria IS 'TRIAL';
            public       postgres    false    185            	           0    0    COLUMN asignacion.idalumno    COMMENT     2   COMMENT ON COLUMN asignacion.idalumno IS 'TRIAL';
            public       postgres    false    185            �	           0    0    COLUMN asignacion.iddocente    COMMENT     3   COMMENT ON COLUMN asignacion.iddocente IS 'TRIAL';
            public       postgres    false    185            �	           0    0    COLUMN asignacion.trial444    COMMENT     2   COMMENT ON COLUMN asignacion.trial444 IS 'TRIAL';
            public       postgres    false    185            �	           0    0    COLUMN asignacion.trial718    COMMENT     2   COMMENT ON COLUMN asignacion.trial718 IS 'TRIAL';
            public       postgres    false    185            �	           0    0    COLUMN asignacion.trial633    COMMENT     2   COMMENT ON COLUMN asignacion.trial633 IS 'TRIAL';
            public       postgres    false    185            �            1259    20044    aula    TABLE     �   CREATE TABLE aula (
    idaula integer NOT NULL,
    trial444 character(1) DEFAULT 'N'::bpchar,
    trial728 character(1) DEFAULT 'N'::bpchar,
    trial633 character(1)
);
    DROP TABLE public.aula;
       public         postgres    false    7            �	           0    0 
   TABLE aula    COMMENT     "   COMMENT ON TABLE aula IS 'TRIAL';
            public       postgres    false    186            �	           0    0    COLUMN aula.idaula    COMMENT     *   COMMENT ON COLUMN aula.idaula IS 'TRIAL';
            public       postgres    false    186            �	           0    0    COLUMN aula.trial444    COMMENT     ,   COMMENT ON COLUMN aula.trial444 IS 'TRIAL';
            public       postgres    false    186            �	           0    0    COLUMN aula.trial728    COMMENT     ,   COMMENT ON COLUMN aula.trial728 IS 'TRIAL';
            public       postgres    false    186            �	           0    0    COLUMN aula.trial633    COMMENT     ,   COMMENT ON COLUMN aula.trial633 IS 'TRIAL';
            public       postgres    false    186            �            1259    20049    carnet    TABLE     �   CREATE TABLE carnet (
    idcarnet integer NOT NULL,
    idalumno integer NOT NULL,
    trial447 character(1) DEFAULT 'N'::bpchar,
    trial732 character(1) DEFAULT 'N'::bpchar,
    trial637 character(1)
);
    DROP TABLE public.carnet;
       public         postgres    false    7            �	           0    0    TABLE carnet    COMMENT     $   COMMENT ON TABLE carnet IS 'TRIAL';
            public       postgres    false    187            �	           0    0    COLUMN carnet.idcarnet    COMMENT     .   COMMENT ON COLUMN carnet.idcarnet IS 'TRIAL';
            public       postgres    false    187            �	           0    0    COLUMN carnet.idalumno    COMMENT     .   COMMENT ON COLUMN carnet.idalumno IS 'TRIAL';
            public       postgres    false    187            �	           0    0    COLUMN carnet.trial447    COMMENT     .   COMMENT ON COLUMN carnet.trial447 IS 'TRIAL';
            public       postgres    false    187            �	           0    0    COLUMN carnet.trial732    COMMENT     .   COMMENT ON COLUMN carnet.trial732 IS 'TRIAL';
            public       postgres    false    187            �	           0    0    COLUMN carnet.trial637    COMMENT     .   COMMENT ON COLUMN carnet.trial637 IS 'TRIAL';
            public       postgres    false    187            �            1259    20054    docente    TABLE     c  CREATE TABLE docente (
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
    estado integer NOT NULL,
    trial637 character(1)
);
    DROP TABLE public.docente;
       public         postgres    false    7            �	           0    0    TABLE docente    COMMENT     %   COMMENT ON TABLE docente IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.iddocente    COMMENT     0   COMMENT ON COLUMN docente.iddocente IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.nombresd    COMMENT     /   COMMENT ON COLUMN docente.nombresd IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.apellidosd    COMMENT     1   COMMENT ON COLUMN docente.apellidosd IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.fechanac    COMMENT     /   COMMENT ON COLUMN docente.fechanac IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.generod    COMMENT     .   COMMENT ON COLUMN docente.generod IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.especialidad    COMMENT     3   COMMENT ON COLUMN docente.especialidad IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.nacionalidad    COMMENT     3   COMMENT ON COLUMN docente.nacionalidad IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.depdocente    COMMENT     1   COMMENT ON COLUMN docente.depdocente IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.municipiodocente    COMMENT     7   COMMENT ON COLUMN docente.municipiodocente IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.telefono    COMMENT     /   COMMENT ON COLUMN docente.telefono IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.correo    COMMENT     -   COMMENT ON COLUMN docente.correo IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.direccion    COMMENT     0   COMMENT ON COLUMN docente.direccion IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.estado    COMMENT     -   COMMENT ON COLUMN docente.estado IS 'TRIAL';
            public       postgres    false    188            �	           0    0    COLUMN docente.trial637    COMMENT     /   COMMENT ON COLUMN docente.trial637 IS 'TRIAL';
            public       postgres    false    188            �            1259    20060    docente_iddocente_seq    SEQUENCE     w   CREATE SEQUENCE docente_iddocente_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.docente_iddocente_seq;
       public       postgres    false    188    7            �	           0    0    docente_iddocente_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE docente_iddocente_seq OWNED BY docente.iddocente;
            public       postgres    false    189            �            1259    20062    grado    TABLE     �   CREATE TABLE grado (
    idgrado integer NOT NULL,
    idseccion integer NOT NULL,
    trial451 character(1) DEFAULT 'N'::bpchar,
    trial748 character(1) DEFAULT 'N'::bpchar,
    trial637 character(1)
);
    DROP TABLE public.grado;
       public         postgres    false    7            �	           0    0    TABLE grado    COMMENT     #   COMMENT ON TABLE grado IS 'TRIAL';
            public       postgres    false    190            �	           0    0    COLUMN grado.idgrado    COMMENT     ,   COMMENT ON COLUMN grado.idgrado IS 'TRIAL';
            public       postgres    false    190            �	           0    0    COLUMN grado.idseccion    COMMENT     .   COMMENT ON COLUMN grado.idseccion IS 'TRIAL';
            public       postgres    false    190            �	           0    0    COLUMN grado.trial451    COMMENT     -   COMMENT ON COLUMN grado.trial451 IS 'TRIAL';
            public       postgres    false    190            �	           0    0    COLUMN grado.trial748    COMMENT     -   COMMENT ON COLUMN grado.trial748 IS 'TRIAL';
            public       postgres    false    190            �	           0    0    COLUMN grado.trial637    COMMENT     -   COMMENT ON COLUMN grado.trial637 IS 'TRIAL';
            public       postgres    false    190            �            1259    20067    hdocente    TABLE     �   CREATE TABLE hdocente (
    idhdocente integer NOT NULL,
    iddocente integer NOT NULL,
    trial451 character(1) DEFAULT 'N'::bpchar,
    trial758 character(1) DEFAULT 'N'::bpchar,
    trial640 character(1)
);
    DROP TABLE public.hdocente;
       public         postgres    false    7            �	           0    0    TABLE hdocente    COMMENT     &   COMMENT ON TABLE hdocente IS 'TRIAL';
            public       postgres    false    191            �	           0    0    COLUMN hdocente.idhdocente    COMMENT     2   COMMENT ON COLUMN hdocente.idhdocente IS 'TRIAL';
            public       postgres    false    191            �	           0    0    COLUMN hdocente.iddocente    COMMENT     1   COMMENT ON COLUMN hdocente.iddocente IS 'TRIAL';
            public       postgres    false    191            �	           0    0    COLUMN hdocente.trial451    COMMENT     0   COMMENT ON COLUMN hdocente.trial451 IS 'TRIAL';
            public       postgres    false    191            �	           0    0    COLUMN hdocente.trial758    COMMENT     0   COMMENT ON COLUMN hdocente.trial758 IS 'TRIAL';
            public       postgres    false    191            �	           0    0    COLUMN hdocente.trial640    COMMENT     0   COMMENT ON COLUMN hdocente.trial640 IS 'TRIAL';
            public       postgres    false    191            �            1259    20072    materia    TABLE     �   CREATE TABLE materia (
    idmateria integer NOT NULL,
    idnota integer NOT NULL,
    trial451 character(1) DEFAULT 'N'::bpchar,
    trial764 character(1) DEFAULT 'N'::bpchar,
    trial640 character(1)
);
    DROP TABLE public.materia;
       public         postgres    false    7            �	           0    0    TABLE materia    COMMENT     %   COMMENT ON TABLE materia IS 'TRIAL';
            public       postgres    false    192            �	           0    0    COLUMN materia.idmateria    COMMENT     0   COMMENT ON COLUMN materia.idmateria IS 'TRIAL';
            public       postgres    false    192            �	           0    0    COLUMN materia.idnota    COMMENT     -   COMMENT ON COLUMN materia.idnota IS 'TRIAL';
            public       postgres    false    192            �	           0    0    COLUMN materia.trial451    COMMENT     /   COMMENT ON COLUMN materia.trial451 IS 'TRIAL';
            public       postgres    false    192            �	           0    0    COLUMN materia.trial764    COMMENT     /   COMMENT ON COLUMN materia.trial764 IS 'TRIAL';
            public       postgres    false    192            �	           0    0    COLUMN materia.trial640    COMMENT     /   COMMENT ON COLUMN materia.trial640 IS 'TRIAL';
            public       postgres    false    192            �            1259    20077 	   matricula    TABLE     �   CREATE TABLE matricula (
    idmatricula integer NOT NULL,
    idresponsable integer NOT NULL,
    trial454 character(1) DEFAULT 'N'::bpchar,
    trial771 character(1) DEFAULT 'N'::bpchar,
    trial640 character(1)
);
    DROP TABLE public.matricula;
       public         postgres    false    7            �	           0    0    TABLE matricula    COMMENT     '   COMMENT ON TABLE matricula IS 'TRIAL';
            public       postgres    false    193            �	           0    0    COLUMN matricula.idmatricula    COMMENT     4   COMMENT ON COLUMN matricula.idmatricula IS 'TRIAL';
            public       postgres    false    193            �	           0    0    COLUMN matricula.idresponsable    COMMENT     6   COMMENT ON COLUMN matricula.idresponsable IS 'TRIAL';
            public       postgres    false    193            �	           0    0    COLUMN matricula.trial454    COMMENT     1   COMMENT ON COLUMN matricula.trial454 IS 'TRIAL';
            public       postgres    false    193            �	           0    0    COLUMN matricula.trial771    COMMENT     1   COMMENT ON COLUMN matricula.trial771 IS 'TRIAL';
            public       postgres    false    193            �	           0    0    COLUMN matricula.trial640    COMMENT     1   COMMENT ON COLUMN matricula.trial640 IS 'TRIAL';
            public       postgres    false    193            �            1259    20082    nota    TABLE     �   CREATE TABLE nota (
    idnota integer NOT NULL,
    trial454 character(1) DEFAULT 'N'::bpchar,
    trial781 character(1) DEFAULT 'N'::bpchar,
    trial643 character(1)
);
    DROP TABLE public.nota;
       public         postgres    false    7            �	           0    0 
   TABLE nota    COMMENT     "   COMMENT ON TABLE nota IS 'TRIAL';
            public       postgres    false    194            �	           0    0    COLUMN nota.idnota    COMMENT     *   COMMENT ON COLUMN nota.idnota IS 'TRIAL';
            public       postgres    false    194            �	           0    0    COLUMN nota.trial454    COMMENT     ,   COMMENT ON COLUMN nota.trial454 IS 'TRIAL';
            public       postgres    false    194            �	           0    0    COLUMN nota.trial781    COMMENT     ,   COMMENT ON COLUMN nota.trial781 IS 'TRIAL';
            public       postgres    false    194            �	           0    0    COLUMN nota.trial643    COMMENT     ,   COMMENT ON COLUMN nota.trial643 IS 'TRIAL';
            public       postgres    false    194            �            1259    20087    registro    TABLE     S  CREATE TABLE registro (
    idregistro integer NOT NULL,
    idaula integer NOT NULL,
    idgrado integer NOT NULL,
    idasignacion integer NOT NULL,
    idmatricula integer NOT NULL,
    idalumno integer NOT NULL,
    trial457 character(1) DEFAULT 'N'::bpchar,
    trial790 character(1) DEFAULT 'N'::bpchar,
    trial643 character(1)
);
    DROP TABLE public.registro;
       public         postgres    false    7            �	           0    0    TABLE registro    COMMENT     &   COMMENT ON TABLE registro IS 'TRIAL';
            public       postgres    false    195            �	           0    0    COLUMN registro.idregistro    COMMENT     2   COMMENT ON COLUMN registro.idregistro IS 'TRIAL';
            public       postgres    false    195            �	           0    0    COLUMN registro.idaula    COMMENT     .   COMMENT ON COLUMN registro.idaula IS 'TRIAL';
            public       postgres    false    195            �	           0    0    COLUMN registro.idgrado    COMMENT     /   COMMENT ON COLUMN registro.idgrado IS 'TRIAL';
            public       postgres    false    195            �	           0    0    COLUMN registro.idasignacion    COMMENT     4   COMMENT ON COLUMN registro.idasignacion IS 'TRIAL';
            public       postgres    false    195            �	           0    0    COLUMN registro.idmatricula    COMMENT     3   COMMENT ON COLUMN registro.idmatricula IS 'TRIAL';
            public       postgres    false    195            �	           0    0    COLUMN registro.idalumno    COMMENT     0   COMMENT ON COLUMN registro.idalumno IS 'TRIAL';
            public       postgres    false    195            �	           0    0    COLUMN registro.trial457    COMMENT     0   COMMENT ON COLUMN registro.trial457 IS 'TRIAL';
            public       postgres    false    195            �	           0    0    COLUMN registro.trial790    COMMENT     0   COMMENT ON COLUMN registro.trial790 IS 'TRIAL';
            public       postgres    false    195            �	           0    0    COLUMN registro.trial643    COMMENT     0   COMMENT ON COLUMN registro.trial643 IS 'TRIAL';
            public       postgres    false    195            �            1259    20092    responsable    TABLE     �   CREATE TABLE responsable (
    idresponsable integer NOT NULL,
    trial457 character(1) DEFAULT 'N'::bpchar,
    trial800 character(1) DEFAULT 'N'::bpchar,
    trial646 character(1)
);
    DROP TABLE public.responsable;
       public         postgres    false    7            �	           0    0    TABLE responsable    COMMENT     )   COMMENT ON TABLE responsable IS 'TRIAL';
            public       postgres    false    196            �	           0    0     COLUMN responsable.idresponsable    COMMENT     8   COMMENT ON COLUMN responsable.idresponsable IS 'TRIAL';
            public       postgres    false    196            �	           0    0    COLUMN responsable.trial457    COMMENT     3   COMMENT ON COLUMN responsable.trial457 IS 'TRIAL';
            public       postgres    false    196            �	           0    0    COLUMN responsable.trial800    COMMENT     3   COMMENT ON COLUMN responsable.trial800 IS 'TRIAL';
            public       postgres    false    196            �	           0    0    COLUMN responsable.trial646    COMMENT     3   COMMENT ON COLUMN responsable.trial646 IS 'TRIAL';
            public       postgres    false    196            �            1259    20097    seccion    TABLE     �   CREATE TABLE seccion (
    idseccion integer NOT NULL,
    idturno integer NOT NULL,
    trial457 character(1) DEFAULT 'N'::bpchar,
    trial807 character(1) DEFAULT 'N'::bpchar,
    trial646 character(1)
);
    DROP TABLE public.seccion;
       public         postgres    false    7            �	           0    0    TABLE seccion    COMMENT     %   COMMENT ON TABLE seccion IS 'TRIAL';
            public       postgres    false    197            �	           0    0    COLUMN seccion.idseccion    COMMENT     0   COMMENT ON COLUMN seccion.idseccion IS 'TRIAL';
            public       postgres    false    197            �	           0    0    COLUMN seccion.idturno    COMMENT     .   COMMENT ON COLUMN seccion.idturno IS 'TRIAL';
            public       postgres    false    197            �	           0    0    COLUMN seccion.trial457    COMMENT     /   COMMENT ON COLUMN seccion.trial457 IS 'TRIAL';
            public       postgres    false    197            �	           0    0    COLUMN seccion.trial807    COMMENT     /   COMMENT ON COLUMN seccion.trial807 IS 'TRIAL';
            public       postgres    false    197            �	           0    0    COLUMN seccion.trial646    COMMENT     /   COMMENT ON COLUMN seccion.trial646 IS 'TRIAL';
            public       postgres    false    197            �            1259    20102    turno    TABLE     �   CREATE TABLE turno (
    idturno integer NOT NULL,
    trial461 character(1) DEFAULT 'N'::bpchar,
    trial816 character(1) DEFAULT 'N'::bpchar,
    trial650 character(1)
);
    DROP TABLE public.turno;
       public         postgres    false    7            �	           0    0    TABLE turno    COMMENT     #   COMMENT ON TABLE turno IS 'TRIAL';
            public       postgres    false    198            �	           0    0    COLUMN turno.idturno    COMMENT     ,   COMMENT ON COLUMN turno.idturno IS 'TRIAL';
            public       postgres    false    198            �	           0    0    COLUMN turno.trial461    COMMENT     -   COMMENT ON COLUMN turno.trial461 IS 'TRIAL';
            public       postgres    false    198            �	           0    0    COLUMN turno.trial816    COMMENT     -   COMMENT ON COLUMN turno.trial816 IS 'TRIAL';
            public       postgres    false    198            �	           0    0    COLUMN turno.trial650    COMMENT     -   COMMENT ON COLUMN turno.trial650 IS 'TRIAL';
            public       postgres    false    198            �            1259    20107    usuario    TABLE     �  CREATE TABLE usuario (
    idusuario integer NOT NULL,
    nombre character varying(45) DEFAULT 'NULL'::character varying,
    clave character varying(45) DEFAULT 'NULL'::character varying,
    email character varying(45) DEFAULT 'NULL'::character varying,
    nivel integer,
    apellido character varying(45) DEFAULT 'NULL'::character varying,
    sexo character varying(45) DEFAULT 'NULL'::character varying,
    trial826 character(1) DEFAULT 'N'::bpchar,
    trial650 character(1)
);
    DROP TABLE public.usuario;
       public         postgres    false    7            �	           0    0    TABLE usuario    COMMENT     %   COMMENT ON TABLE usuario IS 'TRIAL';
            public       postgres    false    199            �	           0    0    COLUMN usuario.idusuario    COMMENT     0   COMMENT ON COLUMN usuario.idusuario IS 'TRIAL';
            public       postgres    false    199            �	           0    0    COLUMN usuario.nombre    COMMENT     -   COMMENT ON COLUMN usuario.nombre IS 'TRIAL';
            public       postgres    false    199            �	           0    0    COLUMN usuario.clave    COMMENT     ,   COMMENT ON COLUMN usuario.clave IS 'TRIAL';
            public       postgres    false    199            �	           0    0    COLUMN usuario.email    COMMENT     ,   COMMENT ON COLUMN usuario.email IS 'TRIAL';
            public       postgres    false    199            �	           0    0    COLUMN usuario.nivel    COMMENT     ,   COMMENT ON COLUMN usuario.nivel IS 'TRIAL';
            public       postgres    false    199            �	           0    0    COLUMN usuario.apellido    COMMENT     /   COMMENT ON COLUMN usuario.apellido IS 'TRIAL';
            public       postgres    false    199            �	           0    0    COLUMN usuario.sexo    COMMENT     +   COMMENT ON COLUMN usuario.sexo IS 'TRIAL';
            public       postgres    false    199            �	           0    0    COLUMN usuario.trial826    COMMENT     /   COMMENT ON COLUMN usuario.trial826 IS 'TRIAL';
            public       postgres    false    199            �	           0    0    COLUMN usuario.trial650    COMMENT     /   COMMENT ON COLUMN usuario.trial650 IS 'TRIAL';
            public       postgres    false    199            �            1259    20116    usuario_idusuario_seq    SEQUENCE     w   CREATE SEQUENCE usuario_idusuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.usuario_idusuario_seq;
       public       postgres    false    199    7            �	           0    0    usuario_idusuario_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE usuario_idusuario_seq OWNED BY usuario.idusuario;
            public       postgres    false    200            2           2604    20118    idalum    DEFAULT     b   ALTER TABLE ONLY alumnos ALTER COLUMN idalum SET DEFAULT nextval('alumnos_idalum_seq'::regclass);
 =   ALTER TABLE public.alumnos ALTER COLUMN idalum DROP DEFAULT;
       public       postgres    false    184    183            F           2604    20119 	   iddocente    DEFAULT     h   ALTER TABLE ONLY docente ALTER COLUMN iddocente SET DEFAULT nextval('docente_iddocente_seq'::regclass);
 @   ALTER TABLE public.docente ALTER COLUMN iddocente DROP DEFAULT;
       public       postgres    false    189    188            Y           2604    20120 	   idusuario    DEFAULT     h   ALTER TABLE ONLY usuario ALTER COLUMN idusuario SET DEFAULT nextval('usuario_idusuario_seq'::regclass);
 @   ALTER TABLE public.usuario ALTER COLUMN idusuario DROP DEFAULT;
       public       postgres    false    200    199            	          0    19965    administrador 
   TABLE DATA               S   COPY administrador (idadmin, idregistro, trial434, trial689, trial617) FROM stdin;
    public       postgres    false    181   
      	          0    19970    alumno 
   TABLE DATA               Z   COPY alumno (idalumno, idresponsable, nombrea, apellidoa, trial699, trial630) FROM stdin;
    public       postgres    false    182   9
      	          0    19976    alumnos 
   TABLE DATA               �  COPY alumnos (idalum, nombrea, apellidoa, nacionalidada, deptonaca, munnaca, direcciona, email, generoa, fnacimientoa, telefonoa, lugarnacimientoa, coloniaa, cantona, caserioa, estadoa, estadocivila, tipocallea, zonaa, mediotransa, distanciaa, factorriesgoa, trabajaa, dependenciaecoa, tarjetavacunasa, esquemavacunasa, enfdisa, premeda, nombresp, apellidosp, nacionalidadp, deptonacp, lugarnacimientop, generop, estadofamiliarp, graestp, profp, direccionp, telefonop, emailp, lugartrap, fnacimientop, duip, nitp, zonap, duim, nitm, nombresm, apellidosm, fnacimientom, nacionalidadm, lugarnacimientom, deptonacm, zonam, generom, estadofamiliarm, graestm, profm, direccionm, telefonom, emailm, lugartram) FROM stdin;
    public       postgres    false    183   V
      �	           0    0    alumnos_idalum_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('alumnos_idalum_seq', 159, true);
            public       postgres    false    184            	          0    20039 
   asignacion 
   TABLE DATA               i   COPY asignacion (idasignacion, idmateria, idalumno, iddocente, trial444, trial718, trial633) FROM stdin;
    public       postgres    false    185   ,      	          0    20044    aula 
   TABLE DATA               =   COPY aula (idaula, trial444, trial728, trial633) FROM stdin;
    public       postgres    false    186   I      	          0    20049    carnet 
   TABLE DATA               K   COPY carnet (idcarnet, idalumno, trial447, trial732, trial637) FROM stdin;
    public       postgres    false    187   f      	          0    20054    docente 
   TABLE DATA               �   COPY docente (iddocente, nombresd, apellidosd, fechanac, generod, especialidad, nacionalidad, depdocente, municipiodocente, telefono, correo, direccion, estado, trial637) FROM stdin;
    public       postgres    false    188   �      �	           0    0    docente_iddocente_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('docente_iddocente_seq', 14, true);
            public       postgres    false    189            	          0    20062    grado 
   TABLE DATA               J   COPY grado (idgrado, idseccion, trial451, trial748, trial637) FROM stdin;
    public       postgres    false    190   R      	          0    20067    hdocente 
   TABLE DATA               P   COPY hdocente (idhdocente, iddocente, trial451, trial758, trial640) FROM stdin;
    public       postgres    false    191   o      	          0    20072    materia 
   TABLE DATA               K   COPY materia (idmateria, idnota, trial451, trial764, trial640) FROM stdin;
    public       postgres    false    192   �      	          0    20077 	   matricula 
   TABLE DATA               V   COPY matricula (idmatricula, idresponsable, trial454, trial771, trial640) FROM stdin;
    public       postgres    false    193   �       	          0    20082    nota 
   TABLE DATA               =   COPY nota (idnota, trial454, trial781, trial643) FROM stdin;
    public       postgres    false    194   �      !	          0    20087    registro 
   TABLE DATA               {   COPY registro (idregistro, idaula, idgrado, idasignacion, idmatricula, idalumno, trial457, trial790, trial643) FROM stdin;
    public       postgres    false    195   �      "	          0    20092    responsable 
   TABLE DATA               K   COPY responsable (idresponsable, trial457, trial800, trial646) FROM stdin;
    public       postgres    false    196          #	          0    20097    seccion 
   TABLE DATA               L   COPY seccion (idseccion, idturno, trial457, trial807, trial646) FROM stdin;
    public       postgres    false    197   &      $	          0    20102    turno 
   TABLE DATA               ?   COPY turno (idturno, trial461, trial816, trial650) FROM stdin;
    public       postgres    false    198   C      %	          0    20107    usuario 
   TABLE DATA               f   COPY usuario (idusuario, nombre, clave, email, nivel, apellido, sexo, trial826, trial650) FROM stdin;
    public       postgres    false    199   `      �	           0    0    usuario_idusuario_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('usuario_idusuario_seq', 12, true);
            public       postgres    false    200            b           2606    20122    pk_administrador 
   CONSTRAINT     Z   ALTER TABLE ONLY administrador
    ADD CONSTRAINT pk_administrador PRIMARY KEY (idadmin);
 H   ALTER TABLE ONLY public.administrador DROP CONSTRAINT pk_administrador;
       public         postgres    false    181    181            e           2606    20124 	   pk_alumno 
   CONSTRAINT     M   ALTER TABLE ONLY alumno
    ADD CONSTRAINT pk_alumno PRIMARY KEY (idalumno);
 :   ALTER TABLE ONLY public.alumno DROP CONSTRAINT pk_alumno;
       public         postgres    false    182    182            g           2606    20126 
   pk_alumnos 
   CONSTRAINT     M   ALTER TABLE ONLY alumnos
    ADD CONSTRAINT pk_alumnos PRIMARY KEY (idalum);
 <   ALTER TABLE ONLY public.alumnos DROP CONSTRAINT pk_alumnos;
       public         postgres    false    183    183            l           2606    20128    pk_asignacion 
   CONSTRAINT     Y   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT pk_asignacion PRIMARY KEY (idasignacion);
 B   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT pk_asignacion;
       public         postgres    false    185    185            n           2606    20130    pk_aula 
   CONSTRAINT     G   ALTER TABLE ONLY aula
    ADD CONSTRAINT pk_aula PRIMARY KEY (idaula);
 6   ALTER TABLE ONLY public.aula DROP CONSTRAINT pk_aula;
       public         postgres    false    186    186            q           2606    20132 	   pk_carnet 
   CONSTRAINT     M   ALTER TABLE ONLY carnet
    ADD CONSTRAINT pk_carnet PRIMARY KEY (idcarnet);
 :   ALTER TABLE ONLY public.carnet DROP CONSTRAINT pk_carnet;
       public         postgres    false    187    187            s           2606    20134 
   pk_docente 
   CONSTRAINT     P   ALTER TABLE ONLY docente
    ADD CONSTRAINT pk_docente PRIMARY KEY (iddocente);
 <   ALTER TABLE ONLY public.docente DROP CONSTRAINT pk_docente;
       public         postgres    false    188    188            v           2606    20136    pk_grado 
   CONSTRAINT     J   ALTER TABLE ONLY grado
    ADD CONSTRAINT pk_grado PRIMARY KEY (idgrado);
 8   ALTER TABLE ONLY public.grado DROP CONSTRAINT pk_grado;
       public         postgres    false    190    190            x           2606    20138    pk_hdocente 
   CONSTRAINT     S   ALTER TABLE ONLY hdocente
    ADD CONSTRAINT pk_hdocente PRIMARY KEY (idhdocente);
 >   ALTER TABLE ONLY public.hdocente DROP CONSTRAINT pk_hdocente;
       public         postgres    false    191    191            {           2606    20140 
   pk_materia 
   CONSTRAINT     P   ALTER TABLE ONLY materia
    ADD CONSTRAINT pk_materia PRIMARY KEY (idmateria);
 <   ALTER TABLE ONLY public.materia DROP CONSTRAINT pk_materia;
       public         postgres    false    192    192            ~           2606    20142    pk_matricula 
   CONSTRAINT     V   ALTER TABLE ONLY matricula
    ADD CONSTRAINT pk_matricula PRIMARY KEY (idmatricula);
 @   ALTER TABLE ONLY public.matricula DROP CONSTRAINT pk_matricula;
       public         postgres    false    193    193            �           2606    20144    pk_nota 
   CONSTRAINT     G   ALTER TABLE ONLY nota
    ADD CONSTRAINT pk_nota PRIMARY KEY (idnota);
 6   ALTER TABLE ONLY public.nota DROP CONSTRAINT pk_nota;
       public         postgres    false    194    194            �           2606    20146    pk_registro 
   CONSTRAINT     S   ALTER TABLE ONLY registro
    ADD CONSTRAINT pk_registro PRIMARY KEY (idregistro);
 >   ALTER TABLE ONLY public.registro DROP CONSTRAINT pk_registro;
       public         postgres    false    195    195            �           2606    20148    pk_responsable 
   CONSTRAINT     \   ALTER TABLE ONLY responsable
    ADD CONSTRAINT pk_responsable PRIMARY KEY (idresponsable);
 D   ALTER TABLE ONLY public.responsable DROP CONSTRAINT pk_responsable;
       public         postgres    false    196    196            �           2606    20150 
   pk_seccion 
   CONSTRAINT     P   ALTER TABLE ONLY seccion
    ADD CONSTRAINT pk_seccion PRIMARY KEY (idseccion);
 <   ALTER TABLE ONLY public.seccion DROP CONSTRAINT pk_seccion;
       public         postgres    false    197    197            �           2606    20152    pk_turno 
   CONSTRAINT     J   ALTER TABLE ONLY turno
    ADD CONSTRAINT pk_turno PRIMARY KEY (idturno);
 8   ALTER TABLE ONLY public.turno DROP CONSTRAINT pk_turno;
       public         postgres    false    198    198            �           2606    20154 
   pk_usuario 
   CONSTRAINT     P   ALTER TABLE ONLY usuario
    ADD CONSTRAINT pk_usuario PRIMARY KEY (idusuario);
 <   ALTER TABLE ONLY public.usuario DROP CONSTRAINT pk_usuario;
       public         postgres    false    199    199            o           1259    20155    carnet_ibfk_1    INDEX     =   CREATE INDEX carnet_ibfk_1 ON carnet USING btree (idalumno);
 !   DROP INDEX public.carnet_ibfk_1;
       public         postgres    false    187            h           1259    20156    idx_idalumno    INDEX     @   CREATE INDEX idx_idalumno ON asignacion USING btree (idalumno);
     DROP INDEX public.idx_idalumno;
       public         postgres    false    185            i           1259    20157    idx_iddocente    INDEX     B   CREATE INDEX idx_iddocente ON asignacion USING btree (iddocente);
 !   DROP INDEX public.idx_iddocente;
       public         postgres    false    185            j           1259    20158    idx_idmateria    INDEX     B   CREATE INDEX idx_idmateria ON asignacion USING btree (idmateria);
 !   DROP INDEX public.idx_idmateria;
       public         postgres    false    185            y           1259    20159 
   idx_idnota    INDEX     9   CREATE INDEX idx_idnota ON materia USING btree (idnota);
    DROP INDEX public.idx_idnota;
       public         postgres    false    192            `           1259    20160    idx_idregistro    INDEX     G   CREATE INDEX idx_idregistro ON administrador USING btree (idregistro);
 "   DROP INDEX public.idx_idregistro;
       public         postgres    false    181            c           1259    20161    idx_idresponsable    INDEX     F   CREATE INDEX idx_idresponsable ON alumno USING btree (idresponsable);
 %   DROP INDEX public.idx_idresponsable;
       public         postgres    false    182            t           1259    20162    idx_idseccion    INDEX     =   CREATE INDEX idx_idseccion ON grado USING btree (idseccion);
 !   DROP INDEX public.idx_idseccion;
       public         postgres    false    190            �           1259    20163    idx_idturno    INDEX     ;   CREATE INDEX idx_idturno ON seccion USING btree (idturno);
    DROP INDEX public.idx_idturno;
       public         postgres    false    197            |           1259    20164    matricula_ibfk_1    INDEX     H   CREATE INDEX matricula_ibfk_1 ON matricula USING btree (idresponsable);
 $   DROP INDEX public.matricula_ibfk_1;
       public         postgres    false    193            �           1259    20165    registro_ibfk_1    INDEX     E   CREATE INDEX registro_ibfk_1 ON registro USING btree (idasignacion);
 #   DROP INDEX public.registro_ibfk_1;
       public         postgres    false    195            �           1259    20166    registro_ibfk_2    INDEX     A   CREATE INDEX registro_ibfk_2 ON registro USING btree (idalumno);
 #   DROP INDEX public.registro_ibfk_2;
       public         postgres    false    195            �           1259    20167    registro_ibfk_3    INDEX     D   CREATE INDEX registro_ibfk_3 ON registro USING btree (idmatricula);
 #   DROP INDEX public.registro_ibfk_3;
       public         postgres    false    195            �           1259    20168    registro_ibfk_4    INDEX     ?   CREATE INDEX registro_ibfk_4 ON registro USING btree (idaula);
 #   DROP INDEX public.registro_ibfk_4;
       public         postgres    false    195            �           1259    20169    registro_ibfk_5    INDEX     @   CREATE INDEX registro_ibfk_5 ON registro USING btree (idgrado);
 #   DROP INDEX public.registro_ibfk_5;
       public         postgres    false    195            �           2606    20170    administrador_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY administrador
    ADD CONSTRAINT administrador_ibfk_1 FOREIGN KEY (idregistro) REFERENCES registro(idregistro) ON UPDATE RESTRICT ON DELETE RESTRICT;
 L   ALTER TABLE ONLY public.administrador DROP CONSTRAINT administrador_ibfk_1;
       public       postgres    false    181    195    2178            �           2606    20175    alumno_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY alumno
    ADD CONSTRAINT alumno_ibfk_1 FOREIGN KEY (idresponsable) REFERENCES responsable(idresponsable) ON UPDATE RESTRICT ON DELETE RESTRICT;
 >   ALTER TABLE ONLY public.alumno DROP CONSTRAINT alumno_ibfk_1;
       public       postgres    false    196    182    2185            �           2606    20180    asignacion_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_1 FOREIGN KEY (iddocente) REFERENCES docente(iddocente) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_1;
       public       postgres    false    185    188    2163            �           2606    20185    asignacion_ibfk_2    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_2 FOREIGN KEY (idmateria) REFERENCES materia(idmateria) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_2;
       public       postgres    false    185    2171    192            �           2606    20190    asignacion_ibfk_3    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_3 FOREIGN KEY (idalumno) REFERENCES alumno(idalumno) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_3;
       public       postgres    false    182    2149    185            �           2606    20195    carnet_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY carnet
    ADD CONSTRAINT carnet_ibfk_1 FOREIGN KEY (idalumno) REFERENCES alumno(idalumno) ON UPDATE RESTRICT ON DELETE RESTRICT;
 >   ALTER TABLE ONLY public.carnet DROP CONSTRAINT carnet_ibfk_1;
       public       postgres    false    2149    182    187            �           2606    20200    grado_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY grado
    ADD CONSTRAINT grado_ibfk_1 FOREIGN KEY (idseccion) REFERENCES seccion(idseccion) ON UPDATE RESTRICT ON DELETE RESTRICT;
 <   ALTER TABLE ONLY public.grado DROP CONSTRAINT grado_ibfk_1;
       public       postgres    false    190    197    2188            �           2606    20205    hdocente_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY hdocente
    ADD CONSTRAINT hdocente_ibfk_1 FOREIGN KEY (iddocente) REFERENCES docente(iddocente) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.hdocente DROP CONSTRAINT hdocente_ibfk_1;
       public       postgres    false    2163    191    188            �           2606    20210    materia_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY materia
    ADD CONSTRAINT materia_ibfk_1 FOREIGN KEY (idnota) REFERENCES nota(idnota) ON UPDATE RESTRICT ON DELETE RESTRICT;
 @   ALTER TABLE ONLY public.materia DROP CONSTRAINT materia_ibfk_1;
       public       postgres    false    2176    194    192            �           2606    20215    matricula_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY matricula
    ADD CONSTRAINT matricula_ibfk_1 FOREIGN KEY (idresponsable) REFERENCES responsable(idresponsable) ON UPDATE RESTRICT ON DELETE RESTRICT;
 D   ALTER TABLE ONLY public.matricula DROP CONSTRAINT matricula_ibfk_1;
       public       postgres    false    2185    193    196            �           2606    20220    registro_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_1 FOREIGN KEY (idasignacion) REFERENCES asignacion(idasignacion) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_1;
       public       postgres    false    2156    185    195            �           2606    20225    registro_ibfk_2    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_2 FOREIGN KEY (idalumno) REFERENCES alumno(idalumno) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_2;
       public       postgres    false    182    2149    195            �           2606    20230    registro_ibfk_3    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_3 FOREIGN KEY (idmatricula) REFERENCES matricula(idmatricula) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_3;
       public       postgres    false    2174    195    193            �           2606    20235    registro_ibfk_4    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_4 FOREIGN KEY (idaula) REFERENCES aula(idaula) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_4;
       public       postgres    false    195    186    2158            �           2606    20240    registro_ibfk_5    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_5 FOREIGN KEY (idgrado) REFERENCES grado(idgrado) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_5;
       public       postgres    false    2166    190    195            �           2606    20245    seccion_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY seccion
    ADD CONSTRAINT seccion_ibfk_1 FOREIGN KEY (idturno) REFERENCES turno(idturno) ON UPDATE RESTRICT ON DELETE RESTRICT;
 @   ALTER TABLE ONLY public.seccion DROP CONSTRAINT seccion_ibfk_1;
       public       postgres    false    2190    198    197            	      x������ � �      	      x������ � �      	   �  x��Z�r�H=��}��r-�����؇���XnE� j��c���OЏ���B@"e�3�'�2�
Y�Y/3_�t���T����ZU���F�՞WJ[��Vivɫ=�U#n���P[e&�V����;��VƫJXo[�3ͭ�B{e=SO�ע�D.4��r�e�4S[��묫d���8�턶�8Sۏ�x�����e��jԻ��D��͚ל��wR0��:��5]ˡ�͟���(���������F�VY��U�T��l��r�Oۼ[8�`�9��Վ}��^4Z�<g��s'[���!����x���S..��Ǝ��0?��Џq�\�up�	0�s\<'��I<��\/�9�oQp��Z4-g�U������+��Z�v�6�$f��q��V��l>y����C����~�>ug��U�lye�W��O� ez�ݮrNW�ZT� �  Ʋ_N�Q6��v���^�]c][���[���O�}i��
{íW���R�1�;Sp�縮�$�Qة�D��g�n���7�h	���������B�g�fRg�z��R4�V�����$��'1��a�^;��6t˅n��w8��4a4�m�o.W_#y�y�ŉ���';�|d�����ib��sy�w�8�=�����VkYbf�Pp�uJ?����~�@��|����W��yŁW߃Ryᖏ�z���7em쏨D�x������&��li�JɆ�7��'�82����)Z�T�Nh��2�}x|����XpJ. �U�ig@7�����\�L��R�^�
�n(XoQU$i�s�F����^�l#ᓆ��Zf߆��Iq�v����1('����� �S���6=z�����&W!҆�ɩ�PdVu)*���۝"�s�zg�����s�g���Ng|˩0��sJ�Z�1-�j�d�$̀�Z5[��7%��m2���^�#[����S�N�VR�j
�_T����
|�����}@��?X=��\s�aɳ�j����F�6l�����o:��]A����DY|{�u�M3���\[P>a�$���k�d ֌�/*�PY������N��8#��?��*Wu{�R�#b`��8��9H���³o 
D��K�sv�P����؄�c��fp.�(�ls���j�3��C�2%} 
�e��>���Q1O���r��Ǥ�����\f����� �.�AH����z�n�)T���S�TzJ���.@�@*�eNej��.uO�3N�.�1�^|��023�3ms��2�ӛ!
���:���4I=�]��v�E�v�.Ց���|[_+ta P���O";M@+L?6��\���q�=ٱө	un7���|�����9�4�8�R�y%U++�w��I���s��H�����4�7D�`x�&(���H��k4����Z#bf(�����D��u,d�z��!Xd�Bm�F����C�s�����տ��Ւ^�OEH�7<	0��.������r'�:�gm��ª�ͩ��4'��w��E��m�g���rc�:� M2^�2n'�w��+}�~0u�Y%���[4�z��*���zƫ���WP14���H\w�`�.T{�kT��j��[q�pESH��&k-2��Kp���) �S�{h
�	��@v�'1z��H�vȾ�-�-����u�ޡpދ����(�<��qG�DA�Z���۵s��Có3�NH�s�sv������qU��>t!��8չ��������IJ��;)�B6�f���r���A0ڗ��=)����5�`y�x ��9yQ�2�%�K��������a������%]�K���Ht�pwqf'"<өI���:$q�b� |������N��c/@.�#���"M�k�Sz��؆R�o�F:���Ns�@~/ɍ4�X��3dzZ�9y�6���d #d/��LϺG	��/h���Ţ�\���3�6G��$��*C>��m��=�{�d�r���;T�@H�^#�3=��	�aF������ś9�e�Hm�e)32�(�o)AZ��ɘ;�,(���G��|T�0��q;pd��	Q�b��#A=B"~p�(�ͦܰ�� �!��7�2�`�f�)�.�9� 	$��m*�p#[�U���TЕ�U�]��l�S�[�cw����RgI\,������u$Q�Ϙٲc�uWJfޜ�N����0Xn���w�4�N~R�����PH\��OXK3�vt�'��x����ݿ�t�>�6�C�+�y��	_����"����c�����x��~��(��Ӄ#S��P��c_��=��v��S>;��
 +y�(*�H�g*)��QWm	�=��𼓵ȹ��EnQ�S����&����W88�ZPH�`sN��w��S����.5G��Ƨ���ك����-H�C�����G{����a�V��NԚ���eGw'�N[91��ǃ¤�{B���������Ϸ�*{a�s���Աg���aN:D����SD]�f�X3���azj�S�7��f�!��Rj��T*cSE���a8a�MR�w��pi 
�]�S�hޜj�2�}�
�0\H�g����^֪A�� 8�Oo]h�B��2C]�j�X'�7�B7Sӳ��H��\�Q;J����8Vh���AѨ�0�-x6΢���D&��a�3�����!Kr��JL�ı�i!��$���w����A/<��xf�f�,i�,�i�)I|@y�ל����O�er�%2`�^*��I%�@�!���̕`�����ə٪#��c��cM���2��(cIqN�[�;ł�^��4=g���6�f��������
{���~<�/clp�4gÈ��5d&eqbG}́k (ۤ�a�=u����X 2L�؋������Օ(�HQ�S�bd�tv7�Z�(�X�O�hܼ�A6�=}���GZ�      	      x������ � �      	      x������ � �      	      x������ � �      	   �  x����n�F�����R�U$wQd��!9FH�8 ��C�:C
�v}�,���n�b���-�Q]��$���_�$lf*�K�/�����a�\�F�Y��^��٢U��l.E]H�̒�Q����!vC5�9��Vb#��ei�L�8I�l����7w��֓BWl�Մ�NUR��}�:�o�_�)�"��4r�oZ�C	�����]�JԎd)�uK��\�%��\�5�giǞ��	3�Fo�I���v8�$~������@��Ka�-?��,Y�7�6b�?J��nŎ8?z�Ӣl*������}A�c~����f[��؊�Z�� ���%��[��	�0� ���_9���g���P��(	V��=���i���Q�B+���_ �N�8 �ܤ[�<�7�i���+m�0: ��5�}�Kk�iDq�R f��C�l$�Qu_���O(?G�)��8PF����_(Q?����_�p���9U[}���:�~,�b/�#�oD'�J<�wn&�JZA�ٺ���0bs2��nH��(/������h��R���z�ĉ�\� f&I�~'��n�\��}�:�
�⹒��*L���w��I^���9�O�����|G�����1+--F͜��5�5vy���hk!���WSN]?`C�&�:>�kofkO�P�FֽtY�K7r�u�-�~��n'^F1�ѷ����[2�-Tχ�+�N��Z�LВG;����ZFY���Y�'���!��7�͸M�|v��_`����Y������E=�:!h����p-b��Ԩ�K=&����(���@����K,��Ѽ��|k7b�C^�)�R6��WZT0�;�{Y�����4�{7��F^2�n���ϯ�s�����h\[��=๘c�r,��4\�Eif��Q�)����Y�3�=½�8���?��=ں	��σT���yrvv����p      	      x������ � �      	      x������ � �      	      x������ � �      	      x������ � �       	      x������ � �      !	      x������ � �      "	      x�3��������� �Q      #	      x������ � �      $	      x������ � �      %	   }   x�3�t.�,.�L��4�*H6*�7���r��Lɔ�8��&f��%��rr:�%%��+8'��s�&'��d��s�p�pqz���rF�W�$溕Fyx�q&f!a�����1F��� )q-�     