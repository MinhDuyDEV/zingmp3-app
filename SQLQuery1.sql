SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `web-zingmp3` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `web-zingmp3`;

-- ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1

DROP TABLE IF EXISTS `Categories`;
CREATE TABLE Categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

DROP TABLE IF EXISTS `Songs`;
CREATE TABLE Songs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    artist VARCHAR(255),
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES Categories(id)
);

DROP TABLE IF EXISTS `Users`;
CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL
);

DROP TABLE IF EXISTS `Comments`;
CREATE TABLE Comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL,
    user_id INT,
    song_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (song_id) REFERENCES Songs(id)
);

DROP TABLE IF EXISTS `Playlists`;
CREATE TABLE Playlists (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

DROP TABLE IF EXISTS `PlaylistSongs`;
CREATE TABLE PlaylistSongs (
    playlist_id INT,
    song_id INT,
    FOREIGN KEY (playlist_id) REFERENCES Playlists(id),
    FOREIGN KEY (song_id) REFERENCES Songs(id)
);


INSERT INTO Categories (name)
VALUES ('Pop'), ('Rock'), ('Hip Hop'), ('Country'), ('Jazz');

INSERT INTO Songs (title, artist, category_id)
VALUES ('Song 1', 'Artist 1', 1),
       ('Song 2', 'Artist 2', 2),
       ('Song 3', 'Artist 3', 3),
       ('Song 4', 'Artist 4', 4),
       ('Song 5', 'Artist 5', 5);

INSERT INTO Users (username, password, role)
VALUES ('admin1', SHA1('password1'), 'admin'),
       ('user1', SHA1('password1'), 'user');

INSERT INTO Comments (content, user_id, song_id)
VALUES ('Great song!', 2, 1),
       ('I love this artist!', 2, 2),
       ('This is my favorite song!', 2, 3),
       ('Amazing lyrics!', 2, 4),
       ('Such a catchy tune!', 2, 5);

INSERT INTO Playlists (name, user_id)
VALUES ('My Favorites', 2),
       ('Road Trip', 2),
       ('Workout Mix', 2),
       ('Party Playlist', 2),
       ('Relaxing Music', 2);

INSERT INTO PlaylistSongs (playlist_id, song_id)
VALUES (1, 1), (1, 2), (1, 3), (1, 4), (1, 5);