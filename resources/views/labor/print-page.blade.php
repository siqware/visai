<div class="col-md-12 col-print-12 text-center">
    <img class="w-50" src="{{asset('images/labor.png')}}" alt="">
</div>
<div class="col-md-12 col-print-12">
    <p class="text-center font-size-lg font-weight-bold">
        <i class="icon-map"></i> ផ្លូវលេខ ៥៦A ភូមិខ្លែងពណ៌ ឃំុស្លក្រាម ស្រុកស្វាយចេក ខេត្តបន្ទាយមានជ័យ
        ជាប់នឹងមណ្ឌល់សុខភាពស្លក្រាម
        <br>
        <i class="icon-phone"></i> 012 988 025 / 070 6666 09 / 088 5555 450
        <i class="icon-mail5"></i> visaisensok168@gmail.com
    </p>
</div>
<table width="100%" class="table mt-1 font-size-lg table-sm font-weight-bold">
    <tr class="py-2">
        <td>ឈ្មោះ (Name): {{$labor->patient->name}}</td>
        <td>ភេទ (Sex): {{$labor->patient->gender}}</td>
        <td>អាយុ (Age): {{\Carbon\Carbon::createFromDate($labor->patient->dob)->diff(\Carbon\Carbon::now())->format('%y years')}}</td>
    </tr>
    <tr class="py-2">
        <td>អាស័យដ្ឋាន (Address): {{$labor->patient->address}}</td>
        <td>កាលបរិច្ឆេទ (Date): {{$labor->created_at}}</td>
        <td></td>
    </tr>
</table>
<div class="col-md-12 col-print-12 my-2">
    <div class="row border-top-1 border-bottom-1">
        <div class="col-md-2 col-print-2">
            TEST NAME
        </div>
        <div class="col-md-3 col-print-3 ml-2">
            RESULT
        </div>
        <div class="col-md-3 col-print-3 ml-3">
            UNIT
        </div>
        <div class="col-md-3 col-print-3 ml-4">
            PREFERENCE RANGE
        </div>
    </div>
