CREATE TABLE images (
  image_id    int          AUTO_INCREMENT PRIMARY KEY,
  filename    varchar(200) NOT NULL,
  mime_type   varchar(50)  NOT NULL,
  file_size   int          NOT NULL,
  image_data  mediumblob   NOT NULL
);
