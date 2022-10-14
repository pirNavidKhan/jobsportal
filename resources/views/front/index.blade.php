@section('first_h','where one can find new upcoming career opportunities 2023 from all top companies in Pakistan including multinational, private, government, NGO’s, overseas and others. As the third largest country in India which includes huge population of more than 180 million people has some 4 billion IT professionals (4G network available globally) we are able to provide full services for them as well such like online education with English Jobtody.com..

')

@section('secon_h','Jobs com is best place to search jobs in Pakistan for all fresh graduates, students, experienced professionals, freelancers and skilled persons. Jobz pk has daily new jobs from every area of Pakistan including major cities, small villages and remote mountain areas. Whether job seekers is located in Punjab, Sindh, KPK (Khyber Pakhtunkhwa), Balochistan, AJK, FATA, Northern, Gilgit Baltistan or lives in major city of Pakistan like Karachi, Islamabad, Lahore, Rawalpindi, Faisalabad, Sialkot, Quetta, Peshawar, Hyderabad, Sargodha, Multan, can get today’s dream job online at jobs pk for rozee roti in Pakistan and abroad.')

@section('third_h','Jobs com is best place to search for jobs by category in paperpk in Pakistan for all fresh graduates, students, experienced professionals, freelancers and skilled persons. job today has daily new jobs from every area of Pakistan including major cities, small villages, and remote mountain areas. Whether job seekers is located in Punjab, Sindh, KPK (Khyber Pakhtunkhwa), Balochistan, AJK, FATA, Northern, Gilgit Baltistan or lives in major city of Pakistan like Karachi, Islamabad, Lahore, Rawalpindi, Faisalabad, Sialkot, Quetta, Peshawar, Hyderabad, Sargodha, Multan, can get today’s dream job online at Jobtody for rozee roti in Pakistan and abroad. Get the latest career.')

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>jobtody | jobs in pakistan <?php echo date('Y'); ?> </title>
   <link rel="canonical" href="{{url()->current()}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/boilerplate_mini.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/reset_mini.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/
responsive_mini.css')}}">

  <script type="text/javascript" async src="{{asset('front_assets/js/respond.min.js')}}"></script>

  <script type="text/javascript" async src="{{asset('front_assets/js/menu-settings.js')}}"></script>
  <script type="text/javascript" async src="{{asset('front_assets/js/modernizr.min.js')}}"></script>
  <link rel="stylesheet" href="https://onesignal.com/sdks/OneSignalSDKStyles.css?v=2">
  </head>
  <body>
     <span style="font-size: 24px; line-height: 30px;">
  
</span></a>
  <div class="slicknav_menu">
    <a style="color: white;" href="{{url('/')}}" class="menu_logo">Jobtody</a>
    <ul class="slicknav_nav" aria-hidden="false" role="menu" style="display: block;"> </ul>
  </div>
  <div id="wrapper" class="mar-0-auto">
    <!--wrapper starts-->
    <div id="header" class="fleft">
      <!--header starts-->
      <div id="id-for-links" class="fleft menu rmm" style="position: fixed; min-width: 1140px; max-width: 1140px; z-index: 999; border-bottom: 2px solid rgb(135, 184, 67); padding-bottom: 2px;">
        <p id="logo_menu_desktop"> <a style="color: white;" href="{{url('/')}}">jobtody</a> </p>
        <ul id="menu">
         
        </ul>
      </div>
      <!--Menu ends -->
    </div>
    <!--header ends-->
    <!--<div class="fclear" ></div>-->
    <div id="main-contents" class="mar-t-10">
      <!--main-contents starts-->
      <div id="search-bar">
        <div id="search-bar-stick" class="fleft top_head_stick" style=" width:100%">
          <div class="right_search_bar">
            <div id="menu-2" style="border: none;">
              <ul>
                
              </ul>
            </div>
          </div>
          <div class="left_search_bar">
            <form  action="{{url('search/jobs')}}" method="GET" name="search" style="float: left; width: 100%;">
              <input type="search" name="search" class="textbox" value="{{Request::get('search')}}" placeholder="write search word">
              <input type="submit" value="Search"> </form>
            <div align="center"></div>
          </div>
        </div>
      </div>
      <div id="marquee_container" class="marquee_container"> <strong>Jobs in Pakistan</strong>, Official Govt Jobs, Dubai Career, Today Newspapers Jobs Pakistan, Paper PK 5 October 2022, Work Home, Earn Money Online 2023 </div>

      <div id="top-search-cont" style="padding: 10px 0px; float: left; width: 100%; margin: 15px 0px; box-shadow: 0px 0px 8px rgb(136, 136, 136);">
          <div style="text-align:center">
            <p style="float: left;font-size: 3em;margin-bottom: 5px;width: 97%; text-align:center;">Search Latest Jobs in Pakistan Today</p>
            <form action="{{url('search/jobs')}}" method="Get" name="search" style="float: left; width: 100%; margin-bottom: 10px;">
              <input type="search" name="search" value="{{Request::get('search')}}" placeholder="write search word" style="width:50%;"> 
              <input type="submit" value="Search" style="color: #000;">
            </form>
            <div style="clear:both;"></div>
            <div align="center">
              <div align="center" class="gov_cont">
                    @foreach($cuntry as $list)
                    <a href="{{url('country/'.$list->cu_slug)}}" class="gov_a">{{$list->cu_name}}</a>
                    @endforeach

                </div>
            </div>
          </div>
        </div>
      <style>
      .vip {
        font-size: 18px;
        color: #F00;
        font-weight: bold;
      }
      
      .whasappgroup {
        font-size: 20px;
        color: #090;
        font-weight: bold;
      }
      </style>
      </style>
        
        <!-- ################## Start Body ################### -->
       
        <div id="contents">
          <!--contents starts-->
          <div id="main-container">
            <div id="left-container-temp2">
              <div class="first_big_4col" >
                <h2>Latest Jobs in Pakistan Government &amp; Private</h2>
                <p>@yield('first_h')</p>
                <br>
                <div class="row_container">
                  <div class="cell1 bold color_top_text">Job Title / Vacancy - Online Job Search</div>
                  <div class="cell2 bold color_top_text">Industry / Department</div>
                  <div class="cell_three">
                    <div class="inner_cell bold color_top_text">Job City</div>

                      <div class="inner_cell bold color_top_text">Date Posted</div>

                    <div class="inner_cell bold color_top_text">Country</div>
                  </div>
                </div> @foreach($data as $list) <div class="row_container">
                  <div class="cell1">
                    <a href="{{url('/'.$list->slug)}}">{{$list->name}}</a>
                  </div>
                  <div class="cell2">
                    <a href="{{url('defartment/' .$list->defartment->def_slug)}}">{{$list->defartment->department}}</a>
                  </div>
                  <div class="cell_three">
                    <div class="inner_cell">
                      <a href="{{url('city/' .$list->City->city_slug)}}">
                        {{$list->City->city_name}}</a>
                    </div>

                      <div class="inner_cell">{{$list->created_at->format('d-M-y')}}</div>

                     <div class="inner_cell">{{$list->cuntry->cu_name}}</div>


                    
                  </div>
                </div> @endforeach
              </div>
              <div class="equal_4cols">
                <h2>Latest Jobs from todays Pakistani Paperpk</h2>
                <p>@yield('secon_h')</p>
                <br>
                <div class="row_cont_onecell"> @foreach($newspaper as $npapaer) <div class="one_cell">
                    <a href="{{url('paperpk/' .$npapaer->newsp_slug)}}">{{$npapaer->newsp_name}}</a>
                  </div> @endforeach </div>
                <div class="row_cont_onecell">
                  <br>
                  <p> Our best job categories includes paperpk, , banking, engineering, , IT jobs, Data Entry Operator, Teaching, Computer, Manager Jobs, Civil, Finance, Accounting, Marketing, Management, Sales, Medical &amp; Nursing, Hotel, Internet &amp; Software, Graduate part time and full time employment opportunities for both male and females to get rozi and roti. See new current jobs in CDA, NADRA, Embassy, Port Trust, Banks, Telenor, Ufone, UN, USAID, UNDP, US Embassy, Security, Custom, Police, ASI, LDA, PIA, WASA, College, Schools, Universities, High Court, Airport, Hotel, FIA, Army, Navy, Air Force, NGOS, LESCO and WAPDA for girls, women, boys and men. Whether you have done primary, middle, matric, ssc, inter, hssc, intermediate, bachelors, graduation, post graduation, masters, m.phil, phd, engineering or medicine, we have right job for you as per your skills.</p>
                  <br>
                  <br>
                  <p> We not only cover Pakistani jobs but also and many other international vacancies from various other countries. Visit daily to apply for latest jobs in Pakistan in time to get rozee from your dream job.</p>
                </div>
              </div>
              <div class="equal_4cols">
                <h2>Latest Jobs by Category Pakistan <?php echo date('Y');?> </h2>
                <p>@yield('third_h')</p>
                <br>
                <div class="row_cont_onecell"> @foreach($Category as $category) <div class="one_cell">
                    <a href="{{url('category/' .$category->cate_slug)}}">{{$category->cate_name}}</a>
                  </div> @endforeach </div>
                <div class="row_cont_onecell">
                  <br>
                </div>
              </div>
            </div>
            <div id="right-container-temp2">

               <div class="table">
                <div class="table_contents">
                  <div class="table_tittle">JOBS BY EDUCATION</div>
                  @foreach($education as $list)
                  <div class="table_cell">
                    <a href="{{url('/education/'.$list->edu_slug)}}">{{$list->edu_name}}</a>
                  </div>
                  @endforeach
                </div>
</div>
                  <div class="table">
                <div class="table_contents">
                  <div class="table_tittle">JOBS IN PAKISTAN</div>
                  @foreach($city as $list)
                  <div class="table_cell">
                    <a href="{{url('/city/'.$list->city_slug)}}">{{$list->city_name}}</a>
                  </div>
                  @endforeach
                </div>
             </div>

             <div class="table">
        <div class="table_tittle">Govt jobs in Pakistan</div>
        <div class="table_contents">
          @foreach($all_city as $list)
            <div class="table_cell"><a href="{{url('search/jobs')}}?search=Govt+jobs+in+{{$list->city_name}}">Govt jobs in {{$list->city_name}}</a></div>
            @endforeach
        </div>
    </div>

            <div class="table">
        <div class="table_tittle">private jobs in Pakistan</div>
        <div class="table_contents">
          @foreach($all_city as $list)
            <div class="table_cell"><a href="{{url('search/jobs')}}?search=private+jobs+in+{{$list->city_name}}">private jobs in {{$list->city_name}}</a></div>
            @endforeach
        </div>
    </div>

       

            <div class="table" style="height: 50%;">
              <div class="table_contents">
                <div class="table_cell">
                  <p>ads by Google</p>
                </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          </div>

              </div>

            </div>
          </div>
        </div>
        
      </div>
      <!--<div class="ul_container"><div class="bold fleft footer_headings">Overseas Jobs</div><ul><li><a href="https://www.jobz.pk/jobs_in_dubai/">Jobs in Dubai</a></li></ul></div></div>-->
    </div>
  </body>
</html>