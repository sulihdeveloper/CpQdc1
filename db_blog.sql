-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 03:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `capability`
--

CREATE TABLE `capability` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capability`
--

INSERT INTO `capability` (`id`, `judul`, `isi`, `image`, `created_at`, `updated_at`) VALUES
(11, 'Contract Management', '<p>Qdc Contract Management staffs ensure that the primary task of all parties to the agreement is the management of project deliverables in accordance with the agreed contractual terms and conditions, hence minimising the commercial risk for the client. The meticulous management of all contracts within the project ensures a seamless delivery of projects worldwide.</p>', '431399130.png', '2020-01-20 00:50:37', '2020-01-20 00:50:37'),
(12, 'Material Management', '<p>Qdc has established partnerships for the provision and support of equipment. This is a distinct advantage in ensuring the best possible pricing and full life support of the equipment.</p>', '2095263595.jpeg', '2020-01-20 00:51:05', '2020-01-20 00:51:05'),
(13, 'Project Management', '<p>All aspects of every project are the responsibility of a specific Qdc Project Manager. These responsibilities include delivery on time, on budget, on customer specification and to quality standards equal to the best in the world. Qdc is sufficiently flexible to mirror clients&rsquo; differing Project Management practices on a project-by-project basis if required</p>', '335802326.png', '2020-01-20 00:51:28', '2020-01-20 00:51:28'),
(14, 'Planning and Design', '<p>The depth of experience and skills within this group enables Qdc to design solutions that are achievable in all prevailing conditions, which meet and often exceed environmental, individual and health expectations. The service includes site surveying from which topographical maps are produced, environmental and heritage aspects researched and authorised, appropriate equipment sourced and project operation documentation is prepared.</p>', '1363003707.png', '2020-01-20 00:51:54', '2020-01-20 00:51:54'),
(15, 'Consultancy', '<p>Qdc provides a range of value added consultancy services including surveys, auditing, testing and contract negotiations. In order to provide the most effective, reliable, customised solution, Qdc can bring together the skills and technologies appropriate to client&rsquo;s individual needs. Qdc is able to offer a full consultative service grounded in decades of experience and proven expertise.</p>', '1441070789.jpg', '2020-01-20 00:52:47', '2020-01-20 00:52:47'),
(17, 'Feasibility Research', '<p>Before undertaking many projects, it is essential to undertake feasibility studies to ensure the viability of the project. Qdc can offer additional assistance by providing services such as:</p>\r\n\r\n<ul>\r\n	<li>Technology path engineering</li>\r\n	<li>Network route selection</li>\r\n	<li>Viability of technological alternatives</li>\r\n</ul>', '1410735331.jpg', '2020-01-20 19:02:31', '2020-01-20 19:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `carrer`
--

CREATE TABLE `carrer` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrer`
--

