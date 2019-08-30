/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.3.16-MariaDB : Database - bdproyect
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bdproyect` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bdproyect`;

/*Table structure for table `canales` */

DROP TABLE IF EXISTS `canales`;

CREATE TABLE `canales` (
  `Id_Canal` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `Descripcion` longtext DEFAULT NULL,
  `Imagen` blob DEFAULT NULL,
  PRIMARY KEY (`Id_Canal`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `canales` */

insert  into `canales`(`Id_Canal`,`Nombre`,`Descripcion`,`Imagen`) values 
(1,'Cafe','Para tomar cafe',NULL),
(2,'Futbolin','Para jugar al futbolin',NULL),
(3,'Ping-Pong','Para jugar al ping-pong',NULL),
(4,'Fumar','Para fumar',NULL),
(5,'PHP','Cursado PHP',NULL),
(6,'Java','Cursado Java',NULL);

/*Table structure for table `conversa` */

DROP TABLE IF EXISTS `conversa`;

CREATE TABLE `conversa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Us` int(11) DEFAULT NULL,
  `Id_Canal` int(11) DEFAULT NULL,
  `Mensaje` longtext DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Us` (`Id_Us`),
  KEY `Id_Canal` (`Id_Canal`),
  CONSTRAINT `conversa_ibfk_1` FOREIGN KEY (`Id_Us`) REFERENCES `usuarios` (`Id_Us`),
  CONSTRAINT `conversa_ibfk_2` FOREIGN KEY (`Id_Canal`) REFERENCES `canales` (`Id_Canal`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8;

/*Data for the table `conversa` */

insert  into `conversa`(`Id`,`Id_Us`,`Id_Canal`,`Mensaje`,`Fecha`) values 
(99,1,1,'aaaaa','2019-08-30 10:19:37'),
(100,1,6,'buenas','2019-08-30 11:59:50'),
(101,1,4,'hola','2019-08-30 12:35:21'),
(102,1,2,'Prueba','2019-08-30 12:40:18'),
(103,1,3,'Prueba2','2019-08-30 12:41:08'),
(104,1,5,'php','2019-08-30 13:32:11'),
(105,1,4,'fumar','2019-08-30 13:32:49'),
(106,1,6,'java','2019-08-30 13:36:03'),
(107,1,3,'ping-pong','2019-08-30 13:37:05');

/*Table structure for table `migration_versions` */

DROP TABLE IF EXISTS `migration_versions`;

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migration_versions` */

/*Table structure for table `u_c` */

DROP TABLE IF EXISTS `u_c`;

CREATE TABLE `u_c` (
  `Id_Us` int(11) DEFAULT NULL,
  `Id_Canal` int(11) DEFAULT NULL,
  `Id_UC` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Inscripcion` datetime DEFAULT NULL,
  PRIMARY KEY (`Id_UC`),
  UNIQUE KEY `unique` (`Id_Us`,`Id_Canal`),
  KEY `us` (`Id_Us`),
  KEY `ca` (`Id_Canal`),
  CONSTRAINT `ca-pk` FOREIGN KEY (`Id_Canal`) REFERENCES `canales` (`Id_Canal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `us-pk` FOREIGN KEY (`Id_Us`) REFERENCES `usuarios` (`Id_Us`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

/*Data for the table `u_c` */

insert  into `u_c`(`Id_Us`,`Id_Canal`,`Id_UC`,`Fecha_Inscripcion`) values 
(1,6,17,NULL),
(1,5,24,NULL),
(1,4,25,NULL),
(2,6,26,NULL),
(1,3,28,NULL),
(1,2,29,NULL),
(1,1,30,NULL);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `Id_Us` int(11) NOT NULL AUTO_INCREMENT,
  `Correo` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Puesto` varchar(100) DEFAULT NULL,
  `Conocimientos` longtext DEFAULT NULL,
  `Aficiones` longtext DEFAULT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  `Fecha_Nac` date DEFAULT NULL,
  `Fecha_Ult_Con` datetime DEFAULT NULL,
  `foto_archivo` blob DEFAULT NULL,
  PRIMARY KEY (`Id_Us`),
  UNIQUE KEY `idx_usu_correo` (`Correo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`Id_Us`,`Correo`,`Password`,`Nombre`,`Apellidos`,`Puesto`,`Conocimientos`,`Aficiones`,`Foto`,`Fecha_Nac`,`Fecha_Ult_Con`,`foto_archivo`) values 
(1,'alan@mail.com','$2y$13$TGA2FnaqkBpNsAu8jxHFl.zy0I8.G1iadX5poYkoVWe1XXAWDt7dy','Sandra','Bel','Recursos Humanos','basket php java html','futbol','https://www.okchicas.com/wp-content/uploads/2018/01/Poses-para-una-buena-foto-de-perfil-1-1.jpg','2019-08-07',NULL,'ÿØÿà\0JFIF\0\0d\0d\0\0ÿÛ\0C\0				\r\r\n\Z!\'\"#%%%),($+!$%$ÿÛ\0C				$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ÿÀ\0,\0æ\"\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0ÿÄ\0C\0\0\0\0\0!1A\"Qaq‘#2B¡Ñ3R±bÁÒ$Sr‚’á%46C²ñÿÄ\0\0\0\0\0\0\0\0\0\0\0\0\0\0ÿÄ\0+\0\0\0\0\0\0\0\0!1AQ\"aq2$4B#ÿÚ\0\0\0?\0ŸeYBî°¼‘Œ£+(F€1”eeÂFVPŒ 1”eeÂFVPŒ 1”eeÂð2Œ¬¡^\0ÆQ•”#ÀÊ2²„aŒ£+(FÊ2²„aŒ£+(F€1”eeÂð2…”#À„ B\0„!\0B\0„!\0Xè£IÚŸ‡ƒ¢ï›UW1ïêz(kW…%™¼S£*DhêˆXC]4m\'¡pTÛ´KýÜ¼ÉRÛu7òG±ù•¸]›#ü5?s¬ïú¬Šœf+hG&>&½Ï¦ßYM´>xÚO›‚êÇM ƒÔ/%ÔñmTˆ\"¯”Ä\\Aq;Ž_æº³´®\'Ô#†û<>\0Ð\0	ãOþ¢I>·¶G¬P¼ÓhíÏ‹ìî\Zc¸BzÌìBµ¸K¶žâw2žW›ucˆÔçgG+ôx•*›t)Ö°«Ot²XX€AÁ‚²¯§Ê8ÃÀ!N„ B\0„ B\0„ B\0„ B@–ãr¤´ÑÉY[;!‚1’ç›…}=²’Jª©\"ŒdŸ?Aêª^!¼OÄµ}õg‚–3÷TÀøZ:æV}íò·Xî]´³•}ñ±Ûˆ¸îåÄðÛ%ºÛ’;ÑüYGùªu=&¶QÆj\'?›;æIOS½ÕG¹ˆ–BÝÏ@}Ó=`‹CÛ„qâó>s«Î¬µM*P¦´ÅsÌÃ#[$•“œi§‡f3Ý3\\e”>Öãf´lž6E[Oxã»Ž9tß[\rdÌ,ÌC9ÙƒWÔ¨IpßDCžNy³o™úZÒIå„ëQh›[c~î;ç“ß\rðÔŸÿ\0ˆh†œ;ä…$#§!’Ó]#[ðÎ¦´þR7	]m™“=+{§sÐz%pÛ¾\nyï:]ÐP›ªî5uYŽf¼œg §&5¬\0í†ñÂR¶†æd®·4àÆó™\"m\'ú/CØx†ÙÄ¶öWÚê™Q‡Nm>Dt+É2¾žïxÀ\"œsi_ñe×‚îª ”·K‡{†AäGù­+N#:/L·E+›ÕZ–Ìõê‚øÊßÆ––WQ<6@14$ø¢w—².šHÔJq{)¸KL–à„!H0„ B\0„ B\0„ B\0¯{ci{ˆ\rnäžl¢\\|T‚Ý‹f¨2?+kšêŒÙ=½Vj¹ã\"}ò¼Gq¥Úboóž®)Š¢-$¸ã©õóCNU\0g?vÑäZ©Dâ¢?Žó+ŒiU›”ûM:jœT\"\'ª˜ÃJâdÑsÏc2£A·;üÝÕ¶ŽZ–7f5­ÏÌ©½“…*xÚæ)cmG3¼OuyX¸2ßb¥l”ì œnïr©U¸Òð·4í¬œÖ©u·ögÆÕe¢j1NÜë~?¢™PöKq¬d¢å*ôŽÝ\0—OcH=ÙÀÛe]Ö›è_…­8”e7d3¶¡Î”r;yK©¸”-{]<\\ñÈ+àØâ\\GÍ\"ª¶h\Zó°;!U—q²·b‹½v{¬½Ñ´AÝÃ${*‹Š8^¶ÑTâè	ù›È¯^VRç8ÆÒ6ú…¿ð•Á¯„4`d§Âå¦CRÎ2G“£{¡=® ‚œ\'”U1’´}á56ã^Ì*h$}MÞD2tãu_À×Ã9À‡\r°z+±ššÊ2ªRt¥‰t$œÆ|}†¾™Ît.!³EžÞ£Ýz¾Õs¦¼[©îŽ×ìiÿ\0/’ñƒ[¨ã–ùöW_`œfc–^\Z«~\Zÿ\0¼¦Ôy;«VÏ»åÏ—.ŒÌâVŠ¤y‘ê‹½BéÎp„%„ B\0„ B\0…„‚\ZTNÊX$žS†DÒ÷@©ËµÁ÷ŠÊ‹„ñJpÆÊÞƒè§ütøKKi#\'½ªvŸùzªêhþ^¬i‰šœOªæxÍÆf©.ÝN‡…ÐJÇÔC=SY#chÈ‰¹v:•ÌSÍ4PPÒ·Uu|º<ÉëìKdcë¤– ìÇ»\0žªÁìŽÆ.¼MYw‘™†„|5>y~b°ªKLM»zzäYÜÂTÜ/e†Ž!—4\roÆïRT°·aŒ’·…ƒHê”1™ ã’ÎŠÎæÃ–•„sî›uy-€i-Èç²î[¿–VÂz•2DZ˜œÄÐp@$µ\rù%rd;}Òi‰9pšÒ&‹cM]30@L•01ÅãhÜ•$ª`k2â>i–hüdt=<ÔmÉ½Ð¶V½šF1œ¯?ö‹Ãîµ\\YZZ÷D\r²½+t§ÉpÆGôPN%´Cq¥š)ckÛ‚#’’”ôKb¥Å%Q`óÃ‰l­\'ðôN–›ŒÖ›•%Â‡Ã#^ç±Io–÷Ûj;§IäW\ZGkaa;óÊÒß*hÈKþ${.Ít‚õk¥¸S¸:9ãyõTµU_~>ÁSk–MRRI© žM?÷Všílë*´£#’»¥ÊªàB¢¸!@„\0!@„\0,”†÷qmª×QVãŽí„~‰•&¡\'Øu89ÉEw+®2»\nî$15ÙŠ<±ÍBxªâYo—Cª¡ÚAò2ÝQUSPâ\\ù§ß<Ó5þVÕ\\©(£ppi‹ƒ­W™7?\'eNš„TbCjÓk²»#LD·=\\y+ë²«Ø|)C™÷²3¾‘ÝK¾êƒ:«ïVÛ+2A|}ç¹<¾zn\nêk]’2(Ø1¹òè‰v5lâ”r=Ä	;\0”Eº‹1¥{ƒYÚ?›Ju·qîsœÌõp\0(ajƒÆ“·\\Þümä•±Ñ=™dxó\'• äõS$CdLñ©Ày®sEÈ¥o‰¤ô[N¥ mž©ºr‰Tðð2W´éå”Ó,©ßª‘V:&³2=­©ÙE®7º‹˜mÍ1¢Mhm¯hÉl¨­Ö\0ìŒsO57ê\'çÆO™<“%Ê¢9 äçÍ7H¤{N¡lR²F7óeC\"kšÍXÆ7V/i¦,8ã<”†HˆÀÆŸ=Ö…˜#\Zåb®I×cwÿ\0±¸Öž\'?Líîÿ\0OÕzc—5ã;u[íÕpT0‘%<áÞÇ+Ø‹ƒ.ÖªJè÷dñ5ãæKÁ*åJ›0xÅ<8ÔBÄ!|Å!\0B€!\0B€ífíð¶¨hÚw‘ÆG`ô÷SÅGöÃv3]ªX×xah‡ž0VG­Ë·Ç“S„Ñ×[/±¦«2HÇiÞGoÉs²»ãø†J—8÷q79òMŸÜRÔ=®\'\r„¦Ö~†ëë‰Ä³í¾Ë‘ÆÓ´‰fr:ñÇPÕœJLÏ”7•£\0/IÛì”óŸ‹¹b¢sÈ8øc@/=ÿ\0fûyžõU\\ö’ØbÀÛ–UÚ7Vpý®£kšÆ’ÉòUZ‹3Áz‹Ñ\rË1µÖ›{™ôÑ3<²JËÏÖ—Ff¦y=X@!S1p-ÖéÂ_Þký}C¤¬xîhi^C\"ißSÏS·$ÓÃ¼9Kxâº›eUf\"s\Z+éÞîì¹ÍÉ®êÇ\nÌmž\n’¾JxÁ|Ð	)$k)ç|‘yœ);ËÇñ]Ør²W›-Ìk•›Ç3†Qæ<¢žÛfs™ã òP5Ž¥Å5(å\n¦Œ°`çÍ4Ünm¥¤ŽYèSÒ²6E«È*¾®òë•íÔ1<–°åØ<ÒegHè~¹b»-Uæwb­ñ3Ÿ<’WMÂVx©ñ –gãw½Ää¦»•eKjo·SMSY&ÑÒÓÿ\0þ®wåoª¯ø»‰x²Ã).´±	þ+œÎø–kå•$hÊKb*—0¦ýÄîùÂ–ù\"!”í\r<ËN\n­nôu;90Èé¨\\|Q¸åÌõ\\ÿ\0ñ6óid#ˆ)&Ù•\r:£qòÏBºMÄt·¶1Áì‘¹8QNˆèÖ…E±í¡“ÒFæn	5µeó4én0T—ŒáÑC£s¥û{(¥¦RÉšÜâÛÝ[·ýû½æv¨gu;›¤g$/Hv!wûO‚£Î.’ŽGBsåÌ/=\\iÜÄ¨qÏ!Z?ÙêéÜÜî×dwÑ	š3¶AÁZ|2®‹…òPâù”;ª·D.ÀåBQAB\0„ B@0H\0“ÈnW™»A­5W)eÉ=ýSÎþ@ì½v›áí•Rç\ZbqÏÉy‡‹OûH`nt³?3Õs\\~¦ðÐpHm)‘Ú—²±€à½ä”¶î÷Rpå%6w‘ÅçÙ6LL®…€c\'OÌ”«Š&3WÁFÎP±¬\0y¬²Ñ¹.Œôöi±2Ÿ„å¯•›Ô¿Ã·@­\ZÎ£º™Dñ1ípÆÝ”²êká[}\0gwu{‘’§Qø@\ZU¿s5qC©x´0IMESU».‹Ys3žƒ¢í\nÜ¨\'SÊc#8$\r”Ö&àeu{u³uf%Œ¥¹jh‰QØêPÚª™¤¨˜A{¹|“Ö³ËŒ“žISƒXqŒ$5GÅ¤¸ôPÍ–\"“cmö³»¤~O!•à`Í3ñ‰2ŽúJ™q(/¢qh>6ãÙAxmýÅsŽy;$(á,2J‘Û°lVê®ª¨’‘´Õ=ó‹Ÿ4 ÷»ôÔ{Ú/R\\®M­ž’ªHDæ¤BÙ]ÝµäsÒ6*Ó¥™ßÇnF‘Í%¯Ž9ÈÈôW#UÁaªZÂ£Ì‘Bß©§¹ZÝlešw@I%Óá ä9¨×p…m¾¥±JAkwÛú+ÖãmÙ=ÛQêš^à—†5¤AA:òžÌt(FŸDS Ðˆ!cuZÐÈa~°2Xðp­.Õ*€È8Ê©byvüÕ›lé)^¬I’>F‡âÈó\nSÙ-ßìž7¶—ä6rèÏÿ\0Åª¨.™¤mnS…¢©Ôw\n:¦¸Žæv??5fœ´TR Ó®ÁìŽD…•Ê–aQKÍ9lŒkóÈ]WujIœd–<„áB\0„ X@\r|O!ŽÅV[¹,ÇÕy“‰ä­©ÆZâðÌt^”ã;»ûàæ«¼¢¢¥ÙÎîs‚ä8ä¿÷KÂ:Ž\rQ,c¡Œ>ï]øZàWXcûKŒ ŸyTÑòÔµ²Žúð#$eß„¼|qmÕÖ­¿ÕfwF—Uý=¥ÃQ¶\ZV3À\0|”’7eã|ôL6PÙ>D0	ÎoVÍ¹/j£ÒFE}1°\\#pn2wê´uOzý\0€êXE7ÙµLruz$.ˆÊþóI.ä\0Y¸ºX¡t°0HöšSUºåvïd5”Ñ±ƒvI²=ˆQ½Ùbj9F×ªW¶-Û–UQRm|DÜ´÷O$ä§\\gÆÔöêc,²x†À4d¸ãUuôñ\0¨¬žšZfŒ†¶_Äï`š×ømn]¶Éœú&r4Œ‹ià.>êötùêx^˜Õ´¶PÒ0îxÎÙN5N1êÆAè„‚Oa®µáŒ …_¦k[#°ÆøR{”äÆçd…\0âšý4Òø±º¡Îi7#S[ ;` àeØSïÔw÷Gï°)ª‚ÓT4æV¥ˆ#íæ£^\rã’=°Ð0–ñ	o“A\\^&°óÁ)|gQk@·ôKQãq´zž¨ìþ´\\86Ó8f­9ó)\n€v%Ré¸&(Î^Î{ã*|»[ë¡|ä4V”L¡VÊÀ„!\0B\0°y,¡~Ñ%t<5;›Ï—è¼áqv\'ç\Z#\Z½Êô\'jòw|%)Á/\0/9\\§ø‡jÉv–ýÆÙHêøOúëìEÃÄý²ÖŽ¡ÝpºÙ^hø®Šc°eSIÿ\0©$²I¢âÙ:‚\'£wÇÊöd“#1×+5þØø4)¼Çú{RÊàúXßÐ´a=°á¸<Š‹p-[k¸v‚ ÷µß¢“7–3ºÍofÚÞåW\\csaˆHî@tõ]©£|-Gò´Ž˜S™*ây8Ï¢i¸ñm¦Šsõl2´AÃS¾HÈÕ»Ò‡Þñ®v3WGGbÝ£~žjxòGJØ©h\\sœxIÊ_GÅU•\rsŸA;Ìg3²|:\r-™›ç	RLÓVøp:€=j‹‡)é§t¯‰®”ï’íO\ZšÈ4ˆKËÆ>©’¯‹¨Úý2‡FGæ‘ åÍ\"Sd¬ÏlOÀÕåÑ-¸9®iÁ\n!m»ÁS#]í;‘	õõNylnæá„ÔÄ‹ÃÃ.’å²1¸VÜVòè¥$àaO/sà}Åò†RJH4” “Æå|v«”ÞŽÂ_ÃôÚ»Éˆü8÷)®¦Vš©$üNÔv)âÄ÷ElÄl÷ãè¬Wµ#r÷6ûˆ	ÍFÛ”ª¸|:±|tH#—Tä» \0p–ÊòÑ\0Îú6ôIQe`J]r^}‚Ôë¡¸Á@sdc;’¶ØUp§½ËNNÓÄZ¨Ý^«©àµ5[%àç8´4Ü?BµÌÐB€!\0GT#8H¶?Êÿ\0)YýWškdðÊ}—¥ûdÿ\0Øõ$ŽR3ú¯0\\÷dÿ\03—!ÅãþSúGSÂÞ-BÏŸŠ½\\?ªÒSEñÁäãX-Üu*afj˜<Þòœ¸8~\"®ë.£Ä\nKØ^]ˆßYW`u¹ïý¦\'N…Zß^Ià^7g	qÜn’BÚ*áÜËäŠõU¾¹•0µì!Àˆ*•Hiiš–õuGOt;Ä­ÒFÊÅœCržœˆëéÜ\\Ù\Z7*]„…ÑÇP;&\'Ç&â÷#6~$ÆÓCUm…ÝÓÉ|ÌhÎ1Ðy©7XÛšš`sÉ.k£H*lðÎç= 5Þ}ÒZ›nXcÁ¤üsôSBo}ÇN…¼÷ÝÍÿ\0†]f|oîpæ¸Ýï¾UkÄWž¹Tö½Ð‡K\\ÝŽ½ºš“ÖZ\\ðKÆ`Ó,–xéË\\ì—´çÑ.·Ür·£r“dW€x.åIt7\n›—wž\\Ú`Í±Ð+*xc†]`êóMtÑ˜~õÇè3Ñnû‹]ÆrT{ŒrÔÆKóüNÓË*¥í\"¿ámÓíÈÀVMê³Cç;\0dª´ËØ¨•´Œ\'$êruë•æ¡M²I/\'ÕI)ä4Ö†?‰ýq£[Àó*CqGm†=CNq€µ›ÁÏ­÷ã?x}p–jkß9Ù® :¢›s“±]¢š†4`àýS\Z$bv[WðÜMm“^°×q…émú¯(ð|ýÍl/ï4ˆÞ}œªá{d…i$9 ‚z­Þ=§\'ÃÝ›¡]„B\0„!\0ÆP°P¶‡èàj€7Õ+ê¼¿rvìåzc·4ðƒ#gÔ5y–½âI†94ar\\Uÿ\0”þŽ£‡íkýXpóÂ–ÑÔµÐò-”záDìù×Áþ&øOv©Úê™©Ÿ±k‰k¢ß&¥.‰\r·ç?¼lc”Õzw³n\'›ìêX¦q{]HwÉyºÿ\0CgŒ“«—5sö_VÙ,¶ÉyýØi÷PUÞ,ÑZj2ÿ\0¤¬ŽV8î—°êëòPø,	©Ü\\Â7iè}½®îÉœ\Zò¹x•bßQù˜ÛÍlèXðvÙ\'ìV¿Õnû„m\ZZõRÇRŒ³°–©±áØn1²ÔÂÐçr)ÞáRéLn\rÇU\ZºÜã…¯É#r™\"u„uµ,à²˜ª®mˆŸßÉ2_8¡ÚœÖ;\'ª„ß8¬ÑÆâ^_1äÆžI™Ë\ZO¨åÆüS\r¾’G÷€¸Œ5 ó*ˆ¹UË[Vùå9{ŽSõÖjË´æz‚I\'aÐ(õcr–žŠý²KìÎ¿Î>Tí×;Gª_q›Tp0MÉ÷ÊIHÀ\\÷ÊÂBÖI›¾§ÔÌ‹ØÃã]iÎ*OžRu´oÒöœòJ$ä–ÐîîyKN\0x\\¯Tðh¸pÝº£ ê œùl¼¥jwy<¯åï…éÉ+E_ÓÇ‘˜èð:n¯pJšn|¢¿†ª\n^4Bºã˜!\0B€‚²°N@*ÎßêÄ?E\':Rì{ç	­Ù<Ê¹¿´Eá²Ýimíqû˜òFz•L—Ç_IJâR:»Xi¡Žv·˜œ¹Ü¼—ktú.ò5ùËŸ„Šrb³ƒrS…¾Ý4æj×7KY‡:•Ÿ&´¼š”©ÊsQ€û|¥Ìm•ÍËt5Ù*}ÙG{`\rh& (´ÌmÂÀ<}Ûš=ù©/déé¬sO+\\ÆÏ. P6Ê§/Õ—#³Kýfp¨¦kÔ-ªí ;[k‡P“ðãóMO%#pk€!ªHˆÐ¹ÕÑeŽñ·õI¦â—äŒ¾$ÿ\0Sodù%¡3Õpü/ÀRÀÛ[Å^Öò2¡×»¼µ\rpËÈ?•»)uUŠ6Œ52WZ\0\0’d²ÉiÉw+‹”³Èàoøy¦Ú®$·9ëæ¬z‹ .$5sŠÃ¶tàz¤Šî>sðWsÙøq•^Þ¢î®gª¾®–ÐÊwòÛª¥x’Ï½5¿ˆá\\·–uMÎˆÐØ]’CIÂKè.Ï¤!»î1ŸDÖy«Ð’’Ê2®(Ê”´Én`ó(ôGTlœ@?Y$f’îm#æ¯žÂëÄ¶Úê2|qHCÕyòÑ\'0íppWc76Óñ	ƒ¥LNa÷	ljr®¢É/)óm¤‹Ées“O°!J(!@M_]\rºŠj¹ÜL/q>K¼’6&9ò81­%Ü€T7l=¬Crö++Ëák±4àììt\nõÜhAùì\\´µu§ðŠÛŽ/ïâ.!¬¯{³­çO è˜éa2LÐ|÷XŽ\'Ô?\r’Ÿí–¦ØFí]6ýWRªŠÝ•­K‰%°žÛj–ïpÐÆ’ÜãØ)íeº\Z+3éØÐ\ZØÎOªWÃÖ8è\"ÐÐ5ŸÄáÍkÄó1”Æ‚S8Æü-ó+.¥gRX]öÏ…ÂÎÞRŸìÆÎ˜Ui†XÌŒ\Z¿Ã‚®ºZ(¢£´íkb­ª;)¤d¼I[C\'‰Ž‹AWÇ®\'QIüJWwdxè¤™ÊÔŽ™<’‹$]Ý8*OJ[4\\°Bf¤§î¢\0IÖ…ÚF\ngA¨êèHØ„žX3Ó	Ðƒºå§;iÏªP#µt¤“„ÏSop«;åKjcqyÃZT‘ôÀäÑñd9Ö¡ü¹>I<ÔÇ%/š• †SMU8Ç	l„^iZapÆçeZ^8tGpŽ¥ìØR®jÊùÜ¶Pn1kYX\"hnò)²n+cK„QU®\"ŸDU÷›KgÃ!ÉAê!4ò:7U«W9\n\'|²\ZŒÉ\ZÇ?UbÖ¶—¦EŸPð—Usi/r!Än°»ÏâykÚæ‘Ð®8Ziç¡ÀJ./\rèê\r<¡ãqÔy…>áK×ÙZ€9‘äUt7NÖk¹£xŠ@;Ð¨ªÅ¦§¨–”–%ÑžÌ¥•TÑTFðæJÐö‘ÔÛ’©»/í’š€[kêˆˆº{·îÿ\0Ãì­*ZêZØÄ”ÕLÓÕŽuö7ÔëÓO;œ½ÝœèÍ¬lwBÀ9ä…¢S9ÔÕAIš¢hâŒssÝ€ wîÚ8~Ô÷CF%¸ÎÝ±|?U\Z¯¡©½Õº¦éY=Q\'hË±Gjb¦‡(\"i†‘²âî½I)eR[•aè\n)\\KøGx‹8ÏŽ³\"6ûyåNCÔõQè¸(üU3åýCFUŽèghÀŽ\"šàiåª™±»HÜ4a`Öâj½Rgggé‹JQÓ’3háÈi5h»ùO\'H0Ö§m·&ÊjzV8œ—9Ä©[)c„8`r[˜Ø\ZÀ3ŽaTu[{›Tø| ´Ço¢0î»Ìß¾»¶\"îm‚?ó\\ÇÒÒ‡¿¾žY±{ÝÍK4in?4–¥¥Í9C«&J¬i/v2þHÏfLø>9¨ˆí‚¼kè]i¸Ó]ØÃKˆªN9g“Š£­Ò‹_SMŒ	šÍzvÊØnV¾îv¶Xåf—4ŽcÉ]¹&y÷¥Ê¸”~EL€tÆÄuDykÁÂãlŠKS¾Î¨q’ÿ\0éå<ôÿ\0)õ	ÈÂÐý·CE$ÎŒ$±cV7]ch\rXty)˜RÈÝNÛ$ù­]å§!,î¶åºÇt@K¥‹©\r5dƒ„Û<\rqO³ÄwHþbHæ“ˆû¨ÚÂù\\\Z	TÝúcY[<Ää9Ç\\üaRÛeŽªA³‹t7ÜªRGnAÝC]á¤uþ™·öN«úª#ç„ÝQ\'Õ?ÔÓêÎ‘òM•˜Ü6ë…\ZgAVžFj«,UûÈÆòÆz¦jþî¢t‘¼ào‚¦f#œ‚ºáWŽ…À8rè9©á^QèÌ»¾o^-Î•Í5‚²µ…ñG¨‚ç-’ºèôV7	Ói·¹Äo­ßÕ.à¸ä“ÕYw²‹hÃ£éJiFNM6UQI]CË¼`öæ—Qñ]Ö…ÀÓÔÍ	cqj±&´Á7â‰§å²K\'ÐÊ4º–?p0ˆÞÇ9q!«é\ZÝ)ÔÊù[»tâët]Ñ©†¨c\0Ï$|Â•<\rH÷jfZ<‚Øñ\\,jfTýu«õ‹- Ü#™+\Z²Vw+\0õUœ­<Ò~ýÐfFBé^F\ZÉS÷vDÖ4yH.²/38¼ÉMþ]9ÂYnŽp÷º¦fÊò1ánVó<ç%Ö€4ž¥#a\Zintsr0“Ìß		Yi\\\'\ZZR!·Ø„w{}G\"×ázƒkä6Ø¶Ï„/;ñ„½Ûi¤i”/BvqŠ«$sËW(gIÁz‚	\\7ä–kïÙãòôJ)Ë˜0ã¨t(Šn@‹bÌræ¦ÜÂHRÂ1ºÛ:ˆ\0\0’	Ùt`sFFJU–²>‹s|ò“7;,kÎà£#ya8Îã¢C4š\Zp”—jÛ)<­æß4\"U»íN·4´ ç[ËÏÉUïpM;P¬ï/m§È†0>eAžNU\Z¯2g£pZ<»H/;†¬•ÂzA?\'aÀí¶Ë»qÍlÜÔÍ7Œ“Åt„ì ‘¾`ajÇÈü¶hðqÐ§ç7šCp•°DùÐtŒû§\'’¼¡£/&¶Š#GGÝœeÄ»oR¶-\0•µ¶)\"¡gx|OËñäE³Ú	I&ò>œV…€kA \0²Ð\0YÇ4™‘£À!B2.	õF~‹c€¾žiºÝ‡TgÑhqŒ,°áþ… §¹+€a©,ƒ%pµ}BKZí,9Ø”°„†âï# ÜlI·j•à«ç±ZöÔØ)ZN|RILgµT7Ãu?ìë›|Q8ãAÂ½oúœG¨`ùÙòA–.R4ómÀ´w!lç)¤Žag\"O?4dŒœ.®Á;.Nvzà¨É“2\Zy•³ZAòX €6+AÏ$© 2áƒ‘…È´kpü ïèºçŒÑ3qmÓì®¬©–s²W²È´àç5Ü£¸ª»íõmNr)Ç°Ù4c+s©ï.qÉ(Ó¿%œúåž§F*ŒWc]>K!„-ÃVÚRœš«Á«¬‚Œrsµ?þ¥Ài%7Zñ5§‘=Ü~Ã™RGe’­ÃÎ »‹dÀå²àîk´‡ \\pršOÛAAØ-€Z¸å(žpP°þh@‚2BÕüÆFóÝaã%0\\\Z;X#+n»¬c%\0fPæºÂpÕ \Z†<–Ì#îÓ”–µš†–«YÙ¨eÛ8}4¬<œÂnÆ®†‚å53ŽÁü¾iÚ¶0ö8c(_I-H\Z×d#ouj‹êŽ[ÔTöŒ^[ª…D\rßr6K{Ì\0s·%ázÝtŒsÝ<©$S7H:ƒ²¬6qÛË<Œ,Éq–Pvih÷+^÷-9M°lÿ\0	Á9!aÎÀÎ2¸ºBï<®“9ƒDO\'Ù’6ï2Ü·¢…ö­3›Ã?÷“7—¦êq¶­Äì4z•í†7ÒÚ¨a{Á2JçiQl¹Â§ÝÂ?%-OVD¥Ž;ú¥ùÎLUäÅR69O²	#ª¢üž‘	v;€²BÃ¤e\'R±¶ñ3£¥1Ç¼³íƒÔ¥4”Í¤¤ŽÀÜgÍ$¤ÿ\0Ì.TóŠœ÷l?âêSƒÉOè°U¦µIÏø„²~%†‚V\\2åÔ7!1 -²ìFâÿ\0t8?r„8î„	’TýPBym’‹7Ô~Ëo°©Éþ,ÿ\0Qû\'rYåÇäb!\rnÙO¿`Sÿ\0½Ÿê?d8Î&Ÿê?dr˜Ÿ—`Ä€}WB4»lî>Â§ß{9ÉêGìº,Ç{6Þ£öG-‡åGäla[JvX6ûÉ¾£ö[}‹ÿ\0ä›ê?dr˜~\\~Hµ{KXí”‚ym|tÙZ¡ÏÇª·+,4Å§ï&úÙE+x>„Þ£œÍU¨iÛSqÿ\0ÕOB.,ÀõãRÝ5Øô/Ü)ë(c5¤éÚ´CI£oý*Š*ˆ/°Ûá¸VGKdllsF\\z²U½Â’IQi‰ÓJùß§ÈW’<òRy»š^}ËOü¡`²»ˆÃG¦^ìcªÁ…¸æBv‘º°rs£n4ÆÕÎªá]ìÅ‘Æ9¸ò	C i.wÕ4ñM&´ç?ÂàáÉ6K#¢Ôžæh¯ô×W9´³±Å»‘ÕAÚíÔÖß!£%´±x½íÕÂ6è£¸ÏPòàÇc§UŸÙâ¯½×O4ó—ºRNqý=j“s‚ÁÑúvWnrìŠÂìß¼Ï\\¥v×}ØÝ>Uð½¤9š£êßô®Ô|5K\0ž§¥¿éU]6w*æ9È£<°^*-1Ñ¼:?ÄT¸põ6qßT}[û&êž¤šéNçÏRD@½­ÔÜgÏ’HÒyµêåì†Š\ZAAM#ËÄ|ÝÔ¬ËÏ\nLî¥seŸŸ›eÍÜ9JyËQõoì—D™$.`£„º¦·\'+böRpå+@ÄÕæßÙcû»MãTÔßÙ¶/åGÁ.ôÊâýº)áºSŸ¾¨ú·öZž¤ ýõGÕ¿éG-‹ù1#¿D)/÷^“ýõOÕ¿éB9l‰ÜÄÿÙ'),
(2,'alejandro@gmail.com','1111','Alejandro','Sanchez','Desarrollador','php html','tenis','https://emayores.com/wp-content/uploads/2017/07/wifi-150x150.png','2019-07-05',NULL,'ÿØÿà\0JFIF\0\0\0\0\0\0ÿÛ\0„\0	( \Z%!1!%)+...383-7(-.+\n\n\n\r\Z\Z- 7-1-++---+-+-+-0---------------+------------------ÿÀ\0\0¨,\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0ÿÄ\0D\0	\0\0\0\0\0!1AQ\"aq‘2BR¡±ÁbrÑá#3S‚’ðCÂ$%Dc¢²³ñÿÄ\0\0\0\0\0\0\0\0\0\0\0\0\0ÿÄ\07\0\0\0\0\0\0!1AQ\"2aq¡B‘±ÁÑð#Rá3ñ$Sb‚ÿÚ\0\0\0?\0è\'äÄ1,  \0d„\01°É°[rÛ—«\rËÞ—åø\ZôtuË­ð¿3Fš®§ÔøFˆë\"¯:Ì£J/­m•yKÜ_‰Æñ=k­y5{ÏèdÔ]f<œo>Î\'‹©euN/«iöœújTG=Ùž1éC¹~\nÆk­È¥\"æ•;å&T?•6‰A$\0*\"!\0¨@\0DX„ \0¢¥}X¨mÁ%^šêËEéRÿ\0._GÃÌéøoˆ=<ºeî?§Å~¿uYÒðø0¹Fe:RÙwVn2‹ºqkFšæ{8K8:0–…–æ1­	ë«5ýñ-Â’Ã.iIa™üU)Q¨éË[k{Ñ{Ÿ÷Å3‘u.ÁË¶·èLÎÑSLX¨B<À2 \0¶\0 t&\\X \0ŒBÀ	 À@Ø@$\0¦äÔVöì…¹I%Ü\"›xF¯\rEB*rVïæÎõpPŠŠìuá¤Å×ØøîK›(Õê¹wíó!mŠÉÈºuº³ý^ñ‹ë¿~\\»‘ç¨ƒË¶{¶`‚oÚeV[„+ºÐ”‹Ú4¬`”Š›$Æ%M€äbDB°\00\0“@*b\0Ä¡\0â\"ˆ@!\0q\"1?¤þvšÕYVŠã¹F§É?Ìôž	®Ïý¼ÿ\0ùý¿bú,û,¤Èó•ô=<dt!#O™¯MGmzôºËíGÚ__ÒÃ®?FøuG=ÑW…¯s•8œÖ‰ð‘S\":ˆV€‰B€	` ³A`6\0<!°€\0Ð\0Œˆ€bÏ\"ÃÝº‡Uw½ÿ\0™·C^[›íÁ¯I·\"èé›ŒM³ŸCJRO­ûº}ï{ðü9­·Ï»¥p¶ýÎu³ëž=Q‚¤äî÷¾%VÉ%„)<#Gƒ£drì–J[Éa6\"Ï”Tž¶Ù½-/Ü¸›ôÞ}ûã¥z²Úèœþ“˜e°7èÛ•Eª¾ŠVßp¿3°ü•[Y}^¿ãÐÕþŽ=8îf^:ïàôiñMphóòÓNqktaqiá‰úôy‘òX°/ë‹˜yLxŽ%òØF±Æd:@r2#E‘`\"D\0!\0äH±‹Rœe$ã$ã(½Ò‹VkÈp›„”£ÊÛtrËð˜™Ðw´]á/~ÖËâ™ïôš…}Q±wüû\nç”™¡É1»‘±3TYEVP[½hýÙnòÕxû¡‰ë¡Ó&‰øz†9\"†K‹+hA x\0K\0šX€#À„1\0  $ 4Ù}šq\\mwÞõ;zxtV‘Ô¦0H,]M˜·Çrïd5Vùu7Ü.—L8çOsIˆôIõh­ŸæzËðð8¬e˜`°²DËh™n˜¤ËÚ0I•¹NN¬#-ÎJýÜ‹4pV_K†ÇZÌÒf£;ƒ„•½Yü$·¯ÿ\0Ô{¯ÙE]€f§ù,¢ž.ŠÝûØ¯üÿ\0‹hŒžZ(²¼îbhf/™ŽzH™Ü	ÔñÏ™’zb$Ú÷ÌË:ô–8|išu¸–T1i@Ž	´ª4\"D$VÐ¦@A!\0h@H±ŽD@cIyuéÓÄÅkIú)¿±+¸·Ý-?œô~~©}÷_©nžX}&[,¯k3ÔE²×6ëBW²ösÕ|WÄ®øåd¯Q“TçMdZRe€ú\",aH¶@8:‘§ŒK\0 #Ä!˜\0Èˆ,5=©Æ<Ú¿w:£Õ4‰Â=RKÔÕ£ºuŠ¼ó¡\'º•Gà¿&r|JÎ\"»ndÔ¾Â½#©RSz¹IÉø³Ÿ?f	ðž‡2ÖS\"ÚŒLrd6ƒ³MoZ§É¢\nn2R\\¡g›jmbhrmo÷f¿?ï´·ÇQJ±wüûz¬ëŠeËÕ5f´k“[Ñyh¢šjJé«4÷5Ä\0â#ÁBŽ\"q¤ï\r§³ÙÙàW‚‰¬2*­J	•à™GfD0XáëûkÁ‹|-sàTÑm†ªdœHéLÎÐ‰‘X‡\"Ä@9,c‘6q‚ôô*Ñþ%9E}ë^ú’6híòuŸÄ\"úd™È2Ùžö>‡N‚j”áön»ãªùK1hœÖbÑ34sYw‡‘•%Å•ˆ  ,ž\0:5—È‘bb\0E€,B&äÐ½UØ›ú}M:8æÕðÉ~™SähQ×:F?ôƒ‰ÙÃV~öÍ5âÕþ§Xú®rü}Ï63”åñÔÉ{##M„Ž‡.ÆRË\ZHÍ\"—–ÇG±ÛØo«?„¿?Àîx&³Ê³Ê—üÿ\0É£MoL°û–™æ\Zß¶bŸÉKèü9µCÓÛÐQvõ§ÕO—6&ð„ÞÈ18‡9|H%Ü¡úžˆˆ‡VÈ²vfKá”BH¶ÃT9“‰[EÎ¡ŽÈ•É´$d’ Lƒ)h¢ÊØ‡\"Ä‘\"Æ9 9myY’~¾„YÇs,?¢ÅÖ§Â5j%Ý´Ü~\rûO>ºã/TtkyI–™tµï5£JÜ…ÑµÉµäìsì[œÙ,¸Fd™S\'@©‘B€B\0Ö\\7-äH±1\0  Xe.¼¾ïÍ¯ÀÙ¡^Ûù\Z´‹ÚeéÓfóž~“ê»¥ïV_#ÏÛ½­ü_ês›öÙÏòÄeÔ1HÒáV‡.e,°¤Q\"“L¥€`›O(\r^MŽUa±-d•šæ¿3Ûøf¹j*Ä½åÏîtô×u,w9×éG)œ š»Œ[iïÑ«Yö¯Ï™Ð’x/žèår§bµ,™òFb%aÙEˆƒ,°õm± \\àæa±´\\aäcš+\'Ófy~%lC±\"‘\"Æ9 [‹eî‰œ«¦P¶a[µÓ—(3Úxl³¦­ü\r´û¨,Õ$lDyiV~_6b³–`µ{L·ÁÈÇ2†XÓ)dGP„ðÐ$k.\Z\"DB  \0! iÑ÷Ö—Ý_3n‡Þ‘¯IË/™¸ç¥ÜC²«ùHóÒÿ\0sïg7í\\¤Ç¨&æÌ¨L¢D&LÂâ9)Ç‡k‘§K©žžÅ8Êô%	8¼£K^<Ušº’×uâÿ\0Ýéï†¢µ8¾N­V)¬œ[¥½–oN£z?vû¼[j$,†7Fb¥ˆÂÅ\"´ÆÉ†Gi2¹¬ˆBf+bA¢ßPçY¹\"ï3Ñ[,©HÍ$D•M•HCÑ ‘\"Æ8„ˆ³ì‰œ»¦ïþ!S±Rÿ\0ÓÙx^Úh(÷P˜NUbFªÿ\0k?¼þf;yf}æ[as(e”\nHÄˆ…\0Áäƒ~ÍL´DL\" °ˆbÃ£òý£\\âþ\r4Oú|\r:Gí³@uN€ý&Q¾\ZOÜ«àö—ÕzåÓkù¿ÔçIblç™SÔÉ¨##M‡g.e$Êl¥‘dˆ2¶±d@!/-Ç:R¿²÷¯ª:^¯–šú¾QmV¸<—™Žž&šM5£µíšìúžÚ‘R‹ÊgRRYGéGFg†“Ñº~~ŽûµãLÉu->¨~VÕj&^µ…ŠE)\"Ñ’)L¢q,-cudy‚ªsì‰S.(T1É“iÈ¥€üY[ìY1È‘ÔM¿d‹9OJ\'·®×	ìDcôžãCš ¾úVÉá#ª:´B½êIó”¾lÅg\'>Ç».p¦9”²ÆLˆê\"!@`@f–X„ X„#@D@°\0„JÊ\'jÑí¼|ÓúØ»K,Z‹´ï#PvÎ¡˜é¦ÒaëÃ‹§¶»ã¯úNº=6·òf–\'ó8þ]=Lw¬¢àÔá^‡&Â–M¦PÈ1ôA€ìH\0â`Ü³0tž±{×.Ôu¼7Ä¥¦—L·‹ú|KªµÁü¼fž\"\ZÙ¦´z;_zì=vFØõEç\'NRG-éOCgE¹ÓŽÔ5{+[sqæ»7¯‰E´oÕJì«¼L=jV+Œ»2„;Ý$›mÙ%vÛ{’\\II°­†«E¥V•Jmê”á:wîºÔ¢Êò&‰ø,QÌ¶¬É˜LJ0YYSE¥*èË(%Ó¨Râð‘€z,­ ŒÒÕî]fù%«ø­uIGÕ‰ï±Ç)Tu*Î«ßRR¨ÿ\0žN_SèG¥%èt«_Bë\n­y{©¿%rü—ðŠÌ\Z0Ìæ²ó\nŒ’+dø2¦Dv,x@$˜Ð$i&Àb-ˆDd@ L\0XOe©-ñiùj\n]-?@O>†Æœ“I­Í&¼O@šk(ì\'•’iODÿ\0•ö§ý³›â0ÙKî3jVÉœ32Âºš”Ÿ³6—l^±~Låµ˜Öè¾Ëçtr­[•2ÊÌÊÇb@bÈ0DX <Ð\'•\'¦«Œ~¨éh|FzizÇÓö,®ÇhhÖ§Z<\Z{×÷¹žÇMª¯Q¨<*îŒÌÞmÐ|5I9Ê\rßVàÜd»ÒßÞ¼¸—J¨ËrÉB2ÝŽdÝÂázô)Gmÿ\0šÛ©+}™Jöð°ã\\b\n¸¢F>”j§\Z‘SO„’hrŽIá>LŽeÐšo­BN›÷å(Íf–2à¦T\'ÁÅ`qoÞAÛßZ>|<Neú).ÆiÕ%Èî29¶PPàZáñé™\'I‹\Z›™¥^O£2‰!Ý/Çz,%G~µUè#ß?[þÅ#¡áTyš„û-ÉV³3žå´´¿3ÙÃÔéV‹<SÙ£/µh/ÿ\0ÉXñÚñCÁÀÃ3žËœ:2È¬›A¡õÀ`AeäÀb,‹—\0Ø\02b\"`.E_j•¸Áìøo_\r<ÆŽÎªñéüGOM>¨cÐ^žÔ\\yüøß_™[©m‘ê‹G)ý$eŽðÅEÒ©Ø×ªßÅxz6Ÿñ£¾\nlš½ÕŒZˆ`SEõ9öŠ‡â@C±dDˆ 	\0¬ Gx»}{Íjl¢]PcŒœx.ðY¢zKGýî=n‡Åë»Ù–Òþpn«RžÒÄa£>´^ÌŸª—ÞýiØçƒj‘Y^‡®­ö·Åøðñ°É\0ÆK±ª•	sŸU.ò,Ì!ˆWµ÷iârõåå#ÖûèWg6pEMXKf+kErEþ©‚È•³#ÓŒ¥­<^”[¶¤¬åä¬¼ÏCá\Z~Šºß3ü—îh¢|ÈØ*;‘ÞŠÂ7Å	œÏ­\ZkÙ[O½îø|Ê®}Œú™oAp1M™-h£<ˆbDA& @\0:4È¶\0¶D@°\0X€\0‰ƒˆ‰Ù.+b¢Otú¯¿ƒóùš´–tY‡Ã/ÓYÓ=ûšƒ´u\n>‘e±©	BK«U8¿²ùýNˆUåÏ­pÿ\0?ò`ÔC¦]K¹ÆÝ)á«JŒôpvï\\\ZìhÇdzá’F“	VèäY2†°M‹(dG¢DD\0qB\0“ <€	x|l£Ú¾\'_GâöÑ…/i}Kat¢YÑÇÆZ?ùŸKâTÞ¶{ýMµêbù\Z­„Žø=žÍñþž7¦Ÿ¥,ðsNŸWŸ¤W]Zjé§´œ¸wkÌŒå„+†§M³,¦°clŸ‡RF+z¹}–>g*ôU\"ßXzRªõk«¿joÕ]Ë{ìFz(wÚ¡Û¿Ëù±Ç©àÅài9IÎNîM¶ÞöÛ»g­ª8álõDÐa ¡9nŠÚ~Ž\r%’IÎNo|û»–w9Ó–^KL<òeL›¢#Ñ‚\0[ˆ\0è°`6D@°€\0bà€ÕeÏI\r}hé.ÞOÄíénó!¿(êQo\\wåëRR‹‹ãð\'uQ¶.îY8©,3žtç£®´và¿mEnþ$ywñG›ö¨±×?çÄço	t³’ã½—½i©F¦žèS]Í%)\\åÉ`©’\"@C¨€\0B\0˜ˆ€Q\0C=a¦Öèy%mýçJ¾­³Ÿ™8Y(ðÌ¾qºÎîOMvxGÅlo2Ü—\'ÉUþÌØµøŽCÌ§‘Û[Õä^a:–A9;%vÞ‰%½²Ÿ5ÍárÈ·“!šã^&ªÙ¿£†]œdû_ÊÇ¢Ñi|¨ãí>_èjª¾ÅŽ	¹X¬£sêöµð´§ßìÇëäUtû#>¢Ï²ˆxZFI3,©\"‰dˆâ‚¸€ðë€öÉä¸€FÀb\0FG ð€ð3(œ•h¨ûNÍs•Ëô²’µt÷ü‹´ò’±`Ö#ºu\n\\Þ¬v¥Õá²¯k­O=â.3s}2ÌqÛmÎ~£\r¾r°`:[Ñ·´ñ4¦µ©Iiµö¢¹ö*·Ó³þ\n£/³\"·\'ÌT•žõ£F}NÅäRŽÚr05‚±äÊÀ$ \rˆ€ ¦ \nà<‘\ZÊ™% ÓKW¢Z¶ôIsd“máÂô“:x‡è(þí>´·zV¿Ò¾\'¦ðí•‰Í{OéþM5Wûeøp;ÕÃ¥á¸º«Oië)ió|ßb\'9t¢VMVŒÕ(97\'«níóo{0ÊG5¶ù,hÓ(lƒd¨D­²#ÉH\0T\0y€À„0\0\0F\0ÄÀg˜\0‚ï£x}eQðê/›ú{¹¿¸Û£‡2.1•Ô#w}ZŽš»³f¢Õ\\2ó¾Û\Z­ŸLLö&ªj«Ûšnk‡iÃºÅÓkë’ÝvüŒyêÝòb\\vª7Q½•ñì3êë®s²No1K±¤ÛyàÊçÝU%é¨µ\n»ÚÝ\ZüŸiŽ\Z‡_ôí[~D#<lÊœ>Q—¢­	­,ô¿j|HÛ§MuCt=ÑwNw04È¢° ‘S˜€PÀ!\0¨\rc1P¥R¤”b¸¾=‰q}…•S;eÓ–5¾ÈÂç™åLSôtÓ….\\jvÏ³ìž—C O>ô¾ˆÓ]I|ÄË²Ûpñ;ÕÖ¢¾&êëÁvá\nô•7-ËŒŸ»K[QYe’’ŠË2ØºÒ­7R]Ê< ¸$a™y9ÖXæòÇèÑ3¹6J§¶È$DA¤\0(€õÆ6\0ÑÀ\0\0ˆBb\0G˜€D 6X?£„aÉkÞõ¿M~\\N½Pè‚‰[œâSp‚”£³QmYqï9ºëâÜ\"¤Ö$“Â3_4ÚYá%‰MMF¬›u7(9(YlgÑ7¼»¢	JIá¾}©O75ölä’Ñv\Z%£¾NyšÄ±½|›wä“®¤žÕI­ÉYE%¡eÞ]Ëú›¿^1ò&ôê\\•yßG”£iÃn+t—­-Qç5>©Ñ¾ªý¨ü?Td‡™‡–V£û¹zHû²ÒK¹îf/>«}åÒþ…;>Ghã–é\'ÊJÅs¥óÐš\'BE\r4 È\0V€I@H@%Z‘‚Ú””RâÚKÍ’„%7ˆ¬‚Ü ÌzUõhGÒKßwŒ†ù|•>\ZÞö¼|%Š·Ü¡©‡­ˆ–Ýi9r[”W(­Èô\ZmJÄWJú³UtýÅ¶(ì:•Ö¢°‘²5¥Ác‰t°ÐÛ©½ú°^´ßbú–JQ‚Ëæ«YfO‰yíÏrÒ0[ ¹.ÞÓ–¹=Îu–9¼±iQ3¹6J„\nòDqD@\ZBàÀ1€Œ\0F\0tA°€Ä\0°\"\0D#À1?$ÃmÕMî‡Y÷ðøüZJúìOÐÑ¦‡TþF¤í1‰àà÷«Ýíkw«ï ¡ØŠ‚4\"·$¾É±\n~µH÷.³òE3ÔUdU+¡X˜Ò•WhK_uõ[íKˆªÔ×g+º3à˜^\\BÅå”ç­¬ýèéçÁœÝW…iõµ‡ê¶(ŸÀ¥Æô~\\6f¹;\'ñÐá[àW×½Rêú?ØË=,×»¹M[*”=‰Gºöüu´j+ÿ\0rðýLò„£Ê\ZÕq¿‘›fV/ëÞŸ—æVF³½™?øPýGŠ™³öi?%ò¹dtÑï!ô‘ªbñSÒ)AvFïÎFêt\n\\AËçÁdkÏþR£Ú©)Ió“rÿ\0á×§Ãæ–\"½¢4Ió±c…èú\\•ZXCt·õ4Æ•×”%ÀÒ¡ê]²+sLò+ÂŠU\'»k|!ãí>â‹51†ÑÝ™ìÔ¨íL­e:’s©\')=íü—%Ø`®O,Ã)¹<°á@©È†GãH†H†¢,€¶\0<\0¶\0` \0#\0ˆÆ\06\0`\0ˆ°€K\0„¸}”V§Jå4œÝí½Û†‹ÏÄéig]UæOvoÓÊÃ-îÃ¯ŸÁz±”»]¢‰O_î¬ŽZ¸®JÜF}V^®Ì{•ß›3O]cãb‰jæøØ¬Äbg?Zr}»ygdçï<”Jr—,ŠâT@Îü€Å®¤5!¤úë·I/>&ÚµÖCin¾¦ªõRŽÏrûœÑ©º[/Ý—UùîgF½]SááüM¾îX\ZKh0p°–øE÷¤Êg§ª~ôSûˆºâùDiåT_ùqò)z\r7þ5øòkþÔ3,¢—ðãäA§_a~ä×è\'ødè¥à‹£§®>ìRû‰¨Ep‡Ç‘gI,!\'‡„VÔ­¸¶’ócxKpm.JlvBžN£ìÒ+ùŸÒæK5µÇÝßùêgžªãs3™æu«é)lÃøqº^<_‰†ÍTçßàdóŸ,\ZÏÔR¤,€JT@H\0õ€\0Œc\0Z\0Œ\0:#\0Àb,\0\0‚È\0õ„\0°\0$! \0\Zm\0Z\0\0{©OÔœ£ØžžOBÈ]d=Ù4N6J<2ÂI+-û2ïViˆZ¹Ã/Z¹®pÉPéO½KÊ_Š.‰zÇêXµž¨qt¢Ã—œIÿ\0Ôaý¬—úÈú>”Ã…)yÅ	ø”µƒÖGÐ‰[¥Röi%ß\'/‚Hƒñ\'Ú$±öEv\'¤8‰n’ÝŠù»²‰ë®—\"¹jføØª¯9MÞrr|äÜ¾fyNRyo%N\\¼8Y`{d{db Ö\0\0ð\0-\0Á\0,hÀ\0:$\0°€@ „\"\0€Ä\0Ä\0°Û@\04,\0,@\0€\0 \0Œ\0\0Z\0 \Z`\0XÐh`À0Z\0\0@\0l¡€,24<€ ÿÙ'),
(3,'lourdes@chat','1111','Lourdes','Chavarria','Recursos Humanos','molestar','ver series ','https://emayores.com/wp-content/uploads/2017/07/wifi-150x150.png','2000-05-03',NULL,'ÿØÿà\0JFIF\0\0\0\0\0\0ÿÛ\0„\0	( \Z%!1!%)+...383-7(-.+\n\n\n\r\Z\Z- 7-1-++---+-+-+-0---------------+------------------ÿÀ\0\0¨,\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0ÿÄ\0D\0	\0\0\0\0\0!1AQ\"aq‘2BR¡±ÁbrÑá#3S‚’ðCÂ$%Dc¢²³ñÿÄ\0\0\0\0\0\0\0\0\0\0\0\0\0ÿÄ\07\0\0\0\0\0\0!1AQ\"2aq¡B‘±ÁÑð#Rá3ñ$Sb‚ÿÚ\0\0\0?\0è\'äÄ1,  \0d„\01°É°[rÛ—«\rËÞ—åø\ZôtuË­ð¿3Fš®§ÔøFˆë\"¯:Ì£J/­m•yKÜ_‰Æñ=k­y5{ÏèdÔ]f<œo>Î\'‹©euN/«iöœújTG=Ùž1éC¹~\nÆk­È¥\"æ•;å&T?•6‰A$\0*\"!\0¨@\0DX„ \0¢¥}X¨mÁ%^šêËEéRÿ\0._GÃÌéøoˆ=<ºeî?§Å~¿uYÒðø0¹Fe:RÙwVn2‹ºqkFšæ{8K8:0–…–æ1­	ë«5ýñ-Â’Ã.iIa™üU)Q¨éË[k{Ñ{Ÿ÷Å3‘u.ÁË¶·èLÎÑSLX¨B<À2 \0¶\0 t&\\X \0ŒBÀ	 À@Ø@$\0¦äÔVöì…¹I%Ü\"›xF¯\rEB*rVïæÎõpPŠŠìuá¤Å×ØøîK›(Õê¹wíó!mŠÉÈºuº³ý^ñ‹ë¿~\\»‘ç¨ƒË¶{¶`‚oÚeV[„+ºÐ”‹Ú4¬`”Š›$Æ%M€äbDB°\00\0“@*b\0Ä¡\0â\"ˆ@!\0q\"1?¤þvšÕYVŠã¹F§É?Ìôž	®Ïý¼ÿ\0ùý¿bú,û,¤Èó•ô=<dt!#O™¯MGmzôºËíGÚ__ÒÃ®?FøuG=ÑW…¯s•8œÖ‰ð‘S\":ˆV€‰B€	` ³A`6\0<!°€\0Ð\0Œˆ€bÏ\"ÃÝº‡Uw½ÿ\0™·C^[›íÁ¯I·\"èé›ŒM³ŸCJRO­ûº}ï{ðü9­·Ï»¥p¶ýÎu³ëž=Q‚¤äî÷¾%VÉ%„)<#Gƒ£drì–J[Éa6\"Ï”Tž¶Ù½-/Ü¸›ôÞ}ûã¥z²Úèœþ“˜e°7èÛ•Eª¾ŠVßp¿3°ü•[Y}^¿ãÐÕþŽ=8îf^:ïàôiñMphóòÓNqktaqiá‰úôy‘òX°/ë‹˜yLxŽ%òØF±Æd:@r2#E‘`\"D\0!\0äH±‹Rœe$ã$ã(½Ò‹VkÈp›„”£ÊÛtrËð˜™Ðw´]á/~ÖËâ™ïôš…}Q±wüû\nç”™¡É1»‘±3TYEVP[½hýÙnòÕxû¡‰ë¡Ó&‰øz†9\"†K‹+hA x\0K\0šX€#À„1\0  $ 4Ù}šq\\mwÞõ;zxtV‘Ô¦0H,]M˜·Çrïd5Vùu7Ü.—L8çOsIˆôIõh­ŸæzËðð8¬e˜`°²DËh™n˜¤ËÚ0I•¹NN¬#-ÎJýÜ‹4pV_K†ÇZÌÒf£;ƒ„•½Yü$·¯ÿ\0Ô{¯ÙE]€f§ù,¢ž.ŠÝûØ¯üÿ\0‹hŒžZ(²¼îbhf/™ŽzH™Ü	ÔñÏ™’zb$Ú÷ÌË:ô–8|išu¸–T1i@Ž	´ª4\"D$VÐ¦@A!\0h@H±ŽD@cIyuéÓÄÅkIú)¿±+¸·Ý-?œô~~©}÷_©nžX}&[,¯k3ÔE²×6ëBW²ösÕ|WÄ®øåd¯Q“TçMdZRe€ú\",aH¶@8:‘§ŒK\0 #Ä!˜\0Èˆ,5=©Æ<Ú¿w:£Õ4‰Â=RKÔÕ£ºuŠ¼ó¡\'º•Gà¿&r|JÎ\"»ndÔ¾Â½#©RSz¹IÉø³Ÿ?f	ðž‡2ÖS\"ÚŒLrd6ƒ³MoZ§É¢\nn2R\\¡g›jmbhrmo÷f¿?ï´·ÇQJ±wüûz¬ëŠeËÕ5f´k“[Ñyh¢šjJé«4÷5Ä\0â#ÁBŽ\"q¤ï\r§³ÙÙàW‚‰¬2*­J	•à™GfD0XáëûkÁ‹|-sàTÑm†ªdœHéLÎÐ‰‘X‡\"Ä@9,c‘6q‚ôô*Ñþ%9E}ë^ú’6híòuŸÄ\"úd™È2Ùžö>‡N‚j”áön»ãªùK1hœÖbÑ34sYw‡‘•%Å•ˆ  ,ž\0:5—È‘bb\0E€,B&äÐ½UØ›ú}M:8æÕðÉ~™SähQ×:F?ôƒ‰ÙÃV~öÍ5âÕþ§Xú®rü}Ï63”åñÔÉ{##M„Ž‡.ÆRË\ZHÍ\"—–ÇG±ÛØo«?„¿?Àîx&³Ê³Ê—üÿ\0É£MoL°û–™æ\Zß¶bŸÉKèü9µCÓÛÐQvõ§ÕO—6&ð„ÞÈ18‡9|H%Ü¡úžˆˆ‡VÈ²vfKá”BH¶ÃT9“‰[EÎ¡ŽÈ•É´$d’ Lƒ)h¢ÊØ‡\"Ä‘\"Æ9 9myY’~¾„YÇs,?¢ÅÖ§Â5j%Ý´Ü~\rûO>ºã/TtkyI–™tµï5£JÜ…ÑµÉµäìsì[œÙ,¸Fd™S\'@©‘B€B\0Ö\\7-äH±1\0  Xe.¼¾ïÍ¯ÀÙ¡^Ûù\Z´‹ÚeéÓfóž~“ê»¥ïV_#ÏÛ½­ü_ês›öÙÏòÄeÔ1HÒáV‡.e,°¤Q\"“L¥€`›O(\r^MŽUa±-d•šæ¿3Ûøf¹j*Ä½åÏîtô×u,w9×éG)œ š»Œ[iïÑ«Yö¯Ï™Ð’x/žèår§bµ,™òFb%aÙEˆƒ,°õm± \\àæa±´\\aäcš+\'Ófy~%lC±\"‘\"Æ9 [‹eî‰œ«¦P¶a[µÓ—(3Úxl³¦­ü\r´û¨,Õ$lDyiV~_6b³–`µ{L·ÁÈÇ2†XÓ)dGP„ðÐ$k.\Z\"DB  \0! iÑ÷Ö—Ý_3n‡Þ‘¯IË/™¸ç¥ÜC²«ùHóÒÿ\0sïg7í\\¤Ç¨&æÌ¨L¢D&LÂâ9)Ç‡k‘§K©žžÅ8Êô%	8¼£K^<Ušº’×uâÿ\0Ýéï†¢µ8¾N­V)¬œ[¥½–oN£z?vû¼[j$,†7Fb¥ˆÂÅ\"´ÆÉ†Gi2¹¬ˆBf+bA¢ßPçY¹\"ï3Ñ[,©HÍ$D•M•HCÑ ‘\"Æ8„ˆ³ì‰œ»¦ïþ!S±Rÿ\0ÓÙx^Úh(÷P˜NUbFªÿ\0k?¼þf;yf}æ[as(e”\nHÄˆ…\0Áäƒ~ÍL´DL\" °ˆbÃ£òý£\\âþ\r4Oú|\r:Gí³@uN€ý&Q¾\ZOÜ«àö—ÕzåÓkù¿ÔçIblç™SÔÉ¨##M‡g.e$Êl¥‘dˆ2¶±d@!/-Ç:R¿²÷¯ª:^¯–šú¾QmV¸<—™Žž&šM5£µíšìúžÚ‘R‹ÊgRRYGéGFg†“Ñº~~ŽûµãLÉu->¨~VÕj&^µ…ŠE)\"Ñ’)L¢q,-cudy‚ªsì‰S.(T1É“iÈ¥€üY[ìY1È‘ÔM¿d‹9OJ\'·®×	ìDcôžãCš ¾úVÉá#ª:´B½êIó”¾lÅg\'>Ç».p¦9”²ÆLˆê\"!@`@f–X„ X„#@D@°\0„JÊ\'jÑí¼|ÓúØ»K,Z‹´ï#PvÎ¡˜é¦ÒaëÃ‹§¶»ã¯úNº=6·òf–\'ó8þ]=Lw¬¢àÔá^‡&Â–M¦PÈ1ôA€ìH\0â`Ü³0tž±{×.Ôu¼7Ä¥¦—L·‹ú|KªµÁü¼fž\"\ZÙ¦´z;_zì=vFØõEç\'NRG-éOCgE¹ÓŽÔ5{+[sqæ»7¯‰E´oÕJì«¼L=jV+Œ»2„;Ý$›mÙ%vÛ{’\\II°­†«E¥V•Jmê”á:wîºÔ¢Êò&‰ø,QÌ¶¬É˜LJ0YYSE¥*èË(%Ó¨Râð‘€z,­ ŒÒÕî]fù%«ø­uIGÕ‰ï±Ç)Tu*Î«ßRR¨ÿ\0žN_SèG¥%èt«_Bë\n­y{©¿%rü—ðŠÌ\Z0Ìæ²ó\nŒ’+dø2¦Dv,x@$˜Ð$i&Àb-ˆDd@ L\0XOe©-ñiùj\n]-?@O>†Æœ“I­Í&¼O@šk(ì\'•’iODÿ\0•ö§ý³›â0ÙKî3jVÉœ32Âºš”Ÿ³6—l^±~Låµ˜Öè¾Ëçtr­[•2ÊÌÊÇb@bÈ0DX <Ð\'•\'¦«Œ~¨éh|FzizÇÓö,®ÇhhÖ§Z<\Z{×÷¹žÇMª¯Q¨<*îŒÌÞmÐ|5I9Ê\rßVàÜd»ÒßÞ¼¸—J¨ËrÉB2ÝŽdÝÂázô)Gmÿ\0šÛ©+}™Jöð°ã\\b\n¸¢F>”j§\Z‘SO„’hrŽIá>LŽeÐšo­BN›÷å(Íf–2à¦T\'ÁÅ`qoÞAÛßZ>|<Neú).ÆiÕ%Èî29¶PPàZáñé™\'I‹\Z›™¥^O£2‰!Ý/Çz,%G~µUè#ß?[þÅ#¡áTyš„û-ÉV³3žå´´¿3ÙÃÔéV‹<SÙ£/µh/ÿ\0ÉXñÚñCÁÀÃ3žËœ:2È¬›A¡õÀ`AeäÀb,‹—\0Ø\02b\"`.E_j•¸Áìøo_\r<ÆŽÎªñéüGOM>¨cÐ^žÔ\\yüøß_™[©m‘ê‹G)ý$eŽðÅEÒ©Ø×ªßÅxz6Ÿñ£¾\nlš½ÕŒZˆ`SEõ9öŠ‡â@C±dDˆ 	\0¬ Gx»}{Íjl¢]PcŒœx.ðY¢zKGýî=n‡Åë»Ù–Òþpn«RžÒÄa£>´^ÌŸª—ÞýiØçƒj‘Y^‡®­ö·Åøðñ°É\0ÆK±ª•	sŸU.ò,Ì!ˆWµ÷iârõåå#ÖûèWg6pEMXKf+kErEþ©‚È•³#ÓŒ¥­<^”[¶¤¬åä¬¼ÏCá\Z~Šºß3ü—îh¢|ÈØ*;‘ÞŠÂ7Å	œÏ­\ZkÙ[O½îø|Ê®}Œú™oAp1M™-h£<ˆbDA& @\0:4È¶\0¶D@°\0X€\0‰ƒˆ‰Ù.+b¢Otú¯¿ƒóùš´–tY‡Ã/ÓYÓ=ûšƒ´u\n>‘e±©	BK«U8¿²ùýNˆUåÏ­pÿ\0?ò`ÔC¦]K¹ÆÝ)á«JŒôpvï\\\ZìhÇdzá’F“	VèäY2†°M‹(dG¢DD\0qB\0“ <€	x|l£Ú¾\'_GâöÑ…/i}Kat¢YÑÇÆZ?ùŸKâTÞ¶{ýMµêbù\Z­„Žø=žÍñþž7¦Ÿ¥,ðsNŸWŸ¤W]Zjé§´œ¸wkÌŒå„+†§M³,¦°clŸ‡RF+z¹}–>g*ôU\"ßXzRªõk«¿joÕ]Ë{ìFz(wÚ¡Û¿Ëù±Ç©àÅài9IÎNîM¶ÞöÛ»g­ª8álõDÐa ¡9nŠÚ~Ž\r%’IÎNo|û»–w9Ó–^KL<òeL›¢#Ñ‚\0[ˆ\0è°`6D@°€\0bà€ÕeÏI\r}hé.ÞOÄíénó!¿(êQo\\wåëRR‹‹ãð\'uQ¶.îY8©,3žtç£®´và¿mEnþ$ywñG›ö¨±×?çÄço	t³’ã½—½i©F¦žèS]Í%)\\åÉ`©’\"@C¨€\0B\0˜ˆ€Q\0C=a¦Öèy%mýçJ¾­³Ÿ™8Y(ðÌ¾qºÎîOMvxGÅlo2Ü—\'ÉUþÌØµøŽCÌ§‘Û[Õä^a:–A9;%vÞ‰%½²Ÿ5ÍárÈ·“!šã^&ªÙ¿£†]œdû_ÊÇ¢Ñi|¨ãí>_èjª¾ÅŽ	¹X¬£sêöµð´§ßìÇëäUtû#>¢Ï²ˆxZFI3,©\"‰dˆâ‚¸€ðë€öÉä¸€FÀb\0FG ð€ð3(œ•h¨ûNÍs•Ëô²’µt÷ü‹´ò’±`Ö#ºu\n\\Þ¬v¥Õá²¯k­O=â.3s}2ÌqÛmÎ~£\r¾r°`:[Ñ·´ñ4¦µ©Iiµö¢¹ö*·Ó³þ\n£/³\"·\'ÌT•žõ£F}NÅäRŽÚr05‚±äÊÀ$ \rˆ€ ¦ \nà<‘\ZÊ™% ÓKW¢Z¶ôIsd“máÂô“:x‡è(þí>´·zV¿Ò¾\'¦ðí•‰Í{OéþM5Wûeøp;ÕÃ¥á¸º«Oië)ió|ßb\'9t¢VMVŒÕ(97\'«níóo{0ÊG5¶ù,hÓ(lƒd¨D­²#ÉH\0T\0y€À„0\0\0F\0ÄÀg˜\0‚ï£x}eQðê/›ú{¹¿¸Û£‡2.1•Ô#w}ZŽš»³f¢Õ\\2ó¾Û\Z­ŸLLö&ªj«Ûšnk‡iÃºÅÓkë’ÝvüŒyêÝòb\\vª7Q½•ñì3êë®s²No1K±¤ÛyàÊçÝU%é¨µ\n»ÚÝ\ZüŸiŽ\Z‡_ôí[~D#<lÊœ>Q—¢­	­,ô¿j|HÛ§MuCt=ÑwNw04È¢° ‘S˜€PÀ!\0¨\rc1P¥R¤”b¸¾=‰q}…•S;eÓ–5¾ÈÂç™åLSôtÓ….\\jvÏ³ìž—C O>ô¾ˆÓ]I|ÄË²Ûpñ;ÕÖ¢¾&êëÁvá\nô•7-ËŒŸ»K[QYe’’ŠË2ØºÒ­7R]Ê< ¸$a™y9ÖXæòÇèÑ3¹6J§¶È$DA¤\0(€õÆ6\0ÑÀ\0\0ˆBb\0G˜€D 6X?£„aÉkÞõ¿M~\\N½Pè‚‰[œâSp‚”£³QmYqï9ºëâÜ\"¤Ö$“Â3_4ÚYá%‰MMF¬›u7(9(YlgÑ7¼»¢	JIá¾}©O75ölä’Ñv\Z%£¾NyšÄ±½|›wä“®¤žÕI­ÉYE%¡eÞ]Ëú›¿^1ò&ôê\\•yßG”£iÃn+t—­-Qç5>©Ñ¾ªý¨ü?Td‡™‡–V£û¹zHû²ÒK¹îf/>«}åÒþ…;>Ghã–é\'ÊJÅs¥óÐš\'BE\r4 È\0V€I@H@%Z‘‚Ú””RâÚKÍ’„%7ˆ¬‚Ü ÌzUõhGÒKßwŒ†ù|•>\ZÞö¼|%Š·Ü¡©‡­ˆ–Ýi9r[”W(­Èô\ZmJÄWJú³UtýÅ¶(ì:•Ö¢°‘²5¥Ác‰t°ÐÛ©½ú°^´ßbú–JQ‚Ëæ«YfO‰yíÏrÒ0[ ¹.ÞÓ–¹=Îu–9¼±iQ3¹6J„\nòDqD@\ZBàÀ1€Œ\0F\0tA°€Ä\0°\"\0D#À1?$ÃmÕMî‡Y÷ðøüZJúìOÐÑ¦‡TþF¤í1‰àà÷«Ýíkw«ï ¡ØŠ‚4\"·$¾É±\n~µH÷.³òE3ÔUdU+¡X˜Ò•WhK_uõ[íKˆªÔ×g+º3à˜^\\BÅå”ç­¬ýèéçÁœÝW…iõµ‡ê¶(ŸÀ¥Æô~\\6f¹;\'ñÐá[àW×½Rêú?ØË=,×»¹M[*”=‰Gºöüu´j+ÿ\0rðýLò„£Ê\ZÕq¿‘›fV/ëÞŸ—æVF³½™?øPýGŠ™³öi?%ò¹dtÑï!ô‘ªbñSÒ)AvFïÎFêt\n\\AËçÁdkÏþR£Ú©)Ió“rÿ\0á×§Ãæ–\"½¢4Ió±c…èú\\•ZXCt·õ4Æ•×”%ÀÒ¡ê]²+sLò+ÂŠU\'»k|!ãí>â‹51†ÑÝ™ìÔ¨íL­e:’s©\')=íü—%Ø`®O,Ã)¹<°á@©È†GãH†H†¢,€¶\0<\0¶\0` \0#\0ˆÆ\06\0`\0ˆ°€K\0„¸}”V§Jå4œÝí½Û†‹ÏÄéig]UæOvoÓÊÃ-îÃ¯ŸÁz±”»]¢‰O_î¬ŽZ¸®JÜF}V^®Ì{•ß›3O]cãb‰jæøØ¬Äbg?Zr}»ygdçï<”Jr—,ŠâT@Îü€Å®¤5!¤úë·I/>&ÚµÖCin¾¦ªõRŽÏrûœÑ©º[/Ý—UùîgF½]SááüM¾îX\ZKh0p°–øE÷¤Êg§ª~ôSûˆºâùDiåT_ùqò)z\r7þ5øòkþÔ3,¢—ðãäA§_a~ä×è\'ødè¥à‹£§®>ìRû‰¨Ep‡Ç‘gI,!\'‡„VÔ­¸¶’ócxKpm.JlvBžN£ìÒ+ùŸÒæK5µÇÝßùêgžªãs3™æu«é)lÃøqº^<_‰†ÍTçßàdóŸ,\ZÏÔR¤,€JT@H\0õ€\0Œc\0Z\0Œ\0:#\0Àb,\0\0‚È\0õ„\0°\0$! \0\Zm\0Z\0\0{©OÔœ£ØžžOBÈ]d=Ù4N6J<2ÂI+-û2ïViˆZ¹Ã/Z¹®pÉPéO½KÊ_Š.‰zÇêXµž¨qt¢Ã—œIÿ\0Ôaý¬—úÈú>”Ã…)yÅ	ø”µƒÖGÐ‰[¥Röi%ß\'/‚Hƒñ\'Ú$±öEv\'¤8‰n’ÝŠù»²‰ë®—\"¹jføØª¯9MÞrr|äÜ¾fyNRyo%N\\¼8Y`{d{db Ö\0\0ð\0-\0Á\0,hÀ\0:$\0°€@ „\"\0€Ä\0Ä\0°Û@\04,\0,@\0€\0 \0Œ\0\0Z\0 \Z`\0XÐh`À0Z\0\0@\0l¡€,24<€ ÿÙ'),
(4,'hector@gmail.com','1111','Hector','Rodriguez','Desarrollador','ajax php html','futbol','https://emayores.com/wp-content/uploads/2017/07/wifi-150x150.png','2011-07-15',NULL,NULL),
(5,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
