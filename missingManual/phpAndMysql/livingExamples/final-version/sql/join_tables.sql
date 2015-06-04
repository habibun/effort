SELECT u.first_name, u.last_name, i.filename
  FROM users u, images i
 WHERE u.profile_pic_id = i.image_id;
