<div>
    <header class="px-4">
               
               <div class="row mb-4">
                 <div class="col tax-year-port-wrapper">
                   <select class="">
                      <optgroup>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                      </optgroup>
                  </select>

                 </div>
                  <div class="col progress-text">0% Complete</div>
               </div>


               <div id="progress-bar-container">
                  <div class="progress-bar-child progress"> </div>
                  <div class="progress-bar-child shrinker timelapse"></div>
              </div>

              </header>


              
                <nav class="sidebar">
                   
                   <ul class="list-unstyled ps-0 sidebar-nav mt-4">
                   		 <li  class="mb-2 {{ Request::is('instructions*') ? 'active' : '' }}">
                          <button class="cs-btn btn-single-item align-items-center rounded collapsed px-4"  aria-expanded="false">
                           <a href="/instructions"> Instructions </a>
                          </button>
                          
                        </li>

                        <li class="mb-4">
                          <button class="cs-btn btn-toggle align-items-center rounded collapsed px-4" 
                          data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            General Information
                          </button>
                          <div class="collapse" id="home-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li class="{{ Request::is('general-questions*') ? 'active' : '' }}">
                              	<a href="/general-questions" class="link-dark rounded">General Questions</a></li>
                              <li><a href="#" class="link-dark rounded">Personal Information</a></li>
                              <li><a href="#" class="link-dark rounded">ID verification</a></li>
                              <li><a href="#" class="link-dark rounded">Payment for our services</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="mb-4">
                          <button class="cs-btn btn-toggle align-items-center rounded collapsed px-4" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Taxes & Deductions
                          </button>
                          <div class="collapse" id="dashboard-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li><a href="#" class="link-dark rounded">Tax Filing</a></li>
                              <li><a href="#" class="link-dark rounded">Estimate and Other Payments</a></li>
                              <li><a href="#" class="link-dark rounded">Stimulus</a></li>
                             
                            </ul>
                          </div>
                        </li>
                        <li class="mb-4">
                          <button class="cs-btn btn-toggle align-items-center rounded collapsed px-4" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            Income
                          </button>
                          <div class="collapse" id="orders-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li><a href="#" class="link-dark rounded">Wages</a></li>
                              <li><a href="#" class="link-dark rounded">Foreign Erned Income</a></li>
                              <li><a href="#" class="link-dark rounded">Investment and Passive Income</a></li>
                              <li><a href="#" class="link-dark rounded">Rental Income & Sale of Property</a></li>
                            </ul>
                          </div>
                        </li>

                        <li class="mb-4">
                          <button class="cs-btn btn-toggle align-items-center rounded collapsed px-4" data-bs-toggle="collapse" data-bs-target="#foreign-collapse" aria-expanded="false">
                            Foreign Account & Entities
                          </button>
                          <div class="collapse" id="foreign-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li><a href="#" class="link-dark rounded">FBR and 8938</a></li>
                              <li><a href="#" class="link-dark rounded">5471 Foreign Corporation</a></li>
                              <li><a href="#" class="link-dark rounded">3520 Foreign</a></li>
                              
                            </ul>
                          </div>
                        </li>

                        <li class="mb-4">
                          <button class="cs-btn btn-toggle align-items-center rounded collapsed px-4" data-bs-toggle="collapse" data-bs-target="#corporate-collapse" aria-expanded="false">
                            Corporate Taxes
                          </button>
                          <div class="collapse" id="corporate-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li><a href="#" class="link-dark rounded">C-Corporation</a></li>
                              <li><a href="#" class="link-dark rounded">S-Corporation</a></li>
                              <li><a href="#" class="link-dark rounded">Partnership</a></li>
                              <li><a href="#" class="link-dark rounded">Forign Corporation 112DF</a></li>
                              <li><a href="#" class="link-dark rounded">Not Profit</a></li>
                            </ul>
                          </div>
                        </li>

                        <li class="mb-4">
                          <button class="cs-btn btn-single-item align-items-center rounded collapsed px-4"  aria-expanded="false">
                           <a href="#"> Summary </a>
                          </button>
                          
                        </li>
     
                      </ul>


                </nav>


</div>
