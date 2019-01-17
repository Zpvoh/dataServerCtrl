create table musics
(
  song_id                  int auto_increment
    primary key,
  name                text     not null,
  genre               text     null,
  album_id            int      null,
  song_cover_path     text     null,
  description         longtext null,
  relative_article_id int      null,
  song_path           text     null,
  constraint musics_album
  foreign key (album_id) references music_albums (album_id),
  constraint musics_articles_id
  foreign key (relative_article_id) references articles (id)
)charset = utf8mb4;


