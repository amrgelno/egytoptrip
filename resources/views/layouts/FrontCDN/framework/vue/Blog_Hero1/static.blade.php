

                <div class="col-lg-12">
                <div class="skills-content">
 
            <div class="row">

              @foreach($static as $staticitem)
   
              <div class="col-lg-3">

                      <div class="skill-item">
                  <div class="progress" data-percentage="{{$staticitem -> SNumber_Num}}">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      
                    <div class="progress-value">
                      <div>
                      {{$staticitem -> SNumber_Num}}%  <br>
                        <span>{{ $staticitem -> title}}</span>
                      </div>
                    </div>
</div>
                    </div>
                  </div>
                </div>

                      @endforeach

                  </div>
                </div>
              </div>
                      



       
