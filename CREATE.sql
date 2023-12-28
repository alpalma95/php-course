DROP TABLE IF EXISTS "posts";
CREATE TABLE IF NOT EXISTS "posts" (id INTEGER PRIMARY KEY, title TEXT, body TEXT);
INSERT INTO posts ("title", "body")
VALUES ("Post 1", "This is the body of post 1"),
    ("Post 2", "This is the body of post 2"),
    ("Post 3", "This is the body of post 3")
RETURNING *;