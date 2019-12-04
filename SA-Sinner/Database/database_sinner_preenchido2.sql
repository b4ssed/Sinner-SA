-- MySQL Script generated by MySQL Workbench
-- Mon Nov  4 22:13:56 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema database_sinner
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema database_sinner
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `database_sinner` DEFAULT CHARACTER SET utf8 ;
USE `database_sinner` ;

-- -----------------------------------------------------
-- Table `database_sinner`.`tipo_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database_sinner`.`tipo_usuario` (
  `id_tipo_usuario` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `database_sinner`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database_sinner`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(8) NOT NULL,
  `img` VARCHAR(100) NULL,
  `tipo_usuario_id_tipo_usuario` INT NOT NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `fk_tb_usuario_tb_tipo_usuario_idx` (`tipo_usuario_id_tipo_usuario` ASC) ,
  CONSTRAINT `fk_tb_usuario_tb_tipo_usuario`
    FOREIGN KEY (`tipo_usuario_id_tipo_usuario`)
    REFERENCES `database_sinner`.`tipo_usuario` (`id_tipo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `database_sinner`.`genero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database_sinner`.`genero` (
  `id_genero` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id_genero`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `database_sinner`.`banda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database_sinner`.`banda` (
  `id_banda` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(40) NOT NULL,
  `img` VARCHAR(100) NULL,
  `genero_id_genero` INT NOT NULL,
  PRIMARY KEY (`id_banda`),
  INDEX `fk_banda_genero1_idx` (`genero_id_genero` ASC) ,
  CONSTRAINT `fk_banda_genero1`
    FOREIGN KEY (`genero_id_genero`)
    REFERENCES `database_sinner`.`genero` (`id_genero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `database_sinner`.`album`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database_sinner`.`album` (
  `id_album` INT NOT NULL AUTO_INCREMENT,
  `duracao` CHAR(8) NOT NULL,
  `descricao` VARCHAR(30) NOT NULL,
  `img` VARCHAR(100) NULL,
  `banda_id_banda` INT NOT NULL,
  PRIMARY KEY (`id_album`),
  INDEX `fk_tb_album_tb_banda1_idx` (`banda_id_banda` ASC) ,
  CONSTRAINT `fk_tb_album_tb_banda1`
    FOREIGN KEY (`banda_id_banda`)
    REFERENCES `database_sinner`.`banda` (`id_banda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `database_sinner`.`musica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database_sinner`.`musica` (
  `id_musica` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(30) NOT NULL,
  `duracao` CHAR(8) NOT NULL,
  `musica` VARCHAR(100) NOT NULL,
  `album_id_album` INT NOT NULL,
  PRIMARY KEY (`id_musica`),
  INDEX `fk_tb_musica_tb_album1_idx` (`album_id_album` ASC) ,
  CONSTRAINT `fk_tb_musica_tb_album1`
    FOREIGN KEY (`album_id_album`)
    REFERENCES `database_sinner`.`album` (`id_album`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `database_sinner`.`noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database_sinner`.`noticia` (
  `id_noticia` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(50) NOT NULL,
  `conteudo` LONGTEXT NOT NULL,
  `img` VARCHAR(100) NULL,
  `genero_id_genero` INT NOT NULL,
  PRIMARY KEY (`id_noticia`),
  INDEX `fk_tb_noticia_tb_genero1_idx` (`genero_id_genero` ASC) ,
  CONSTRAINT `fk_tb_noticia_tb_genero1`
    FOREIGN KEY (`genero_id_genero`)
    REFERENCES `database_sinner`.`genero` (`id_genero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `database_sinner`.`usuario_genero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database_sinner`.`usuario_genero` (
  `id_usuario_genero` INT NOT NULL AUTO_INCREMENT,
  `usuario_id_usuario` INT NOT NULL,
  `genero_id_genero` INT NOT NULL,
  INDEX `fk_usuario_has_genero_genero1_idx` (`genero_id_genero` ASC) ,
  INDEX `fk_usuario_has_genero_usuario1_idx` (`usuario_id_usuario` ASC) ,
  PRIMARY KEY (`id_usuario_genero`),
  CONSTRAINT `fk_usuario_has_genero_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `database_sinner`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_genero_genero1`
    FOREIGN KEY (`genero_id_genero`)
    REFERENCES `database_sinner`.`genero` (`id_genero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO tipo_usuario VALUES(DEFAULT,"ADM");
INSERT INTO tipo_usuario VALUES(DEFAULT,"USER");
INSERT INTO usuario VALUES(DEFAULT, "Matheus", "matheus@gmail.com", "123", NULL, 1);
INSERT INTO usuario VALUES(DEFAULT, "Bruna", "bruna@gmail.com", "1234", NULL, 1);
INSERT INTO usuario VALUES(DEFAULT, "Jonathan", "jonathan@gmail.com", "12345", NULL, 1);
INSERT INTO usuario VALUES(DEFAULT, "Lucas", "lucas@gmail.com", "123", NULL, 1);
INSERT INTO usuario VALUES(DEFAULT, "usuario", "usuario@gmail.com", "123", NULL, 2);
INSERT INTO genero VALUES(DEFAULT, "Eletrônica");
INSERT INTO genero VALUES(DEFAULT, "Pop");
INSERT INTO genero VALUES(DEFAULT, "Heavy Metal");
INSERT INTO genero VALUES(DEFAULT, "Indie");
INSERT INTO genero VALUES(DEFAULT, "Rock");
INSERT INTO banda VALUES(DEFAULT, "Pegboard Nerds", "../../../../Sinner-SA/SA-Sinner/css/images/image01pegboardnerds.jpg", 1);
INSERT INTO banda VALUES(DEFAULT, "Iron Maiden", "../../../../Sinner-SA/SA-Sinner/css/images/image02ironmaiden.jpg", 2);
INSERT INTO banda VALUES(DEFAULT, "Cage the Elephant", "../../../../Sinner-SA/SA-Sinner/css/images/image03cagetheelephant.png", 3);
INSERT INTO banda VALUES(DEFAULT, "Pink Floyd", "../../../../Sinner-SA/SA-Sinner/css/images/image04pinkfloyd.jpg", 4);
INSERT INTO banda VALUES(DEFAULT, "Red Hot Chili Peppers", "../../../../Sinner-SA/SA-Sinner/css/images/logo_rhcp.png", 5);
INSERT INTO banda VALUES(DEFAULT, "Jack Stauber", "../../../../Sinner-SA/SA-Sinner/css/images/jack_stauber_logo.jpg", 6);
INSERT INTO banda VALUES(DEFAULT, "System of a Down", "../../../../Sinner-SA/SA-Sinner/css/images/soad_logo.jpg", 7);
INSERT INTO banda VALUES(DEFAULT, "Chopin", "../../../../Sinner-SA/SA-Sinner/css/images/chopin_logo.jpg", 8);	
	
INSERT INTO album VALUES(DEFAULT, "04:23", "Swamp Thing", "../../../../Sinner-SA/SA-Sinner/css/images/image05swampthing.jpg" , 1);
INSERT INTO album VALUES(DEFAULT, "39:11", "The Number of the Beast", "../../../../Sinner-SA/SA-Sinner/css/images/image06numberofthebeast.jpg" , 2);
INSERT INTO album VALUES(DEFAULT, "37:23", "Melophobia", "../../../../Sinner-SA/SA-Sinner/css/images/image07melophobia.jpg" , 3);
INSERT INTO album VALUES(DEFAULT, "81:09", "The Wall", "../../../../Sinner-SA/SA-Sinner/css/images/image08thewall.jpg" , 4);
INSERT INTO album VALUES(DEFAULT, "100:19", "Preludes", "../../../../Sinner-SA/SA-Sinner/css/images/preludes.jpg" , 5);
INSERT INTO album VALUES(DEFAULT, "62:11", "Pop food", "../../../../Sinner-SA/SA-Sinner/css/images/popfood.jpg" , 6);
INSERT INTO album VALUES(DEFAULT, "78:03", "I'm With You", "../../../../Sinner-SA/SA-Sinner/css/images/gateway.jpg" , 7);
INSERT INTO album VALUES(DEFAULT, "81:09", "Toxicity", "../../../../Sinner-SA/SA-Sinner/css/images/toxicity.jpg" , 8);


INSERT INTO musica VALUES(DEFAULT, "Swamp Thing", "04:23", "../../../../Sinner-SA/SA-Sinner/css/music/swampthing.mp3", 1);
INSERT INTO musica VALUES(DEFAULT, "The Number of the Beast", "04:52", "../../../../Sinner-SA/SA-Sinner/css/music/thenumberofthebeast.mp3", 2);
INSERT INTO musica VALUES(DEFAULT, "Telescope", "03:56", "../../../../Sinner-SA/SA-Sinner/css/music/telescope.mp3", 3);
INSERT INTO musica VALUES(DEFAULT, "Hey You", "04:40", "../../../../Sinner-SA/SA-Sinner/css/music/heyyou.mp3", 4);

INSERT INTO musica VALUES(DEFAULT, "Prision Song", "03:21", "../../../../Sinner-SA/SA-Sinner/css/music/soad1.mp3", 8);
INSERT INTO musica VALUES(DEFAULT, "Needles", "03:13", "../../../../Sinner-SA/SA-Sinner/css/music/soad2.mp3", 8);
INSERT INTO musica VALUES(DEFAULT, "Deer Dance", "02:55", "../../../../Sinner-SA/SA-Sinner/css/music/soad3.mp3", 8);
INSERT INTO musica VALUES(DEFAULT, "Jer Pilot", "02:06", "../../../../Sinner-SA/SA-Sinner/css/music/soad4.mp3", 8);
INSERT INTO musica VALUES(DEFAULT, "X", "01:58", "../../../../Sinner-SA/SA-Sinner/css/music/soad5.mp3", 8);
INSERT INTO musica VALUES(DEFAULT, "Chop Suey!", "03:30", "../../../../Sinner-SA/SA-Sinner/css/music/soad6.mp3", 8);
INSERT INTO musica VALUES(DEFAULT, "Bounce", "01:54", "../../../../Sinner-SA/SA-Sinner/css/music/soad7.mp3", 8);
INSERT INTO musica VALUES(DEFAULT, "Forest", "00:04:00", "../../../../Sinner-SA/SA-Sinner/css/music/soad8.mp3", 8);
INSERT INTO musica VALUES(DEFAULT, "Toxicity", "00:04:40", "../../../../Sinner-SA/SA-Sinner/css/music/soad12.mp3", 8);

INSERT INTO musica VALUES(DEFAULT, "Monarchy of Roses", "04:12", "../../../../Sinner-SA/SA-Sinner/css/music/rhcp1.mp3", 7);
INSERT INTO musica VALUES(DEFAULT, "Factory Of Faith", "04:21", "../../../../Sinner-SA/SA-Sinner/css/music/rhcp2.mp3", 7);
INSERT INTO musica VALUES(DEFAULT, "Brendan's Death Song", "05:39", "../../../../Sinner-SA/SA-Sinner/css/music/rhcp3.mp3", 7);
INSERT INTO musica VALUES(DEFAULT, "Ethiopia", "03:51", "../../../../Sinner-SA/SA-Sinner/css/music/rhcp4.mp3", 7);
INSERT INTO musica VALUES(DEFAULT, "Annie Wants a Baby", "03:40", "../../../../Sinner-SA/SA-Sinner/css/music/rhcp5.mp3", 7);
INSERT INTO musica VALUES(DEFAULT, "Look Around", "03:28", "../../../../Sinner-SA/SA-Sinner/css/music/rhcp6.mp3", 7);
INSERT INTO musica VALUES(DEFAULT, "The Adventures Of Rain", "04:43", "../../../../Sinner-SA/SA-Sinner/css/music/rhcp7.mp3", 7);
INSERT INTO musica VALUES(DEFAULT, "Did I Let You Know?", "04:22", "../../../../Sinner-SA/SA-Sinner/css/music/rhcp8.mp3", 7);
INSERT INTO musica VALUES(DEFAULT, "Goodbye Hooray", "03:53", "../../../../Sinner-SA/SA-Sinner/css/music/rhcp9.mp3", 7);

INSERT INTO musica VALUES(DEFAULT, "Buttercup", "03:28", "../../../../Sinner-SA/SA-Sinner/css/music/pf1.mp3", 6);
INSERT INTO musica VALUES(DEFAULT, "oh klahoma", "03:08", "../../../../Sinner-SA/SA-Sinner/css/music/pf2.mp3", 6);

INSERT INTO musica VALUES(DEFAULT, "claire de lune", "05:01", "../../../../Sinner-SA/SA-Sinner/css/music/cp1.mp3", 5);
INSERT INTO musica VALUES(DEFAULT, "Etude", "02:21", "../../../../Sinner-SA/SA-Sinner/css/music/cp2.mp3", 5);
INSERT INTO musica VALUES(DEFAULT, "nocturne piano & violino", "03:21", "../../../../Sinner-SA/SA-Sinner/css/music/cp3.mp3", 5);
INSERT INTO musica VALUES(DEFAULT, "nocture", "04:29", "../../../../Sinner-SA/SA-Sinner/css/music/cp4.mp3", 5);
INSERT INTO musica VALUES(DEFAULT, "Romantic ", "05:13", "../../../../Sinner-SA/SA-Sinner/css/music/cp5.mp3", 5);
INSERT INTO musica VALUES(DEFAULT, "Spring Waltz", "05:11", "../../../../Sinner-SA/SA-Sinner/css/music/cp6.mp3", 5);



INSERT INTO noticia VALUES(DEFAULT, "Roger Waters começa turnê no Brasil", "<div>Roger Waters, ex-líder do Pink Floyd, começa nesta terça-feira (9) em São Paulo uma sequência de shows em sete cidades no Brasil (veja informações no fim do texto). O cantor inglês de 75 anos apresenta sua turnê  Us   Them.</div><div style='text-align: left;'><font face='Courier'>como é o show?</font></div><div>Ele junta músicas de sua carreira solo com as canções do Pink Floyd. Segundo o cantor, 80% do show será de álbuns antigos e 20% será de novidades. 'Mas tudo será conectado por um tema geral. Será espetacular como todos os meus shows foram', contou Waters</div><div><div>Waters falará algo sobre o Brasil?</div><div>É provável que sim: ele é bem informado. Quando esteve por aqui em 2012, fez uma homenagem ao brasileiro Jean Charles de Menezes, morto por policiais britânicos em Londres, em 2005, ao ser confundido com um terrorista. 'Gostaria de dedicar este concerto a Jean Charles, sua família e sua luta por verdade e justiça'.</div><div><br></div><div>Ele vai fazer alguma menção a políticos brasileiros?</div><div>Levando em conta o histórico da turnê, é possível que sim. Quando fez shows nos EUA, em 2017, fez várias referências ao presidente Donald Trump: em uma delas, a frase 'Trump é um porco' aparecia escrita no telão. Na Europa, usou um vídeo para criticar Trump, Putin, e líderes europeus como Theresa May e Emmanuel Macron.</div><div><br></div><div>'Eu adoraria fazer um show diferente para cada lugar, sobre cada problema local, político, discriminação, mas é impossível. Confesso que não tinha pensado na América do Sul ainda', disse para jornalistas brasileiros em dezembro do ano passado.</div></div>", "../../../../Sinner-SA/SA-Sinner/css/images/image08thewall.jpg", 3);
INSERT INTO noticia VALUES(DEFAULT, "Pink Floyd comemora 50 anos de banda com exposição em Londres", "<div class='mc-column content-text active-extra-styles ' data-block-type='unstyled' data-block-weight='29' data-block-id='2' style='box-sizing: inherit; margin: 0px auto 2rem; padding: 0px 1rem; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.25rem; line-height: 2rem; vertical-align: baseline; max-width: 42.5rem; width: 680px; float: none; letter-spacing: -0.03125rem; overflow-wrap: break-word; color: rgb(51, 51, 51);'><p class='content-text__container ' data-track-category='Link no Texto' data-track-links='' style='font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: 0px; vertical-align: baseline;'><font face='Courier'>Uma nova exibição em comemoração à carreira do Pink Floyd, que conta com numerosas curiosidades e homenagens à iconografia reconhecidamente surreal da banda, será inaugurada em Londres no domingo.</font></p></div><div class='wall protected-content' style='box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; color: rgb(51, 51, 51);'><div class='mc-column content-text active-extra-styles ' data-block-type='unstyled' data-block-weight='37' data-block-id='3' style='box-sizing: inherit; margin: 0px auto 2rem; padding: 0px 1rem; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25rem; line-height: 2rem; vertical-align: baseline; max-width: 42.5rem; width: 680px; float: none; letter-spacing: -0.03125rem; overflow-wrap: break-word;><p class='content-text__container ' data-track-category='Link no Texto' data-track-links='' style='box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline;'><font face='Courier'>O Museu Victoria and Albert irá sediar a 'The Pink Floyd Exhibition: Their Mortal Remains' para marcar o 50º aniversário do lançamento do disco de estreia do grupo britânico, 'The Piper at the Gates of Dawn'.</font></p></div><div class='mc-column content-text active-extra-styles ' data-block-type='unstyled' data-block-weight='41' data-block-id='4' style='box-sizing: inherit; margin: 0px auto 2rem; padding: 0px 1rem; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25rem; line-height: 2rem; vertical-align: baseline; max-width: 42.5rem; width: 680px; float: none; letter-spacing: -0.03125rem; overflow-wrap: break-word;'><p class='content-text__container ' data-track-category='Link no Texto' data-track-links='' style='box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline;'><font face='Courier'>'Não se trata somente de nostalgia', disse o baterista do Pink Floyd, Nick Mason, que trabalhou com os desenhistas de algumas das ilustrações de capa mais lendárias da banda, Aubrey 'Po' Powell e Storm Thorgerson, para conceber e desenvolver a mostra.</font></p></div><div class='content-ads content-ads--reveal' data-block-type='ads' data-block-id='5' style='font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; box-sizing: inherit; margin: 0px auto; padding: 0px; border: 0px; vertical-align: baseline; width: 970px; transition: height 0.9s ease 0s; overflow: hidden; height: 370px;'><div data-id='banner_materia2' class='tag-manager-publicidade-container mc-has-reveal mc-has-ad-lazyload tag-manager-publicidade-banner_materia2 tag-manager-publicidade-container--carregado tag-manager-publicidade-container--visivel' id='banner_materia2' data-google-query-id='CPOyuu2RneYCFYN0wQodmJwJWA' data-cid='138296466917' data-lid='5235536631' style='box-sizing: inherit; margin: 60px auto; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; position: relative; background-clip: content-box; background-color: rgb(239, 239, 239);'><div id='google_ads_iframe_/95377733/tvg_G1/Pop_e_Arte/Musica_2__container__' style='box-sizing: inherit; margin: auto; padding: 0px; border: 0pt none; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; width: 970px; max-width: 100%; text-align: center;'><font face='Courier'><iframe id='google_ads_iframe_/95377733/tvg_G1/Pop_e_Arte/Musica_2' title='3rd party ad content' name='google_ads_iframe_/95377733/tvg_G1/Pop_e_Arte/Musica_2' width='970' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0' data-google-container-id='3' data-load-complete='true' style='box-sizing: inherit; margin: 0px; padding: 0px; border-width: 0px; border-style: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: bottom;'></iframe></font></div></div></div><div class='mc-column content-text active-extra-styles ' data-block-type='unstyled' data-block-weight='61' data-block-id='6' style='box-sizing: inherit; margin: 0px auto 2rem; padding: 0px 1rem; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25rem; line-height: 2rem; vertical-align: baseline; max-width: 42.5rem; width: 680px; float: none; letter-spacing: -0.03125rem; overflow-wrap: break-word;'><p class='content-text__container ' data-track-category='Link no Texto' data-track-links='' style='font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: 0px; vertical-align: baseline;'><font face='Courier'>'Cinquenta anos sempre parece um bom momento, e a verdade é que não estaremos todos aqui para sempre. Perdemos dois da banda ao longo dos anos', disse, referindo-se ao guitarrista e principal compositor original, Syd Barrett, e ao tecladista, Rick Wright, 'e é muito importante... se você quiser contar estas histórias, fazê-lo quando as pessoas ainda estão por aqui para contá-las\'.</font></p></div></div>', '../../../../Sinner-SA/SA-Sinner/css/images/image04pinkfloyd.jpg", 4);
INSERT INTO noticia VALUES(DEFAULT, "Iron Maiden fará show em porto alegre", "<h1 class='content-head__title' itemprop='headline' style='box-sizing: inherit; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 4rem; vertical-align: baseline; letter-spacing: -0.15625rem; color: rgb(17, 17, 17);'><font face='Courier' style='' size='5'>Iron Maiden fará show em Porto Alegre em outubro</font></h1><div><div><br></div><div>A banda Iron Maiden retornará para Porto Alegre em 9 de outubro. O show da turnê Legacy Of The Beast Tour vai ocorrer na Arena do Grêmio. A última vez que o grupo esteve na capital gaúcha foi em 2008.</div><div><br></div><div>A abertura do show será por conta da banda The Raven Age. A produção e a lista de músicas da Legacy Of The Beast Tour foram inspiradas no jogo móvel gratuito do Maiden, que recebe o mesmo nome.</div><div><br></div><div>A pré-venda de ingressos para os membros do fã-clube Iron Maiden começa no dia 24 de maio. A partir do dia 29, ocorre a venda para o público em geral.</div><div><br></div><div><br></div><div>Antes de desembarcar no estado, o Iron Maiden vai tocar no Rock In Rio, em 4 de outubro, e fará uma apresentação em São Paulo, no dia 6 do mesmo mês.</div><div><br></div><div>O vocalista Bruce Dickinson afirmou estar feliz em retornar ao Brasil.</div><div><br></div><div>'O resultado final que sentimos é que este é nosso show mais espetacular e, certamente, o mais complexo até hoje. Temos todos os tipos de coisas loucas acontecendo, incluindo uma réplica de avião Spitfire dominando o palco durante Aces High, toneladas de fogos, um gigante Icarus, mosquetes, espadas e alguns lança-chamas verdadeiramente maravilhosos com os quais eu me divirto muito, vocês vão ver. E é claro que temos Eddie, como você nunca viu antes, além de outras grandes surpresas. Eu estou vivendo um dos melhores momentos da vida, brincando com todos esses acessórios magníficos no palco, tem sido fantástico, mal podemos esperar para mostrar este show para vocês', conta Dickinson.</div></div>", "../../../../Sinner-SA/SA-Sinner/css/images/image02ironmaiden.jpg", 2);
INSERT INTO usuario_genero VALUES(DEFAULT, 1, 1);
INSERT INTO usuario_genero VALUES(DEFAULT, 1, 2);
INSERT INTO usuario_genero VALUES(DEFAULT, 1, 3);
INSERT INTO usuario_genero VALUES(DEFAULT, 1, 4);
INSERT INTO usuario_genero VALUES(DEFAULT, 2, 3);
INSERT INTO usuario_genero VALUES(DEFAULT, 3, 1);
INSERT INTO usuario_genero VALUES(DEFAULT, 3, 2);
INSERT INTO usuario_genero VALUES(DEFAULT, 4, 4);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
