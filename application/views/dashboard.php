  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>UPTD Pasar Jatirogo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <div class="table table-responsive">
            <form action="" method="post">
              <div class="col-md-2">
                  <div class="form-group">
                      <label>Tahun</label>
                      <!-- <input type="date" class="form-control" > -->
                      <select name="tahun" id="tahun" class="form-control">
                        <?php foreach ($t as $dt){ ?>
                          <option value="<?=substr(json_encode($dt), 1, 4)?>" <?php echo ($s[0] == substr(json_encode($dt), 1, 4)) ? "selected" : ""; ?>><?=substr(json_encode($dt), 1, 4)?></option>
                        <?php } ?>
                      </select>
                  </div>
                  <input type="submit" value="Cek" class="btn btn-primary">
              </div>
            </form>
          </div>
          <?php $jj = $s[1];?>

        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <script>
    window.onload = function () {
    
    var chart = new CanvasJS.Chart("chartContainer", {
      title: {
        text: "<?= "Data Harga per Komoditas Pada ".$s[0];?>"
      },
      axisY: {
        title: "Harga"
      },
      axisX:{
        title: "Komoditas"
      },
      data: [
        <?php foreach($jj as $key => $val) {
        echo"{
          animationEnabled: true,
          theme: 'light2',
          type: 'line',
          name: '".$key."',
          showInLegend: true,
          dataPoints:"; ?> <?php echo json_encode($val, JSON_NUMERIC_CHECK); ?>
      <?PHP echo "},"; };?>
     
    ]
    });
    chart.render();
    
    }
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