INSERT INTO `carrer` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `email`, `phone`, `address`, `photo`, `file`) VALUES
(1, '2020-01-23 00:07:43', '2020-01-23 00:07:43', 'sulih', 'sulih', 'sulh0@gmail.com', '09997284289', 'solo', '1066636495.jpg', '1066636495.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `closing_date` date NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `closing_date`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'IT SOFTWARE DEVELOPMENT STAFF', '2020-01-23', 1, '2020-01-06 23:59:25', '2020-01-06 23:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `clien`
--

CREATE TABLE `clien` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clien`
--

INSERT INTO `clien` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'telkom', '472448288.png', '2020-01-06 00:35:04', '2020-01-06 00:35:04'),
(2, 'alstom', '463170833.png', '2020-01-06 00:35:19', '2020-01-06 00:35:19'),
(3, 'pln', '704351219.png', '2020-01-06 00:35:38', '2020-01-06 00:35:38'),
(5, 'wkwk', '619915219.png', '2020-01-15 19:06:43', '2020-01-15 19:06:43'),
(8, 'lucen', '301934254.png', '2020-01-20 21:24:40', '2020-01-20 21:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_fields`
--

CREATE TABLE `dynamic_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibilities` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `requerments` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `closing_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lowker`
--

CREATE TABLE `lowker` (
  `id` int(10) UNSIGNED NOT NULL,
  `requerments` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `closing_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lowker`
--

INSERT INTO `lowker` (`id`, `requerments`, `description`, `closing_date`, `created_at`, `updated_at`) VALUES
(2, 'IT SOFTWARE DEVELOPMENT STAFF', '<p><strong>QDC TECHNOLOGIES, PT</strong></p>\r\n\r\n<p>Jakarta Selatan</p>\r\n\r\n<p><strong>Responsibilities:</strong></p>\r\n\r\n<ul>\r\n	<li>Develop and maintain existing Company&rsquo;s built-in programs and database continuously</li>\r\n	<li>Create new Company&rsquo;s program that more efficient and sophisticated than older built-in programs</li>\r\n	<li>Execute programming development under Project Manager and Consultant supervision</li>\r\n	<li>Coordinates with Database Engineer whose maintain and develop the database system together</li>\r\n</ul>\r\n\r\n<p><strong>Requirement:</strong></p>\r\n\r\n<ul>\r\n	<li>Having educational background minimum DIII/S1 at Computer Science, Information System, or Information Technology</li>\r\n	<li>Fresh Graduate welcome to apply</li>\r\n	<li>Male/22-30 years old</li>\r\n	<li>Skill/Knowledge Required :</li>\r\n	<li>Have programming experinces using PHP 7, Javascript, PHP Framework like ZendFramework 3, Codeigniter 3, Laravel 5.8, Bootstrap 4, ExtJS, HTML5.</li>\r\n	<li>Well known about Relational Database like PostgresSQL 11, MySQL 8, or others</li>\r\n	<li>Familiar with IDE programs like NetBeans and Visual Code</li>\r\n	<li>Have a good ability and experiences for data mining and summary using effective and efficient SQL</li>\r\n	<li>Have a good sense of data analysis and statistics</li>\r\n	<li>Have a good knowledge about Enterprise Resource Planning (ERP)</li>\r\n	<li>More preferred if have experienced on Sencha ExtJS and VueJS</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Note: interview will be conducted in South&nbsp; Jakarta.</p>\r\n\r\n<p><strong>If you feel that you meet the qualification above and you&rsquo;re keen in exploring the opportunity, please send your updated resume with &quot;click file on web careers&quot; and or send : recruitment@qdc.co.id</strong></p>\r\n\r\n<p>&nbsp;</p>', '2020-01-16', '2020-01-07 02:18:33', '2020-01-07 02:18:33'),
(3, 'SITE MANAGER POWER PLN', '<p><strong>QDC TECHNOLOGIES, PT</strong></p>\r\n\r\n<p><strong>RESPONSIBILITIES:</strong></p>\r\n\r\n<ul>\r\n	<li>Ensuring the work schedule is in accordance with the plan so that the project target is implemented and confirms the project remains within the specified budget</li>\r\n	<li>Ensuring the project work method is efficient and compliance with the desired quality standards</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>REQUIREMENTS :</strong></p>\r\n\r\n<ul>\r\n	<li>Bacheloor degree Civil Engineering or Electro</li>\r\n	<li>Male max. 40 years old</li>\r\n	<li>5 years experience(s) in Transmision Line and Substation</li>\r\n	<li>Skill/Knowledge : Managarial skill/managerial project</li>\r\n	<li>Office</li>\r\n	<li>ERP System</li>\r\n	<li>Integrity, responsible, honest, highly motivated, challenging, selflessness, not selfish, willingness to learn, good team work, good initiative, innovate and improvise</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>If you feel that you meet the qualification above and you&rsquo;re keen in exploring the opportunity, please send your updated resume with &quot;click file on web careers&quot; and or send : recruitment@qdc.co.id</strong></p>\r\n\r\n<p>&nbsp;</p>', '2020-01-24', '2020-01-07 02:45:39', '2020-01-07 02:45:39'),
(4, 'GM CONSTRUCTIONS', '<p><strong>RESPONSIBILITIES:</strong></p>\r\n\r\n<ul>\r\n	<li>Work performed will typically include a combination of activities and/or behaviors exemplified by the following:</li>\r\n	<li>Plan, direct, coordinate, personnel, activities, and budget concerned with the construction and maintenance of structures, facilities, and systems.</li>\r\n	<li>Participate in the conceptual development of construction of Infrastructur power (Subtation and Transmission line PLN), telecommunication project and oversee its organization, scheduling, and implementation.</li>\r\n	<li>Directly involved in directing and managing project delivery, including defining project scope, labor requirements and schedule, specifying deliverables, estimating and controlling project duration, effort and cost, create detailed project plans and manage change requests.</li>\r\n	<li>Confer with supervisory personnel, owners, contractors, and design professionals to discuss and resolve matters such as work procedures, complaints, and construction problems.</li>\r\n	<li>Schedule the project in logical steps and budget time required to meet deadlines.</li>\r\n	<li>Responsible for deciding on the proper construction techniques as well as scheduling the construction operations into logical and detailed steps.</li>\r\n	<li>In charge of labor related issues, including supervising the hiring and termination of employees.</li>\r\n	<li>Takes care of securing the needed permits and licenses for projects as well as ensures complexes are built to meet safety codes and regulations if their contract includes this responsibility.</li>\r\n	<li>Conduct pre-construction site walks with client, ongoing site walks with client to confirm approval, work directly with senior project manager to insure correct pricing and capture of change orders on a daily basis.</li>\r\n	<li>Handle site inspection and quality control.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>REQUIREMENTS :</strong></p>\r\n\r\n<ul>\r\n	<li>Bacheloor degree Civil Engineering or Electro</li>\r\n	<li>Male max. 45 years old</li>\r\n	<li>10 years experience(s) in power PLN</li>\r\n	<li>Skill/Knowledge : Building and Construction &mdash; Knowledge of materials, methods, and the tools involved in the construction or repair of houses, buildings, or other structures such as highways and roads.</li>\r\n	<li>Design &mdash; Knowledge of design techniques, tools, and principles involved in production of precision technical plans, blueprints, drawings, and models.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Exceptional leadership skills, problem solving abilities and strong capabilities in planning, organizing and progress control;</li>\r\n	<li>Fully skilled in various tools for statistical analysis, management, project planning and time tracking including MS Office and MS Project;</li>\r\n	<li>Strong negotiation skills, ability to delegate, and the ability to work with all levels of an organization, both internally and externally;</li>\r\n	<li>Ability to manage and thrive in a fast-paced, detail and change oriented environment;</li>\r\n	<li>Ability to build consensus within project teams to ensure positive results;</li>\r\n	<li>Creative thinker;</li>\r\n	<li>Detail-oriented with excellent analytical and problem solving skills, including the ability to deal with situations where information is difficult to obtain, complex or ambiguous;</li>\r\n	<li>Proven oral and written communication, presentation and interpersonal skills;</li>\r\n	<li>Demonstrated client relationship and expectations management skills.</li>\r\n	<li>Construction general manager need to be adaptive and have the ability perform effectively in a fast paced work environment.</li>\r\n	<li>They should be able to make quick decisions, even when presented with a number of options.</li>\r\n	<li>They must also have excellent coordination and analytical skills, and be able to solve problems as well as be capable of comprehending engineering, architectural, and other construction diagrams.</li>\r\n	<li>The ability to work professionally and have a good relationship with entrepreneurs, managers, and construction professionals, supervisors, and craft workers is also imperative.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>If you feel that you meet the qualification above and you&rsquo;re keen in exploring the opportunity, please send your updated resume with &quot;click file on web careers&quot; and or send : recruitment@qdc.co.id</strong></p>', '2020-01-24', '2020-01-07 02:46:13', '2020-01-07 02:46:13'),
(5, 'PROJECT SURVEYOR', '<p><strong>QDC TECHNOLOGIES, PT</strong></p>\r\n\r\n<p><strong>RESPONSIBILITES :</strong></p>\r\n\r\n<ul>\r\n	<li>Check the accuracy of survey data, including measurements and calculations performed on location</li>\r\n	<li>Calculate the height (elevations), depths, relative positions, property lines, and other land character</li>\r\n	<li>Able to use theodolite</li>\r\n	<li>Suplay data for tower schedule, longitudinal profile and diagonal profile</li>\r\n	<li>Having good knowledge of topography</li>\r\n	<li>Able to work on setting the subtransmission tower foundation</li>\r\n	<li>Able to operate a total station</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>REQUIREMENTS :</strong></p>\r\n\r\n<ul>\r\n	<li>Male/28-35 years old</li>\r\n	<li>Senior High School</li>\r\n	<li>Have 2 years minimum experience in the same position</li>\r\n	<li>Having experience in the&nbsp;<strong>project transmission line PLN</strong></li>\r\n	<li>Good health &amp; willing to climb tower if needed</li>\r\n	<li>Ready to be replaced at all areas in Indonesia</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Send your CV to our email&nbsp;<a href=\"mailto:recruitment@qdc.co.id\">recruitment@qdc.co.id</a></p>\r\n\r\n<p>Write the subject&nbsp;<strong>&ldquo;Project Surveyor&rdquo;</strong></p>\r\n\r\n<p>Note: interview will be conducted in South&nbsp; Jakarta.</p>\r\n\r\n<p>&nbsp;</p>', '2020-01-24', '2020-01-07 02:48:37', '2020-01-07 02:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `lowker_table`
--

CREATE TABLE `lowker_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` smallint(199) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `closing_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2017_04_11_164000_create_slides_table', 1),
(9, '2019_11_11_043857_create_homes_table', 3),
(14, '2019_12_09_063005_create_dynamic_field', 8),
(15, '2020_01_06_034449_create_lowker_table', 9),
(49, '2014_10_12_000000_create_users_table', 10),
(50, '2014_10_12_100000_create_password_resets_table', 10),
(51, '2017_04_11_165224_create_posts_table', 10),
(52, '2017_04_11_170822_create_categories_table', 10),
(53, '2017_04_11_171014_create_products_table', 10),
(54, '2017_04_14_175737_alter_active_column_to_users_table', 10),
(55, '2019_11_10_091327_create_news_table', 10),
(56, '2019_11_12_030614_create_contact_table', 10),
(57, '2019_11_12_072858_create_slides_table', 10),
(58, '2019_11_18_024350_create_carrer_table', 10),
(59, '2019_11_20_034032_create_clien_table', 10),
(60, '2020_01_07_070647_create_lowker_table', 11),
(61, '2020_01_16_042704_create_capability_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `judul`, `isi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Telecom Infrastructure', '<p>Qdc is in a unique position, possessing the depth of knowledge of technologies, network management issues, telecommunications operations, management and maintenance to provide a fully integrated, multi-technology based solution for both national and international clients. &nbsp;A key skill within Qdc is the proven ability to integrate complex new and existing switching and transmission networks.</p>', '1345976335.jpg', '2020-01-06 00:17:39', '2020-01-06 00:17:39'),
(2, 'PT Qdc Technologies Infrastruktur Telekomunikasi & Infrastruktur Power Di Indonesia', '<p><strong>Qdc Technologies</strong>&nbsp;adalah salah satu perusahan di indonesia yang menjalankan bisnis telekomunikasi berawal sejak&nbsp;july 2003 sampai sekarang ini, sekian lama menjalankan bisnis telekomunikasi perusahaan&nbsp;<strong>Qdc Technologies</strong>&nbsp;ini juga menjalankan bisnis&nbsp;konstruksi&nbsp;<strong>infrastruktur power</strong>&nbsp;beberapa kontrak&nbsp;<strong>infrastruktur power</strong>&nbsp;di Indonesia sudah pernah di kerjakan diantaranya&nbsp;<strong>Gardu Induk di Ciawi</strong>,&nbsp;<strong>Reconductoring SUTT Cengkareng</strong>&nbsp;diantara banyak proyek power sudah pernah di kerjakan itu perusahaan&nbsp;<strong>Qdc Technologies</strong>&nbsp;ini mempersiapkan secara matang untuk proyek-proyek selanjutnya di tahun 2013.</p>\r\n\r\n<p><a href=\"http://www.qdc.co.id/2013/02/persiapan-qdc-dalam-menjawab-kebutuhan-pemangku-kepentingan/\" target=\"_blank\">Persiapan&nbsp;Qdc Dalam Menjawab Kebutuhan Pemangku Kepentingan</a>&nbsp;yang dilaksanakan&nbsp;di lido Sukabumi tanggal 7 sampai 9 Februari 2013 kemaren menjadi nilai tambah untuk menjalankan proyek-proyek selanjutnya di tahun 2013 ini, sesuai keputusan meeting pada saat itu&nbsp;<strong>PT Qdc Technologies</strong>&nbsp;mengambil keputusan bahwa target 2013 ini akan meningkatkan&nbsp;unit usaha baik di telekomunikasi, power, dan managed service dengan memiliki 3 (tiga) anak perusahaan&nbsp;<a href=\"http://www.qdc.co.id/2013/02/pembangkit-listrik-tenaga-mini-hydro/\" target=\"_blank\">pembangkit listrik tenaga air (mini hydro)</a>&nbsp;yang pertama&nbsp;perusahaan tower yang kedua dan multi operator untuk telekomunikasi anak cabang yang ketiga.</p>\r\n\r\n<p>Dengan memiliki beberapa cabang seperti itu&nbsp;<strong>PT Qdc Technologies</strong>&nbsp;akan terus berkembang dan berinovasi di tahun 2013 untuk menjawab kebutuhan pemangku kepentingan di indonesia yang selama ini memeiliki kantor cabang di beberapa kota Indonesia di antaranya Surabaya kota metropolitan nomor dua di Indonesia dan di Medan kota metropolitan nomor tiga di Indonesia dengan adanya kantor-kantor cabang di kota-kota metropolitan diharapkan akan mudah untuk mengerjakan beberapa proyek&nbsp;<strong>telekomunikasi</strong>dan proyek&nbsp;<strong>infrastruktur power</strong>&nbsp;di Indonesia semakin mudah di jangkau dan berkoordinasi.&nbsp;</p>\r\n\r\n<p>Tahun 2013 Qdc Technologies bersiap melayani kebutuhan pemangku kepentingan di tahun 2013 dengan maximal setiap hari dan setiap minggu selalu ada update sumber daya manusia yang di harapkan bisa dan siap di ajak untuk berkembang dan begitu pula dengan kantor pusat di jakarta akan menjadi besar agar bisa menampung seluruh karyawan yang ada di jakarta dengan adanya seperti ini&nbsp;Qdc Technologies bener-bener siap untuk menjalankan beberapa proyek selanjutnya di tahun 2013 baik&nbsp;<strong>Infrastruktur Telekomunikasi</strong>&nbsp;maupun&nbsp;<strong>Infrastruktur Power</strong>.</p>\r\n\r\n<p>&nbsp;</p>', '400221040.jpg', '2020-01-06 00:18:58', '2020-01-06 00:18:58'),
(3, 'TRAINING SERTIFIKASI DRONE (PESAWAT UDARA NIR AWAK)', '<p>PT. QDC Technologies bersama dengan MicroMultiCopter Aero Technology melaksanakan pelatihan untuk sertifikasi pesawat udara nir awak (puna) terhadap karyawan selama empat hari dari Selasa (09/05/2017) hingga Jumat (12/5/2017). Pelatihan ini dilakukan di Gedung QDC Lantai 4 untuk pemberian materi dan di Lapangan Aldiron untuk simulasi penerbangan. Pelatihan ini dijalankan agar para karyawan dapat memiliki keahlian untuk mengoperasikan puna dalam proyek-proyek QDC di lapangan.</p>\r\n\r\n<p>Pelatihan dibuka dengan hari pertama memberi pengenalan dasar puna dari aspek funsgi dan jenisnya. Pada hari kedua diberikan praktik untuk menyusun dan membongkar pasang puna serta standar operasi prosedur. Kedua hari terakhir adalah latihan penerbangan puna di Lapangan Aldiron, Pancoran. Jenis puna keluaran MMC yang digunakan adalah puna&nbsp;<em>power line string&nbsp;</em>untuk menghubungkan kabel antar menara.</p>\r\n\r\n<p>Sumber Gambar&nbsp;<a href=\"http://www.mmcuav.com/wp-content/uploads/2017/01/9.jpg\">http://www.mmcuav.com/wp-content/uploads/2017/01/9.jpg</a></p>\r\n\r\n<p>&nbsp;</p>', '773872279.jpg', '2020-01-06 00:22:50', '2020-01-06 00:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `page` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_one` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_two` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `page`, `section_one`, `section_two`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'PT QDC TECHNOLOGIES', '<p>began operation in July 2003, spawned by the withdraw from Indonesia of a multinational telecommunication company, a group of ex employees formed Qdc Technologies and is now providing high quality telecommunications and power infrastructure services in Indonesia. Capitalizing on business relationships, highly valued and professional staff in addition to extensive knowledge of the Indonesia telecommunications and power infrastructure market developed over many years, Qdc Technologies is uniquely positioned to deliver high quality competitive and flexible products and services to the market.</p>', 1, '2020-01-06 23:42:24', '2020-01-06 23:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `responsibilities` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `requerments` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description|max:500` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `level` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `active`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sulih', 'sulih055@gmail.com', NULL, '$2y$10$o/Y4FLibstamO14FzVN7LOzmVvrNSMq1buXh/Usv7bAYmGDKzyDyO', 1, 0, NULL, '2020-01-06 00:04:21', '2020-01-14 20:24:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capability`
--
ALTER TABLE `capability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrer`
--
ALTER TABLE `carrer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `clien`
--
ALTER TABLE `clien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_fields`
--
ALTER TABLE `dynamic_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lowker`
--
ALTER TABLE `lowker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lowker_table`
--
ALTER TABLE `lowker_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capability`
--
ALTER TABLE `capability`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `carrer`
--
ALTER TABLE `carrer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clien`
--
ALTER TABLE `clien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dynamic_fields`
--
ALTER TABLE `dynamic_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lowker`
--
ALTER TABLE `lowker`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lowker_table`
--
ALTER TABLE `lowker_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
