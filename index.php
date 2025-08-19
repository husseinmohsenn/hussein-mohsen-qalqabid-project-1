<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php'; ?>

  <div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto">
    <img src="images/2908.jpeg.webp" alt="">
      <h1 class="display-4 fw-normal">اوكازيوووووون</h1>
      <p class="lead fw-normal">متبقي علي التخفيضات:</p>
      <h3 id="demo"></h3>
      <p class="lead fw-normal">الحق العروووض</p>
      
    </div>
    <div class="container">
      <h3>منتجاتنا</h3>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">شاشة LG سمارت 65 بوصة</li>
          <li class="list-group-item">ثلاجة samsung قدم 18</li>
          <li class="list-group-item">غسالة 13 كيلو</li>
          <li class="list-group-item">Microwave</li>
          <li class="list-group-item">Toaster</li>
        </ul>
    </div>
  <div>



<div class="container">

<div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">ارسل</button>
</form>
</div>
</div>


<div class="loader-con">
  <div id="loader">
    <canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
  <button type="button" id="winner" class="btn btn-primary">
    اختر الفائز في السحب
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

            <h5 class="modal-title" id="modalLabel">الفائز في المسابقة</h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach($users as $user): ?>
            <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h1>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>


<?php include_once './parts/footer.php'; ?>