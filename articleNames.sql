CREATE TABLE articles.articles
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title text,
    theme text,
    description text,
    cover_img text,
    content text,
    time timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL
) charset=utf8mb4;
INSERT INTO articles.articles (id, title, theme, description, cover_img, content, time) VALUES (1, '庭马', null, null, null, null, '2018-08-16 14:29:10');