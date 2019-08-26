<form class="modal-content" id="form-patient">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title">កែប្រែ</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        <div class="col-md-12">
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">ឈ្មោះ:</label>
                <div class="col-lg-9">
                    <input type="text" name="name" value="{{$patient->name}}" placeholder="ឈ្មោះអ្នកជម្ងឺ" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">ភេទ:</label>
                <div class="col-lg-9">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input value="ប្រុស" type="radio" class="form-input-styled" name="gender" {{$patient->gender==='ប្រុស'?'checked':''}} data-fouc>
                            ប្រុស
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input value="ស្រី" type="radio" class="form-input-styled" {{$patient->gender==='ស្រី'?'checked':''}} name="gender" data-fouc>
                            ស្រី
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">ថ្ងៃខែឆ្នាំកំណើត:</label>
                <div class="col-lg-9">
                    <input type="date" name="dob" value="{{$patient->dob}}" placeholder="ថ្ងៃខែឆ្នាំកំណើត" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label pt-0">ទំនាក់ទំនង:</label>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-6 form-group-float">
                            <label class="form-group-float-label">លេខទូរស័ព្ទ</label>
                            <input type="text" name="tel" value="{{$patient->tel}}" placeholder="លេខទូរស័ព្ទ" class="form-control">
                        </div>

                        <div class="col-md-6 form-group-float">
                            <label class="form-group-float-label">លេខអត្តសញ្ញាណប័ណ្ឌ</label>
                            <input type="text" name="national_id" value="{{$patient->national_id}}" placeholder="លេខអត្តសញ្ញាណប័ណ្ឌ" class="form-control">
                        </div>
                        <div class="col-md-12 form-group-float mt-1">
                            <label class="form-group-float-label">អាស័យដ្ឋាន</label>
                            <input type="text" name="address" value="{{$patient->address}}" placeholder="អាស័យដ្ឋាន" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="icon-close2 mr-2"></i>បិទ</button>
        <button type="button" class="btn btn-success" data-id="{{$patient->id}}" id="patient-update">
            <i class="icon-sync mr-2"></i>
            កែប្រែ
        </button>
    </div>
</form>