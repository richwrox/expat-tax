<div>
    {{-- Be like water. --}}
    <div class="row mt-4 stepwizard">
        <div class="col-md-12 ">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb cs-breadcrumbs">
                    <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
                        <a class="light-grey" href="#">Partnership 1065</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="form-group light-grey">
        <label class="mb-2" for="">Is this your first time filing a 1065 partnership return with us?
            @error('isFirstTimeFiling1065')<span class="error">*</span> @enderror
        </label><br />
        <input type="radio" wire:model="isFirstTimeFiling1065" class="btn-check form-check-input "
            name="isFirstTimeFiling1065" id="isFirstTimeFiling1065Yes" value='yes'>
        <label class="btn btn-outline-secondary mr-3 btn-site-primary"
            for="isFirstTimeFiling1065Yes">Yes</label>

        <input wire:model="isFirstTimeFiling1065" type="radio" class="btn-check form-check-input"
            name="isFirstTimeFiling1065" id="isFirstTimeFiling1065No" value='no'>
        <label class="btn btn-outline-secondary btn-site-primary" for="isFirstTimeFiling1065No">No</label>
    </div>

    @if ($isFirstTimeFiling1065 == 'yes')
        <div class="row mt-3">
            <div class="col-md-8 ml-5">
                <div class="form-group light-grey">
                    <label class="mb-2" for="">
                        Provide a copy of the last filed Form 1065 of the partnership if any
                    </label>
                        <div class="file btn btn-outline-success cs-file-upload">
                            <i class="fa fa-upload mr-4"></i> Upload Forms
                        <input wire:model="fileFor1065Partnerships" type="file"  />
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="mt-5" id="general_partnership_information">
        <h6 class="section-header">
            GENERAL PARTNERSHIP INFORMATION
        </h3>  

        <div class="mt-3">
            <label class="mb-2" for="">Name of Partnership:
                @error('nameOfPartnership') <span class="error text-danger">*</span>
                @enderror
            </label>
            <input type="text" wire:model="nameOfPartnership" class="form-control business-income-name-input" name="">
        </div>

        <div class="mt-3">
            <label class="mb-2" for="">Address of Partnership:
                @error('addressOfPartnership') <span class="error text-danger">*</span>
                @enderror
            </label>
            <input type="text" wire:model="addressOfPartnership" class="form-control business-income-name-input" name="">
        </div>

        <div class="mt-3">
            <label class="mb-2" for="">Employer Identification Number (EIN):
                @error('employerIDnumber') <span class="error text-danger">*</span>
                @enderror
            </label>
            <input type="text" wire:model="employerIDnumber" class="form-control business-income-semi-input" name="">
        </div>

        <div class="mt-3">
            <label class="mb-2" for="">Product/Service provided:
                @error('serviceProvided') <span class="error text-danger">*</span>
                @enderror
            </label>
            <input type="text" wire:model="serviceProvided" class="form-control business-income-name-input" name="">
        </div>

        <div class="mt-3">
            <label class="mb-2" for="">Principal business activity:
                @error('principalBusinessActivity') <span class="error text-danger">*</span>
                @enderror
            </label>
            <input type="text" wire:model="principalBusinessActivity" class="form-control business-income-name-input" name="">
        </div>

        <div class="mt-3">
            <label class="mb-2" for="">Formation date of Partnership:
                @error('formationDateOfPartnership') <span class="error text-danger">*</span>
                @enderror
            </label>
            <input type="date" wire:model="formationDateOfPartnership" class="form-control business-income-date-input" name="">
        </div>

        <div class="mt-3">
            <label class="mb-2" for="">Partner information (name, address, percentage ownership, and US Tax ID Number-if applicable):
                @error('partnerInfoDetails') <span class="error text-danger">*</span>
                @enderror
            </label>
            <input type="text" wire:model="partnerInfoDetails" class="form-control business-income-name-input" name="">
        </div>

        <div class="mt-3">
            <label class="mb-2" for="">Did you employ any workers to whom you paid wages?
                @error('employedWorkersWithWages') <span class="error text-danger">*</span>
                @enderror
            </label>
            <input type="text" wire:model="employedWorkersWithWages" class="form-control business-income-date-input" name="">
        </div>

        <div class="mt-3">
            <label class="mb-2" for="">Did you make any payments to independent contractors? If so, did you or will you file all required forms 1099MISC?
                @error('madePaymentToContractor') <span class="error text-danger">*</span>
                @enderror
            </label>
            <input type="number" wire:model="madePaymentToContractor" class="form-control business-income-date-input" name="">
        </div>

        <div class="mt-3">
            <label class="mb-2" for="">Are your assets worth $1,000,000 and/ or gross receipts are over $250,000?
                @error('isAssetsOverMillion') <span class="error text-danger">*</span>
                @enderror
            </label><br>
                <input type="radio" wire:model="isAssetsOverMillion" class="btn-check form-check-input "name="isAssetsOverMillion" id="isAssetsOverMillionYes" value='yes'>
                <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="isAssetsOverMillionYes">Yes</label>

                <input wire:model="isAssetsOverMillion" type="radio" class="btn-check form-check-input" name="isAssetsOverMillion" id="isAssetsOverMillionNo" value='no'>
                <label class="btn btn-outline-secondary btn-site-primary" for="isAssetsOverMillionNo">No</label>
        </div>

        @if ($isAssetsOverMillion == 'yes')
            <div class="mt-3">
                <label class="mb-2" for="">Provide Balance Sheet
                    @error('balanceSheet') <span class="error text-danger">*</span>
                    @enderror
                </label><br>
                <div class="file btn btn-outline-success cs-file-upload">
                    <i class="fa fa-upload mr-4"></i> Upload Forms
                    <input wire:model="fileForBalanceSheet" type="file"  />
                </div>
            </div>
        @endif
    

        <div class="mt-3">
            <label class="mb-2" for="">Do you have a profit or loss statement?
                @error('hasProfitLossStmt') <span class="error text-danger">*</span>
                @enderror
            </label><br>
            <input type="radio" wire:model="hasProfitLossStmt" class="btn-check form-check-input "name="hasProfitLossStmt" id="hasProfitLossStmtYes" value='yes'>
            <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="hasProfitLossStmtYes">Yes</label>

            <input wire:model="hasProfitLossStmt" type="radio" class="btn-check form-check-input" name="hasProfitLossStmt" id="hasProfitLossStmtNo" value='no'>
            <label class="btn btn-outline-secondary btn-site-primary" for="hasProfitLossStmtNo">No</label>
        </div>

        @if ($hasProfitLossStmt == 'yes')
            <div class="mt-3">
                <label class="mb-2" for="">Upload your profit and loss statement
                    @error('balanceSheet') <span class="error text-danger">*</span>
                    @enderror
                </label><br>
                <div class="file btn btn-outline-success cs-file-upload">
                    <i class="fa fa-upload mr-4"></i> Upload Forms
                    <input wire:model="fileForProfitLossStmt" type="file"  />
                </div>
            </div>
        @endif
    </div>

     {{-- if profit and loss statement is no --}}
     @if ($hasProfitLossStmt == 'no')
     <div class="mt-5" id="income_and_expenses">
         <h6 class="section-header">
             Income and expenses
         </h3>  

         <div class="mt-3">
             <label for="incomeExpenseCurrency">Which currency are income and expenses recorded on this form:</label>
             <select id="currency" name="currency" wire:model='incomeExpenseCurrency' class="form-select rental-short-input">
                 <option>Select currency</option>
                 <option value="AFN">Afghan Afghani</option>
                 <option value="ALL">Albanian Lek</option>
                 <option value="DZD">Algerian Dinar</option>
                 <option value="AOA">Angolan Kwanza</option>
                 <option value="ARS">Argentine Peso</option>
                 <option value="AMD">Armenian Dram</option>
                 <option value="AWG">Aruban Florin</option>
                 <option value="AUD">Australian Dollar</option>
                 <option value="AZN">Azerbaijani Manat</option>
                 <option value="BSD">Bahamian Dollar</option>
                 <option value="BHD">Bahraini Dinar</option>
                 <option value="BDT">Bangladeshi Taka</option>
                 <option value="BBD">Barbadian Dollar</option>
                 <option value="BYR">Belarusian Ruble</option>
                 <option value="BEF">Belgian Franc</option>
                 <option value="BZD">Belize Dollar</option>
                 <option value="BMD">Bermudan Dollar</option>
                 <option value="BTN">Bhutanese Ngultrum</option>
                 <option value="BTC">Bitcoin</option>
                 <option value="BOB">Bolivian Boliviano</option>
                 <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                 <option value="BWP">Botswanan Pula</option>
                 <option value="BRL">Brazilian Real</option>
                 <option value="GBP">British Pound Sterling</option>
                 <option value="BND">Brunei Dollar</option>
                 <option value="BGN">Bulgarian Lev</option>
                 <option value="BIF">Burundian Franc</option>
                 <option value="KHR">Cambodian Riel</option>
                 <option value="CAD">Canadian Dollar</option>
                 <option value="CVE">Cape Verdean Escudo</option>
                 <option value="KYD">Cayman Islands Dollar</option>
                 <option value="XOF">CFA Franc BCEAO</option>
                 <option value="XAF">CFA Franc BEAC</option>
                 <option value="XPF">CFP Franc</option>
                 <option value="CLP">Chilean Peso</option>
                 <option value="CNY">Chinese Yuan</option>
                 <option value="COP">Colombian Peso</option>
                 <option value="KMF">Comorian Franc</option>
                 <option value="CDF">Congolese Franc</option>
                 <option value="CRC">Costa Rican ColÃ³n</option>
                 <option value="HRK">Croatian Kuna</option>
                 <option value="CUC">Cuban Convertible Peso</option>
                 <option value="CZK">Czech Republic Koruna</option>
                 <option value="DKK">Danish Krone</option>
                 <option value="DJF">Djiboutian Franc</option>
                 <option value="DOP">Dominican Peso</option>
                 <option value="XCD">East Caribbean Dollar</option>
                 <option value="EGP">Egyptian Pound</option>
                 <option value="ERN">Eritrean Nakfa</option>
                 <option value="EEK">Estonian Kroon</option>
                 <option value="ETB">Ethiopian Birr</option>
                 <option value="EUR">Euro</option>
                 <option value="FKP">Falkland Islands Pound</option>
                 <option value="FJD">Fijian Dollar</option>
                 <option value="GMD">Gambian Dalasi</option>
                 <option value="GEL">Georgian Lari</option>
                 <option value="DEM">German Mark</option>
                 <option value="GHS">Ghanaian Cedi</option>
                 <option value="GIP">Gibraltar Pound</option>
                 <option value="GRD">Greek Drachma</option>
                 <option value="GTQ">Guatemalan Quetzal</option>
                 <option value="GNF">Guinean Franc</option>
                 <option value="GYD">Guyanaese Dollar</option>
                 <option value="HTG">Haitian Gourde</option>
                 <option value="HNL">Honduran Lempira</option>
                 <option value="HKD">Hong Kong Dollar</option>
                 <option value="HUF">Hungarian Forint</option>
                 <option value="ISK">Icelandic KrÃ³na</option>
                 <option value="INR">Indian Rupee</option>
                 <option value="IDR">Indonesian Rupiah</option>
                 <option value="IRR">Iranian Rial</option>
                 <option value="IQD">Iraqi Dinar</option>
                 <option value="ILS">Israeli New Sheqel</option>
                 <option value="ITL">Italian Lira</option>
                 <option value="JMD">Jamaican Dollar</option>
                 <option value="JPY">Japanese Yen</option>
                 <option value="JOD">Jordanian Dinar</option>
                 <option value="KZT">Kazakhstani Tenge</option>
                 <option value="KES">Kenyan Shilling</option>
                 <option value="KWD">Kuwaiti Dinar</option>
                 <option value="KGS">Kyrgystani Som</option>
                 <option value="LAK">Laotian Kip</option>
                 <option value="LVL">Latvian Lats</option>
                 <option value="LBP">Lebanese Pound</option>
                 <option value="LSL">Lesotho Loti</option>
                 <option value="LRD">Liberian Dollar</option>
                 <option value="LYD">Libyan Dinar</option>
                 <option value="LTL">Lithuanian Litas</option>
                 <option value="MOP">Macanese Pataca</option>
                 <option value="MKD">Macedonian Denar</option>
                 <option value="MGA">Malagasy Ariary</option>
                 <option value="MWK">Malawian Kwacha</option>
                 <option value="MYR">Malaysian Ringgit</option>
                 <option value="MVR">Maldivian Rufiyaa</option>
                 <option value="MRO">Mauritanian Ouguiya</option>
                 <option value="MUR">Mauritian Rupee</option>
                 <option value="MXN">Mexican Peso</option>
                 <option value="MDL">Moldovan Leu</option>
                 <option value="MNT">Mongolian Tugrik</option>
                 <option value="MAD">Moroccan Dirham</option>
                 <option value="MZM">Mozambican Metical</option>
                 <option value="MMK">Myanmar Kyat</option>
                 <option value="NAD">Namibian Dollar</option>
                 <option value="NPR">Nepalese Rupee</option>
                 <option value="ANG">Netherlands Antillean Guilder</option>
                 <option value="TWD">New Taiwan Dollar</option>
                 <option value="NZD">New Zealand Dollar</option>
                 <option value="NIO">Nicaraguan CÃ³rdoba</option>
                 <option value="NGN">Nigerian Naira</option>
                 <option value="KPW">North Korean Won</option>
                 <option value="NOK">Norwegian Krone</option>
                 <option value="OMR">Omani Rial</option>
                 <option value="PKR">Pakistani Rupee</option>
                 <option value="PAB">Panamanian Balboa</option>
                 <option value="PGK">Papua New Guinean Kina</option>
                 <option value="PYG">Paraguayan Guarani</option>
                 <option value="PEN">Peruvian Nuevo Sol</option>
                 <option value="PHP">Philippine Peso</option>
                 <option value="PLN">Polish Zloty</option>
                 <option value="QAR">Qatari Rial</option>
                 <option value="RON">Romanian Leu</option>
                 <option value="RUB">Russian Ruble</option>
                 <option value="RWF">Rwandan Franc</option>
                 <option value="SVC">Salvadoran ColÃ³n</option>
                 <option value="WST">Samoan Tala</option>
                 <option value="SAR">Saudi Riyal</option>
                 <option value="RSD">Serbian Dinar</option>
                 <option value="SCR">Seychellois Rupee</option>
                 <option value="SLL">Sierra Leonean Leone</option>
                 <option value="SGD">Singapore Dollar</option>
                 <option value="SKK">Slovak Koruna</option>
                 <option value="SBD">Solomon Islands Dollar</option>
                 <option value="SOS">Somali Shilling</option>
                 <option value="ZAR">South African Rand</option>
                 <option value="KRW">South Korean Won</option>
                 <option value="XDR">Special Drawing Rights</option>
                 <option value="LKR">Sri Lankan Rupee</option>
                 <option value="SHP">St. Helena Pound</option>
                 <option value="SDG">Sudanese Pound</option>
                 <option value="SRD">Surinamese Dollar</option>
                 <option value="SZL">Swazi Lilangeni</option>
                 <option value="SEK">Swedish Krona</option>
                 <option value="CHF">Swiss Franc</option>
                 <option value="SYP">Syrian Pound</option>
                 <option value="STD">São Tomé and Príncipe Dobra</option>
                 <option value="TJS">Tajikistani Somoni</option>
                 <option value="TZS">Tanzanian Shilling</option>
                 <option value="THB">Thai Baht</option>
                 <option value="TOP">Tongan pa'anga</option>
                 <option value="TTD">Trinidad & Tobago Dollar</option>
                 <option value="TND">Tunisian Dinar</option>
                 <option value="TRY">Turkish Lira</option>
                 <option value="TMT">Turkmenistani Manat</option>
                 <option value="UGX">Ugandan Shilling</option>
                 <option value="UAH">Ukrainian Hryvnia</option>
                 <option value="AED">United Arab Emirates Dirham</option>
                 <option value="UYU">Uruguayan Peso</option>
                 <option value="USD">US Dollar</option>
                 <option value="UZS">Uzbekistan Som</option>
                 <option value="VUV">Vanuatu Vatu</option>
                 <option value="VEF">Venezuelan BolÃ­var</option>
                 <option value="VND">Vietnamese Dong</option>
                 <option value="YER">Yemeni Rial</option>
                 <option value="ZMK">Zambian Kwacha</option>
             </select>
         </div>

         <div class="mt-3">
             <label for="gross income">GROSS RECEIPTS/INCOME</label>
             <input type="number" min="0" wire:model="grossIncome" class="form-control business-income-date-input" name="">

             <div class="mt-2">
                 <label class="text-success"><i>Income and expense amounts should be recorded as per US tax year, January -December 31st.</i></label>
             </div>
         </div>

         <div class="row mt-3">
             <div class="form-group light-grey">
                 <label class="mb-2" for="">Do you have expenses?
                     @error('hasExpenses')<span class="error">*</span> @enderror
                 </label><br />
                 <input type="radio" wire:model="hasExpenses" class="btn-check form-check-input "
                     name="hasExpenses" id="hasExpensesYes" value='yes'>
                 <label class="btn btn-outline-secondary mr-3 btn-site-primary"
                     for="hasExpensesYes">Yes</label>

                 <input wire:model="hasExpenses" type="radio" class="btn-check form-check-input"
                     name="hasExpenses" id="hasExpensesNo" value='no'>
                 <label class="btn btn-outline-secondary btn-site-primary" for="hasExpensesNo">No</label>
             </div>

         
             <div class="mt-3" id="ifExpensesExist">
                 @if ($hasExpenses == 'yes')
                 <div class="mt-3 text-success">
                     <span><strong>Expenses</strong></span>
                     <label for="">
                         <i>Below is a general list of expenses that may be incurred in business.  Please provide expense amounts incurred in direct relation to your business during the tax year.  </i>
                     </label>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="advertising" class="col-sm-3 col-form-label">Advertising</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="advertising">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="vehicleExpenses" class="col-sm-3 col-form-label">Vehicle Expenses</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="vehicleExpenses">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="commissions" class="col-sm-3 col-form-label">Commisssions & Fees</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="commissions">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="Contract labor" class="col-sm-3 col-form-label">Contract labor</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="Contract labor">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="costOfGoodSold" class="col-sm-3 col-form-label">Cost of Goods sold (if you are claiming this expense, please fill out Part 4 below)</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="costOfGoodSold">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="depletion" class="col-sm-3 col-form-label">Depletion</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="depletion">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="employeeBenefits" class="col-sm-3 col-form-label">Employee benefits ( including employee health insurance)</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="employeeBenefits">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="employeeBenefitProgram" class="col-sm-3 col-form-label">Employee Benefit Programs</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="employeeBenefitProgram">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="Insurance" class="col-sm-3 col-form-label">Insurance</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="Insurance">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="selfEmployedHealthInsurance" class="col-sm-3 col-form-label">Self-employed health insurance</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="selfEmployedHealthInsurance">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="mortgageInterest" class="col-sm-3 col-form-label">Mortgage interest paid to banks (if appears on Form 1098, please specify and send the form)</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="mortgageInterest">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="otherInterestPayments" class="col-sm-3 col-form-label">Other interest payments</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="otherInterestPayments">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="legalProfessionalServices" class="col-sm-3 col-form-label">Legal and professional services</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="legalProfessionalServices">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="officeExpenses" class="col-sm-3 col-form-label">Office expenses</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="officeExpenses">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="pensionProfitSharing" class="col-sm-3 col-form-label">Pension and profit sharing plans</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="pensionProfitSharing">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="rentLeaseVehicle" class="col-sm-3 col-form-label">Rent or lease of vehicles</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="rentLeaseVehicle">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="rentLeaseMaching" class="col-sm-3 col-form-label">Rent or lease of machinery, equipment</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="rentLeaseMachine">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="rentLeaseOther" class="col-sm-3 col-form-label">Rental or lease of other items (ex. Land)</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="rentLeaseOther">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="repairsMaintenance" class="col-sm-3 col-form-label">Repairs and maintenance</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="repairsMaintenance">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="supplies" class="col-sm-3 col-form-label">Supplies (if not included in cost of goods sold)</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="supplies">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="taxes" class="col-sm-3 col-form-label">Taxes (if reported on a Form 1098, please specify and send)</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="taxes">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="travel" class="col-sm-3 col-form-label">Travel</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="travel">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="meals" class="col-sm-3 col-form-label">Meals (subject to 50% limit)</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="meals">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="utilities" class="col-sm-3 col-form-label">Utilities</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="utilities">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="wagesExpense" class="col-sm-3 col-form-label">Wages expense </label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="wagesExpense">
                     </div>
                 </div>

                 <div class="form-group row mt-3">
                     <label for="otherExpenses" class="col-sm-3 col-form-label">Other expenses (please specify)</label>
                     <div class="col-sm-5">
                     <input type="number" class="form-control" id="otherExpenses">
                     </div>
                 </div>
                 
             @endif
             </div>

             
         
         </div>
     </div>
