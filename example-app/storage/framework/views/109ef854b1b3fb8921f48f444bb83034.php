<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(url('assets/plugins/fontawesome-free/css/all.min.css')); ?>"">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url('assets/dist/css/adminlte.min.css')); ?>">
  <style>
      .wrapper {
        background: #edebeb;
      }
  </style>
</head>
<body>
<div class="wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-12 text-center">
            <h1 class="font-weight-bold">Form</h1>
          </div>

        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Personal data</h3>
              </div>
              <form>

                <div class="card-body">
                  <div class="form-group">
                    <labelfor="fname">ชื่อ</labelfor=>
                    <input type="text" class="form-control" id="fname" placeholder="Enter first name" value="">
                  </div>
                  <div class="form-group">
                    <label for="lname">นามสกุล</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter last name" value="">
                  </div>
                  <div class="form-group">
                    <label for="birth">วัน/เดือน/ปี เกิด</label>
                    <input type="date" class="form-control" id="birth">
                  </div>
                  <div class="form-group">
                    <label for="age">อายุ</label>
                    <input type="number" class="form-control" id="age" placeholder="Enter your age" value="">
                  </div>
                  <div class="form-group row">
                    <label for="sex" class="col-lg-3 col-form-label">เพศ</label>

                        <label class="radio-inline">
                            <input type="radio" class="form-control mx-3" name="gender" id="male" checked>
                        </label>
                        <label class="mx-5">ชาย</label>

                        <label class="radio-inline">
                            <input type="radio" class="form-control mx-3" name="gender" id="female">
                        </label>
                        <label class="mx-5">หญิง</label>

                  </div>
                  <div class="form-group">
                    <label for="ImageFile">รูป</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="ImageFile">
                        <label class="custom-file-label" for="ImageFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="address">ที่อยู่</label>
                    <textarea type="textarea" class="form-control" id="address" placeholder="Enter your address"></textarea>
                  </div>
                   <div class="form-group">
                        <label for="color">สี</label>
                        <input type="color" class="form-control" id="color">
                  </div>
                  <div class="form-group row">
                    <label for="song" class="col-lg-3 col-form-label">แนวเพลงที่ชอบ</label>
                        <label class="radio-inline">
                            <input type="radio" class="form-control mx-3" name="song" id="forLife" checked>
                        </label>
                        <label class="mx-3">เพื่อชีวิต</label>

                        <label class="radio-inline">
                            <input type="radio" class="form-control mx-3" name="song" id="lukthung">
                        </label>
                        <label class="mx-3">ลูกทุ่ง</label>

                        <label class="radio-inline">
                            <input type="radio" class="form-control mx-3" name="song" id="others">
                        </label>
                        <label class="mx-3">อื่น ๆ</label>
                  </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="acceptData">
                    <label class="form-check-label" for="acceptData">ยินยอมให้เก็บข้อมูล</label>
                  </div>
                </div>

                <div class="card-footer">
                    <button type="reset" class="btn btn-danger">Reset</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/layouts/form.blade.php ENDPATH**/ ?>