@extends('master')
@section('content')

    
<div class="header-title">
  <h1> Bài Thi Tổng Hợp </h1>
</div>

<section class="courses">     
    <!-- .courses -->
    <div class="container">
      <div class="row">   
            <div style=" text-align: center; text-transform:uppercase;
        color: #ff0000;"> <a href="test">Vào thi</a></div>
                  <div class="title-exam-cover" style=" text-align: center; text-transform:uppercase;
        color: #4CAF50;"><h3 class="title-text"> Bảng xếp hạng </h3>
            </div>

             <div class="list-students-container">
              <table id="table-ranking" class="table table-borderless">
                <thead>
                  <tr>
                    <th class="text-left title-rank">Hạng</th>
                     <th class="text-left title-rank">Học viên</th> 
                     <th class="text-center title-rank">Điểm</th>
                      <th class="text-center title-rank">Ngày thi</th>
                    </tr>
                  </thead> 
                  <tbody>
                    <?php $i = 0 ?>
                    @foreach($score as $s)
                    <tr id="item-42894" class="background-1" style="height: 50px;">
                      <td class="text-left indexRank"> {{++$i}}</td>
                     <td class="text-left avatar"> <span>{{$s->user->name}}</span></td> 
                     <td class="text-center score"><span>{{$s->total}}</span></td>
                      <td class="text-center passed"><span class="ok">{{$s->updated_at}}</span></td></tr>
                    @endforeach
                  </tbody>
                </table> <!---->
              </div>
            </div>
             </div>
      </div>
    </div>


</section>
@endsection