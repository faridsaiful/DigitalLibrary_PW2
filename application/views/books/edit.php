<h2>Edit Book</h2>
<?= form_open('books/edit/' . $book->id); ?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="<?= $book->title; ?>" required>
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control" value="<?= $book->author; ?>" required>
    </div>
    <div class="form-group">
        <label>Publisher</label>
        <input type="text" name="publisher" class="form-control" value="<?= $book->publisher; ?>">
    </div>
    <div class="form-group">
        <label>Year</label>
        <input type="number" name="year" class="form-control" value="<?= $book->year; ?>">
    </div>
    <div class="form-group">
        <label>ISBN</label>
        <input type="text" name="isbn" class="form-control" value="<?= $book->isbn; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
<?= form_close(); ?>