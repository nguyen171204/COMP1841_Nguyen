<form action="process.php" method="post">
  <label for="username">Tên đăng nhập:</label>
  <input type="text" id="username" name="username" required>

  <label for="password">Mật khẩu:</label>
  <input type="password" id="password" name="password" required>

  <label for="gender">Giới tính:</label>
  <input type="radio" id="male" name="gender" value="male"> Nam
  <input type="radio" id="female" name="gender" value="female"> Nữ

  <label for="hobby">Sở thích:</label>
  <input type="checkbox" name="hobby" value="music"> Âm nhạc
  <input type="checkbox" name="hobby" value="sport"> Thể thao

  <label for="city">Thành phố:</label>
  <select name="city" id="city">
    <option value="hanoi">Hà Nội</option>
    <option value="hcm">Hồ Chí Minh</option>
  </select>

  <button type="submit">Đăng ký</button>
</form>
