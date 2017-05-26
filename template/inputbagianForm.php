
<form class="form-horizontal alert alert-warning" name="bagianList" id="empForm" ng-submit="insertInfo(bagian);" hidden>
    <h3 class="text-center">Tambah Bagian</h3>
    
    <div class="form-group">
        <label>Nama Bagian</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Bagian" ng-model="bagian.nama" value="" autofocus required />
    </div>
    <div class="form-group">
        <!----validasi --->
        <p class="text-danger" ng-show="bagianList.nama.$invalid && bagianList.nama.$dirty">Nama Bagian Kosong!</p>
    </div>
    <div class="form-group">
        <button class="btn btn-warning" ng-disabled="bagianList.$invalid">simpan</button>
    </div>
</form>


