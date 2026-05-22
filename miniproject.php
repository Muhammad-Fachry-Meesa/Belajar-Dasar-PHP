<form method="POST">
    <input type="text" name="nama">
    <button type="submit">kirim</button>
</form>

<?php
if (isset($_POST['nama'])) {
    echo "hallo " . $_POST['nama'];
}
?>