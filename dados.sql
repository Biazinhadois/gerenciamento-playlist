SELECT current_user;
USE db_2td;

show tables;


CREATE TABLE musicas (
id INT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
artista VARCHAR(100) NOT NULL,
duracao TIME NOT NULL,
genero VARCHAR(100) NOT NULL
);

desc musicas;

drop table musicas;


SELECT * FROM musicas;

INSERT INTO musicas (id, nome, artista, duracao, genero) VALUES
(1, 'Good Graces', 'Sabrina Carpenter', '00:03:05', 'Pop/R&B'),
(2, 'Life Boat', 'RAYE', '00:04:15', 'Blues/Soul'),
(3, 'DNA', 'BTS', '00:03:43', 'K-Pop/EDM'),
(4, 'they don''t know ''bout us', 'BTS', '00:02:44', 'R&B / Alternative Pop'),
(5, 'Aliens', 'bts', '00:02:47', 'Synth-pop/R&B'),
(6, 'Fame is a Gun', 'Addison Rae', '00:03:03', 'Hyperpop/Dance-Pop'),
(7, 'Espresso', 'Sabrina Carpenter', '00:02:55', 'Pop/Disco'),
(8, 'Cool With You', 'NewJeans', '00:02:27', 'UK Garage/R&B'),
(9, 'Seven', 'Jungkook', '00:03:04', 'UK Garage/Pop'),
(10, 'Von dutch', 'Charli xcx', '00:02:44', 'Hyperpop/Electro-clash'),
(11, 'Ditto', 'NewJeans', '00:03:05', 'Jersey Club/Pop'),
(12, 'Standing Next to You', 'Jungkook', '00:03:26', 'Disco/Funk'),
(13, '360', 'Charli xcx', '00:02:13', 'Hyperpop/Electropop'),
(14, 'Pied Piper', 'BTS', '00:04:05', 'Nu-Disco/Pop'),
(15, 'Super Shy', 'NewJeans', '00:02:34', 'Drum and Bass/Bubblegum Pop'),
(16, 'Escapism.', 'RAYE', '00:04:32', 'R&B/Trap-Soul'),
(17, 'Water', 'Tyla', '00:03:20', 'Amapiano/R&B'),
(18, 'Good Luck, Babe!', 'Chappell Roan', '00:03:38', 'Synth-Pop'),
(19, 'Snooze', 'SZA', '00:03:21', 'R&B'),
(20, 'greedy', 'Tate McRae', '00:02:11', 'Pop/Dance'),
(21, 'Perfect Night', 'LE SSERAFIM', '00:02:39', 'UK Garage/Pop'),
(22, 'LUNCH', 'Billie Eilish', '00:02:59', 'Alt-Pop/Synth-Pop'),
(23, 'Nasty', 'Tinashe', '00:02:56', 'R&B/Dance'),
(24, 'Like Crazy', 'Jimin', '00:03:32', 'Synth-Pop/R&B'),
(25, 'Taste', 'Sabrina Carpenter', '00:02:37', 'Pop'),
(26, 'Apple', 'Charli xcx', '00:02:33', 'Electropop/Dance'),
(27, 'Magnetic', 'ILLIT', '00:02:40', 'Pluggnb/Dance-Pop'),
(28, 'Agora Hills', 'Doja Cat', '00:04:25', 'Hip-Hop/R&B'),
(29, 'HOT TO GO!', 'Chappell Roan', '00:03:04', 'Synth-Pop/Dance');
