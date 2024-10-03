@extends('website.layout.layout')

@section('body')

<section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        @foreach ($options as $option)
          
        
        <div class="col-lg-6 align-self-center">


          <div class="header-text">
            <h3> {{ $option->title }}</h3>
            <h2{{ $option->title }}<em>{{ $option->title }}</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">انضم الينا</a></div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-lg-6">
          <div class="right-image">
            <img src="{{asset('asset/assets/images/front-view-young-female-doctor-white-medical-suit-with-stethoscope-wearing-white-protective-mask-white (1).png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="services">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>خدماتنا</h6>
            <h4>من <em>نستهدف</em></h4>
          </div>
        </div>
        

        @foreach ( $targets as $target)


          <div class="owl-service-item owl-carousel">
            <div class="item">
              
              <div class="service-item">
                
                  
                
                <div class="icon">
                  <img src="{{asset('asset/assets/images/service-icon-01.png')}}" class="img-fluid" alt="Team Member">
                </div>
                
                <h4>{{$target->name}}</h4>
                <p>{{ $target->description}}</p>
              </div>
            </div>

            



            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{asset('asset/assets/images/service-icon-02.png')}}" alt="">
                </div>
                <h4>{{$target->name}}</h4>
            <p>{{ $target->description}}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{asset('asset/assets/images/service-icon-03.png')}}" alt="">
                </div>
                <h4>{{$target->name}}</h4>
                <p>{{ $target->description}}.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{asset('asset/assets/images/service-icon-04.png')}}" alt="">
                </div>
                <h4>{{$target->name}}</h4>
                <p>{{ $target->description}}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{asset('asset/assets/images/service-icon-01.png')}}" alt="">
                </div>
                <h4>{{$target->name}}</h4>
                <p>{{ $target->description}}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    
  </section>
  
  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>خدماتنا</h6>
            <h4>ماذا <em>نقدم</em></h4>
            <p>---------------------------</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">

  

  
              @foreach ( $mincategories as $category)

              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>{{$category->parent_id}}</span></div>
                    <div class="gradient-border"><span>{{$category->parent_id}}</span></div>
                    <div class="gradient-border"><span>{{$category->parent_id}}</span></div>
                    <div class="gradient-border"><span>{{$category->parent_id}}</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="{{asset('topicImages/' . $category->image)}}" alt="">
                          <div class="price"><h6>$128</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>{{$category->name}}</h4>
                          <p>{{$category->description}}<a rel="nofollow" href="#" target="_blank">{{$category->description}}</a>
                          <br>{{$category->description}}<br>{{$category->description}}</p>
                          <span>  مختص</span> 2
                          <span> عميل</span> 36

                          <div class="text-button">
                            <a href="contact-us.html">اعرف المزيد</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="{{asset('topicImages/' . $category->image)}}" alt="">
                          <div class="price"><h6>$156</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>{{$category->name}}</h4>
                          <p>>{{$category->description}}
                            {{$category->description}} <br><br>{{$category->description}}
                            {{$category->description}}
      
                            </p>
                            <span>عميل</span> 21
                            <span>مختصين</span>4
                          <div class="text-button">
                            <a href="contact-us.html">more</a>
                          </div>
                        </div>
                      </div>
                    </li>

                    
                      
                   
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="{{asset('topicImages/' . $category->image)}}" alt="">
                          <div class="price"><h6>$184</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>{{$category->name}}</h4>
                          <p>>{{$category->description}}
                            {{$category->description}} <br><br>
                            
                  
                            {{$category->description}}  </p>
                            <span>عميل</span> 21
                            <span>مختصين</span>4
                          <div class="text-button">
                            <a href="contact-us.html">more</a>
                          </div>
                        </div>
                      </div>
                    </li>

                    
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="{{asset('topicImages/' . $category->image)}}" alt="">
                          <div class="price"><h6>$76</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>{{$category->name}}</h4>
                          <p>{{$category->description}}
                            {{$category->description}}<br><br>{{$category->description}}
                      
            
                            {{$category->description}} </p>
                            <span>عميل</span> 21
                            <span>مختصين</span>4
                          <div class="text-button">
                            <a href="contact-us.html">more</a>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      </li>

                    </ul>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  
  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="{{asset('asset/assets/images/cta-left-image.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>انضم لمعهد جذور</h6>
          <h4>معهد جذور الطبي التعليمي</h4>
          <p>مععد قيد االنشاء امتدادا لرؤية منصة التعليم الطبي المستمر ,
            يعقد عن طريقة الدورات الطبية الوجاهية و المؤتمرات</p>
          <div class="white-button">
            <a href="contact-us.html">اعرف المزيد</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">فريق العمل</h1>
            </div>
            <div class="row g-4">
                @foreach($teams as $team)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->index + 1 }}s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                              <img src="{{ asset('topicImages/'. $team->image) }}" alt="Team member image" class="img-fluid" style="height: 300px;">
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">{{ $team->name }}</h5>
                                <small>{{ $team->description }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

  <!-- Team End -->



  <!-- ***** reView Start ***** -->
  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>اراء الزبائن</h6>
            <h4>ماذا <em>قالوا</em></h4>
          </div>
        </div>
        <div class="col-lg-12">

              @foreach ($veiwees as $veiwee)

          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <p>{{$veiwee->create_date}}</p>
                <h4>{{$veiwee->name}}</h4>
                <span>{{$veiwee->language}}</span>
                <img src="{{ asset('topicImages/'. $veiwee->image) }}" alt="">
            </div>
            @endforeach
           
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- review End -->

@endsection
