<div class="ratting-form-wrapper">
    <div class="ratting-form">
        <form action="index.php?act=addbinhluan" method="post" onsubmit="return validateForm()">
            <div class="row">
                <div class="col-md-12">
                    <div class="rating-form-style mb-15">
                        <input id="iduser" class="form-control" type="hidden" name="idtaikhoan" value="<?php echo isset($_SESSION['idtendangnhap']) ? $_SESSION['idtendangnhap'] : ''; ?>">
                        <input id="tendangnhap" class="form-control" type="hidden" value="<?php echo isset($_SESSION['tendangnhap']) ? $_SESSION['tendangnhap'] : ''; ?>" readonly>
                        <input id="idpro" class="form-control" type="hidden" name="idsanpham" value="<?php echo $_GET['id']; ?>">
                        <label>Đánh giá của bạn <span>*</span></label>
                        <textarea id="noidung" name="noidung" oninput="toggleSubmitButton()"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-submit">
                        <input id="ngaybinhluan" name="ngaybinhluan" type="hidden" value="<?= date('Y-m-d'); ?>">
                        <button id="submitBtn" class="btn btn-dark" name="guibinhluan" type="submit" disabled>Gửi</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function toggleSubmitButton() {
        const textarea = document.getElementById('noidung');
        const submitBtn = document.getElementById('submitBtn');
        submitBtn.disabled = textarea.value.trim() === '';
    }
</script>
