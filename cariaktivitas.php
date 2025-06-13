<?php
include_once("connection/fungsi.php");
cek_login();
include_once("header.php");
?>

<div class="container my-5">
    <h4 class="fw-bold mb-4 text-center">Cari Aktivitas, 4 aktivitas membutuhkan bantuan</h4>

    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-center">
            <div class="col-md-10 col-lg-8 mb-4" style="border-radius: 5px; border: 2px solid #6f42c1;">
                <form id="form-cari" class="w-100">
                    <input type="text" id="keyword" name="keyword" class="form-control border-0 shadow-none" placeholder="Cari aktivitas" autocomplete="off">
                </form>
            </div>
        </div>
    </div>

    <div id="hasil-aktivitas">
        <?php include_once("aktivitas.php") ?>
    </div>
</div>

<?php include_once("footer.php") ?>

<!-- AJAX Script -->
<script>
    document.getElementById("keyword").addEventListener("keyup", function() {
        const keyword = this.value;

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "aktivitas.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("hasil-aktivitas").innerHTML = this.responseText;
            }
        };

        xhr.send("keyword=" + encodeURIComponent(keyword));
    });
</script>