</div>
<div class="col-md-12 col-print-12">
    <fieldset>
        <legend class="font-weight-semibold mb-0">HAEMATOLOGY</legend>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">WBC - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="wbc" value="{{$labor->wbc}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        10 <sup>9</sup>/l
                    </div>
                    <div class="col-md-4 col-print-4">
                        (4.0-10.0)
                        <input readonly type="hidden" min="4" max="10" id="condition-wbc">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">RBC - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="rbc" value="{{$labor->rbc}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        10 <sup>12</sup>/l
                    </div>
                    <div class="col-md-4 col-print-4">
                        (4.2-6.2)
                        <input readonly type="hidden" min="4.2" max="6.2" id="condition-rbc">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">LYM - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="lym" value="{{$labor->lym}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        10 <sup>9</sup>/l
                    </div>
                    <div class="col-md-4 col-print-4">
                        (0.5-5.0)
                        <input readonly type="hidden" min="0.5" max="5" id="condition-lym">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">MID - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="mid" value="{{$labor->mid}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        10 <sup>9</sup>/l
                    </div>
                    <div class="col-md-4 col-print-4">
                        (0.1-1.5)
                        <input readonly type="hidden" min="0.1" max="1.5" id="condition-mid">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">GRAN - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="gran" value="{{$labor->gran}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        10 <sup>9</sup>/l
                    </div>
                    <div class="col-md-4 col-print-4">
                        (1.2-8.0)
                        <input readonly type="hidden" min="1.2" max="8.0" id="condition-grand">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">LYM% - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="lym_perc" value="{{$labor->lym_perc}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        %
                    </div>
                    <div class="col-md-4 col-print-4">
                        (15.0-50.0)
                        <input readonly type="hidden" min="0.5" max="5" id="condition-lym_perc">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">MID% - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="mid_perc" value="{{$labor->mid_perc}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        %
                    </div>
                    <div class="col-md-4 col-print-4">
                        (2.0-15.0)
                        <input readonly type="hidden" min="2" max="15" id="condition-mid_perc">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">GRAN% - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="gran_perc" value="{{$labor->gran_perc}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        %
                    </div>
                    <div class="col-md-4 col-print-4">
                        (35.0-80.0)
                        <input readonly type="hidden" min="1.2" max="8.0" id="condition-grand">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">HGB - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="hgb" value="{{$labor->hgb}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        g/dl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (12.0-18.0)
                        <input readonly type="hidden" min="12" max="18" id="condition-hgb">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">HCT - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="hct" value="{{$labor->hct}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        %
                    </div>
                    <div class="col-md-4 col-print-4">
                        (37.0-50.0)
                        <input readonly type="hidden" min="37" max="50" id="condition-hct">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">MCV - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="mcv" value="{{$labor->mcv}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        fl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (75.0-100.0)
                        <input readonly type="hidden" min="75" max="100" id="condition-mcv">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">MCH - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="mch" value="{{$labor->mch}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        pg
                    </div>
                    <div class="col-md-4 col-print-4">
                        (25.0-35.0)
                        <input readonly type="hidden" min="25" max="35" id="condition-mch">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">MCHC - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="mchc" value="{{$labor->mchc}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        g/dl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (32.0-36.0)
                        <input readonly type="hidden" min="32" max="36" id="condition-mchc">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">PLT - ....................:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" min="0" step="any" name="plt" value="{{$labor->plt}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        10<sup>9</sup>/dl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (150.0-400.0)
                        <input readonly type="hidden" min="150" max="400" id="condition-plt">
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend class="font-weight-semibold mb-0">BIOCHEMISTRY
        </legend>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">Triglyceride - ..........:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" step="any" name="triglyceride" value="{{$labor->triglyceride}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        mg/dl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (N
                        < 150.0) <input readonly type="hidden" min="0" max="150" id="condition-triglyceride">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">Cholesterol Total - ..........:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" step="any" name="cholesterol" value="{{$labor->cholesterol}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        mg/dl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (N
                        < 200.0) <input readonly type="hidden" min="0" max="200" id="condition-cholesterol">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">Glucose - ..........:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" step="any" name="glucose" value="{{$labor->glucose}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        mg/dl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (N: 75.00 - 115.0)
                        <input readonly type="hidden" min="75" max="115" id="condition-glucose">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">Calcium - ..........:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" step="any" name="calcium" value="{{$labor->calcium}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        mg/dl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (N: 8.6 - 10.0)
                        <input readonly type="hidden" min="8.6" max="10" id="condition-calcium">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">Ac. Urique - ..........:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" step="any" name="ac_urique" value={{$labor->ac_urique}} class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        mg/dl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (N: 24.00 - 70.0)
                        <input readonly type="hidden" min="24" max="70" id="condition-ac-urique">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">Creatinine - ..........:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" step="any" name="creatinine" value="{{$labor->creatinine}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        mg/dl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (N: 0.5 - 12.0)
                        <input readonly type="hidden" min="0.5" max="12" id="condition-creatinine">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">Magnesium - ..........:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" step="any" name="magnesium" value="{{$labor->magnesium}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        mg/dl
                    </div>
                    <div class="col-md-4 col-print-4">
                        (N: 1.6 - 3.0)
                        <input readonly type="hidden" min="1.6" max="3" id="condition-magnesium">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">SGOT - ..........:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" step="any" name="sgot" value="{{$labor->sgot}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        µ/l
                    </div>
                    <div class="col-md-4 col-print-4">
                        (N: 5.0 - 45.0)
                        <input readonly type="hidden" min="5" max="45" id="condition-sgot">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row m-0 align-items-end">
            <label class="col-lg-2 col-print-2 col-form-label text-right pb-0">SGPT - ..........:
            </label>
            <div class="col-lg-10 col-print-10">
                <div class="row align-items-end">
                    <div class="col-md-4 col-print-4">
                        <input readonly type="number" step="any" name="sgpt" value="{{$labor->sgpt}}" class="form-control form-control-sm p-0 h-auto">
                    </div>
                    <div class="col-md-4 col-print-4">
                        µ/l
                    </div>
                    <div class="col-md-4 col-print-4">
                        (N: 5.0 - 35.0)
                        <input readonly type="hidden" min="5" max="35" id="condition-sgpt">
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="row">
        <div class="col-md-6 col-print-6">
            <fieldset>
                <legend class="font-weight-semibold mb-0">SEROLOGY</legend>
                <div class="form-group row m-0">
                    <label class="col-lg-4 col-print-4 col-form-label text-right">CRP - ....................:
                    </label>
                    <div class="col-lg-8 col-print-8">
                        <div class="row">
                            <div class="col-md-4 col-print-4">
                                <select class="form-control form-control-sm p-0 h-auto">
                                    <option value="-999" {{$labor->crp==='-999'?'selected':''}}>Empty</option>
                                    <option value="positive" {{$labor->crp==='positive'?'selected':''}} class="text-danger">POSITIVE</option>
                                    <option value="negative" {{$labor->crp==='negative'?'selected':''}} class="text-success">NEGATIVE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row m-0">
                    <label class="col-lg-4 col-print-4 col-form-label text-right">H.Pylori - ....................:
                    </label>
                    <div class="col-lg-8 col-print-8">
                        <div class="row">
                            <div class="col-md-4 col-print-4">
                                <select class="form-control form-control-sm p-0 h-auto">
                                    <option value="-999" {{$labor->h_pylori==='-999'?'selected':''}}>Empty</option>
                                    <option value="positive" {{$labor->h_pylori==='positive'?'selected':''}} class="text-danger">POSITIVE</option>
                                    <option value="negative" {{$labor->h_pylori==='negative'?'selected':''}} class="text-success">NEGATIVE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row m-0">
                    <label class="col-lg-4 col-print-4 col-form-label text-right">HbsAg - ....................:
                    </label>
                    <div class="col-lg-8 col-print-8">
                        <div class="row">
                            <div class="col-md-4 col-print-4">
                                <select class="form-control form-control-sm p-0 h-auto">
                                    <option value="-999" {{$labor->hbsag==='-999'?'selected':''}}>Empty</option>
                                    <option value="positive" {{$labor->hbsag==='positive'?'selected':''}} class="text-danger">POSITIVE</option>
                                    <option value="negative" {{$labor->hbsag==='negative'?'selected':''}} class="text-success">NEGATIVE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row m-0">
                    <label class="col-lg-4 col-print-4 col-form-label text-right">HbsAb - ....................:
                    </label>
                    <div class="col-lg-8 col-print-8">
                        <div class="row">
                            <div class="col-md-4 col-print-4">
                                <select class="form-control form-control-sm p-0 h-auto">
                                    <option value="-999" {{$labor->hbsab==='-999'?'selected':''}}>Empty</option>
                                    <option value="positive" {{$labor->hbsab==='positive'?'selected':''}} class="text-danger">POSITIVE</option>
                                    <option value="negative" {{$labor->hbsab==='negative'?'selected':''}} class="text-success">NEGATIVE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row m-0">
                    <label class="col-lg-4 col-print-4 col-form-label text-right">HCV - ....................:
                    </label>
                    <div class="col-lg-8 col-print-8">
                        <div class="row">
                            <div class="col-md-4 col-print-4">
                                <select class="form-control form-control-sm p-0 h-auto">
                                    <option value="-999" {{$labor->hcv==='-999'?'selected':''}}>Empty</option>
                                    <option value="positive" {{$labor->hcv==='positive'?'selected':''}} class="text-danger">POSITIVE</option>
                                    <option value="negative" {{$labor->hcv==='negative'?'selected':''}} class="text-success">NEGATIVE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="col-md-6 col-print-6 pt-3">
            <div class="form-group row m-0">
                <label class="col-md-3 col-print-3 col-form-label text-right py-0">សម្ពាធឈាម:</label>
                <div class="col-md-3 col-print-3">
                    <input readonly type="text" value="{{$labor->blood_pressure}}" class="form-control form-control-sm p-0 h-auto other">
                </div>

                <label class="col-md-3 col-print-3 col-form-label text-right py-0">ជីពចរ:</label>
                <div class="col-md-3 col-print-3">
                    <input readonly type="number" step="any" value="{{$labor->pulse}}" class="form-control form-control-sm p-0 h-auto other">
                </div>

                <label class="col-md-3 col-print-3 col-form-label text-right py-0">កម្តៅ:</label>
                <div class="col-md-3 col-print-3 input-group">
                    <input readonly type="number" step="any" value="{{$labor->heat}}" class="form-control form-control-sm p-0 h-auto other">
                    <span class="input-group-append">
                                <span class="input-group-text py-0">C <sup>o</sup></span>
                    </span>
                </div>

                <label class="col-md-3 col-print-3 col-form-label text-right py-0">SP02:</label>
                <div class="col-md-3 col-print-3 input-group">
                    <input readonly type="number" step="any" value="{{$labor->sp_two}}" class="form-control form-control-sm p-0 h-auto other">
                    <span class="input-group-append">
                                <span class="input-group-text py-0">%</span>
                    </span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 col-print-12 text-right">
                    <p class="font-size-lg">Lab.Technician</p>
                    <br>
                    <br>
                    <br>
                    <p class="font-weight-bold font-size-lg">Tun Cham Roeun</p>
                </div>
            </div>
        </div>
    </div>
</div>