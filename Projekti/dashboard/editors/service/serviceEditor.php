        <form class="editor" action="../database/serviceValidation.php" method="post">
            <span class="editor-close">X</span>
            <div class="editor-content">
                <div class="editor-data-info" hidden>
                    <label>Service ID</label>
                    <input name="id" type="text">
                </div>
                <div class="editor-data-info">
                    <label>Title</label>
                    <input name="service-title" type="text" required>
                </div>
                <div class="editor-data-info">
                    <label>Description</label>
                    <textarea name="service-desc" type="text" rows="10" cols="28" required></textarea>
                </div>
            </div>
            <input type="submit" class="edit-submit" name="service-add">
        </form>