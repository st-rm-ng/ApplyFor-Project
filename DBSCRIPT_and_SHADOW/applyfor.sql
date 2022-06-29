-- \. C:\htdocs\@ApplyFor\DBSCRIPT_and_SHADOW\applyfor.sql
-- \. D:\htdocs\@ApplyFor\DBSCRIPT_and_SHADOW\applyfor.sql

DROP DATABASE IF EXISTS applyfor;
CREATE DATABASE IF NOT EXISTS applyfor DEFAULT CHARACTER SET utf8 COLLATE utf8_slovak_ci;
USE applyfor;

CREATE TABLE IF NOT EXISTS company(
    IDcomp INT(11) NOT NULL AUTO_INCREMENT,
    uidComp VARCHAR(50) NOT NULL,
    emailComp VARCHAR(50) NOT NULL,
    nameComp VARCHAR(100) NOT NULL,
    crnComp VARCHAR(8) NOT NULL,
    addressComp VARCHAR(100) NOT NULL,
    phoneComp VARCHAR(20) NOT NULL,
    categoryComp VARCHAR(50) NOT NULL,
    pwdComp VARCHAR(100) NOT NULL,
    descComp TEXT NOT NULL,
    PRIMARY KEY(IDcomp)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS tag(
    IDtag INT(11) NOT NULL AUTO_INCREMENT,
    nameTag TEXT NOT NULL,
    PRIMARY KEY(IDtag)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS user(
    IDuser INT(11) NOT NULL AUTO_INCREMENT,
    uidUser VARCHAR(50) NOT NULL,
    nameUser VARCHAR(50) NOT NULL,tak
    emailUser VARCHAR(50) NOT NULL,
    phoneUser VARCHAR(20) NOT NULL,
    cityUser VARCHAR(50) NOT NULL,
    genderUser VARCHAR(50) DEFAULT "man",
    pwdUser VARCHAR(100) NOT NULL,
    specUser VARCHAR(50) NOT NULL,
    IDtag_fk INT(11) NOT NULL,
    bioUser TEXT NOT NULL,
    PRIMARY KEY(IDuser),
    FOREIGN KEY(IDtag_fk) REFERENCES tag(IDtag)
)ENGINE=InnoDB;

/*
CREATE TABLE IF NOT EXISTS user_tag(
    IDuser_fk INT(11) NOT NULL,
    IDtag_fk INT(11) NOT NULL,
    PRIMARY KEY(IDuser_fk, IDtag_fk),
    FOREIGN KEY(IDuser_fk) REFERENCES user(IDuser),
    FOREIGN KEY(IDtag_fk) REFERENCES tag(IDtag)
)ENGINE=InnoDB;
*/

INSERT INTO tag (nameTag) VALUES 
("none"),
("Student"),
("Administration"),
("Automobile industry"),
("Mining and Metallurgy"),
("Banking"),
("Security and protection"),
("Tourism, gastronomy, hospitality"),
("Transport, forwarding, logistics"),
("Woodprocessing industry"),
("Economics, finance, accounting"),
("Electrical engineering and energy"),
("Pharmaceutical industry"),
("Chemical industry"),
("Information technologies"),
("Leasing"),
("Human resources"),
("Management"),
("Quality management"),
("Marketing, advertising, PR"),
("The shop"),
("Insurance"),
("Agriculture and food"),
("Ancillary works"),
("Law and legislation"),
("Translation and Interpretation"),
("Services"),
("Construction and real estate"),
("Engineering"),
("Education, training, science, research"),
("State administration, self-government"),
("Technology, development"),
("Telecommunications"),
("Textile, leather and clothing industry"),
("Art and culture"),
("Water management, forestry, environment"),
("Top management"),
("Production"),
("Customer support"),
("Health and social work"),
("Journalism, printing, media");

INSERT INTO user (uidUser, nameUser, emailUser, cityUser, phoneUser, genderUser, pwdUser, specUser, IDtag_fk, bioUser) VALUES 
("test*", "Test", "test@gmail.com", "TestCity", "0", "man", "test", "test", 1, "Lorem ipsum"),
("test1*", "Test1", "test1@gmail.com", "TestCity1", "0", "woman", "test", "test", 1, "Lorem ipsum"),
("test2*", "Test2", "test2@gmail.com", "TestCity2", "0", "woman", "test", "test", 1, "Lorem ipsum"),
("zoltan_szoplak*", "Zoltan Szoplák", "zoltan.szoplak@pocitace.sk", "Košice", '+421 911 843 846', "man", "$2y$10$2.BB8WD1feaTkvx6RTGdbuHfnKNS7YEl7WEEEPlyfQSEX2R/5yDdq", "Software Engineer", 15, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Condimentum vitae sapien pellentesque habitant morbi tristique. In hendrerit gravida rutrum quisque non tellus. Quisque id diam vel quam elementum pulvinar etiam. In iaculis nunc sed augue lacus viverra vitae. Tempor id eu nisl nunc mi. Auctor urna nunc id cursus metus aliquam eleifend. Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. Odio aenean sed adipiscing diam donec adipiscing. Amet consectetur adipiscing elit pellentesque habitant morbi. A erat nam at lectus urna duis convallis convallis. Feugiat nisl pretium fusce id velit ut tortor pretium.

Ut consequat semper viverra nam libero justo laoreet sit amet. Posuere urna nec tincidunt praesent semper. Fringilla ut morbi tincidunt augue. Et netus et malesuada fames ac turpis egestas maecenas. Nisi est sit amet facilisis. Arcu felis bibendum ut tristique et egestas quis. Enim nunc faucibus a pellentesque sit amet porttitor. Tincidunt id aliquet risus feugiat in ante metus dictum. Lacinia at quis risus sed vulputate odio. Convallis aenean et tortor at. Non blandit massa enim nec dui nunc mattis enim ut. Amet porttitor eget dolor morbi. Enim nulla aliquet porttitor lacus luctus. Odio aenean sed adipiscing diam. Lacus viverra vitae congue eu consequat ac felis donec et. Proin nibh nisl condimentum id venenatis a. Nam libero justo laoreet sit amet cursus sit. In iaculis nunc sed augue. Erat nam at lectus urna duis convallis. Dis parturient montes nascetur ridiculus mus mauris vitae ultricies.

Mauris pharetra et ultrices neque ornare aenean euismod elementum. Eget velit aliquet sagittis id consectetur purus. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Lacus viverra vitae congue eu consequat ac felis donec. Mauris pharetra et ultrices neque ornare aenean euismod elementum nisi. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Dolor purus non enim praesent elementum. Fringilla ut morbi tincidunt augue interdum velit euismod. Sit amet purus gravida quis blandit turpis cursus. Diam donec adipiscing tristique risus nec feugiat in fermentum posuere. Risus viverra adipiscing at in tellus.

Elementum curabitur vitae nunc sed velit dignissim. Ut tortor pretium viverra suspendisse potenti nullam ac. Eu scelerisque felis imperdiet proin fermentum leo vel orci. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Magna ac placerat vestibulum lectus mauris ultrices eros. Purus non enim praesent elementum facilisis. At erat pellentesque adipiscing commodo elit at. Vulputate sapien nec sagittis aliquam malesuada. Ut porttitor leo a diam sollicitudin tempor id. A condimentum vitae sapien pellentesque habitant morbi. Imperdiet massa tincidunt nunc pulvinar. Magna eget est lorem ipsum dolor sit. Aliquet lectus proin nibh nisl condimentum id venenatis. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Curabitur vitae nunc sed velit. Nulla aliquet porttitor lacus luctus accumsan. Semper feugiat nibh sed pulvinar proin gravida. Egestas sed sed risus pretium quam. Quis hendrerit dolor magna eget est lorem ipsum dolor. Eu facilisis sed odio morbi quis commodo odio aenean sed.

Morbi tristique senectus et netus et malesuada. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Massa vitae tortor condimentum lacinia quis vel eros. Velit scelerisque in dictum non consectetur a erat. Sapien et ligula ullamcorper malesuada proin libero nunc consequat. Sed libero enim sed faucibus turpis in eu mi bibendum. Morbi leo urna molestie at. Amet nulla facilisi morbi tempus iaculis urna id volutpat lacus. Proin fermentum leo vel orci porta. Lectus magna fringilla urna porttitor rhoncus dolor purus non. Eu augue ut lectus arcu bibendum at varius. Praesent elementum facilisis leo vel fringilla est. Sit amet venenatis urna cursus eget nunc scelerisque viverra. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Facilisis volutpat est velit egestas. Orci porta non pulvinar neque laoreet suspendisse. Adipiscing tristique risus nec feugiat in fermentum. Nunc sed augue lacus viverra vitae.
"),
("mkohut12*", "Milan Kohút", "milankohut@gmail.com", "Košice", "0", "man", "$2y$10$2.BB8WD1feaTkvx6RTGdbuHfnKNS7YEl7WEEEPlyfQSEX2R/5yDdq", "DevOps Specialist", 15, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Condimentum vitae sapien pellentesque habitant morbi tristique. In hendrerit gravida rutrum quisque non tellus. Quisque id diam vel quam elementum pulvinar etiam. In iaculis nunc sed augue lacus viverra vitae. Tempor id eu nisl nunc mi. Auctor urna nunc id cursus metus aliquam eleifend. Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. Odio aenean sed adipiscing diam donec adipiscing. Amet consectetur adipiscing elit pellentesque habitant morbi. A erat nam at lectus urna duis convallis convallis. Feugiat nisl pretium fusce id velit ut tortor pretium.");

INSERT INTO company (uidComp, emailComp, nameComp, crnComp, addressComp, categoryComp, pwdComp, descComp) VALUES 
("test*", "test@gmail.com", "Test", "01234567", "test 01, Košice", "Testing Company", "test", "Lorem ipsum"),
("pocitacesk*", "info@pocitace.sk", "Pocitace s.r.o.", "53523881", "Hlavna 22, Košice", "IT Company", "$2y$10$tXhZb5CKo8GbBnIFc5OSpuFm57w8qqeQckEUKUlgKzZ1cvmgDs9Ui", "Lorem ipsum"),
("SPSEKE*", "spseke@gmail.com", "SPS Elektrotechnicka", "NI123456", "Komenskeho 44, Košice", "School", "wasd1234", "Lorem ipsum");