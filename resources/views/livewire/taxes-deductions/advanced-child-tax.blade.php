<div>

    <div class="row mt-4 stepwizard">
        <div class="col-md-12 ">
           <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb cs-breadcrumbs">

                 <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
                  <a class="light-grey" href="#"> Advanced child tax credit payments received </a></li>
              </ol>
            </nav>
        </div>
      </div>

    {{-- Section 1 --}}
    <div class="{{ $currentStep != 1 ? 'display-none' : '' }} " id="step-1">
        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-group light-grey">
                    <label class="mb-2" for="">Have you received advanced child tax credit payments?
                            @error('DidYouReceiveAdvanceChildTax')<span class="error">*</span> @enderror
                        </label><br/>
                   <input type="radio" wire:model="DidYouReceiveAdvanceChildTax"  class="btn-check form-check-input " name="DidYouReceiveAdvanceChildTax" id="DidYouReceiveAdvanceChildTaxYes"  value='yes' >
                        <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                        for="DidYouReceiveAdvanceChildTaxYes">Yes</label>

                        <input wire:model="DidYouReceiveAdvanceChildTax" type="radio" class="btn-check form-check-input" name="DidYouReceiveAdvanceChildTax" id="DidYouReceiveAdvanceChildTaxNo"   value='no'>
                        <label  class="btn btn-outline-secondary btn-site-primary"
                        for="DidYouReceiveAdvanceChildTaxNo">No</label>
                </div>
            </div>
        </div>


        @if($DidYouReceiveAdvanceChildTax === 'yes')
           <div class="row mt-3" id="">
                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Amount ($) @error('AmountOne')<span class="error">*</span> @enderror</label><br>
                            <input wire:model="AmountOne" type="text" class="form-control col-md-2" >
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Date @error('DateOne')<span class="error">*</span> @enderror</label><br>
                            <input wire:model="DateOne" type="date" class="form-control col-md-2">
                        </div>
                    </div>
                </div>
            </div>


            <br>
            <div class="row mt-3" id="">
                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Amount ($)</label><br>
                            <input wire:model="AmountTwo" type="text" class="form-control col-md-2" >
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Date</label><br>
                            <input wire:model="DateTwo" type="date" class="form-control col-md-2">
                        </div>
                    </div>
                </div>
            </div>


            <br>
            <div class="row mt-3" id="">
                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Amount ($)</label><br>
                            <input wire:model="AmountThree" type="text" class="form-control col-md-2" >
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Date</label><br>
                            <input wire:model="DateThree" type="date" class="form-control col-md-2">
                        </div>
                    </div>
                </div>
            </div>


            <br>

            <div class="row mt-3" id="">
                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Amount ($)</label><br>
                            <input wire:model="AmountFour" type="text" class="form-control col-md-2" >
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Date</label><br>
                            <input wire:model="DateFour" type="date" class="form-control col-md-2">
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row mt-3" id="">
                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Amount ($)</label><br>
                            <input wire:model="AmountFive" type="text" class="form-control col-md-2" >
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Date</label><br>
                            <input wire:model="DateFive" type="date" class="form-control col-md-2">
                        </div>
                    </div>
                </div>
            </div>

        @endif

        <br><br>

        <div class=" offset-md-6">
            <div class="rows mr-auro">
              <div class="d-flex">
                    <div class="mr-5">
                        <button wire:click="submitAdvancedChildTax" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5">
                            <span class="pl-3 button_font_small"> Foreign Account & Entities <i class="fas fa-arrow-right button_font_small"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>
     {{-- End Section 1 --}}


</div>
