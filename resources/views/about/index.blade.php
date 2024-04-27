@extends('layouts.app')
@section('title','Biz haqimizda')
@section('content')
<div class="container " style="margin-top:100px ">
     <h3 class="py-3">Mang`itobod Qishlog'iga Bir Nazar...</h3> <hr>
     <div  class="row">
        <div class="col-12 py-2 my-2 col-md-6">
             <a href="{{asset('assets/images/about/7.jpg')}}">
                  <img src="{{ asset('assets/images/about/7.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
            </a>
        </div>
        <div class="col-12 py-2 my-2 col-md-6 fa-2x">
            Mangitobod maxallasi Urgut tumanining shimoliy garbida joylashgan bo‘lib, atrofi Birlik, Sovg‘on, Oqmachit, Bekravot maxallalari bilan chegaradosh. Ota-bobolarimizning yozib qoldirishlaricha qishloqning paydo bo‘lganligi qariyb 300 yillik tarixga ega.</div>
        <div class="col-12 py-2 my-2 col-md-6 fa-2x">
            Dastlab axolimiz Mang‘it elining ming sulolasidan kelgan to‘rt oiladan tarkalgan. Shundan boshlab asta-sekinlik bilan ko‘chib kelgan Xalq utroqlashib qishloq shakliga kelgan. Dehqonchilik va chorvachilik yaxshi rivojlangan, shundan sung Mangitobod axolisi kupayib xozirda katta maxallaga aylandi.  </div>
        <div class="col-12 py-2 my-2 col-md-6">
            <a href="{{ asset('assets/images/about/2.jpg')}}">
            <img src="{{ asset('assets/images/about/2.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
            </a>
      </div>
         <div class="col-12 py-2 my-2 col-md-12 py-2 my-2 fa-2x">
            Mangitobod maxallasida dastavval birgina masjid bulgan usha masjidda namoz ukib xovlisida kunduz paytlari oksokollar yigilishib Mangitobod qishlogini qaysi yo‘l bilan bo‘lmasin qishloq xo‘jalik soxasini rivojlantirish yo‘llarini maslaxatlashib chora tadbirlarini izlashgan.          </div>
         <div class="col-12 py-2 my-2 col-md-6">
            <img src="{{ asset('assets/images/about/3.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
        </div>
        <div class="col-12 py-2 my-2 col-md-6">
            <img src="{{ asset('assets/images/about/14.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
      </div>
      <div class="col-12 py-2 my-2 col-md-6">
            <a href="{{ asset('assets/images/about/15.jpeg')}}">
            <img src="{{ asset('assets/images/about/15.jpeg')}}" alt="" class=" img-fluid img-thumbnail ">
            </a>
      </div>
      <div class="col-12 py-2 my-2 col-md-6 fa-2x">
            O‘sha davrda Mangitobod qishlog‘iga oqarsuv muammosi eng og‘ir muammo bo‘lgan, o‘sha muammoni xal etish uchun qishloq axolisi qozon ariq 
            nomi bilan ataladigan arig‘ini qazib suvni keltirishgan Shu tariqa Mangitobod qishlog‘i qishloq xo‘jalik soxasida rivojlanib bir qancha yutuqlarga erishgan. 
            Ushbu jarayonda muntazam katnashgan Shukurov Rashid, Xakimov Xofiz, Oblokulov Melikullar uz xissalarini kushib faol xizmat kursatgan.
        </div>
      <div class="col-12 py-2 my-2 col-md-6 fa-2x">
            Shuningdek Mangitobod maxallasida ayni vaktda  bitta o‘rta maktab, unda 1126 nafar o‘quvchi 86 nafar o‘qituvchi faoliyat ko‘rsatmoqda,1 ta KVP,  1 ta Maishix xizmat va servis Kasb xunar kolleji faoliyat ko‘rsatmoqda. Ushbu tashkilotlarda jami 266 nafar mutaxxasislar mexnat kilib kelmokda.

            Mangitobod maxallasida qadimdan tarixiy yodgorlik bo‘lib kelgan 11 tatepalik mavjud bo‘lib bular davlat muxofazasida saklanib kelmokda.
             Mangitobod maxallasida 19 ta savdo dukoni mavjud bulib shundan 16 tasioziq-ovqat do‘konlari va 3 ta xujalik mollari dukoni faoliyat olib bormoqda.
             Bundan tashqari maishiy xizmat uyi ustaxona, apteka,  dizayner xonasi va kompyuter xonasi ishlab turibdi.  3 ta qassobxona xam xalqimizning go‘sht mahsulotlariga bo‘lgan talabini qondirib kelmoqda.
             Maxallada xozirgi kunda 6390 ta aholi yashab kelmoqda.  Xotinqizlar 3093 ta.  Nuroniylar-pensianerlar 376 tani tashkel etadi. 
        </div>
        <div class="col-12  col-md-6">
            <a href="{{ asset('assets/images/about/maktab.jpg')}}">
            <img src="{{ asset('assets/images/about/maktab.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
            </a>
      </div>

      
      <div class="col-12 py-2 my-2 col-md-12 fa-2x"> 
            5 nafar xoji ota va xoji onalar yashaydi.  Axoli asosan bog‘dorchilik va uzumchilik faoliyati bilan shug‘ullanib uzum–mayiz ëtishtirib kelmoqda. 
            46 ta fermer xo‘jaligida xalqimiz o‘ziga berilgan reja va topshiriqlarni munosib uddalab kelmoqda.  Davlatimiz, yurtboshimiz tomanidan qabul 
            qilingan qaror va farmonlarni xalqimiz ongli ravishda tushunib 
            va amal qilib zamon bilan hamnafas yashab kelmoqda.  Biz mustaqil yurt ravnaqiga munosib hissa qo‘shish uchun astoydil kurashib yashaymiz.    
        </div>
        <hr>
        <h1 class="py-2 text-center">Galeriya </h1>
        <div class="col-12 py-2 my-2 col-md-6">
              <img src="{{ asset('assets/images/about/1.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
        </div>
        <div class="col-12 py-2 my-2 col-md-6">
              <img src="{{ asset('assets/images/about/8.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
        </div>
        <div class="col-12 py-2 my-2 col-md-6">
              <img src="{{ asset('assets/images/about/9.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
        </div>
        <div class="col-12 py-2 my-2 col-md-6">
              <img src="{{ asset('assets/images/about/4.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
        </div>
        <div class="col-12 py-2 my-2 col-md-4">
            <img src="{{ asset('assets/images/about/teacher.jpg')}}" alt="" class=" img-fluid img-thumbnail with-3d-shadow ">
      </div>
       
        <div class="col-12 py-2 my-2 col-md-4">
            <img src="{{ asset('assets/images/about/13.jpg')}}" alt="" class=" img-fluid img-thumbnail with-3d-shadow ">
            <img src="{{ asset('assets/images/about/5.jpg')}}" alt="" class=" img-fluid img-thumbnail with-3d-shadow ">
      </div>
     
      <div class="col-12 py-2 my-2 col-md-4">
            <img src="{{ asset('assets/images/about/12.jpg')}}" alt="" class=" img-fluid img-thumbnail with-3d-shadow ">
      </div>
      <div class="col-12 py-2 my-2 col-md-12">
            <img src="{{ asset('assets/images/about/4.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
      </div>
      <div class="col-12 py-2 my-2 col-md-12">
            <img src="{{ asset('assets/images/about/10.jpg')}}" alt="" class=" img-fluid img-thumbnail ">
      </div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

     </div>
    </div>
@endsection
