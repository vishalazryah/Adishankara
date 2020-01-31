<aside>
  <div class="box">
    <div class="title">Governing</div>
    <ul>
      <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'patron' ? 'active' : '' ?>"><a href="patron.php">Patron</a></li>
      <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'ceo_administrator' ? 'active' : '' ?>"><a href="ceo_administrator.php">Ceo & Administrator</a></li>
      <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>"><a href="">Organizational Stracture</a></li>
      <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'board_of_governors' ? 'active' : '' ?>"><a href="board_of_governors.php">Board Of Governors</a></li>
      <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'trust' ? 'active' : '' ?>"><a href="trust.php">Adi Shankara Trust</a></li>
      <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>"><a href="">Academic Council</a></li>
    </ul>
  </div>
</aside>
