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
                  <div class="col progress-text">{{$progress}}% Complete</div>
               </div>

               <div id="progress-bar-container">
                  <div class="progress-bar-child progress pr-bg-start" role="progressbar" style="width: {{$progress}}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> </div>
                  <div class="progress-bar-child shrinker timelapse"></div>
              </div>

              <!-- <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div> -->

              </header>


              
                


</div>
