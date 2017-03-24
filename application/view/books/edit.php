<div class="container">
    <h2>You are in the View: application/view/book/edit.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Edit a book</h3>
        <form action="<?php echo URL; ?>books/updatebook" method="POST">
            <label>Bookname</label>
            <input autofocus type="text" name="bookname" value="<?php echo htmlspecialchars($book->bookname, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Version</label>
            <input type="text" name="version" value="<?php echo htmlspecialchars($book->version, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>ReleaseDate</label>
            <input type="text" name="releaseDate" value="<?php echo htmlspecialchars($book->releaseDate, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="book_id" value="<?php echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_book" value="Update" />
        </form>
    </div>
</div>

