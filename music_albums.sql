create table if not exists music_albums
(
  album_id       int auto_increment,
  album_name     text     not null,
  release_time   date     null,
  author         text     null,
  album_genres   text     null,
  cover_path     text     null,
  al_description longtext null,
  constraint music_albums_id_index
  unique (album_id)
)
  charset = utf8mb4;

alter table music_albums
  add primary key (album_id);

INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (1, '跨时代', null, '周杰伦', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (2, 'Meteora', null, 'Linkin Park', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (3, '人生海海', null, '五月天', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (4, '万能青年旅店', null, '万能青年旅店', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (5, 'Mylo Xyloto', null, 'Coldplay', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (6, '第二人生', null, '五月天', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (7, 'Parachutes', null, 'Coldplay', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (8, 'A Rush of Blood to The Head', null, 'Coldplay', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (9, '后青春期的诗', null, '五月天', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (10, '七里香', null, '周杰伦', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (11, '神的孩子都在跳舞', null, '五月天', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (12, '海龟先生', null, '海龟先生', '', null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (13, 'American Idiot', null, 'Green Day', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (14, 'Insomniac', null, 'Green Day', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (15, '夏·狂热', null, '苏打绿', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (16, '叶惠美', null, '周杰伦', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (17, '自传', null, '五月天', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (18, 'Dookie', null, 'Green Day', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (19, 'We Sing, We Dance, We Steal Things.', null, 'Jason Mraz', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (20, 'Elastica', null, 'Elastica', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (21, '大人', null, '东京事变', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (22, 'All That You Can''t Leave Behind', null, 'U2', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (23, 'Definitely Maybe', null, 'Oasis', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (24, 'The Now Now', null, 'Gorillaz', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (25, 'Let Go', null, 'Avril Lavigne', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (26, 'The Great Escape', null, 'Blur', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (27, 'A+E', null, 'Graham Coxon', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (28, 'Harry Potter and The Chamber of Secrets', null, 'John Williams', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (29, 'Monster', null, 'R.E.M.', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (31, '范特西', null, '周杰伦', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (32, 'Sgt. Peppers Lonely Hearts Club Band', null, 'The Beatles', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (33, 'Friendly Fire', null, 'Sean Lennon', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (34, 'Bury The Hatchet', null, 'The Cranberries', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (35, 'The Velvet Underground & Nico', null, 'The Velvet Underground', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (36, 'Reincarnation', null, 're:plus', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (37, 'Hands All Over', null, 'Maroon 5', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (38, '看风景的人', null, '文雀', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (39, 'First The Town, Then The World', null, 'Bare Teeth', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (40, 'Nirvana', null, 'Nirvana', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (41, 'Anthems for Doomed Youth', null, 'The Libertines', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (42, 'What Did You Expect From The Vaccines?', null, 'The Vaccines', null, null, null);
INSERT INTO articles.music_albums (album_id, album_name, release_time, author, album_genres, cover_path, al_description) VALUES (43, 'OK Computer', null, 'Radiohead', null, null, null);


