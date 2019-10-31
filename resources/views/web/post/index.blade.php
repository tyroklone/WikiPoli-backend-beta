@section('title')
<title>WikiPoli | Posts</title>
@endsection
@extends('layouts.postList')
@section('content')
   
<div class="container main">
    
		<div class="row">
                 @forelse($posts as $post)
			<div class="col-sm " id="post-1">
                            
				<div class="post">
						<h4>{{$post->user->full_name}}</h4>
						{!! $post->body !!}
					<div class="icon">
						<a href="" class="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>
						<a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
		                <a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
		                <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
					</div>
				</div>	
        
			</div>
		
         
	               @empty
     
     no post
     @endforelse
		</div>
   	
	</div>
	
	{{--
	<div class="pagination">
		<ul class="pages">
			<li><img src="https://res.cloudinary.com/siyfa/image/upload/v1571762484/cezdbfynpv1dvjfopzy0.png" style="width: 10px; color: #333333;"></li>
			<li class="pageitem">
				<a href="post page 1.html" class="pagelink" style="color: #0000FF; font-size: 1.3em;">1</a>
			</li>
			<li class="pageitem">
				<a href="post page 2.html" class="pagelink" style="color: #333333; font-size: 1.2em;">2</a>
			<li class="pageitem">
				<a href="post page 3.html" class="pagelink" style="color: #333333; font-size: 1.2em;">3</a>
			</li>
			<li><img src="https://res.cloudinary.com/siyfa/image/upload/v1571762485/sk98ivrsx2v2ypqgrguh.png" style="width: 10px; color: #333333;"> </li>
		</ul>
	</div>
	--}}
@endsection