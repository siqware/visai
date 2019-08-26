<form class="modal-content" id="form-echo">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title">អេកូ</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-lg-12">
                    <div class="row mt-2">
                        <div class="col-md-3 form-group-float">
                            <label class="form-group-float-label">អ្នកជម្ងឺ</label>
                            <input type="hidden" name="patient_id" value="{{$patient->id}}">
                            <input placeholder="អ្នកជម្ងឺ" value="{{$patient->name}}" name="patient" class="form-control">
                        </div>
                        <div class="col-md-3 form-group-float">
                            <label>ភេទ</label>
                            <select id="" class="form-control">
                                <option value="ប្រុស" {{$patient->gender==='ប្រុស'?'selected':''}}>ប្រុស</option>
                                <option value="ស្រី" {{$patient->gender==='ស្រី'?'selected':''}}>ស្រី</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group-float">
                            <label class="form-group-float-label">អាយុ</label>
                            <input type="text" value="{{\Carbon\Carbon::createFromDate($patient->dob)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}" placeholder="អាយុ" class="form-control">
                        </div>
                        <div class="col-md-3 form-group-float">
                            <label class="form-group-float-label">អាស័យដ្ឋាន</label>
                            <input type="text" name="national_id" value="{{$patient->address}}" placeholder="អាស័យដ្ឋាន" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label>ចំណងជើង</label>
                            <div class="input-group">
                                <input type="hidden" name="title" id="echo-title">
                                <select data-placeholder="ចំណងជើង"​ type="text" class="form-control form-control-select2 border-right-0" data-fouc>
                                    <option></option>
                                </select>
                                <span class="input-group-append" id="echo-template-create" data-toggle="modal" data-target="#modal_sub_action">
												<span class="input-group-text text-success">
													<i class="icon-add"></i>
												</span>
											</span>
                            </div>
                        </div>
                        <div class="col-md-3 form-group-float">
                            <label>ប្រភេទ</label>
                            <select name="type" id="" class="form-control">
                                <option value="echo">echo</option>
                                <option value="xzaray">Xzaray</option>
                                <option value="scan">Scan</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group-float">
                            <label class="form-group-float-label">វេជ្ជបណ្ឌិត</label>
                            <input type="text" name="user" placeholder="វេជ្ជបណ្ឌិត" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>កាលបរិច្ឆេទ</label>
                            <input type="date" name="created_at" placeholder="កាលបរិច្ឆេទ" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-lg-3 text-right">រូបភាព</label>
                        <div class="col-lg-3" id="lfm" data-input="thumbnail" data-preview="holder">
                            <img id="holder" class="shadow" src="{{asset('ui/global_assets/images/image.png')}}" style="max-height:100px;">
                            <input id="thumbnail" value="ui/global_assets/images/image.png" type="hidden" name="attachment">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 form-group-float">
                            <label class="form-group-float-label">លទ្ធផល</label>
                            <textarea name="result" class="form-control summernote"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- echo print -->
        <div class="row p-4" id="echo-print-page">
            {{--get print data--}}
        </div>
        <!-- /Echo print -->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="icon-close2 mr-2"></i>ចាកចេញ</button>
        <button type="button" class="btn btn-info" id="echo-store"><i class="icon-floppy-disk mr-2"></i>រក្សារទុក</button>
        <button type="button" class="btn btn-success" id="echo-store-print">
            <i class="icon-printer mr-2"></i>
            រក្សារទុក និងបោះពុម្ព
        </button>
    </div>
</form>