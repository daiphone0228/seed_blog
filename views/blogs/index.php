      <p><a href="add.php" class="btn btn-info">新規投稿</a></p>
      <?php foreach ($this->viewOptions as $viewOption): ?>
        <div class="msg">
          <p><a href="show.php"><?php echo $viewOption['title']; ?></a></p>
          <p class="day">
              <?php echo $viewOption['created']; ?>
            [<a href="edit.php" style="color: #00994C;">編集</a>]
            [<a href="" style="color: #F33;">削除</a>]
          </p>
        </div>
      <?php endforeach; ?>