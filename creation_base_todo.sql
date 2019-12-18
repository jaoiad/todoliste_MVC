
create database if not exists todolist default character set utf8 collate utf8_general_ci;
use todolist;

set foreign_key_checks =0;

-- table tache
drop table if exists tache;
create table tache (
	tac_id int not null auto_increment primary key,
	tac_label varchar(50) not null,
	tac_date_heure datetime not null,
	tac_memo varchar(255),
	tac_archive varchar(50),
	tac_categorie int,
	tac_utilisateur int  
)engine=innodb;

-- table categorie
drop table if exists categorie;
create table categorie (
	cat_id int not null auto_increment primary key,
	cat_label varchar(50) not null 
)engine=innodb;

-- table utilisateur
drop table if exists utilisateur;
create table utilisateur (
	ut_id int not null auto_increment primary key,
    ut_nom varchar(50) not null,
	ut_prenom varchar(50) not null,
	ut_username varchar(50) unique not null,
	ut_passw varchar(255) not null
)engine=innodb;

-- contraintes
alter table tache add constraint cs1 foreign key (tac_categorie) references categorie(cat_id) on delete cascade;
alter table tache add constraint cs2 foreign key (tac_utilisateur) references utilisateur(ut_id) on delete cascade;
set foreign_key_checks =1;

-- jeu de donnees

insert into categorie values (1,"téléphoner" );
insert into categorie values (2,"envoyer un mail" );
insert into categorie values (3,"envoyer un courrier" );
insert into categorie values (4,"rencontrer" );
insert into categorie values (5,"rédiger un document" );
insert into categorie values (6,"aller à rendez-vous" );
insert into categorie values (7,"aller sur un site" );
insert into categorie values (8,"autre" );

