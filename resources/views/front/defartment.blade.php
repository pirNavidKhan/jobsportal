<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <title>jobtody | jobs in pakistan
    <?php echo date('Y'); ?>
  </title>
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
      <!-- ################## Start Body ################### -->
      <style>
      .color_top_text {
        color: #87b843;
      }
      
      .first_big_4col,
      .equal_4cols,
      .five_cols {
        border: 1px solid #ccc;
        float: left;
        padding: 0 1%;
        margin-bottom: 15px;
      }
      </style>
      <div id="contents">
        <!--contents starts-->
        <div id="main-container">
          <div id="left-container-temp2">
            <div class="first_big_4col">
              <h2>Latest {{$product[0]->department}} Jobs in Pakistan <?php echo date('Y');?></h2>
              <p>{{$product[0]->def_desc}}</p>
              <br>
              <div class="row_container">
                <div class="cell1 bold color_top_text">Job Title / Vacancy - Online Job Search</div>
                <div class="cell2 bold color_top_text">Category</div>
                <div class="cell_three">
                  <div class="inner_cell bold color_top_text">Job City</div>
                  <div class="inner_cell bold color_top_text">Date Posted</div>
                </div>
              </div> @foreach($product as $list)
              <div class="row_container">
                <div class="cell1"> <a href="{{url('/'.$list->slug)}}">{{$list->name}}</a> </div>
                <div class="cell2"> <a href="{{url('category/' .$list->cate_slug)}}">{{$list->cate_name}}</a> </div>
                <div class="cell_three">
                  <div class="inner_cell"> <a href="{{url('city/' .$list->city_slug)}}">
            {{$list->city_name}}</a> </div>
                  <div class="inner_cell">{{ date('d-m-Y', strtotime($list->created_at)) }}</div>
                </div>
              </div> @endforeach </div>
            <div class="equal_4cols">
              <h2>Latest Jobs by Education Pakistan 2022</h2>
              <p>Jobs com is best place to search jobs in Pakistan for all fresh graduates, students, experienced professionals, freelancers and skilled persons. jobtody has daily new jobs from every area of Pakistan including major cities, small villages and remote mountain areas. Whether job seekers is located in Punjab, Sindh, KPK (Khyber Pakhtunkhwa), Balochistan, AJK, FATA, Northern, Gilgit Baltistan or lives in major city of Pakistan like Karachi, Islamabad, Lahore, Rawalpindi, Faisalabad, Sialkot, Quetta, Peshawar, Hyderabad, Sargodha, Multan, can get today’s dream job online at Jobtody for rozee roti in Pakistan and abroad.</p>
              <br>
              <div class="row_cont_onecell"> @foreach($education as $list)
                <div class="one_cell"> <a href="{{url('education/' .$list->edu_slug)}}">{{$list->edu_name}}</a></div> @endforeach </div>
              <div class="row_cont_onecell">
                <br> </div>
            </div>


             <div class="equal_4cols">
              <h2>Latest Jobs by Paperpk Pakistan <?php echo date('Y');?></h2>
              <p>Jobs com is best place to search jobs in Pakistan for all fresh graduates, students, experienced professionals, freelancers and skilled persons. jobtody has daily new jobs from every area of Pakistan including major cities, small villages and remote mountain areas. Whether job seekers is located in Punjab, Sindh, KPK (Khyber Pakhtunkhwa), Balochistan, AJK, FATA, Northern, Gilgit Baltistan or lives in major city of Pakistan like Karachi, Islamabad, Lahore, Rawalpindi, Faisalabad, Sialkot, Quetta, Peshawar, Hyderabad, Sargodha, Multan, can get today’s dream job online at Jobtody for rozee roti in Pakistan and abroad.</p>
              <br>
              <div class="row_cont_onecell"> @foreach($newspaper as $list)
                <div class="one_cell"> <a href="{{url('newspaper/' .$list->newsp_slug)}}">{{$list->newsp_name}}</a></div> 
                @endforeach 
              </div>
              </div>
            
            <div class="equal_4cols">
              <h2>Latest Jobs by Paperpk Pakistan <?php echo date('Y');?></h2>
              <p>Jobs com is best place to search jobs in Pakistan for all fresh graduates,Whether job seekers is located in Punjab, Sindh, KPK (Khyber Pakhtunkhwa), Balochistan, AJK, FATA, Northern, Gilgit Baltistan or lives in major city of Pakistan like Karachi, Islamabad, Lahore, Rawalpindi, Faisalabad, Sialkot, Quetta, Peshawar, Hyderabad, Sargodha, Multan, can get today’s dream job online at Jobtody for rozee roti in Pakistan and abroad.</p>
              <br>
              <div class="row_cont_onecell"> @foreach($Category as $list)
                <div class="table_cell"> <a href="{{url('category/' .$list->cate_slug)}}">{{$list->cate_name}}</a>
                </div>
                 @endforeach 
               </div>
              </div>
          




          
<div class="test">
<h2>Latest More {{$product[0]->department}} Jobs In Pakistan <?php echo date('Y');?></h2> 
            @foreach($city as $list)
            <a href="{{url('search/jobs')}}?search={{$product[0]->department}}+jobs+in+{{$list->city_name}}">

              {{$product[0]->department}} jobs in {{$list->city_name}}
            </a> 
            |@endforeach
            <br>


            <div style="clear:both"></div>
            <br>
            
          </div>
          </div>
          <div id="right-container-temp2">
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


            <div class="table" style="height: 100%;">
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
    <div class="fclear"></div>
</body>

</html>