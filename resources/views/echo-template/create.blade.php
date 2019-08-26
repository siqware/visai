<form class="modal-content" id="form-echo-template">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title">បន្ថែមគម្រូអេកូ</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-lg-12">
                    <div class="row mt-2">
                        <div class="col-md-12 form-group-float">
                            <label class="form-group-float-label">ចំណងជើង</label>
                            <input placeholder="ចំណងជើង" name="title" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 form-group-float">
                            <label class="form-group-float-label">គម្រូលទ្ធផល</label>
                            <textarea name="content" class="form-control summernote"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="icon-close2 mr-2"></i>ចាកចេញ</button>
        <button type="button" class="btn btn-success" id="echo-template-store">
            <i class="icon-floppy-disk mr-2"></i>
            រក្សារទុក
        </button>
    </div>
</form>