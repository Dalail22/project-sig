--
-- PostgreSQL database dump
--

-- Dumped from database version 17.4
-- Dumped by pg_dump version 17.4

-- Started on 2025-04-22 01:20:34

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 217 (class 1259 OID 16418)
-- Name: health_services; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.health_services (
    name character varying(100),
    address text,
    latitude double precision,
    longitude double precision,
    id integer NOT NULL
);


ALTER TABLE public.health_services OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 16425)
-- Name: health_services_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.health_services_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.health_services_id_seq OWNER TO postgres;

--
-- TOC entry 4850 (class 0 OID 0)
-- Dependencies: 218
-- Name: health_services_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.health_services_id_seq OWNED BY public.health_services.id;


--
-- TOC entry 4695 (class 2604 OID 16426)
-- Name: health_services id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.health_services ALTER COLUMN id SET DEFAULT nextval('public.health_services_id_seq'::regclass);


--
-- TOC entry 4843 (class 0 OID 16418)
-- Dependencies: 217
-- Data for Name: health_services; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.health_services (name, address, latitude, longitude, id) FROM stdin;
Puskesmas Tambak		-7.6125345138605205	109.40434621484617	1
Puskesmas Sumpiuh		-7.608513731183505	109.3520105513862	2
Puskesmas Kemranjen		-7.592157565386409	109.273239531574	3
Puskesmas Somagede		-7.523511684370954	109.3204238870147	4
Puskesmas Banyumas		-7.516915808091	109.2955316754045	5
Puskesmas Kalibagor		-7.47378140653488	109.248729327451	6
Puskesmas Sokaraja		-7.45688428517929	109.2997242764321	7
Puskesmas Patikraja		-7.488462769660271	109.2435124666547	8
Puskesmas Jatilawang		-7.534660263328998	109.2004565422394	9
Puskesmas Wangon		-7.51644747362066	108.9968639079438	10
Puskesmas Purwojati		-7.493517319562469	109.14208773612408	11
Puskesmas Lumbir		-7.448312690711421	108.9558666879514	12
Puskesmas Gumelar		-7.373940567224078	108.981729541691	13
Puskesmas Ajibarang		-7.409203267791356	109.0429556925227	14
Puskesmas Rawalo		-7.534589522091428	109.1821259477083	15
Puskesmas Kalibagor		-7.55850980378179	109.208238372831	16
Puskesmas Singgokerto		-7.398046806346393	109.1229925489273	17
Puskesmas Pekuncen		-7.36638327582986	109.1872449635056	18
Puskesmas Dawuhan		-7.383794041515542	109.2194041982218	19
Puskesmas Baturaden		-7.344394950661155	109.2351854537212	20
\.


--
-- TOC entry 4851 (class 0 OID 0)
-- Dependencies: 218
-- Name: health_services_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.health_services_id_seq', 20, true);


--
-- TOC entry 4697 (class 2606 OID 16428)
-- Name: health_services health_services_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.health_services
    ADD CONSTRAINT health_services_pkey PRIMARY KEY (id);


-- Completed on 2025-04-22 01:20:36

--
-- PostgreSQL database dump complete
--

