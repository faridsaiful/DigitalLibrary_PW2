<h2>Add New Book</h2>
<?= form_open('books/create'); ?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Publisher</label>
        <input type="text" name="publisher" class="form-control">
    </div>
    <div class="form-group">
        <label>Year</label>
        <input type="number" name="year" class="form-control">
    </div>
    <div class="form-group">
        <label>ISBN</label>
        <input type="text" name="isbn" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
<?= form_close(); ?>