    drop DATABASE if exists shit;
    CREATE DATABASE `shit`;
    
    USE `shit`;
    
    CREATE TABLE `shittest1` (
        id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        steps VARCHAR(100) NOT NULL,
        mashineid int(55) NOT NULL,
        stepid int(55) NOT NULL
    );
    
    INSERT INTO `shittest1` (`steps`, `mashineid`, `stepid`) VALUES
        ('stop met werken', 1, 1),
        ('pak je mobiel', 1, 2),
        ('open clash', 1, 3),
        ('win de oorlog', 1, 4),
        ('jaja', 2, 1),
        ('world domination', 2, 2);
    
    
    create TABLE `gebruikers` (
        id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        gebruikersnaam VARCHAR(100) NOT NULL,
        wachtwoord VARCHAR(100) NOT NULL
    );
    INSERT INTO `gebruikers` (`gebruikersnaam`, `wachtwoord`) VALUES
    ('un', 'pw');
    