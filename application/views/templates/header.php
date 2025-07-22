<!DOCTYPE html>
<html>
<head>
    <title>Digital Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('books'); ?>">Digital Library</a>
        <div class="navbar-nav">
            <a class="nav-link" href="<?= base_url('books'); ?>">Books</a>
            <a class="nav-link" href="<?= base_url('books/create'); ?>">Add Book</a>
        </div>
    </nav>
    <div class="container mt-4">
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
        <?php endif; ?>