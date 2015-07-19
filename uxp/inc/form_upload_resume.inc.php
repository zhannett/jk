<p>Please submit your resume as a Word or PDF file.</p>
<form id="uploadresume" enctype="multipart/form-data" action="careers.php" method="post">
    <fieldset>
        <input type="hidden" name="MAX_FILE_SIZE" value="500000"/>
        <label for="userfile">Upload you resume:</label>
        <input type="file" name="userfile" id="userfile" size="55" />
        <input type="submit" name="submit" value="Upload Your Resume" id="btn_upload" />
    </fieldset>
</form>