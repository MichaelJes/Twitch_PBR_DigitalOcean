<div class="container">
    <h1>Books</h1>
    <h2>You are in the View: application/view/books/Index</h2>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of Books: <?php echo $amount_of_Books; ?></h3>
        <h3>Amount of Books (via AJAX)</h3>
        <div id="javascript-ajax-result-box"></div>
        <div>
            <button id="javascript-ajax-button">Click here to get the amount of Books via Ajax (will be displayed in #javascript-ajax-result-box ABOVE)</button>
        </div>
        <h3>List of songs (data from model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Book</td>
                <td>Version</td>
                <td>Release</td>
                <td>DELETE</td>
                <td>EDIT</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?php if (isset($book->id)) echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->bookname)) echo htmlspecialchars($book->bookname, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->version)) echo htmlspecialchars($book->version, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php if (isset($book->releaseDate)) echo htmlspecialchars($book->releaseDate, ENT_QUOTES, 'UTF-8'); ?></td>

                    </td>
                    <td><a href="<?php echo URL . 'books/deleteBook/' . htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'books/editbook/' . htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
