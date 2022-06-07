<div>

    <div class="row mt-4 stepwizard">
        <div class="col-md-12 ">
            @include('livewire.taxes-deductions.taxes-header')
        </div>
      </div>

    {{-- Section 1 --}}
    <div class="{{ $currentStep != 2 ? 'display-none' : '' }} " id="step-1">

        {{-- <div class="row mb-3">
                    <div class="col-md-8 text-info">
                    <span>
                    <i class="fa fa-regular fa-circle-info "></i>
                    Have you made any estimated tax payments?
                    </div>
         </div> --}}

        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-group light-grey">
                    <label class="mb-2" for="">Have you made any estimated tax payments?
                            @error('DidYouMakeEstimatedTaxPayment')<span class="error">*</span> @enderror
                        </label><br/>
                   <input type="radio" wire:model="DidYouMakeEstimatedTaxPayment"  class="btn-check form-check-input " name="DidYouMakeEstimatedTaxPayment" id="DidYouMakeEstimatedTaxPaymentYes"  value='yes' >
                        <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                        for="DidYouMakeEstimatedTaxPaymentYes">Yes</label>

                        <input wire:model="DidYouMakeEstimatedTaxPayment" type="radio" class="btn-check form-check-input" name="DidYouMakeEstimatedTaxPayment" id="DidYouMakeEstimatedTaxPaymentNo"   value='no'>
                        <label  class="btn btn-outline-secondary btn-site-primary"
                        for="DidYouMakeEstimatedTaxPaymentNo">No</label>
                </div>
            </div>
        </div>


        @if($DidYouMakeEstimatedTaxPayment === 'yes')
           <div class="row mt-3" id="">
                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Payment Date @error('PaymentDateOne')<span class="error">*</span> @enderror</label><br>
                            <input wire:model="PaymentDateOne" type="date" class="form-control col-md-2">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Amount @error('AmountForPaymentDateOne')<span class="error">*</span> @enderror</label><br>
                            <input wire:model="AmountForPaymentDateOne" type="text" class="form-control col-md-2" value="$">
                        </div>
                    </div>
                </div>
            </div>


            <br>
            <div class="row mt-3" id="">
                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Payment Date</label><br>
                            <input wire:model="PaymentDateTwo" type="date" class="form-control col-md-2">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Amount</label><br>
                            <input wire:model="AmountForPaymentDateTwo" type="text" class="form-control col-md-2" value="$">
                        </div>
                    </div>
                </div>
            </div>


            <br>
            <div class="row mt-3" id="">
                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Payment Date</label><br>
                            <input wire:model="PaymentDateThree" type="date" class="form-control col-md-2">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Amount</label><br>
                            <input wire:model="AmountForPaymentDateThree" type="text" class="form-control col-md-2" value="$">
                        </div>
                    </div>
                </div>
            </div>


            <br>

            <div class="row mt-3" id="">
                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Payment Date</label><br>
                            <input wire:model="PaymentDateFour" type="date" class="form-control col-md-2">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ml-5">
                    <div class="form-group">
                        <div class="form-group light-grey">
                            <label for="">Amount</label><br>
                            <input wire:model="AmountForPaymentDateFour" type="text" class="form-control col-md-2" value="$">
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <br><br>


        <div class="row mt-5">
            <div class="button-flex">
                <button type="button" wire:click='prevForm' class="btn btn-outline-secondary mr-auto btn-site-primary color-text-white">
                    <span class="pl-3 button_font_small"><i class="fas fa-arrow-left button_font_small"></i> Tax Filing</span>
                </button>

                 <button type="button" wire:click='submitEstimatePayment' class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                    <span class="pl-3 button_font_small">Stimulus <i class="fas fa-arrow-right button_font_small"></i></span>
                </button>
            </div>
        </div>


    </div>
     {{-- End Section 1 --}}


</div>
