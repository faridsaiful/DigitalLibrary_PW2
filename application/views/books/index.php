<h2>Book List</h2>
<form action="<?= base_url('books'); ?>" method="get" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search by title or author" value="<?= $this->input->get('search'); ?>">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </div>
</form>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Year</th>
            <th>ISBN</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $book->title; ?></td>
                <td><?= $book->author; ?></td>
                <td><?= $book->publisher; ?></td>
                <td><?= $book->year; ?></td>
                <td><?= $book->isbn; ?></td>
                <td>
                    <a href="<?= base_url('books/edit/' . $book->id); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?= base_url('books/delete/' . $book->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $pagination; ?>