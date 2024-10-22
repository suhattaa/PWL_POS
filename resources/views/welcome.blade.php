@extends('layouts.template')

@section('content')
<!-- Info boxes -->
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-box"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Produk</span>
                <span class="info-box-number">15</span>
                <small class="text-muted">Dari 5 kategori</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-money-bill"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Modal</span>
                <span class="info-box-number">Rp 395.000</span>
                <small class="text-muted">Total harga beli</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tags"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Potensi Pendapatan</span>
                <span class="info-box-number">Rp 520.000</span>
                <small class="text-success">Total harga jual</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-percent"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Margin Rata-rata</span>
                <span class="info-box-number">31.6%</span>
                <small class="text-muted">Selisih harga jual-beli</small>
            </div>
        </div>
    </div>
</div>

<!-- Tabel Produk dan Grafik -->
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Daftar Produk</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Margin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KS01</td>
                                <td>SnackTock</td>
                                <td>Kategori 1</td>
                                <td>Rp 9.000</td>
                                <td>Rp 10.000</td>
                                <td>11%</td>
                            </tr>
                            <tr>
                                <td>EK01</td>
                                <td>Kipas Angin</td>
                                <td>Kategori 2</td>
                                <td>Rp 60.000</td>
                                <td>Rp 75.000</td>
                                <td>25%</td>
                            </tr>
                            <tr>
                                <td>FN01</td>
                                <td>Meja</td>
                                <td>Kategori 3</td>
                                <td>Rp 45.000</td>
                                <td>Rp 50.000</td>
                                <td>11%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Distribusi Kategori</h3>
            </div>
            <div class="card-body">
                <canvas id="categoryChart" style="height: 300px;"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Statistik Kategori -->
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Produk per Kategori</h3>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kategori ID</th>
                                <th>Jumlah Produk</th>
                                <th>Total Modal</th>
                                <th>Total Harga Jual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kategori 1</td>
                                <td>3 produk</td>
                                <td>Rp 17.500</td>
                                <td>Rp 22.000</td>
                            </tr>
                            <tr>
                                <td>Kategori 2</td>
                                <td>3 produk</td>
                                <td>Rp 195.000</td>
                                <td>Rp 245.000</td>
                            </tr>
                            <tr>
                                <td>Kategori 3</td>
                                <td>3 produk</td>
                                <td>Rp 95.000</td>
                                <td>Rp 115.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Produk dengan Margin Tertinggi</h3>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Televisi (EK02)
                        <span class="badge bg-success rounded-pill">33.3% margin</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        LipCream (KC03)
                        <span class="badge bg-success rounded-pill">66.7% margin</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Hansaplast (KH03)
                        <span class="badge bg-success rounded-pill">50% margin</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
<style>
.info-box {
    transition: transform 0.3s;
}
.info-box:hover {
    transform: translateY(-5px);
}
.badge {
    font-size: 0.875rem;
}
</style>
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Grafik Kategori
const categoryCtx = document.getElementById('categoryChart').getContext('2d');
new Chart(categoryCtx, {
    type: 'doughnut',
    data: {
        labels: ['Makanan/Snack', 'Elektronik', 'Furniture', 'Kosmetik', 'Kesehatan'],
        datasets: [{
            data: [3, 3, 3, 3, 3],
            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b']
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom'
            }
        }
    }
});
</script>
@endpush