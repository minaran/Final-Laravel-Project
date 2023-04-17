-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 10:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Šminka', '2023-04-12 17:01:20', '2023-04-12 17:01:20'),
(2, 'Kosa', '2023-04-12 17:01:20', '2023-04-12 17:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_03_26_000000_create_users_table', 1),
(5, '2023_03_26_170602_create_categories_table', 1),
(6, '2023_03_26_192016_create_posts_table', 1),
(7, '2023_04_04_201837_create_tasks_table', 1),
(8, '2023_04_16_222345_add_is_admin_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\User', 6, 'auth_token', '6a32748665bc2f34dd4d84c87af446dd6148c0d8bfdc4a8583a50753a9c550f5', '[\"*\"]', NULL, NULL, '2023-04-15 18:41:50', '2023-04-15 18:41:50'),
(5, 'App\\Models\\User', 5, 'auth_token', '7877c00e77b665b28de19edaa075b9a72e55a23aedda1dcb1025618d440b68b1', '[\"*\"]', '2023-04-16 15:39:10', NULL, '2023-04-16 15:24:13', '2023-04-16 15:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `post_text`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Neobavezna punđa ili svečana frizura – svideće vam se odraz u ogledalu', 'Nega kose podrazumeva i redovno šišanje ili skraćivanje krajeva.\r\n\r\nPored šišanja u našem salonu pružamo usluge feniranja, na ravno ili na talase. Stručnom upotrebom prese ili figara iz našeg salona ponećete ravno peglanu kosu ili lokne koje će izgledati moderno, ali i zdravo, bez oštećenja.\r\n\r\nPokažite nam sliku željene frizure ili se jednostavno prepustite našem stručnom timu frizera – u oba slučaja dopašće vam se ono što vidite u ogledalu.\r\n\r\nŠiške? Na pravom ste mestu. Pomoći ćemo vam da dobijete šiške koje najbolje pristaju vašem licu.\r\n\r\nApsolutni trend sezone su neobavezne punđe (messy buns) i half buns, a u našem salonu možete uraditi i sve vrste svečanih punđi i frizura za venčanja.\r\n\r\nSa posebnim uživanjem radimo frizure za maturu. Maturske frizure bi trebalo da budu drugačije, efektne, elegantne, ali u skladu sa uzrastom mladih devojaka.', 2, 1, '2023-04-12 17:01:20', '2023-04-12 17:01:20'),
(2, 'Profesionalna šminka', 'Pored frizure, obezbedili smo vam i profesionalnu šminku. Tako na jednom mestu možete dobiti frizuru i šminku i uštedeti dragoceno vreme.\r\n\r\nSamo jedan poziv vas deli od savršene kose i frizure. Ukažite nam poverenje i pridružite se dugačkoj listi stalnih klijentkinja koje nam se vraćaju i rado nas preporučuju.', 1, 1, '2023-04-12 17:01:20', '2023-04-12 17:01:20'),
(3, 'Usluge koje pružamo u našem frizerskom salonu', 'Pranje, feniranje, šišanje (sve tehnike)\r\nSvečane frizure za sve prilike\r\nKolorizacija\r\nKlasični pramenovi, balayage, ombre, sombre, skidanje boje, blajhanje…\r\nNadogradnja kose (mikroring-keratin)\r\n100% prirodna kosa i bez oštećenja vaše kose\r\nPletenice\r\nIznajmljivanje prirodnih umetaka\r\nKeratinsko ispravljanje (američki organski keratin)\r\nDubinsko pranje glinom\r\nBotox kose\r\nOlaplex\r\nTretmani oporavka kose\r\nRaw organska kozmetika\r\nPreparati koje koristimo: Matrix, Lisap.', 2, 1, '2023-04-12 17:01:20', '2023-04-12 17:01:20'),
(4, 'Samo zdrava i negovana\r\nkosa je lepa', 'Statistika kaže da preko 90% žena farba kosu ili je izlaže drugim hemijskim tretmanima.  Jaka i zdrava kosa, meka na dodir, koja se presijava i lako pretvara u omiljenu frizuru – to je želja svake žene.\r\n\r\nSigurno ste bezbroj puta na internetu naišli na različite savete o nezi kose. Neke od njih ste možda i isprobali. U najboljem slučaju niste dobili obećani rezultat.\r\n\r\nNa osnovu dugogodišnjeg iskustva naš prijateljski i stručni savet je da negu kose prepustite profesionalnom i iskusnom frizeru. On će sigurno znati šta je najbolje za vašu kosu i upotrebiti preparate za negu kose proverenog brenda koji će joj vratiti sjaj i nakon dugogodišnjeg farbanja i tretiranja.', 2, 1, '2023-04-12 17:01:20', '2023-04-12 17:01:20'),
(5, 'Profesionalna šminka, sve što treba da znate...', 'Profesionalni brendovi šminke, osmišljeni su tako da ih šminkeri koriste za fotografije, modne piste, venčanja, filmove, TV emisije i druge svečane prilike. Pre svega kvalitetni proizvodi moraju biti izdržljivi pod jakim scenskim i fotografskim osvetljenjem, udobni za nošenje, jednostavni za upotrebu i da daju dobru pokrivenost, bez da izgledaju teško. Izbor naših marki osigurava zadovoljstvo naših klijenata.', 1, 1, '2023-04-12 17:01:21', '2023-04-12 17:01:21'),
(6, 'Profesionalno šminkanje: korak po korak', 'Šminka je najbolji lek da popravite raspoloženje. Ponekad je dovoljno da nanesete omiljeni crveni ruž na usne i loše vreme će imati neku drugačiju notu, a dan biti obojen i bar malo popravljen.\r\n\r\nProfesionalno šminkanje kod kuće nije neizvodljivo! Slažemo se da su profesionalni šminkeri majstori svog zanata, ali uz vežbu, omiljene proizvode i dobru volju, lako ćeš pretvoriti svoje lice u malo remek delo u našoj školi šminkanja.', 1, 1, '2023-04-12 17:01:21', '2023-04-12 17:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `excerpt`, `body`, `slug`, `category_id`, `user_id`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Sve što ti treba za savršen ,,makeup look” je kvalitetna šminka', 'Svaka žena voli da u svom neseseru ima kvalitetnu šminku i da joj ruž ili maskara budu pri ruci u svakom trenutku', 'Mnoge među nama su u dilemi za koji brend se opredeliti, budući da nam tržište uvek iznova iznedri neku novu i manje poznatu šminku. Na kraju krajeva, uglavnom se opredelimo za one proverene proizvode, koje su nam uglavnom preporučile prijateljice.\r\n\r\nBez obzira na brend, činjenica je da nam je dovoljno svega nekoliko proizvoda i par minuta da bismo našem licu dale glamurozan sjaj, posebno tokom ovih prazničnih dana. Stoga ostanite sa nama u nastavku i saznajte koji brend spada među najpopularniji na tržištu šminke, i koje proizvode izdvajamo za vaš specijalan vizuelni izgled.', 'kvalitetna-sminka', 1, 1, NULL, '2023-04-12 17:07:42', '2023-04-16 19:25:12'),
(2, 'Najmodernija šminka za svečane prilike ovog proleća', 'Osim izbora odeće i obuće,  bitan je i izbor šminke i frizure. Ovo je najmodernija šminka za svećane prilike ovog proleća!', 'Najmodernija šminka za svečane prilike ovog proleća\r\nBlistava koža\r\nTrend blistave kože je jedan od najpopularnijih u svetu, a pojavio se kao jedan od trendova sa TikToka. Kako biste postigli efekat sjajne i blistave kože, potrebne su vam kremaste teksture poput tečnog rumenila i korektora. Uz blistavi izgled kože ne kombinuje se jaka i svetlucava šminka jer se koža već sija, ali zato ajlajner i maskara mogu učiniti da izgledate besprekorno!', 'najmodernija-sminka', 1, 1, NULL, '2023-04-12 17:07:42', '2023-04-12 17:07:42'),
(3, 'Kako do lepe i zdrave kose', 'Koja je tajna zdrave kose? – Duboka hidratacija', 'Skoro svako godišnje doba nam donosi novitete kada je kosa u pitanju. Duga, kratka, ravna, talasasta… Sve su to promene kojima se prepuštamo, kako bismo bile u korak sa trendovima. Ali, ono što se nikada ne menja i čemu žene uvek teže jeste – zdrava kosa! Koliko puta ti se desilo da vidiš devojku sa prelepom, sjajnom i bujnom kosom? I zapitala se koja je tajna njene zdrave kose?! Ali, šta tačno podrazumeva zdrava kosa? Odgovor je jednostavan, zdrava kosa je hidrirana kosa.\r\nZašto je hidratacija važna?\r\nKako bi naš organizam pravilno funkcionisao, potrebno je da dostignemo određeni stepen hidratacije. To možemo da postignemo unošenjem dovoljne količine tečnosti (čuvene 2l vode dnevno), konzumiranjem zdravih namirnica i otklanjanjem svih štetnih navika. Upravo to je osnova dobre hidratacije, jer se unutrašnje stanje našeg organizma odražava na naš izgled. Ipak, to je samo početak. Za zdrav izgled kože i kose, potrebno je da u svakodnevnu rutinu nege uvrstiš proizvode za hidrataciju. Kada je koža u pitanju, verujemo da nemaš mnogo nedoumica, jer je upotreba krema i losiona namenjenih ovoj vrsti problema vrlo jednostvana. Situacija sa kosom je ipak malo složenija. Često nismo sigurne na koji način treba da negujemo oštećenu kosu i koje preparate da koristimo. Kako je kosa znatno više izložena negativnim uticajima (raznim tretmanima poput ispravljanja i farbanja), vrlo brzo postaje suva i pre svega dehidrirana. Zato je važno da znaš koje tačno korake treba da preduzmeš kako bi imala kosu kakvu si oduvek želela.', 'kako-do-lepe-zdrave-kose', 2, 1, NULL, '2023-04-12 17:08:48', '2023-04-12 17:08:48'),
(4, 'Novi trendovi u šišanju i oblikovanju frizura', 'Frizure za svaku dužinu kose koje će biti moderne u 2023.', 'Frizure za svaku dužinu kose\r\n„Italijansko“ šišanje\r\nKarakteristike ove frizure su šiške i kraća kosa na temenu i dugi bočni pramenovi. Šišanje izgleda hladno i na ravnoj i na talasastoj kosi, daje lakoću celokupnom looku. Ako volite da budete u centru pažnje, možete dodati i svetle akcente: napravite ombre ili brond, a oblikujte šiške tako da odgovaraju vašem tipu lica.\r\n\r\nLegendarna ženska bob frizura već dugi niz godina nije izgubila svoju relevantnost. Kare 2023. se ogleda u lakoći i nemarnosti, tako da će bob za srednju kosu bez šiški biti megatrend ove sezone. Može biti klasična u jednoj dužini ili višeslojna. Ovde možete igrati sa opcijama i izabrati onu koja vam odgovara, na primer, prema obliku lica ili obrnuto, zaokružujući siluetu.', 'novi-trendovi', 2, 1, NULL, '2023-04-12 17:08:48', '2023-04-12 17:08:48'),
(5, 'Nega kose posle farbanja', 'Saznaj više o nezi kose posle farbanja', 'Farbala si svoju kosu, ali sada nisi sigurna koji je najbolji način da je neguješ i održavaš zdravom? Odmah želimo da ti kažemo da je svaka kosa jedinstvena, ali i da sve kose imaju jednu zajedničku stvar – keratin.\r\n\r\nKada dođe do gubljenja keratina u kosi, usled česte upotrebe prese, jakog sunca ili nestručne upotrebe farbe ili blanša, kosa gubi kerain i puca.\r\n\r\nKako bi tvoja kosa ostala jaka i hidrirana, bez ispucalih i suvih krajeva nakon farbanja, pročitaj naše savete.\r\n\r\nSve što treba da znaš o nezi kose nakon kolorizacije sada je na jednom mestu.\r\n\r\nKoje su prednosti Olaplex tretmana\r\nKako keratin može preporoditi suvu i oštećenu kosu\r\nSaveti za dugotrajno održavanje boje nakon farbanja', 'nega-kose-posle-farbanja', 2, 1, NULL, '2023-04-12 17:11:45', '2023-04-12 17:11:45'),
(6, 'Olaplex tretman kose', 'Olaplex tretman – junak našeg doba', 'Olaplex tretman – junak našeg doba\r\nOlaplex tretman je poželjno raditi i pre kolorizacije jer će dodatno zaštiti dlaku i ojačati je. Ovo je vrlo bitno jer pre svakog sledećeg farbanja korteks dlake treba regenerisati i povratiti mu prirodnu snagu.\r\n\r\nUkoliko si nakon farbanja kose primetila da ti je dlaka tanka, a kosa izgubila volumen, savetujemo ti dubinsku regeneraciju Olaplex tretmanom:\r\n\r\nobnavlja pokidane veze u dlaci\r\nhrani i obnavlja strukturu dlake\r\nštiti od visokih temepratura\r\n \r\nKosa će biti nahranjena i zaštićena od pucanja, a to ćeš i sama primetiti jer će biti sjajna, gušća i svilenkasta na dodir.', 'olaplex-tretman-kose', 2, 1, NULL, '2023-04-12 17:11:45', '2023-04-12 17:11:45'),
(7, 'Ovo ce biti 7 članak u našem blogu u kategoriji šminka, up date samo korisnik koji je objavio', 'Postojane i veoma kvalitetne senke za oči', 'Zanimljivo je da su Essence senke za oci među najtraženijim proizvodom ovog brenda, a njihova postojanost, kvalitet i širok dijapazon boja svakako opravdavaju ovu veliku zainteresovanost devojaka za iste. Inače su veoma popularne Essence Soft Touch Shadow, jer se mogu naneti samostalno ili u kombinaciji sa drugom nijansom radi postizanja ekstravagantnog stila. Daju vam dve mogućnosti – da ih nosite tokom dana ili noći, što ih čini veoma poželjnim.', 'senke-za-oci', 1, 1, NULL, '2023-04-12 21:12:41', '2023-04-16 19:57:24'),
(10, 'Ovaj Task br 10, je UpDate od strane korisnika koji ga je pisao apitest@test.com apitest123', 'Neki kratak tekst', 'Bice neki tekst o šminkanju', 'novi-post-10', 1, 5, NULL, '2023-04-16 14:00:37', '2023-04-16 15:30:03'),
(11, 'Bice ovaj tekst broj 11, up date je moguc samo za kreatora taska', 'Tekst broj 11', 'Bice neki tekst o sminkanju', 'tekst-11', 1, 5, NULL, '2023-04-16 19:40:44', '2023-04-16 19:55:15'),
(12, 'Kreiran je task broj 12', 'Samo ulogovani korisnik moze da uredjuje i brise', 'Kreirani task 12 je za testiranje i samo ulogovani korisnik moze update i delete, onaj koji ga je kreirao', 'test-delite-update', 1, 5, NULL, '2023-04-16 19:54:22', '2023-04-17 18:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Mina', 'mina@test.com', NULL, '$2y$10$xsG0Pnh5n6xUQCtEfghCKOn.MTf9VAEHyivMy.ajCfQooBxtnnKge', NULL, '2023-04-12 13:57:17', '2023-04-12 13:57:17', 1),
(3, 'Miles Lind', 'dschmidt@example.net', '2023-04-12 17:01:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ytkXsaBwHV', '2023-04-12 17:01:20', '2023-04-12 17:01:20', 0),
(5, 'Apitest', 'apitest@gmail.com', NULL, '$2y$10$ml2osCbGd7AxT2.9CNr/0O.Jh418dXwxL3DYieoo2xUsz6id7vEvS', NULL, '2023-04-15 18:34:46', '2023-04-17 18:21:20', 0),
(6, 'testapi', 'testapi@gmail.com', NULL, '$2y$10$R0kZPgIbYkAwqrUumNFlLeqbF4eAQ11h/hc8NZff5Bf.oDc.k.MHi', NULL, '2023-04-15 18:41:50', '2023-04-15 18:41:50', 0),
(7, 'Waldo Parker', 'malvina05@example.net', '2023-04-16 20:31:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZPi29s4sAq', '2023-04-16 20:31:42', '2023-04-16 20:31:42', 0),
(9, 'Milan Hickle', 'thills@example.net', '2023-04-16 20:31:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MtDqp1UxeA', '2023-04-16 20:31:42', '2023-04-16 20:31:42', 0),
(10, 'Elton Stamm', 'melisa71@example.com', '2023-04-16 20:34:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OA3b9WGY4d', '2023-04-16 20:34:05', '2023-04-16 20:34:05', 0),
(19, 'Renee Jerde', 'lora.vonrueden@example.net', '2023-04-16 20:44:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'viUaXoTrmJ', '2023-04-16 20:44:39', '2023-04-16 20:44:39', 0),
(20, 'Admin', 'admin@admin.com', NULL, '$2y$10$TsYqXCtidwq/tyWe79oBAu2styet5FknozG5U.bzWOM.PSsRYt1rK', NULL, '2023-04-17 08:56:35', '2023-04-17 08:56:35', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tasks_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
