ALTER TABLE users
        ADD username VARCHAR(32) NOT NULL
      AFTER user_id,
        ADD password VARCHAR(16) NOT NULL
      AFTER username;
