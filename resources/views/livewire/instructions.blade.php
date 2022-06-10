<div>
    <div class="col-md-12 ml-5">
        <div class="form-group">
            <div class="form-group light-grey">
                <label for="">How many tax returns should we prepare for you?</label>

                <div class="mt-4">
                    <input type="radio" class="btn-check form-check-input " name="options-outlined"
                        id="success-outlined" autocomplete="off" value='1' onchange="" @if(session()->has('instructions')) disabled @if(session('instructions')['requestType']=='single') checked @php $requestType = 'single' @endphp @endif  @endif>
                    <label wire:click="$emit('selectYear', 'single' )"
                        class="btn btn-outline-secondary mr-3 btn-site-primary" for="success-outlined">One Year</label>

                    <input type="radio" class="btn-check form-check-input" name="options-outlined" id="danger-outlined"
                        autocomplete="off" onchange="" value='2' @if(session()->has('instructions')) disabled @if(session('instructions')['requestType']=='multiple') checked @php $requestType = 'multiple' @endphp @endif @endif>
                    <label wire:click="$emit('selectYear', 'multiple' )"
                        class="btn btn-outline-secondary btn-site-primary" for="danger-outlined">More Than One
                        Year</label>
                </div>

            </div>
        </div>
    </div>

    @if($requestType == 'single')
    <div id="singleForm" class="class_hidden">
        <form action="includes/filing_years.inc.php" method="POST">

            <div class="row mt-5">
                <div class="col-md-12 ml-5 mt-3">
                    <div class="form-group">
                        <div class="light-grey">
                            <label for="">Which year would you like us to prepare</label><br /><br />
                            @foreach($years as $year)
                            <input type="radio" class="btn-check" id="btn-check-1-outlined-{{$year}}" autocomplete="off"
                                name="year" value="{{ $year }}" @if(session()->has('instructions')) disabled  @if(session('instructions')['selectedYear']==$year) checked @endif @endif>
                            <label wire:click="$emit('setTaxYear', '{{$year}}' )"
                                class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="btn-check-1-outlined-{{$year}}">
                                {{$year}}
                                @if(session()->has('instructions'))  @if(session('instructions')['completedYears'][0]==$year) <i class="fa fa-check" style="display: inline; float: right;"></i> @endif @endif
                            </label>
                            @endforeach
                        </div>
                        <p> @error('selectedYear') <span class="error text-danger">{{ $message }}</span> @enderror</p>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12 ml-5">
                    <div class="form-group">

                        <p class="light-grey">@if(session()->has('instructions'))Great, lets continue with {{ @session('instructions')['CurrentTaxFilingYear'] }} @else Great, lets start with {{$selectedYear}} @endif</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="row mr-auro">
                        <div class="mr-5 button_font_small">
                            <button wire:click="post" type="button"
                                class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white mb-5 mt-5 button_font_small">General
                                Question
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>


    </div>

    @endif


    @if($requestType == 'multiple')
    <div id="singleForm" class="class_hidden">
        <form action="includes/filing_years.inc.php" method="POST">

            <div class="row mt-5">
                <div class="col-md-12 ml-5 mt-3">
                    <div class="form-group">
                        <div class="light-grey">
                            <label for="">Which year would you like us to prepare</label><br /><br />
                            <div class="multi-year-options">
                                 @foreach($years as $year)
                                    <div class="multi-year-btn-container">
                                        @if(session()->has('instructions')) @if(session('instructions')['completedYears'] !='' && in_array($year, session('instructions')['completedYears'])) <i class="fa fa-check completed-year-check-mark"></i> @endif @endif
                                        <div class="multi-year-btn action">
                                            <label>
                                                <input @if(session()->has('instructions')) disabled @else wire:model="multipleSelectedYear" @endif type="checkbox" value="{{$year}}"  id="year-{{$year}}" name="year[]" @if(session()->has('instructions') && in_array($year, session('instructions')['selectedYear'])) checked @endif>
                                                <span>
                                                    {{$year}}
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <p> @error('selectedYear') <span class="error text-danger">{{ $message }}</span> @enderror</p>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12 ml-5">
                    <div class="form-group">

                        <p class="light-grey">@if(session()->has('instructions'))Great, lets continue with {{ @session('instructions')['CurrentTaxFilingYear'] }} @else Great, lets start with
                            @if (count($multipleSelectedYear)>0)
                               @php sort($multipleSelectedYear); echo $multipleSelectedYear[0]; @endphp
                            @endif
                            @endif
                        </p>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="row mr-auro">
                        <div class="mr-5 button_font_small">
                            <button wire:click="post" type="button"
                                class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white mb-5 mt-5 button_font_small">General
                                Question
                            </button>
                        </div>
                    </div>
                </div>
            </div>





        </form>


    </div>

    @endif

</div>