@endif
{{-- end of if profit and loss statement is no --}}


<div class="mt-4" id="cost_of_goods_sold">
     <div class="mt-3">
         <label class="mb-2" for="">Do you have Cost of Goods Sold?
             @error('hasCostOfGoodsSold') <span class="error text-danger">*</span>
             @enderror
         </label><br>
             <input type="radio" wire:model="hasCostOfGoodsSold" class="btn-check form-check-input "name="hasCostOfGoodsSold" id="hasCostOfGoodsSoldYes" value='yes'>
             <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="hasCostOfGoodsSoldYes">Yes</label>

             <input wire:model="hasCostOfGoodsSold" type="radio" class="btn-check form-check-input" name="hasCostOfGoodsSold" id="hasCostOfGoodsSoldNo" value='no'>
             <label class="btn btn-outline-secondary btn-site-primary" for="hasCostOfGoodsSoldNo">No</label>
     </div>

    @if ($hasCostOfGoodsSold == 'yes')
            <div class="mt-5" id="form_for_cost_of_goods_sold">
                <h6 class="section-header">
                    COST OF GOODS SOLD
                </h3>  
            </div>

            <div class="mt-3">
                <label class="mb-2" for="">What method do you use to value your closing inventory (cost, lower of cost or market, or other?)
                    @error('methodForClosingInventory') <span class="error text-danger">*</span>
                    @enderror
                </label>
                <input type="text" wire:model="methodForClosingInventory" class="form-control business-income-name-input" name="">
            </div>

            <div class="mt-3">
                <label class="mb-2" for="">Was there any changes in determining quantities, costs, or valuations between opening and closing inventory? If so, please explain.
                    @error('hasChangesInQuantities') <span class="error text-danger">*</span>
                    @enderror
                </label>
                <textarea type="text" wire:model="hasChangesInQuantities" class="form-control business-income-name-input" name=""></textarea>
                {{$hasChangesInQuantities}}
            </div>

            <div class="mt-3">
                <label class="mb-2" for="">What was your inventory at the beginning of the year?
                    @error('startOfYearInventory') <span class="error text-danger">*</span>
                    @enderror
                </label>
                <input type="text" wire:model="startOfYearInventory" class="form-control business-income-semi-input" name="">
            </div>

            <div class="mt-3">
                <label class="mb-2" for="">Please enter the amount you spent on purchases:
                    @error('amountSpentOnPurchases') <span class="error text-danger">*</span>
                    @enderror
                </label>
                <input type="number" min="0" wire:model="amountSpentOnPurchases" class="form-control business-income-semi-input" name="">
            </div>

            <div class="mt-3">
                <label class="mb-2" for="">Please enter the cost of items withdrawn for personal use:
                    @error('itemsRedrawnForPersonalUse') <span class="error text-danger">*</span>
                    @enderror
                </label>
                <input type="number" min="0" wire:model="itemsRedrawnForPersonalUse" class="form-control business-income-semi-input" name="">
            </div>

            <div class="mt-3">
                <label class="mb-2" for="">Please enter the cost of labor (excluding amounts paid to yourself):
                    @error('costOfLabor') <span class="error text-danger">*</span>
                    @enderror
                </label>
                <input type="number" min="0" wire:model="costOfLabor" class="form-control business-income-semi-input" name="">
            </div>

            <div class="mt-3">
                <label class="mb-2" for="">Please enter the amount you spent on materials and supplies:
                    @error('amountSpentOnMaterials') <span class="error text-danger">*</span>
                    @enderror
                </label>
                <input type="number" min="0" wire:model="amountSpentOnMaterials" class="form-control business-income-semi-input" name="">
            </div>

            <div class="mt-3">
                <label class="mb-2" for="">Please enter other costs:
                    @error('otherCosts') <span class="error text-danger">*</span>
                    @enderror
                </label>
                <input type="number" min="0" wire:model="otherCosts" class="form-control business-income-semi-input" name="">
            </div>

            <div class="mt-3">
                <label class="mb-2" for="">What was your year-end inventory amount?
                    @error('endOfYearInventory') <span class="error text-danger">*</span>
                    @enderror
                </label>
                <input type="number" min="0" wire:model="endOfYearInventory" class="form-control business-income-semi-input" name="">
            </div>
    @endif


    <div class="row mt-5">
        <div class="button-flex">
            <button type="button" wire:click='prevForm' class="btn btn-outline-secondary mr-auto btn-site-primary color-text-white">
                <span class="pl-3 button_font_small"><i class="fas fa-arrow-left button_font_small"></i> S-Corporations</span>
            </button>

            <button type="button" wire:click='submitPartnerships' class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                <span class="pl-3 button_font_small">F-Corporations 1120F <i class="fas fa-arrow-right button_font_small"></i></span>
            </button>
        </div>
    </div>

</div>

    
</div>
