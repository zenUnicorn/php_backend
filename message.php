<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php
if (isset($_SESSION['message'])) {
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hey!</strong><?= $_SESSION['message'];?>
    <button type="button" class="btn-close"  data-bs-dismiss="alert" arial-label="Close"></button>
</div>
<?php
unset($_SESSION['message']);
}
?>