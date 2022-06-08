<div>
    <div class="row mt-4">
        <div class="row mt-4 stepwizard">
            <div class="col-md-12 ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb cs-breadcrumbs">

                        <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
                        <a class="light-grey" href="#">Passive Income </a></li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <form action="" wire:submit.prevent='submitPassiveIncome'>
        <div class="row mb-3">
            <div class="col-md-8 text-info">
                <span>
                    <i class="fa fa-regular fa-circle-info "></i>
                    Note: the US taxes all worldwide income regardless if taxable in country of residence
                </span>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-group">
                    <label class="mb-2" for="">Please check the box, and upload the documents for each of the following documents you have:</label>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="yes" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">I have removed any passwords if any documents were password protected.
                    </label>
                </div>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="Have1099Forms" value="yes" id="Have1099Forms">
                    <label class="form-check-label" for="Have1099Forms">1099 forms
                    </label>
                </div>
            </div>

            @if ($Have1099Forms == 'yes')
                <div class="col-md-7 ml-5">
                    <div class="form-check">
                        <div class="mt-2 d-flex">
                            <label  class="light-" for="">Number of forms uploaded
                            </label>

                            <select wire:model="NumberofFormsToUploadFor1099" class="" required>
                                <option value="0">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        @for($i=0; $i < $NumberofFormsToUploadFor1099; $i++)
                            <div class="col-md-9 ml-5 mt-2">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload PDF Document
                                            <input wire:model="DocumentFor1099" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif

        </div>


        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="HaveInterest" value="yes" id="HaveInterest">
                    <label class="form-check-label" for="HaveInterest">Interest
                    </label>
                </div>
            </div>

            @if ($HaveInterest == 'yes')
                <div class="col-md-7 ml-5">
                    <div class="form-check">
                        <div class="mt-2 d-flex">
                            <label  class="light-" for="">Number of forms uploaded
                            </label>

                            <select wire:model="NumberofFormsToUploadForInterest" class="" required>
                                <option value="0">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        @for($i=0; $i < $NumberofFormsToUploadForInterest; $i++)
                            <div class="col-md-9 ml-5 mt-2">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload PDF Document
                                            <input wire:model="DocumentForInterest" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif

        </div>


        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="HaveDividends" value="yes" id="HaveDividends">
                    <label class="form-check-label" for="HaveDividends">Dividends
                    </label>
                </div>
            </div>

            @if ($HaveDividends == 'yes')
                <div class="col-md-7 ml-5">
                    <div class="form-check">
                        <div class="mt-2 d-flex">
                            <label  class="light-" for="">Number of forms uploaded
                            </label>

                            <select wire:model="NumberofFormsToUploadForDividends" class="" required>
                                <option value="0">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        @for($i=0; $i < $NumberofFormsToUploadForDividends; $i++)
                            <div class="col-md-9 ml-5 mt-2">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload PDF Document
                                            <input wire:model="DocumentForDividends" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif

        </div>

        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="HaveCapitalGains" value="yes" id="HaveCapitalGains">
                    <label class="form-check-label" for="HaveCapitalGains">Capital Gains
                    </label>
                </div>
            </div>

            @if ($HaveCapitalGains == 'yes')
                <div class="col-md-7 ml-5">
                    <div class="form-check">
                        <div class="mt-2 d-flex">
                            <label  class="light-" for="">Number of forms uploaded
                            </label>

                            <select wire:model="NumberofFormsToUploadForCapitalGains" class="" required>
                                <option value="0">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        @for($i=0; $i < $NumberofFormsToUploadForCapitalGains; $i++)
                            <div class="col-md-9 ml-5 mt-2">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload PDF Document
                                            <input wire:model="DocumentForCapitalGains" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif

        </div>




        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="HaveRoyalties" value="yes" id="HaveRoyalties">
                    <label class="form-check-label" for="HaveRoyalties">Royalties
                    </label>
                </div>
            </div>

            @if ($HaveRoyalties == 'yes')
                <div class="col-md-7 ml-5">
                    <div class="form-check">
                        <div class="mt-2 d-flex">
                            <label  class="light-" for="">Number of forms uploaded
                            </label>

                            <select wire:model="NumberofFormsToUploadForRoyalties" class="" required>
                                <option value="0">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        @for($i=0; $i < $NumberofFormsToUploadForRoyalties; $i++)
                            <div class="col-md-9 ml-5 mt-2">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload PDF Document
                                            <input wire:model="DocumentForRoyalties" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif

        </div>


        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="HavePensionPayments" value="yes" id="HavePensionPayments">
                    <label class="form-check-label" for="HavePensionPayments">Pension Payments
                    </label>
                </div>
            </div>

            @if ($HavePensionPayments == 'yes')
                <div class="col-md-7 ml-5">
                    <div class="form-check">
                        <div class="mt-2 d-flex">
                            <label  class="light-" for="">Number of forms uploaded
                            </label>

                            <select wire:model="NumberofFormsToUploadForPensionPayments" class="" required>
                                <option value="0">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        @for($i=0; $i < $NumberofFormsToUploadForPensionPayments; $i++)
                            <div class="col-md-9 ml-5 mt-2">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload PDF Document
                                            <input wire:model="DocumentForPensionPayments" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif

        </div>




        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="HaveSocialSecurity" value="yes" id="HaveSocialSecurity">
                    <label class="form-check-label" for="HaveSocialSecurity">Social Security Payments
                    </label>
                </div>
            </div>

            @if ($HaveSocialSecurity == 'yes')
                <div class="col-md-7 ml-5">
                    <div class="form-check">
                        <div class="mt-2 d-flex">
                            <label  class="light-" for="">Number of forms uploaded
                            </label>

                            <select wire:model="NumberofFormsToUploadForSocialSecurity" class="" required>
                                <option value="0">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        @for($i=0; $i < $NumberofFormsToUploadForSocialSecurity; $i++)
                            <div class="col-md-9 ml-5 mt-2">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload PDF Document
                                            <input wire:model="DocumentForSocialSecurity" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif

        </div>


        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="HaveK1s" value="yes" id="HaveK1s">
                    <label class="form-check-label" for="HaveK1s">K-1s
                    </label>
                </div>
            </div>

            @if ($HaveK1s == 'yes')
                <div class="col-md-7 ml-5">
                    <div class="form-check">
                        <div class="mt-2 d-flex">
                            <label  class="light-" for="">Number of forms uploaded
                            </label>

                            <select wire:model="NumberofFormsToUploadForK1s" class="" required>
                                <option value="0">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        @for($i=0; $i < $NumberofFormsToUploadForK1s; $i++)
                            <div class="col-md-9 ml-5 mt-2">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload PDF Document
                                            <input wire:model="DocumentForK1s" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif

        </div>


        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="Have1042S" value="yes" id="Have1042S">
                    <label class="form-check-label" for="Have1042S">1042S
                    </label>
                </div>
            </div>

            @if ($Have1042S == 'yes')
                <div class="col-md-7 ml-5">
                    <div class="form-check">
                        <div class="mt-2 d-flex">
                            <label  class="light-" for="">Number of forms uploaded
                            </label>

                            <select wire:model="NumberofFormsToUploadFor1042S" class="" required>
                                <option value="0">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        @for($i=0; $i < $NumberofFormsToUploadFor1042S; $i++)
                            <div class="col-md-9 ml-5 mt-2">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload PDF Document
                                            <input wire:model="DocumentFor1042S" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif

        </div>


        <div class="row mt-3">
            {{-- <div class="row mb-3"> --}}
                <div class="col-md-8 text-info">
                    <span>
                        <i class="fa fa-regular fa-circle-info "></i>
                        At any time in the tax year, did you receive, sell, send, exchange, or otherwise acquire anyfinancial interest in any virtual currency?”
                        Per the IRS, you do not need to check yes if all thatyou did was purchase with no exits or exchanges. Please check if the answer is Yes
                    </span>
                    <br>
                </div>
            {{-- </div> --}}
            <div class="col-md-8 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="HaveCryptoCurrency" value="yes" id="HaveCryptoCurrency">
                    <label class="form-check-label" for="HaveCryptoCurrency">Crypto Currency
                    </label>
                </div>

                @if ($HaveCryptoCurrency=='yes')
                    <div class="row mt-3">
                        <div class="col-md- ml-5">
                            <div class="form-group">
                                <label class="mb-2" for="">CAPITAL GAINS AND LOSSES</label>
                            </div>
                        </div>
                    </div>

                    <div class="row text-info">
                        <div class="col-md- ml-5">
                            <span>
                                {{-- <i class="fa fa-regular fa-circle-info "></i> --}}
                                <div class="mt-3">A. Converting crypto to any fiat currency (USD or ILS etc.) </div>
                                <div class="mt-3">B. Exchanging one crypto currency for another. For example, using Bitcoin to purchaseEthereum or to purchase tokens. For tax purposes, you just sold one and bought theother. </div>
                                <div class="mt-3">C. Spending your crypto on goods or services. The fair market value is your exit (proceeds)price. Avoid small purchases to avoid excessive reporting.</div>
                            </span>
                        </div>
                        <br>
                    </div>


                    <div class="row mt-5">
                        <div class="col-md- ml-5">
                            <div class="form-group">
                                <label class="mb-2" for=""><strong>What data do I need?</strong></label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-">
                        <div class="col-md-12">
                            <div class="form-group row mt-4  light-gre">
                                <label for="" class="col-sm-8 col-form-label">a. Cost basis – how much did you pay or exchange to acquire the crypto?</label>
                                <div class="col-sm-4">
                                    <input wire:model="CryptoCost" type="number" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-md- ml-5">
                                <div class="form-group">
                                    <label class="mb-2" for="">b. Date acquired and date sold. More than one year held is reported as long term andotherwise short term.</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group row mt-2  light-gre">
                                <label for="" class="col-sm-4 col-form-label">Date Acquired</label>
                                <div class="col-sm-6">
                                    <input wire:model="DateCryptoAcquired" type="date" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row mt-4  light-gre">
                                <label for="" class="col-sm-4 col-form-label">Date Sold</label>
                                <div class="col-sm-6">
                                    <input wire:model="DateCryptoSold" type="date" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group row mt-4  light-gre">
                                <label for="" class="col-sm-6 col-form-label">c. Proceeds – value in USD at the time of exit</label>
                                <div class="col-sm-4">
                                    <input wire:model="Proceeds" type="number" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>

                        <div class="row text-info">
                            <div class="col-md- ml-5">
                                <span>
                                    <i class="fa fa-regular fa-circle-info "></i>
                                    TIP – If you have more than a few transactions then the bookkeeping can quickly become overwhelming. Use an application such as cryptotaxcalculator.io or bitcoin.tax.
                                </span>
                            </div>
                            <br>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col-md- ml-5">
                            <div class="form-group">
                                <label class="mb-2" for="">
                                    REGULAR INCOME <br>

                                    These transactions are considered regular income: <br>
                                    a. Mining <br>
                                    b. Staking <br>
                                    c. Airdrops <br>
                                    d. Payments for goods or services

                                </label>

                            </div>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col-md- ml-5">
                            <div class="form-group">
                                <label class="mb-2" for=""><strong>What data do I need?</strong></label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-">
                        <div class="col-md-12">
                            <div class="form-group row mt-4  light-gre">
                                <label for="" class="col-sm-12 col-form-label">a. Date of transaction and value (for cost basis and purchase date)</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row mt-2  light-gre">
                                <label for="" class="col-sm-4 col-form-label">Date of transaction</label>
                                <div class="col-sm-6">
                                    <input wire:model="TransactionDate" type="date" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row mt-4  light-gre">
                                <label for="" class="col-sm-4 col-form-label">Value</label>
                                <div class="col-sm-6">
                                    <input wire:model="TransactionValue" type="number" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group row mt-4  light-gre">
                                <label for="" class="col-sm-5 col-form-label">b.The value is also your income</label>
                                <div class="col-sm-6">
                                    <input wire:model="ValueIsAlsoIncome" type="number" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row mt-4  light-gre">
                                <label for="" class="col-sm-12 col-form-label">c. Expenses (if you are engaged in self-employment)</label>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <input wire:model="Expenses[]" type="number" class="form-control col-md-2">
                            </div>

                            <div class="col-md-2" style="display: flex; align-items:flex-end">
                                <button class="btn btn-success add_item_btn03 mr-5" wire:click.prevent="addInput({{$i}})"><i class="fas fa-plus" aria-hidden="true"></i></button>
                            </div>
                        </div>


                        @foreach ($inputs as $value )
                            <div class="row mt-3" id="">
                                <div class="col-sm-6">
                                    <input wire:model="Expenses[]" type="number" class="form-control col-md-2">
                                </div>

                                <div class="col-md-2" style="display: flex; align-items:flex-end">
                                    <button class="btn btn-danger add_item_btn03 mr-5" wire:click.prevent="removeInput({{$i}})"><i class="fas fa-minus" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        @endforeach


                    </div>

                @endif
             </div>
        </div>



        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="HaveOthers" value="yes" id="HaveOthers">
                    <label class="form-check-label" for="HaveOthers">Others
                    </label>
                </div>
            </div>

            @if ($HaveOthers == 'yes')
                <div class="col-md-7 ml-5">
                    <div class="form-check">
                        <div class="mt-2 d-flex">
                            <label  class="light-" for="">Number of forms uploaded
                            </label>

                            <select wire:model="NumberofFormsToUploadForOthers" class="" required>
                                <option value="0">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        @for($i=0; $i < $NumberofFormsToUploadForOthers; $i++)
                            <div class="col-md-9 ml-5 mt-2">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload PDF Document
                                            <input wire:model="DocumentForOthers" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endif

        </div>






        <div class="row mt-5">
            <div class="button-flex">
                <div></div>
                <button type="submit" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                    <span class="pl-3 button_font_small">Submit Passive Income <i class="fas fa-arrow-right button_font_small"></i></span>
                </button>
            </div>
        </div>
    </form>
</div>



{{-- Pop up for crypo information --}}
<div class="modal fade" id="crypoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        {{-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
        <div class="modal-body">
            If you are investing in cryptocurrencies then protect your investment by staying in compliance with the tax authorities. The guidelines below are per the IRS. For other tax authorities, please check with your local tax accountant.
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto" data-bs-dismiss="modal">Okay</button>
        </div>
    </div>
    </div>
</div>

<script>
    $('#HaveCryptoCurrency').click(function(){
        if ($('#HaveCryptoCurrency').prop('checked')) {
            $('#crypoModal').modal('show');
        }
    })


    window.livewire.on('show', () => {
        $('#crypoModal').modal('show');
    });
</script>
