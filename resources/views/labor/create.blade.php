<form class="modal-content" id="form-labor">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title">ពិនិត្យឈាម</h5>
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
                            <input placeholder="អ្នកជម្ងឺ" value="{{$patient->name}}" name="patient"
                                   class="form-control">
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
                            <input type="text"
                                   value="{{\Carbon\Carbon::createFromDate($patient->dob)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}"
                                   placeholder="អាយុ" class="form-control">
                        </div>
                        <div class="col-md-3 form-group-float">
                            <label class="form-group-float-label">អាស័យដ្ឋាន</label>
                            <input type="text" name="national_id" value="{{$patient->address}}" placeholder="អាស័យដ្ឋាន"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3 form-group-float">
                            <label class="form-group-float-label">Lab. Technician</label>
                            <input type="text" name="user" placeholder="Lab. Technician" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>កាលបរិច្ឆេទ</label>
                            <input type="date" name="created_at" placeholder="កាលបរិច្ឆេទ" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="row" id="condition-input">
                                <div class="col-lg-6">
                                    <fieldset>
                                        <legend class="font-weight-semibold"><i class="icon-user mr-2"></i> HAEMATOLOGY</legend>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">WBC -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="wbc" id="wbc"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        10 <sup>9</sup>/l
                                                    </div>
                                                    <div class="col-md-4">
                                                        (4.0-10.0)
                                                        <input type="hidden" min="4" max="10" id="condition-wbc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">RBC -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="rbc" id="rbc"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        10 <sup>12</sup>/l
                                                    </div>
                                                    <div class="col-md-4">
                                                        (4.2-6.2)
                                                        <input type="hidden" min="4.2" max="6.2" id="condition-rbc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">LYM -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="lym" id="lym"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        10 <sup>9</sup>/l
                                                    </div>
                                                    <div class="col-md-4">
                                                        (0.5-5.0)
                                                        <input type="hidden" min="0.5" max="5" id="condition-lym">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">MID -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="mid" id="mid"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        10 <sup>9</sup>/l
                                                    </div>
                                                    <div class="col-md-4">
                                                        (0.1-1.5)
                                                        <input type="hidden" min="0.1" max="1.5" id="condition-mid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">GRAN -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="gran" id="gran"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        10 <sup>9</sup>/l
                                                    </div>
                                                    <div class="col-md-4">
                                                        (1.2-8.0)
                                                        <input type="hidden" min="1.2" max="8.0" id="condition-grand">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">LYM% -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="lym_perc" id="lym_perc"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        %
                                                    </div>
                                                    <div class="col-md-4">
                                                        (15.0-50.0)
                                                        <input type="hidden" min="0.5" max="5" id="condition-lym_perc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">MID% -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="mid_perc" id="mid_perc"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        %
                                                    </div>
                                                    <div class="col-md-4">
                                                        (2.0-15.0)
                                                        <input type="hidden" min="2" max="15" id="condition-mid_perc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">GRAN% -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="gran_perc" id="gran_perc"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        %
                                                    </div>
                                                    <div class="col-md-4">
                                                        (35.0-80.0)
                                                        <input type="hidden" min="1.2" max="8.0" id="condition-grand">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">HGB -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="hgb" id="hgb"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        g/dl
                                                    </div>
                                                    <div class="col-md-4">
                                                        (12.0-18.0)
                                                        <input type="hidden" min="12" max="18" id="condition-hgb">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">HCT -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="hct" id="hct"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        %
                                                    </div>
                                                    <div class="col-md-4">
                                                        (37.0-50.0)
                                                        <input type="hidden" min="37" max="50" id="condition-hct">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">MCV -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="mcv" id="mcv"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        fl
                                                    </div>
                                                    <div class="col-md-4">
                                                        (75.0-100.0)
                                                        <input type="hidden" min="75" max="100" id="condition-mcv">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">MCH -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="mch" id="mch"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        pg
                                                    </div>
                                                    <div class="col-md-4">
                                                        (25.0-35.0)
                                                        <input type="hidden" min="25" max="35" id="condition-mch">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">MCHC -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="mchc" id="mchc"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        g/dl
                                                    </div>
                                                    <div class="col-md-4">
                                                        (32.0-36.0)
                                                        <input type="hidden" min="32" max="36" id="condition-mchc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">PLT -
                                                ....................:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" min="0" step="any" name="plt" id="plt"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        10<sup>9</sup>/dl
                                                    </div>
                                                    <div class="col-md-4">
                                                        (150.0-400.0)
                                                        <input type="hidden" min="150" max="400" id="condition-plt">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <legend class="font-weight-semibold"><i class="icon-user mr-2"></i> BIOCHEMISTRY
                                        </legend>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">Triglyceride -
                                                ..........:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" step="any" name="triglyceride" id="triglyceride"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        mg/dl
                                                    </div>
                                                    <div class="col-md-5">
                                                        (N < 150.0)
                                                        <input type="hidden" min="0" max="150" id="condition-triglyceride">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">Cholesterol Total -
                                                ..........:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" step="any" name="cholesterol" id="cholesterol"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        mg/dl
                                                    </div>
                                                    <div class="col-md-5">
                                                        (N < 200.0)
                                                        <input type="hidden" min="0" max="200" id="condition-cholesterol">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">Glucose -
                                                ..........:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" step="any" name="glucose" id="glucose"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        mg/dl
                                                    </div>
                                                    <div class="col-md-5">
                                                        (N: 75.00 - 115.0)
                                                        <input type="hidden" min="75" max="115" id="condition-glucose">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">Calcium -
                                                ..........:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" step="any" name="calcium" id="calcium"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        mg/dl
                                                    </div>
                                                    <div class="col-md-5">
                                                        (N: 8.6 - 10.0)
                                                        <input type="hidden" min="8.6" max="10" id="condition-calcium">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">Ac. Urique -
                                                ..........:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" step="any" name="ac_urique" id="ac-urique"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        mg/dl
                                                    </div>
                                                    <div class="col-md-5">
                                                        (N: 24.00 - 70.0)
                                                        <input type="hidden" min="24" max="70" id="condition-ac-urique">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">Creatinine -
                                                ..........:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" step="any" name="creatinine" id="creatinine"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        mg/dl
                                                    </div>
                                                    <div class="col-md-5">
                                                        (N: 0.5 - 12.0)
                                                        <input type="hidden" min="0.5" max="12" id="condition-creatinine">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">Magnesium -
                                                ..........:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" step="any" name="magnesium" id="magnesium"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        mg/dl
                                                    </div>
                                                    <div class="col-md-5">
                                                        (N: 1.6 - 3.0)
                                                        <input type="hidden" min="1.6" max="3" id="condition-magnesium">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">SGOT -
                                                ..........:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" step="any" name="sgot" id="sgot"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        µ/l
                                                    </div>
                                                    <div class="col-md-5">
                                                        (N: 5.0 - 45.0)
                                                        <input type="hidden" min="5" max="45" id="condition-sgot">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-0 align-items-end">
                                            <label class="col-lg-4 col-form-label text-right pb-0">SGPT -
                                                ..........:</label>
                                            <div class="col-lg-8">
                                                <div class="row align-items-end">
                                                    <div class="col-md-4">
                                                        <input type="number" step="any" name="sgpt" id="sgpt"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        µ/l
                                                    </div>
                                                    <div class="col-md-5">
                                                        (N: 5.0 - 35.0)
                                                        <input type="hidden" min="5" max="35" id="condition-sgpt">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-user mr-2"></i> SEROLOGY</legend>
                                <div class="form-group row m-0">
                                    <label class="col-lg-2 col-form-label text-right">CRP -
                                        ....................:</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <select name="crp" id="crp" class="form-control">
                                                    <option value="-999">Empty</option>
                                                    <option value="positive" class="text-danger">POSITIVE</option>
                                                    <option value="negative" class="text-success">NEGATIVE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row m-0">
                                    <label class="col-lg-2 col-form-label text-right">H.Pylori -
                                        ....................:</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <select name="h_pylori" id="h_pylori" class="form-control">
                                                    <option value="-999">Empty</option>
                                                    <option value="positive" class="text-danger">POSITIVE</option>
                                                    <option value="negative" class="text-success">NEGATIVE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row m-0">
                                    <label class="col-lg-2 col-form-label text-right">HbsAg -
                                        ....................:</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <select name="hbsag" id="hbsag" class="form-control">
                                                    <option value="-999">Empty</option>
                                                    <option value="positive" class="text-danger">POSITIVE</option>
                                                    <option value="negative" class="text-success">NEGATIVE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row m-0">
                                    <label class="col-lg-2 col-form-label text-right">HbsAb -
                                        ....................:</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <select name="hbsab" id="hbsab" class="form-control">
                                                    <option value="-999">Empty</option>
                                                    <option value="positive" class="text-danger">POSITIVE</option>
                                                    <option value="negative" class="text-success">NEGATIVE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row m-0">
                                    <label class="col-lg-2 col-form-label text-right">HCV -
                                        ....................:</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <select name="hcv" id="hcv" class="form-control">
                                                    <option value="-999">Empty</option>
                                                    <option value="positive" class="text-danger">POSITIVE</option>
                                                    <option value="negative" class="text-success">NEGATIVE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-user mr-2"></i> OTHER</legend>
                                <div class="form-group row m-0">
                                    <label class="col-lg-1 col-form-label text-right">សម្ពាធឈាម:</label>
                                    <div class="col-md-1">
                                        <input type="text" name="blood_pressure" class="form-control">
                                    </div>

                                    <label class="col-lg-1 col-form-label text-right">ជីពចរ:</label>
                                    <div class="col-md-1">
                                        <input type="number" step="any" name="pulse" class="form-control">
                                    </div>

                                    <label class="col-lg-1 col-form-label text-right">កម្តៅ:</label>
                                    <div class="col-md-1 input-group">
                                        <input type="number" step="any" name="heat" class="form-control">
                                        <span class="input-group-append">
                                <span class="input-group-text">C <sup>o</sup></span>
                            </span>
                                    </div>

                                    <label class="col-lg-1 col-form-label text-right">SP02:</label>
                                    <div class="col-md-1 input-group">
                                        <input type="number" step="any" name="sp_two" class="form-control">
                                        <span class="input-group-append">
                                <span class="input-group-text">%</span>
                            </span>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- echo print -->
        <div class="row p-4 font-size-xs" id="labor-print-page">
            {{--get print data--}}
        </div>
        <!-- /Echo print -->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="icon-close2 mr-2"></i>ចាកចេញ
        </button>
        <button type="button" class="btn btn-info" id="labor-store"><i class="icon-floppy-disk mr-2"></i>រក្សារទុក
        </button>
        <button type="button" class="btn btn-success" id="labor-store-print">
            <i class="icon-printer mr-2"></i>
            រក្សារទុក និងបោះពុម្ព
        </button>
    </div>
</form>