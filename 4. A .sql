1.
SELECT * FROM course;

2.
SELECT * FROM author
INNER JOIN 
course ON author.id = course.id_author 
INNER JOIN 
content ON author.id = content.id_course ;

3.
SELECT * FROM author 
INNER JOIN 
course ON author.id = course.id_author 
INNER JOIN
content ON author.id = content.id_course WHERE type='Music' ORDER BY id_author;

4.
INSERT INTO `author` (`id`, `name_author`) VALUES (NULL, 'Jhon Doe');
INSERT INTO `course` (`id`, `name_course`, `thumbnail`, `duration`, `description`) VALUES (NULL, 'Motivation','thumbnail3.jpg','20 menit','Belajar jangan setengah-setengah');
INSERT INTO `content` (`id`, `name_content`, `video_link`, `type`) VALUES (NULL, 'Motivation For Young', 'https://youtu.be/hImAmM5-Fpg', 'Motivation')
