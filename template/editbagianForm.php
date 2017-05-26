
<form class="form-horizontal alert alert-warning" name="bagianList" id="editForm" ng-submit="UpdateBagian(editBagian);" hidden>
    <h3 class="text-center">Edit Bagian</h3>
    <input type="hidden" name="id" ng-model="bagianInfo.id">
    <div class="form-group">
        <label>Nama Bagian</label>
        <input type="text" name="nama_bagian" class="form-control" placeholder="Nama Bagian" ng-model="bagianInfo.nama" value="" autofocus required />
    </div>
    <div class="form-group">
        <!----validasi --->
        <p class="text-danger" ng-show="bagianList.nama.$invalid && bagianList.nama.$dirty">Nama Bagian Kosong!</p>
    </div>
    <div class="form-group">
        <button class="btn btn-warning" ng-disabled="bagianList.$invalid">simpan</button>
    </div>
</form>


