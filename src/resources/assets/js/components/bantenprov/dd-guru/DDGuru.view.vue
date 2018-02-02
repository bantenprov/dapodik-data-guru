<template>
  <div>

    <div class="card mb-3">
      <div class="card-header">Grafik Produk Domestik Regional Bruto</div>
      <div class="card-body">
        <echarts-angka-harapan-hidup></echarts-angka-harapan-hidup>
      </div><!-- /.card-body -->
    </div><!-- /.card -->

    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Grafik Kota</div>
          <div class="card-body">
            <echarts-angka-harapan-hidup-kota></echarts-angka-harapan-hidup-kota>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Grafik Tahunan</div>
          <div class="card-body">
            <echarts-angka-harapan-hidup-tahun></echarts-angka-harapan-hidup-tahun>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div>
    </div>

  </div>
</template>
