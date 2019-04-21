    @extends('layouts.app')

@section('content')

           <div class="col-lg-3">
               <div class="card-header ">
                   <div class="card-body text-center">
                       PUBLISHED POSTS
                   </div>
                   <div class="card-body">
                       <h6 class="text-center">{{ $posts_count  }}</h6>
                   </div>
               </div>
           </div>
<BR>
           <div class="col-lg-3">
               <div class="card-header ">
                   <div class="card-body text-center">
                       TRASHED POSTS
                   </div>
                   <div class="card-body">
                       <h6 class="text-center">{{ $trashed_count }}</h6>
                   </div>
               </div>
           </div>

           <BR>
           <div class="col-lg-3">
               <div class="card-header ">
                   <div class="card-body text-center">
                       USERS
                   </div>
                   <div class="card-body">
                       <h6 class="text-center">{{$users_count}}</h6>
                   </div>
               </div>
           </div>
           <BR>
           <div class="col-lg-3">
               <div class="card-header ">
                   <div class="card-body text-center">
                       CATEGORIES
                   </div>
                   <div class="card-body">
                       <h6 class="text-center">{{$categories_count}}</h6>
                   </div>
               </div>
           </div>


@endsection
