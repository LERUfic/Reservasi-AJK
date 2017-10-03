@extends('layouts.main')

@section('title', 'Pengaturan Video')

@section('navbar')
    @include('layouts.navbar')
@endsection


@section('content')
        <div class="demo"></div>
@endsection


@section('js')

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        var total;
        var delay;
        var linknya;
        var link = [];

        function updateJadwal() {
        $.ajax({
          url: "{{URL::to('/')}}/listvideo",
          data: {
            format: 'json'
          },
          datatype: 'jsonp',
          success: function(data) {
            var dataku = data.video;
            var i;
            var j=0;
            total = 0;
            delay = 5000*dataku.length;
            link = [];
            
            //Membuat array video, mentotal durasi
            for (i=0; i < dataku.length; i++){
                var select = data.video[i];
                total = select.durasi + total;
                console.log(i);
                console.log(total);
            }

            //Fungsi buat ngeloop
            function callfunc(durasi){
                setTimeout(loooping,durasi*1000+5000);
            }

            //
            function loooping(){
                if(j == dataku.length){
                    return;
                }
                else{
                    link = [];
                    link = data.video[j];
                    console.log(link);
                    linknya = link.videoid;
                    player(linknya);
                    console.log(linknya);
                    j++;
                    callfunc(data.video[j-1].durasi);
                }
            }
            loooping();

            function player(linknya) {
            $( ".demo" ).html( '<iframe width="420" height="345" src="http://www.youtube.com/embed/'+linknya+'?autoplay=1" frameborder="0" allowfullscreen></iframe>' );
        }

          },
          type: 'GET'
        });
        setTimeout(updateJadwal, total*1000+delay);
        console.log(total*1000+delay);
      }
      setTimeout(updateJadwal, 1000);
                
    </script>
@endsection