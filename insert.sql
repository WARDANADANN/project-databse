INSERT INTO roles (role_name,role_level) VALUES
("SISWA","SD"),
("SISWA","SMP"),
("SISWA","SMA"),
("SISWA","SMA"),
("SISWA","MAHASISWA"),
("ADMIN",null);

-- Insert some sample data into the users table
INSERT INTO users (user_name, user_num, user_email, user_password, role_id)
VALUES
  ('John Doe', '1234567890', 'johndoe@example.com', 'password123', 1),
  ('Jane Smith', '0987654321', 'janesmith@example.com', 'password456', 2),
  ('Bob Johnson', '5555555555', 'bobjohnson@example.com', 'password789', 3),
  ('Alice Williams', '1111111111', 'alicewilliams@example.com', 'passwordabc', 4),
  ('Tom Brown', '2222222222', 'tombrown@example.com', 'passworddef', 5),
  ('Sara Davis', '3333333333', 'saradavis@example.com', 'passwordghi', 6);