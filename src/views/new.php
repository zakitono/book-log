<h2 class="h3 text-dark mb-4">読書ログの登録</h2>
<form action="create.php" method="POST">
    <?php if (count($errors)) : ?>
        <ul class="text-danger">
            <?php foreach ($errors as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <div class="form-group">
        <label for="title">書籍名</label>
        <input type="text" id="title" name="title" value="<?php echo $review['title'] ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="author">著者名</label>
        <input type="text" id="author" name="author" value="<?php echo $review['author'] ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>読書状況</label>
        <div class="form-group">
            <input type="radio" name="status" id="status1" value="未読" <?php echo ($review['status'] === '未読') ? 'checked' : ''; ?>>
            <label for="status1">未読</label>
            <input type="radio" name="status" id="status2" value="途中" <?php echo ($review['status'] === '途中') ? 'checked' : ''; ?>>
            <label for="status2">途中</label>
            <input type="radio" name="status" id="status3" value="読了" <?php echo ($review['status'] === '読了') ? 'checked' : ''; ?>>
            <label for="status3">読了</label>
        </div>
    </div>
    <div class="form-group">
        <label for="score">評価</label>
        <input type="text" name="score" id="score" value="<?php echo $review['score'] ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="summary">感想</label>
        <textarea type="text" name="summary" id="summary" rows="10" class="form-control"><?php echo $review['summary'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">登録する</button>
</form>
